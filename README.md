# Boilerplate for Slim Framework
Works out-of-the-box with Laravel Homestead.
## Installation
Clone or download this repository:
```
git clone https://github.com/royklutman/slim-boilerplate
```
Update/install Composer's dependencies:
```
composer update
composer update --no-dev (if not using Laravel Homestead)
```
When using Laravel Homestead, run commands below after updating composer's dependencies:
```
vendor/bin/homestead make (to create the Homestead configuration file)
vagrant box add laravel/homestead (if you haven't installed the box yet)
vagrant up
```
## Configuration
Rename or copy `app/Parameters.yaml.dist` to `app/Parameters.yaml` and customize its parameters.
## Usage
### Routes
Add routes in `src/Routes.php` to you liking.
### Controllers, models and views
Controllers, models and views should be put in their respective directories in the `app` directory. Any dependency defined in `src/Dependencies.php` can easily be accessed in a controller through `$this->dependency`. For example `$this->view->render()` to render a template with the view dependency.
