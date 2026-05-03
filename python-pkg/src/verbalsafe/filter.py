import json
import os
import re
from .config import Config

class Filter:
    def __init__(self, selected_languages=None):
        self.config = Config.defaults()
        self.languages = selected_languages or self.config["languages"]
        self.word_list = []
        self._load_dictionaries()

    def _load_dictionaries(self):
        """Loads JSON files for the selected languages."""
        for lang in self.languages:
            path = os.path.join(self.config["paths"]["dictionaries"], f"{lang}.json")
            
            if os.path.exists(path):
                try:
                    with open(path, 'r', encoding='utf-8') as f:
                        words = json.load(f)
                        if isinstance(words, list):
                            self.word_list.extend(words)
                except Exception:
                    continue

    def clean(self, text: str) -> str:
        """Filters profanity from the provided string."""
        if not text or not self.word_list:
            return text

        # Sort by length (descending) to avoid partial masking of longer phrases
        sorted_words = sorted(self.word_list, key=len, reverse=True)
        
        filtered_text = text
        for word in sorted_words:
            # Escape the word for regex and use IGNORECASE for case insensitivity
            pattern = re.compile(re.escape(word), re.IGNORECASE)
            mask = self.config["mask_character"] * len(word)
            filtered_text = pattern.sub(mask, filtered_text)
            
        return filtered_text