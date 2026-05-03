<?php

namespace VerbaSafe\Core;

class Config
{
    public static function defaults(): array
    {
        return [
            // In a composer install, dictionaries will be inside the package folder
            'paths' => [
                'dictionaries' => __DIR__ . '/../dictionaries/',
            ],
            'languages' => ['en', 'rw', 'fr'],
            'mask_character' => '*',
        ];
    }
}