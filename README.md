###Description
This is a student management system, can add (levels - programs - courses - students - items) and calc the whole grades, which is developer based on
REST API (this app focuses on backend).

### Technical Reasoning
The app is built on Laravel and [Laragine](https://github.com/yepwoo/laragine) due to the following reasons:
* A module based, meaning that you can separate all related stuff together
* Automatic generation of Unit Tests!
* One clear response for the client side (for example: API response)
* Error handling
* Easy to configure channels to send the logs (for example error logs) to channels like `slack`
* It's based on `MVC` **design pattern**

The app also implements best practices like applying `SOLID` principles and `OOD` apart from that the `Strategy` design pattern is used due to having switch cases (many if for example).

### Getting started:
* You do not have a `.env` file in the project root directory so copy `.env.example` and save it as `.env`
* In `.env` file update the database info
* Open the terminal and navigate to the project directory and run `composer update`
* Generate the application key using `php artisan key:generate`
* Create the database tables by running `php artisan migrate`
* Create fake data by running `php artisan db:seed`
* enjoy 😃 !

### Testing:
* You can run the tests by running `./vendor/bin/phpunit` 
  also before running the tests you can check the code coverage reports by opening `ci/codeCoverage/index.html` in the browser

