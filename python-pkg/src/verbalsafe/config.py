import os

class Config:
    @staticmethod
    def defaults():
        # Points to the dictionaries folder inside the package
        base_dir = os.path.dirname(os.path.abspath(__file__))
        return {
            "paths": {
                "dictionaries": os.path.join(base_dir, "../../dictionaries/")
            },
            "languages": ["en", "rw", "fr"],
            "mask_character": "*"
        }