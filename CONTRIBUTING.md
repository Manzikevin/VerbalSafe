# Contributing to VerbalSafe

Thank you for taking the time to contribute. VerbalSafe is only as strong as its community — linguistic expertise is just as valuable here as technical skill, and contributions of both kinds are welcome.

---

## Ways to Contribute

### Language Dictionaries

The core of VerbalSafe is its dictionary coverage. You can help by:

- Adding a new language JSON file to `/dictionaries`
- Expanding existing dictionaries with missing slang or regional variants
- Reporting false positives — clean words that are incorrectly flagged

When adding words, apply careful judgment. The goal is to filter genuinely toxic content without blocking natural conversation.

### Code Contributions

VerbalSafe maintains two logic engines (PHP and JavaScript) that should stay in sync. If you improve one, please mirror the change in the other where applicable.

Areas where contributions are especially useful:

- **Performance** — improvements to the regex engine or matching pipeline
- **Security** — new detection strategies for leet-speak and obfuscation patterns
- **Integrations** — framework wrappers for Laravel, React, Vue, etc.

---

## Development Workflow

1. **Fork** the repository and clone your fork locally
2. **Create a branch** with a descriptive name — `feat/add-swahili`, `fix/regex-performance`, etc.
3. **Make your changes** following the conventions below
4. **Test your changes** using the test suite for the relevant package (`/php-pkg` or `/js-pkg`)
5. **Open a Pull Request** with a clear description of what changed and why; link any related issues

---

## Dictionary Format

Language files live in `/dictionaries` and use the [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) code as the filename (e.g., `sw.json` for Swahili, `fr.json` for French).

```json
{
  "language": "Language Name",
  "iso_code": "xx",
  "words": ["word1", "word2"]
}
```

Keep the word list alphabetically sorted where possible — it makes diffs easier to review.

---

## Code of Conduct

All contributors are expected to maintain a professional and respectful tone in issues, pull requests, and discussions — particularly when handling sensitive or offensive linguistic content. This is a safety tool; the work requires discretion.

---

## Questions

Not sure where to start? Open an Issue tagged `question` and we'll point you in the right direction.

---

_VerbalSafe — Making the digital world safer, one word at a time._
