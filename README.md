<p align="center"><a href="https://training.zuri.team/" target="_blank"><img src="../assets/images/logo.svg" width="400"></a></p>

## About User Management system

User Management system is a  system built with laravel 8 while employing laravel 9 routing pattern. This project is done as a one of the task for  [Zuri/I4G internship](https://training.zuri.team/). 

## Installation

To checkout this system:
- clone the project from [Simple User Management System](https://github.com/sirval/zuri-task-8). Once cloned.
- run composer update to get all required dependencies
- create .env file and then copy the content of .env.example into it.
- run php artisan key:generate to generate APP_KEY
- run php artisan migrate to migrate table and lastly
- run php artisan serve to start remote server

To easily populate our users table with 10 records you can run php artisan db:seed to seed our users table with test data.

View [Demo](https://zuri-user-management-system.herokuapp.com/).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
