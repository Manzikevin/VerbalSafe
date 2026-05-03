import { describe, it, expect } from 'vitest';
import { Filter } from '../src/index';

// Mock dictionaries to represent your JSON files
const mockDicts = {
    en: ['badword', 'nasty'],
    rw: ['igitutsi', 'ikibi'],
    fr: ['mauvais']
};

describe('VerbaSafe JS Filter', () => {
    
    it('should mask words using the default language set', () => {
        const filter = new Filter(mockDicts);
        const input = "This is a badword and igitutsi.";
        // Expecting: "This is a ******* and ********."
        expect(filter.clean(input)).toBe("This is a ******* and ********.");
    });

    it('should only mask selected languages', () => {
        // Only load Kinyarwanda
        const filter = new Filter(mockDicts, { languages: ['rw'] });
        const input = "This badword is an igitutsi.";
        
        // 'badword' stays, 'igitutsi' gets masked
        expect(filter.clean(input)).toBe("This badword is an ********.");
    });

    it('should use a custom mask character', () => {
        const filter = new Filter(mockDicts, { maskCharacter: '#' });
        expect(filter.clean("nasty")).toBe("#####");
    });

    it('should handle case-insensitivity', () => {
        const filter = new Filter(mockDicts);
        expect(filter.clean("BADWORD")).toBe("*******");
    });
});