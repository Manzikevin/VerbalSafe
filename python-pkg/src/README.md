# VerbalSafe for Python 

> A lightweight profanity filter for Python projects, using shared Kinyarwanda, English, and French dictionaries.

![Python](https://img.shields.io/badge/python-3.8+-blue.svg)
![License](https://img.shields.io/badge/license-MIT-green.svg)
![Languages](https://img.shields.io/badge/languages-rw%20%7C%20en%20%7C%20fr-orange.svg)

---

## Installation

```bash
pip install .
```

---

## Usage

```python
from VerbalSafe import Filter

# Use defaults (all languages)
filter = Filter()
print(filter.clean("Some bad text"))

# Use specific languages
rw_filter = Filter(selected_languages=['rw'])
print(rw_filter.clean("Amagambo mabi"))
```

---

## Supported Languages

| Code | Language    |
|------|-------------|
| `rw` | Kinyarwanda |
| `en` | English     |
| `fr` | French      |

---

## Implementation Checklist

- [ ] **The Shared Source:** Copy the `dictionaries/` folder into `python-pkg/dictionaries/` before you build or upload the package.
- [ ] **Versioning:** Update the version in `pyproject.toml` whenever you update the dictionaries to keep your Python users in sync with your PHP and JS users.

---
