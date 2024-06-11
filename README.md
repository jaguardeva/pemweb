<p align="center">
  <img src="https://cdn-icons-png.flaticon.com/512/6295/6295417.png" width="100" />
</p>
<p align="center">
    <h1 align="center">FINAL PROJECT PEMWEB</h1>
</p>
<p align="center">
    <em>PHP tanpa laravel `emg boleh?`</em>
</p>
<p align="center">
	<img src="https://img.shields.io/github/license/jaguardeva/pemweb?style=flat&color=0080ff" alt="license">
	<img src="https://img.shields.io/github/last-commit/jaguardeva/pemweb?style=flat&logo=git&logoColor=white&color=0080ff" alt="last-commit">
	<img src="https://img.shields.io/github/languages/top/jaguardeva/pemweb?style=flat&color=0080ff" alt="repo-top-language">
	<img src="https://img.shields.io/github/languages/count/jaguardeva/pemweb?style=flat&color=0080ff" alt="repo-language-count">
<p>
<p align="center">
		<em>Developed with the software and tools below.</em>
</p>
<p align="center">
	<img src="https://img.shields.io/badge/JavaScript-F7DF1E.svg?style=flat&logo=JavaScript&logoColor=black" alt="JavaScript">
	<img src="https://img.shields.io/badge/PostCSS-DD3A0A.svg?style=flat&logo=PostCSS&logoColor=white" alt="PostCSS">
	<img src="https://img.shields.io/badge/Autoprefixer-DD3735.svg?style=flat&logo=Autoprefixer&logoColor=white" alt="Autoprefixer">
	<img src="https://img.shields.io/badge/PHP-777BB4.svg?style=flat&logo=PHP&logoColor=white" alt="PHP">
	<img src="https://img.shields.io/badge/JSON-000000.svg?style=flat&logo=JSON&logoColor=white" alt="JSON">
</p>
<hr>

##  Quick Links

> - [ Overview](#-overview)
> - [ Features](#-features)
> - [ Repository Structure](#-repository-structure)
> - [ Modules](#-modules)
> - [ Getting Started](#-getting-started)
>   - [ Installation](#-installation)
>   - [ Running pemweb](#-running-pemweb)
>   - [ Tests](#-tests)
> - [ Project Roadmap](#-project-roadmap)
> - [ Contributing](#-contributing)
> - [ License](#-license)
> - [ Acknowledgments](#-acknowledgments)

---

##  Overview

HTTP error 401 for prompt `overview`

---

##  Features

HTTP error 401 for prompt `features`

---

##  Repository Structure

```sh
└── pemweb/
    ├── assets
    │   ├── images
    │   │   ├── footer-banner.jpg
    │   │   ├── hero-banner.jpg
    │   │   ├── logo-pemkot.png
    │   │   └── pixelcut-export.png
    │   ├── js
    │   │   └── main.js
    │   └── logo.svg
    ├── auth
    │   ├── login.php
    │   └── register.php
    ├── composer.json
    ├── composer.lock
    ├── dashboard.php
    ├── database
    │   ├── connection.php
    │   └── db_pemweb.sql
    ├── detail-report.php
    ├── example.env
    ├── index.php
    ├── input.css
    ├── layouts
    │   ├── bottom.php
    │   ├── dashboard
    │   │   ├── bottom.php
    │   │   └── top.php
    │   ├── navbar.php
    │   ├── sidebar.php
    │   └── top.php
    ├── make-news.php
    ├── make-report.php
    ├── news.php
    ├── package-lock.json
    ├── package.json
    ├── postcss.config.js
    ├── public
    │   └── images
    │       ├── IMG664c2f0921736.jpeg
    │       ├── IMG664c72a9f2d57.png
    │       ├── IMG664c751eee1fa.png
    │       └── news
    │           ├── IMG665cb5a3505e4.png
    │           ├── IMG665cbeae03996.png
    │           ├── IMG66631b2e34d90.png
    │           └── IMG666892e6291b8.png
    ├── read-news.php
    ├── reports.php
    ├── services
    │   ├── add-news.php
    │   ├── add-report.php
    │   ├── auth
    │   │   ├── login.php
    │   │   ├── logout.php
    │   │   └── register.php
    │   ├── delete-news.php
    │   ├── delete-report.php
    │   └── report
    │       ├── accepted.php
    │       └── rejected.php
    ├── styles.css
    ├── tailwind.config.js
    └── vendor
        ├── autoload.php
        ├── composer
        │   ├── ClassLoader.php
        │   ├── InstalledVersions.php
        │   ├── LICENSE
        │   ├── autoload_classmap.php
        │   ├── autoload_files.php
        │   ├── autoload_namespaces.php
        │   ├── autoload_psr4.php
        │   ├── autoload_real.php
        │   ├── autoload_static.php
        │   ├── installed.json
        │   ├── installed.php
        │   └── platform_check.php
        ├── graham-campbell
        │   └── result-type
        │       ├── LICENSE
        │       ├── composer.json
        │       └── src
        │           ├── Error.php
        │           ├── Result.php
        │           └── Success.php
        ├── phpoption
        │   └── phpoption
        │       ├── LICENSE
        │       ├── composer.json
        │       └── src
        │           └── PhpOption
        ├── symfony
        │   ├── polyfill-ctype
        │   │   ├── Ctype.php
        │   │   ├── LICENSE
        │   │   ├── README.md
        │   │   ├── bootstrap.php
        │   │   ├── bootstrap80.php
        │   │   └── composer.json
        │   ├── polyfill-mbstring
        │   │   ├── LICENSE
        │   │   ├── Mbstring.php
        │   │   ├── README.md
        │   │   ├── Resources
        │   │   │   └── unidata
        │   │   ├── bootstrap.php
        │   │   ├── bootstrap80.php
        │   │   └── composer.json
        │   └── polyfill-php80
        │       ├── LICENSE
        │       ├── Php80.php
        │       ├── PhpToken.php
        │       ├── README.md
        │       ├── Resources
        │       │   └── stubs
        │       ├── bootstrap.php
        │       └── composer.json
        └── vlucas
            └── phpdotenv
                ├── LICENSE
                ├── composer.json
                └── src
                    ├── Dotenv.php
                    ├── Exception
                    ├── Loader
                    ├── Parser
                    ├── Repository
                    ├── Store
                    ├── Util
                    └── Validator.php
```

---

##  Modules

<details closed><summary>.</summary>

| File                                                                                      | Summary                                        |
| ---                                                                                       | ---                                            |
| [make-report.php](https://github.com/jaguardeva/pemweb/blob/master/make-report.php)       | HTTP error 401 for prompt `make-report.php`    |
| [news.php](https://github.com/jaguardeva/pemweb/blob/master/news.php)                     | HTTP error 401 for prompt `news.php`           |
| [index.php](https://github.com/jaguardeva/pemweb/blob/master/index.php)                   | HTTP error 401 for prompt `index.php`          |
| [composer.lock](https://github.com/jaguardeva/pemweb/blob/master/composer.lock)           | HTTP error 401 for prompt `composer.lock`      |
| [dashboard.php](https://github.com/jaguardeva/pemweb/blob/master/dashboard.php)           | HTTP error 401 for prompt `dashboard.php`      |
| [make-news.php](https://github.com/jaguardeva/pemweb/blob/master/make-news.php)           | HTTP error 401 for prompt `make-news.php`      |
| [read-news.php](https://github.com/jaguardeva/pemweb/blob/master/read-news.php)           | HTTP error 401 for prompt `read-news.php`      |
| [styles.css](https://github.com/jaguardeva/pemweb/blob/master/styles.css)                 | HTTP error 401 for prompt `styles.css`         |
| [postcss.config.js](https://github.com/jaguardeva/pemweb/blob/master/postcss.config.js)   | HTTP error 401 for prompt `postcss.config.js`  |
| [input.css](https://github.com/jaguardeva/pemweb/blob/master/input.css)                   | HTTP error 401 for prompt `input.css`          |
| [package.json](https://github.com/jaguardeva/pemweb/blob/master/package.json)             | HTTP error 401 for prompt `package.json`       |
| [reports.php](https://github.com/jaguardeva/pemweb/blob/master/reports.php)               | HTTP error 401 for prompt `reports.php`        |
| [detail-report.php](https://github.com/jaguardeva/pemweb/blob/master/detail-report.php)   | HTTP error 401 for prompt `detail-report.php`  |
| [tailwind.config.js](https://github.com/jaguardeva/pemweb/blob/master/tailwind.config.js) | HTTP error 401 for prompt `tailwind.config.js` |
| [package-lock.json](https://github.com/jaguardeva/pemweb/blob/master/package-lock.json)   | HTTP error 401 for prompt `package-lock.json`  |
| [composer.json](https://github.com/jaguardeva/pemweb/blob/master/composer.json)           | HTTP error 401 for prompt `composer.json`      |

</details>

<details closed><summary>services</summary>

| File                                                                                             | Summary                                                |
| ---                                                                                              | ---                                                    |
| [delete-news.php](https://github.com/jaguardeva/pemweb/blob/master/services/delete-news.php)     | HTTP error 401 for prompt `services/delete-news.php`   |
| [delete-report.php](https://github.com/jaguardeva/pemweb/blob/master/services/delete-report.php) | HTTP error 401 for prompt `services/delete-report.php` |
| [add-report.php](https://github.com/jaguardeva/pemweb/blob/master/services/add-report.php)       | HTTP error 401 for prompt `services/add-report.php`    |
| [add-news.php](https://github.com/jaguardeva/pemweb/blob/master/services/add-news.php)           | HTTP error 401 for prompt `services/add-news.php`      |

</details>

<details closed><summary>services.report</summary>

| File                                                                                          | Summary                                                  |
| ---                                                                                           | ---                                                      |
| [rejected.php](https://github.com/jaguardeva/pemweb/blob/master/services/report/rejected.php) | HTTP error 401 for prompt `services/report/rejected.php` |
| [accepted.php](https://github.com/jaguardeva/pemweb/blob/master/services/report/accepted.php) | HTTP error 401 for prompt `services/report/accepted.php` |

</details>

<details closed><summary>services.auth</summary>

| File                                                                                        | Summary                                                |
| ---                                                                                         | ---                                                    |
| [login.php](https://github.com/jaguardeva/pemweb/blob/master/services/auth/login.php)       | HTTP error 401 for prompt `services/auth/login.php`    |
| [logout.php](https://github.com/jaguardeva/pemweb/blob/master/services/auth/logout.php)     | HTTP error 401 for prompt `services/auth/logout.php`   |
| [register.php](https://github.com/jaguardeva/pemweb/blob/master/services/auth/register.php) | HTTP error 401 for prompt `services/auth/register.php` |

</details>

<details closed><summary>database</summary>

| File                                                                                       | Summary                                             |
| ---                                                                                        | ---                                                 |
| [db_pemweb.sql](https://github.com/jaguardeva/pemweb/blob/master/database/db_pemweb.sql)   | HTTP error 401 for prompt `database/db_pemweb.sql`  |
| [connection.php](https://github.com/jaguardeva/pemweb/blob/master/database/connection.php) | HTTP error 401 for prompt `database/connection.php` |

</details>

<details closed><summary>vendor</summary>

| File                                                                                 | Summary                                         |
| ---                                                                                  | ---                                             |
| [autoload.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/autoload.php) | HTTP error 401 for prompt `vendor/autoload.php` |

</details>

<details closed><summary>vendor.composer</summary>

| File                                                                                                                | Summary                                                             |
| ---                                                                                                                 | ---                                                                 |
| [autoload_psr4.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/composer/autoload_psr4.php)             | HTTP error 401 for prompt `vendor/composer/autoload_psr4.php`       |
| [autoload_files.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/composer/autoload_files.php)           | HTTP error 401 for prompt `vendor/composer/autoload_files.php`      |
| [autoload_static.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/composer/autoload_static.php)         | HTTP error 401 for prompt `vendor/composer/autoload_static.php`     |
| [autoload_namespaces.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/composer/autoload_namespaces.php) | HTTP error 401 for prompt `vendor/composer/autoload_namespaces.php` |
| [autoload_real.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/composer/autoload_real.php)             | HTTP error 401 for prompt `vendor/composer/autoload_real.php`       |
| [InstalledVersions.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/composer/InstalledVersions.php)     | HTTP error 401 for prompt `vendor/composer/InstalledVersions.php`   |
| [platform_check.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/composer/platform_check.php)           | HTTP error 401 for prompt `vendor/composer/platform_check.php`      |
| [autoload_classmap.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/composer/autoload_classmap.php)     | HTTP error 401 for prompt `vendor/composer/autoload_classmap.php`   |
| [installed.json](https://github.com/jaguardeva/pemweb/blob/master/vendor/composer/installed.json)                   | HTTP error 401 for prompt `vendor/composer/installed.json`          |
| [ClassLoader.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/composer/ClassLoader.php)                 | HTTP error 401 for prompt `vendor/composer/ClassLoader.php`         |
| [installed.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/composer/installed.php)                     | HTTP error 401 for prompt `vendor/composer/installed.php`           |

</details>

<details closed><summary>vendor.graham-campbell.result-type</summary>

| File                                                                                                               | Summary                                                                      |
| ---                                                                                                                | ---                                                                          |
| [composer.json](https://github.com/jaguardeva/pemweb/blob/master/vendor/graham-campbell/result-type/composer.json) | HTTP error 401 for prompt `vendor/graham-campbell/result-type/composer.json` |

</details>

<details closed><summary>vendor.graham-campbell.result-type.src</summary>

| File                                                                                                               | Summary                                                                        |
| ---                                                                                                                | ---                                                                            |
| [Error.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/graham-campbell/result-type/src/Error.php)     | HTTP error 401 for prompt `vendor/graham-campbell/result-type/src/Error.php`   |
| [Result.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/graham-campbell/result-type/src/Result.php)   | HTTP error 401 for prompt `vendor/graham-campbell/result-type/src/Result.php`  |
| [Success.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/graham-campbell/result-type/src/Success.php) | HTTP error 401 for prompt `vendor/graham-campbell/result-type/src/Success.php` |

</details>

<details closed><summary>vendor.vlucas.phpdotenv</summary>

| File                                                                                                    | Summary                                                           |
| ---                                                                                                     | ---                                                               |
| [composer.json](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/composer.json) | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/composer.json` |

</details>

<details closed><summary>vendor.vlucas.phpdotenv.src</summary>

| File                                                                                                        | Summary                                                               |
| ---                                                                                                         | ---                                                                   |
| [Validator.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Validator.php) | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Validator.php` |
| [Dotenv.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Dotenv.php)       | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Dotenv.php`    |

</details>

<details closed><summary>vendor.vlucas.phpdotenv.src.Repository</summary>

| File                                                                                                                                       | Summary                                                                                    |
| ---                                                                                                                                        | ---                                                                                        |
| [AdapterRepository.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Repository/AdapterRepository.php)     | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Repository/AdapterRepository.php`   |
| [RepositoryBuilder.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Repository/RepositoryBuilder.php)     | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Repository/RepositoryBuilder.php`   |
| [RepositoryInterface.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Repository/RepositoryInterface.php) | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Repository/RepositoryInterface.php` |

</details>

<details closed><summary>vendor.vlucas.phpdotenv.src.Repository.Adapter</summary>

| File                                                                                                                                             | Summary                                                                                           |
| ---                                                                                                                                              | ---                                                                                               |
| [EnvConstAdapter.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/EnvConstAdapter.php)       | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Repository/Adapter/EnvConstAdapter.php`    |
| [ImmutableWriter.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/ImmutableWriter.php)       | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Repository/Adapter/ImmutableWriter.php`    |
| [ServerConstAdapter.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/ServerConstAdapter.php) | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Repository/Adapter/ServerConstAdapter.php` |
| [WriterInterface.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/WriterInterface.php)       | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Repository/Adapter/WriterInterface.php`    |
| [ApacheAdapter.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/ApacheAdapter.php)           | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Repository/Adapter/ApacheAdapter.php`      |
| [AdapterInterface.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/AdapterInterface.php)     | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Repository/Adapter/AdapterInterface.php`   |
| [ArrayAdapter.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/ArrayAdapter.php)             | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Repository/Adapter/ArrayAdapter.php`       |
| [GuardedWriter.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/GuardedWriter.php)           | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Repository/Adapter/GuardedWriter.php`      |
| [PutenvAdapter.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/PutenvAdapter.php)           | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Repository/Adapter/PutenvAdapter.php`      |
| [MultiReader.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/MultiReader.php)               | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Repository/Adapter/MultiReader.php`        |
| [ReplacingWriter.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/ReplacingWriter.php)       | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Repository/Adapter/ReplacingWriter.php`    |
| [ReaderInterface.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/ReaderInterface.php)       | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Repository/Adapter/ReaderInterface.php`    |
| [MultiWriter.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/MultiWriter.php)               | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Repository/Adapter/MultiWriter.php`        |

</details>

<details closed><summary>vendor.vlucas.phpdotenv.src.Exception</summary>

| File                                                                                                                                                | Summary                                                                                        |
| ---                                                                                                                                                 | ---                                                                                            |
| [InvalidPathException.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Exception/InvalidPathException.php)         | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Exception/InvalidPathException.php`     |
| [InvalidEncodingException.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Exception/InvalidEncodingException.php) | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Exception/InvalidEncodingException.php` |
| [ValidationException.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Exception/ValidationException.php)           | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Exception/ValidationException.php`      |
| [ExceptionInterface.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Exception/ExceptionInterface.php)             | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Exception/ExceptionInterface.php`       |
| [InvalidFileException.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Exception/InvalidFileException.php)         | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Exception/InvalidFileException.php`     |

</details>

<details closed><summary>vendor.vlucas.phpdotenv.src.Loader</summary>

| File                                                                                                                           | Summary                                                                            |
| ---                                                                                                                            | ---                                                                                |
| [Loader.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Loader/Loader.php)                   | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Loader/Loader.php`          |
| [LoaderInterface.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Loader/LoaderInterface.php) | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Loader/LoaderInterface.php` |
| [Resolver.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Loader/Resolver.php)               | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Loader/Resolver.php`        |

</details>

<details closed><summary>vendor.vlucas.phpdotenv.src.Parser</summary>

| File                                                                                                                           | Summary                                                                            |
| ---                                                                                                                            | ---                                                                                |
| [Value.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Parser/Value.php)                     | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Parser/Value.php`           |
| [Parser.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Parser/Parser.php)                   | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Parser/Parser.php`          |
| [Lines.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Parser/Lines.php)                     | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Parser/Lines.php`           |
| [Entry.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Parser/Entry.php)                     | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Parser/Entry.php`           |
| [Lexer.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Parser/Lexer.php)                     | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Parser/Lexer.php`           |
| [ParserInterface.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Parser/ParserInterface.php) | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Parser/ParserInterface.php` |
| [EntryParser.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Parser/EntryParser.php)         | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Parser/EntryParser.php`     |

</details>

<details closed><summary>vendor.vlucas.phpdotenv.src.Store</summary>

| File                                                                                                                        | Summary                                                                          |
| ---                                                                                                                         | ---                                                                              |
| [FileStore.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Store/FileStore.php)           | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Store/FileStore.php`      |
| [StoreInterface.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Store/StoreInterface.php) | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Store/StoreInterface.php` |
| [StringStore.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Store/StringStore.php)       | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Store/StringStore.php`    |
| [StoreBuilder.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Store/StoreBuilder.php)     | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Store/StoreBuilder.php`   |

</details>

<details closed><summary>vendor.vlucas.phpdotenv.src.Store.File</summary>

| File                                                                                                             | Summary                                                                       |
| ---                                                                                                              | ---                                                                           |
| [Reader.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Store/File/Reader.php) | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Store/File/Reader.php` |
| [Paths.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Store/File/Paths.php)   | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Store/File/Paths.php`  |

</details>

<details closed><summary>vendor.vlucas.phpdotenv.src.Util</summary>

| File                                                                                                     | Summary                                                                |
| ---                                                                                                      | ---                                                                    |
| [Str.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Util/Str.php)     | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Util/Str.php`   |
| [Regex.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/vlucas/phpdotenv/src/Util/Regex.php) | HTTP error 401 for prompt `vendor/vlucas/phpdotenv/src/Util/Regex.php` |

</details>

<details closed><summary>vendor.phpoption.phpoption</summary>

| File                                                                                                       | Summary                                                              |
| ---                                                                                                        | ---                                                                  |
| [composer.json](https://github.com/jaguardeva/pemweb/blob/master/vendor/phpoption/phpoption/composer.json) | HTTP error 401 for prompt `vendor/phpoption/phpoption/composer.json` |

</details>

<details closed><summary>vendor.phpoption.phpoption.src.PhpOption</summary>

| File                                                                                                                       | Summary                                                                             |
| ---                                                                                                                        | ---                                                                                 |
| [Option.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/phpoption/phpoption/src/PhpOption/Option.php)         | HTTP error 401 for prompt `vendor/phpoption/phpoption/src/PhpOption/Option.php`     |
| [None.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/phpoption/phpoption/src/PhpOption/None.php)             | HTTP error 401 for prompt `vendor/phpoption/phpoption/src/PhpOption/None.php`       |
| [Some.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/phpoption/phpoption/src/PhpOption/Some.php)             | HTTP error 401 for prompt `vendor/phpoption/phpoption/src/PhpOption/Some.php`       |
| [LazyOption.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/phpoption/phpoption/src/PhpOption/LazyOption.php) | HTTP error 401 for prompt `vendor/phpoption/phpoption/src/PhpOption/LazyOption.php` |

</details>

<details closed><summary>vendor.symfony.polyfill-mbstring</summary>

| File                                                                                                                 | Summary                                                                      |
| ---                                                                                                                  | ---                                                                          |
| [bootstrap80.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-mbstring/bootstrap80.php) | HTTP error 401 for prompt `vendor/symfony/polyfill-mbstring/bootstrap80.php` |
| [Mbstring.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-mbstring/Mbstring.php)       | HTTP error 401 for prompt `vendor/symfony/polyfill-mbstring/Mbstring.php`    |
| [bootstrap.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-mbstring/bootstrap.php)     | HTTP error 401 for prompt `vendor/symfony/polyfill-mbstring/bootstrap.php`   |
| [composer.json](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-mbstring/composer.json)     | HTTP error 401 for prompt `vendor/symfony/polyfill-mbstring/composer.json`   |

</details>

<details closed><summary>vendor.symfony.polyfill-mbstring.Resources.unidata</summary>

| File                                                                                                                                           | Summary                                                                                            |
| ---                                                                                                                                            | ---                                                                                                |
| [upperCase.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-mbstring/Resources/unidata/upperCase.php)             | HTTP error 401 for prompt `vendor/symfony/polyfill-mbstring/Resources/unidata/upperCase.php`       |
| [titleCaseRegexp.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-mbstring/Resources/unidata/titleCaseRegexp.php) | HTTP error 401 for prompt `vendor/symfony/polyfill-mbstring/Resources/unidata/titleCaseRegexp.php` |
| [lowerCase.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-mbstring/Resources/unidata/lowerCase.php)             | HTTP error 401 for prompt `vendor/symfony/polyfill-mbstring/Resources/unidata/lowerCase.php`       |
| [caseFolding.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-mbstring/Resources/unidata/caseFolding.php)         | HTTP error 401 for prompt `vendor/symfony/polyfill-mbstring/Resources/unidata/caseFolding.php`     |

</details>

<details closed><summary>vendor.symfony.polyfill-php80</summary>

| File                                                                                                          | Summary                                                                 |
| ---                                                                                                           | ---                                                                     |
| [Php80.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-php80/Php80.php)         | HTTP error 401 for prompt `vendor/symfony/polyfill-php80/Php80.php`     |
| [bootstrap.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-php80/bootstrap.php) | HTTP error 401 for prompt `vendor/symfony/polyfill-php80/bootstrap.php` |
| [PhpToken.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-php80/PhpToken.php)   | HTTP error 401 for prompt `vendor/symfony/polyfill-php80/PhpToken.php`  |
| [composer.json](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-php80/composer.json) | HTTP error 401 for prompt `vendor/symfony/polyfill-php80/composer.json` |

</details>

<details closed><summary>vendor.symfony.polyfill-php80.Resources.stubs</summary>

| File                                                                                                                                              | Summary                                                                                           |
| ---                                                                                                                                               | ---                                                                                               |
| [ValueError.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-php80/Resources/stubs/ValueError.php)                   | HTTP error 401 for prompt `vendor/symfony/polyfill-php80/Resources/stubs/ValueError.php`          |
| [Attribute.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-php80/Resources/stubs/Attribute.php)                     | HTTP error 401 for prompt `vendor/symfony/polyfill-php80/Resources/stubs/Attribute.php`           |
| [PhpToken.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-php80/Resources/stubs/PhpToken.php)                       | HTTP error 401 for prompt `vendor/symfony/polyfill-php80/Resources/stubs/PhpToken.php`            |
| [Stringable.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-php80/Resources/stubs/Stringable.php)                   | HTTP error 401 for prompt `vendor/symfony/polyfill-php80/Resources/stubs/Stringable.php`          |
| [UnhandledMatchError.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php) | HTTP error 401 for prompt `vendor/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php` |

</details>

<details closed><summary>vendor.symfony.polyfill-ctype</summary>

| File                                                                                                              | Summary                                                                   |
| ---                                                                                                               | ---                                                                       |
| [bootstrap80.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-ctype/bootstrap80.php) | HTTP error 401 for prompt `vendor/symfony/polyfill-ctype/bootstrap80.php` |
| [bootstrap.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-ctype/bootstrap.php)     | HTTP error 401 for prompt `vendor/symfony/polyfill-ctype/bootstrap.php`   |
| [Ctype.php](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-ctype/Ctype.php)             | HTTP error 401 for prompt `vendor/symfony/polyfill-ctype/Ctype.php`       |
| [composer.json](https://github.com/jaguardeva/pemweb/blob/master/vendor/symfony/polyfill-ctype/composer.json)     | HTTP error 401 for prompt `vendor/symfony/polyfill-ctype/composer.json`   |

</details>

<details closed><summary>layouts</summary>

| File                                                                                | Summary                                         |
| ---                                                                                 | ---                                             |
| [sidebar.php](https://github.com/jaguardeva/pemweb/blob/master/layouts/sidebar.php) | HTTP error 401 for prompt `layouts/sidebar.php` |
| [top.php](https://github.com/jaguardeva/pemweb/blob/master/layouts/top.php)         | HTTP error 401 for prompt `layouts/top.php`     |
| [bottom.php](https://github.com/jaguardeva/pemweb/blob/master/layouts/bottom.php)   | HTTP error 401 for prompt `layouts/bottom.php`  |
| [navbar.php](https://github.com/jaguardeva/pemweb/blob/master/layouts/navbar.php)   | HTTP error 401 for prompt `layouts/navbar.php`  |

</details>

<details closed><summary>layouts.dashboard</summary>

| File                                                                                        | Summary                                                  |
| ---                                                                                         | ---                                                      |
| [top.php](https://github.com/jaguardeva/pemweb/blob/master/layouts/dashboard/top.php)       | HTTP error 401 for prompt `layouts/dashboard/top.php`    |
| [bottom.php](https://github.com/jaguardeva/pemweb/blob/master/layouts/dashboard/bottom.php) | HTTP error 401 for prompt `layouts/dashboard/bottom.php` |

</details>

<details closed><summary>auth</summary>

| File                                                                               | Summary                                       |
| ---                                                                                | ---                                           |
| [login.php](https://github.com/jaguardeva/pemweb/blob/master/auth/login.php)       | HTTP error 401 for prompt `auth/login.php`    |
| [register.php](https://github.com/jaguardeva/pemweb/blob/master/auth/register.php) | HTTP error 401 for prompt `auth/register.php` |

</details>

---

##  Getting Started

***Requirements***

Ensure you have the following dependencies installed on your system:

* **PHP**: `version x.y.z`

###  Installation

1. Clone the pemweb repository:

```sh
git clone https://github.com/jaguardeva/pemweb
```

2. Change to the project directory:

```sh
cd pemweb
```

3. Install the dependencies:

```sh
composer install
```

###  Running pemweb

Use the following command to run pemweb:

```sh
php main.php
```

###  Tests

To execute tests, run:

```sh
vendor/bin/phpunit
```

---

##  Project Roadmap

- [X] `► INSERT-TASK-1`
- [ ] `► INSERT-TASK-2`
- [ ] `► ...`

---

##  Contributing

Contributions are welcome! Here are several ways you can contribute:

- **[Submit Pull Requests](https://github.com/jaguardeva/pemweb/blob/main/CONTRIBUTING.md)**: Review open PRs, and submit your own PRs.
- **[Join the Discussions](https://github.com/jaguardeva/pemweb/discussions)**: Share your insights, provide feedback, or ask questions.
- **[Report Issues](https://github.com/jaguardeva/pemweb/issues)**: Submit bugs found or log feature requests for Pemweb.

<details closed>
    <summary>Contributing Guidelines</summary>

1. **Fork the Repository**: Start by forking the project repository to your GitHub account.
2. **Clone Locally**: Clone the forked repository to your local machine using a Git client.
   ```sh
   git clone https://github.com/jaguardeva/pemweb
   ```
3. **Create a New Branch**: Always work on a new branch, giving it a descriptive name.
   ```sh
   git checkout -b new-feature-x
   ```
4. **Make Your Changes**: Develop and test your changes locally.
5. **Commit Your Changes**: Commit with a clear message describing your updates.
   ```sh
   git commit -m 'Implemented new feature x.'
   ```
6. **Push to GitHub**: Push the changes to your forked repository.
   ```sh
   git push origin new-feature-x
   ```
7. **Submit a Pull Request**: Create a PR against the original project repository. Clearly describe the changes and their motivations.

Once your PR is reviewed and approved, it will be merged into the main branch.

</details>

---

##  License

This project is protected under the [SELECT-A-LICENSE](https://choosealicense.com/licenses) License. For more details, refer to the [LICENSE](https://choosealicense.com/licenses/) file.

---

##  Acknowledgments

- List any resources, contributors, inspiration, etc. here.

[**Return**](#-quick-links)

---
