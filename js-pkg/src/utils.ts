/**
 * Creates a mask string based on word length.
 */
export const generateMask = (word: string, char: string = '*'): string => {
    return char.repeat(word.length);
};