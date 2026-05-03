import { generateMask } from './utils';

export interface FilterOptions {
    languages?: string[];
    maskCharacter?: string;
}

export class Filter {
    private wordList: string[] = [];
    private options: Required<FilterOptions>;

    constructor(dictionaries: Record<string, string[]>, options: FilterOptions = {}) {
        this.options = {
            languages: options.languages || ['en', 'rw', 'fr'],
            maskCharacter: options.maskCharacter || '*'
        };

        this.initialize(dictionaries);
    }

    private initialize(allDicts: Record<string, string[]>): void {
        this.options.languages.forEach(lang => {
            if (allDicts[lang]) {
                this.wordList = [...this.wordList, ...allDicts[lang]];
            }
        });
    }

    public clean(text: string): string {
        if (!text || this.wordList.length === 0) return text;

        let result = text;
        
        // We sort by length (descending) so 'badword' is caught before 'bad'
        const sortedWords = [...this.wordList].sort((a, b) => b.length - a.length);

        sortedWords.forEach(word => {
            // Case-insensitive global replacement
            const regex = new RegExp(word, 'gi');
            result = result.replace(regex, generateMask(word, this.options.maskCharacter));
        });

        return result;
    }
}