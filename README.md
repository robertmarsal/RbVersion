# RbVersion

Application versioning for Zend Framework 2.

## Table of contents
- [About](#about)
- [Installation](#installation)
- [Usage](#usage)
- [Roadmap](#roadmap)


## About

Use this module to integrate the application versioning into your development
practices. It allows propagating the application version without changing
multiple files with every release.

**Use case**:

By appending the version number to your stylesheets and javascript
include calls, you can make sure that the user always gets the version you
intended (and not an old cached one).



```
<!-- Stylesheets -->
<link href="//website.com/style.css?v=<?= $this->rbVersion() ?>"/>

<!-- Scripts -->
<script src="//website.com/script.js?v=<?= $this->rbVersion() ?>"></script>
```

## Installation


## Usage

Both a view helper, and a controller plugin are available.

Call `$this->rbVersion()` inside a view or controller. This will return the numeric version.
If you have defined a name for the version and want it to be appendend to the numeric value,
use `$this->rbVersion(true)` which will return both the numeric version and the name
of it concatenated by a space.

For example if your version is `1.2.3 Awesome Antilope` calling `$this->rbVersion()` will return
`1.2.3` and calling `$this->rbVersion(true)` will return `1.2.3 Awesome Antilope`


## Roadmap

* Add travis-CI integration
* Add scrutinizer integration
* Add more providers (git)
* Release on packagist/composer
