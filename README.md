# VerbalSafe

<div align="center">

**A high-performance, multilingual profanity filtering and content moderation engine.**

Unified support for PHP, JavaScript, Python, and Ruby — built with a global-first approach.

[![License: MIT](https://img.shields.io/badge/license-MIT-green.svg)](./LICENSE)
[![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?logo=php&logoColor=white)](./php-pkg)
[![JavaScript](https://img.shields.io/badge/JavaScript-ESM-F7DF1E?logo=javascript&logoColor=black)](./js-pkg)
[![Python](https://img.shields.io/badge/Python-3.8+-3776AB?logo=python&logoColor=white)](./python-pkg)
[![Ruby](https://img.shields.io/badge/Ruby-2.7+-CC342D?logo=ruby&logoColor=white)](./ruby-pkg)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg)](https://github.com/Code-harness/VerbalSafe/pulls)
[![Maintained](https://img.shields.io/badge/maintained-yes-brightgreen.svg)](https://github.com/Code-harness/VerbalSafe/commits/main)

[Features](#-features) · [Repository Structure](#-repository-structure) · [Installation](#-installation) · [Usage](#-usage-examples) · [Languages](#-supported-languages) · [Contributing](#-contributing)

</div>

---

## Overview

Unlike standard profanity filters, VerbalSafe is built with a **global-first approach** — offering deep support for regional languages including **Kinyarwanda**, French, and English using a single shared **Source of Truth** for dictionaries.

One dictionary. Every stack. Zero drift.

---

## ✨ Features

| Feature | Description |
|---|---|
| 🌐 **Multi-Stack Consistency** | Unified filtering logic across Laravel, React/Vite, Django, and Rails |
| 📁 **Zero-Config Dictionaries** | Local JSON-based word lists — no external API calls or database overhead |
| 🧠 **Smart Masking** | Sorts word lists by length to prevent partial masking of complex phrases |
| ⚡ **Laravel Optimized** | Full Service Provider support with `singleton` registration and dictionary publishing |
| 🔷 **Vite & TypeScript Ready** | Modern ESM support with full type definitions for dashboards and MIS systems |
| 🌍 **Kinyarwanda-First** | One of the few filters with first-class `rw` language support |

---

## 📂 Repository Structure

```text
VerbalSafe/
├── dictionaries/           # Centralized JSON source files (Source of Truth)
│   ├── en.json             # English
│   ├── rw.json             # Kinyarwanda
│   └── fr.json             # French
├── php-pkg/                # Laravel / PHP Composer package
├── js-pkg/                 # React / Vite / Node.js package
├── python-pkg/             # Django / Flask / Python package
├── ruby-pkg/               # Ruby on Rails / RubyGem
└── LICENSE
```

> **Important:** The `dictionaries/` folder is the single source of truth. All packages read from it — never duplicate word lists across packages.

---

## 📦 Installation

### PHP / Laravel

```bash
composer require verbalsafe/profanity-filter
```

### JavaScript / Vite

```bash
npm install @verbalsafe/profanity-filter
```

### Python

```bash
pip install verbalsafe-profanity-filter
```

### Ruby

```ruby
# Gemfile
gem 'verbalsafe'
```

---

## 🛠 Usage Examples

### Laravel (PHP)

```php
use VerbalSafe\Core\Filter;

// Automatically injected via ServiceProvider
public function store(Request $request, Filter $filter)
{
    return $filter->clean($request->comment);
}
```

### React / Vite (TypeScript)

```typescript
import { Filter } from '@verbalsafe/profanity-filter';
import rw from './dictionaries/rw.json';

const filter = new Filter({ rw });
const safeText = filter.clean("Amagambo mabi");
```

### Python

```python
from VerbalSafe import Filter

filter = Filter(selected_languages=['rw', 'en'])
print(filter.clean("Amagambo mabi here"))
```

### Ruby

```ruby
require 'VerbalSafe'

filter = VerbalSafe::Filter.new(['rw', 'en'])
puts filter.clean("Amagambo mabi here")
```

---

## 🌍 Supported Languages

| Code | Language    | Status    |
|------|-------------|-----------|
| `en` | English     | ✅ Stable  |
| `rw` | Kinyarwanda | ✅ Stable  |
| `fr` | French      | ✅ Stable  |
| `sw` | Swahili     | 🔜 Planned |

Want to add a language? See [Contributing](#-contributing).

---

## 🤝 Contributing

Contributions are welcome — especially to our language dictionaries!

1. Fork the repository
2. Create your branch: `git checkout -b feat/add-sw-dictionary`
3. Add or update word lists in `/dictionaries/`
4. Open a Pull Request with a clear description

If you are a native speaker of **Kinyarwanda**, **Swahili**, or any other regional language and want to improve coverage, your contribution is especially valued.

---

## 📄 License

Released under the [MIT License](./LICENSE).

---

<div align="center">

Maintained by [MANZI IRAKOZE KEVIN](https://github.com/Manzikevin) · [@Code-harness](https://github.com/Manzikevin)

⭐ Star this repo if VerbalSafe helps your project!

</div>