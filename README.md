# Project Title

Timezones Manager - FishingBooker interview project

### Prerequisites

```
You will need NodeJS (npm) / Composer / PHP / MySql / Web Server in order to install/run this project
```

### Installing

Clone this repo and run:

Api
```
/api/
composer install
/api/application/
composer install
```

Dashboard
```
/dashboard/
npm install
```

There are 2 sql scits included in project
```
timezones.sql for creating timezones database, relevant tables and initial roles
```
```
timezones_test.sql for creating timezones test database, relevant tables and initial roles
```

## Running the tests

Unit tests

In order for unit tests to work, you must disable check cors feature in test configuration
```
/api/application/config/rest.php
Line 546
$config['check_cors'] = FALSE;
```
In ordrer to run unit tests
```
/api/application/test and run phpunit
```

End to end tests

In order for end to end tets to work, you must enable check cors feature in test configuration
```
/api/application/config/rest.php
Line 546
$config['check_cors'] = FALSE;
```
As well as set development environment
```
/api/index.php
Line 56
define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'testing');
```

To run end to end tests
```
/dashboard/  and run npm cypress:all
```

## Live server

This project is currently deployed and it is live on 

```
http://104.248.45.174:3000
```

It has some predefined users in database

Administrator
```
username: administrator
password: admin123
```

Regular User
```
username: regularUser
password: regularuser123
```

User Manager
```
username: userManager
password: usermanager123
```

Details for accessing live server:
```
ssh -l root 104.248.45.174
password: 123marko123
```

## Built With

* [Codeigniter 3](https://www.codeigniter.com/docs) - The PHP framework used
* [CodeIgniter Rest Server](https://github.com/chriskacerguis/codeigniter-restserver) - RESTFull Controller implementation for CI
* [ReactJS](https://reactjs.org/) - The web framework used
* [NPM](https://www.npmjs.com/) - Dashboard package manager
* [Composer](https://getcomposer.org/) - API Dependency Manager 

## Authors

* **Marko Stojanovic** - *makos494@gmail.com* - 