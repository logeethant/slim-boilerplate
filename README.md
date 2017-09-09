# Boilerplate for Slim Framework
Works out-of-the-box with my [Docker PHP Boilerplate](https://github.com/royklutman/docker-php-boilerplate).
## Installation
Clone or download this repository:
```
git clone https://github.com/royklutman/slim-boilerplate
```
Update/install Composer dependencies:
```
composer update
```
## Configuration
Rename or copy `app/Parameters.php.dist` to `app/Parameters.php` and customize its parameters.
## Usage
### Routes
Add routes in `src/routes.php` to you liking.
### Controllers, models and views
Controllers, models and views should be put in the respective directories in the `app` directory. Any dependency defined in `src/dependencies.php` can easily be accessed in a controller through `$this->dependency`. For example `$this->view->render()` to render a template with the view dependency.
### Constants
Constants, for example to define roles or the number of posts to show, can be added in `app/Config.php` like this:
```php
//...
const ROLES = [
    1 => 'ROLE_ADMIN',
    2 => 'ROLE_USER'
];
//...
```
These constants can be called anywhere by using `\App\Config::CONSTANT['key']` or `\App\Config::ROLES[1]` for example.
