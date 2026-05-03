# VerbalSafe

A high-performance, multilingual profanity filtering and content moderation engine with unified support for PHP (Composer) and JavaScript (NPM/Yarn).

Unlike standard filters, VerbalSafe is built with a **global-first approach** — offering deep support for regional languages including Kinyarwanda, Swahili, and French alongside English.

---

## Features

- **Cross-platform consistency** — unified filtering logic across backend (PHP) and frontend (JS) implementations
- **Multilingual dictionary support** — switch between or combine multiple language sets at runtime
- **Pattern intelligence** — advanced detection of leet-speak and character substitution bypass attempts
- **Optimized performance** — minimal memory footprint and fast execution, suited for high-traffic applications
- **Community-driven** — open dictionary architecture; new languages contributed via JSON

---

## Repository Structure

```
VerbalSafe/
├── dictionaries/       # Centralized JSON source files for all supported languages
│   ├── en.json
│   └── rw.json
├── php-pkg/            # Composer package source
├── js-pkg/             # NPM/Yarn package source
├── CONTRIBUTING.md
└── LICENSE
```

---

## Installation

### PHP / Laravel

```bash
composer require verbalsafe/php
```

### JavaScript / Node.js

```bash
npm install verbalsafe
```

---

## Usage

### PHP

```php
use VerbalSafe\Filter;

$filter = new Filter();
$filter->loadLanguage('rw');

echo $filter->clean("Sample text here");
```

### JavaScript

```javascript
import { Filter } from 'verbalsafe';

const filter = new Filter();
filter.loadLanguage('en');

console.log(filter.clean("Sample text here"));
```

---

## Supported Languages

| Code | Language    | Status |
|------|-------------|--------|
| `en` | English     | Stable |
| `rw` | Kinyarwanda | Stable |
| `sw` | Swahili     | Planned |
| `fr` | French      | Planned |

---

## Contributing

Community contributions are especially welcome for language dictionaries. If you want to add a new language or improve an existing one, please read [CONTRIBUTING.md](./CONTRIBUTING.md) before submitting a pull request.

---

## License

Released under the [MIT License](./LICENSE).

---

**Maintainer:** [GoodMan / Code Harnessor](https://github.com/Code-harness)