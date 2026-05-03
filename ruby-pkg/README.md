# VerbalSafe Ruby Gem

> A lightweight profanity filter for Ruby on Rails and standalone Ruby projects.

![Ruby](https://img.shields.io/badge/ruby-2.7+-red.svg)
![License](https://img.shields.io/badge/license-MIT-green.svg)
![Languages](https://img.shields.io/badge/languages-rw%20%7C%20en%20%7C%20fr-orange.svg)

---

## Installation

Add this line to your application's Gemfile:

```ruby
gem 'VerbalSafe', path: 'path/to/ruby-pkg'
```

---

## Usage

```ruby
require 'VerbalSafe'

filter = VerbalSafe::Filter.new(['rw', 'en'])
puts filter.clean("Amagambo mabi here")
```

---

## Why This Works for Your Goals

- **Rails Ready:** Use this in a Rails model to automatically sanitize comments or user profiles before they are saved to the database.
- **Consistent with PHP/JS:** The logic remains identical — sorting by length first so that `"badword"` is masked entirely before `"bad"` can interfere.
- **Shared Source:** By including the `dictionaries/` folder in `spec.files`, your Ruby gem carries the exact same word lists as your Laravel and React packages.

---

## Implementation Checklist

- [ ] Add `dictionaries/` to `spec.files` in your `.gemspec`.
- [ ] Test across all selected languages before publishing.
- [ ] Keep the gem version in sync with your PHP and JS packages when dictionaries are updated.

---

> Ready to wrap up the structure, or do you want to see the **Ruby test (RSpec)** file?