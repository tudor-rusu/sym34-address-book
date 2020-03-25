## [1.0.0] - 2020-03-25

### Modified
- fix Contact entity
- update CHANGELOG and README 

### Removed
- data migrations

## [0.9.0] - 2020-03-25

### Added
- data fixtures for seeding contacts

### Modified
- controllers

## [0.3.0] - 2020-03-25

### Added
- add Contacts CRUD
- set views and style
- add pagination [KnpPaginatorBundle][3]
- add services

### Modified
- composer files
- fix dependency injection and some twig templates

## [0.2.2] - 2020-03-24

### Added
- add Contacts entity
- set relationship ManyToOne / OneToMany between User and Contact

### Modified
- data migrations

## [0.2.1] - 2020-03-23

### Added
- implement Registration mechanism

### Modified
- composer.json and composer.lock
- AppKernel.php
- update menu

## [0.2.0] - 2020-03-23

### Added
- implement Login/Logout mechanism

### Modified
- composer.json and composer.lock
- AppKernel.php
- update menu

## [0.1.1] - 2020-03-23

### Added
- files related to bundle frontend using [Bootstrap 3.2.0][1]
- add menu using [Knp Menu Bundle][2] 

### Modified
- composer.json and composer.lock
- AppKernel.php

## [0.1.0] - 2020-03-23

### Added
- files related to new Bundle - Address Book

### Modified
- composer.json and config.yml
- CHANGELOG.md

## [0.0.2] - 2020-03-22

### Modified
- README.md and CHANGELOG.md
- configuration files and composer.json in order to provide **sqlite** support

## [0.0.1] - 2020-03-22

### Added
- README.md, LICENSE and CHANGELOG.md
- initial commit

[1]:  https://bootstrapdocs.com/v3.2.0/docs/getting-started/
[2]:  https://github.com/KnpLabs/KnpMenuBundle
[3]:  https://github.com/KnpLabs/KnpPaginatorBundle