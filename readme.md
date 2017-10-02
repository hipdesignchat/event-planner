# Event Planner (working name)

![Build status](https://travis-ci.org/ChaoticLaw/event-planner.svg?branch=master)

Event Planner aims to give event organisers and people an easy platform to organise and run events.

It runs on Laravel.

## Setup and Running
You'll need access to the PHP binary and Composer to install everything to get going. You should set them up in your PATH if you haven't already, as it'll make development far easier.

  1. Clone or download a copy of this repository, and extract to a directory of your choice.
  2. Run `composer install` to install dependencies of the project
  3. Run `php artisan list` to list all possible commands

Note that you'll need a file called `.env` in the root folder of the repository, which isn't included by default. You can set it up by copying `.env.example`, then running `php artisan key:generate` to set up proper encryption for security functions.

You can run the application by running `php artisan serve` and going to `http://localhost:8000`.

## Running tests
Testing is provided with [PHPUnit](https://phpunit.de/). It should be installed after using `composer install` earlier.

To run tests, execute `./vendor/bin/phpunit -c phpunit.xml`.
