<?php

namespace VerbalSafe\Core;

class Filter
{
    protected array $config;
    protected array $wordList = [];

    public function __construct(array $selectedLanguages = [])
    {
        $this->config = Config::defaults();

        if (!empty($selectedLanguages)) {
            $this->config['languages'] = $selectedLanguages;
        }

        $this->loadDictionaries();
    }

    protected function loadDictionaries(): void
    {
        foreach ($this->config['languages'] as $lang) {
            $path = $this->config['paths']['dictionaries'] . "{$lang}.json";
            
            if (file_exists($path)) {
                $content = json_decode(file_get_contents($path), true);
                if (is_array($content)) {
                    $this->wordList = array_merge($this->wordList, $content);
                }
            }
        }
    }

    public function clean(string $text): string
    {
        if (empty($this->wordList)) return $text;

        foreach ($this->wordList as $word) {
            $mask = str_repeat($this->config['mask_character'], mb_strlen($word));
            $text = str_ireplace($word, $mask, $text);
        }

        return $text;
    }
}