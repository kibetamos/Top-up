# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/lumen)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.
# Project Name
> Outline a brief description of your project.
> Live demo [_here_](https://topuprestmama.herokuapp.com/). <!-- If you have the project hosted somewhere, include the link here. -->

## Table of Contents
* [General Info](#general-information)
* [Technologies Used](#technologies-used)
* [Features](#features)
* [Screenshots](#screenshots)
* [Setup](#setup)
* [Usage](#usage)
* [Project Status](#project-status)
* [Room for Improvement](#room-for-improvement)
* [Acknowledgements](#acknowledgements)
* [Contact](#contact)
<!-- * [License](#license) -->


## General Information
- This is a BookAPI application.
<!-- - What problem does it (intend to) solve? -->
- This API can be used to easily interact with books API.
- IT is a way to search and access that content, as well as to create and view personalization around that content
<!-- You don't have to answer all the questions - just the ones relevant to your project. -->


## Technologies Used
- Tech 1 - Lumen
- Tech 2 - PHP
- Tech 3 - Heroku- hosting
- Tech 4 - Mysql
- 


## Features
List the ready features here:
- CRUD Functionality of  a book and a comment
- Get All books and comments
- API creation


## Screenshots
![Example screenshot](images/Screenshot%20(669).png)
<!-- If you have screenshots you'd like to share, include them here. -->


## Setup
For our project, we already have the set up on heroku with the database migrated to the cloud.
To set up, you wil use insomnia so as to push the book records to the database. 
To create a book from the insomnia software;

$router->get('/', 'BookController@index');

$router->get('/books', 'BookController@index');

$router->get('/books/{id}', 'BookController@show');

$router->post('/books/create', 'BookController@store');

$router->put('/books/update/{id}', 'BookController@update');

$router->delete('/books/delete/{id}', 'BookController@destroy');

We use the POST method to add a book https://topuprestmama.herokuapp.com/books/create
We use the GET method to get the records of books we have https://topuprestmama.herokuapp.com/books
We use the PUT methos to update an entry https://topuprestmama.herokuapp.com/books/update/2
We use the DELETE method to delete an entry https://topuprestmama.herokuapp.com/books/delete/2




## Usage
We use the POST method to add a book https://topuprestmama.herokuapp.com/books/create
We use the GET method to get the records of books we have https://topuprestmama.herokuapp.com/books
We use the PUT methos to update an entry https://topuprestmama.herokuapp.com/books/update/2
We use the DELETE method to delete an entry https://topuprestmama.herokuapp.com/books/delete/2

`write-your-code-here`


## Project Status
<!-- Project is: _in progress_ / _complete_ / _no longer being worked on_. If you are no longer working on it, provide reasons why. -->
The project is under improvement. The API has to be improved to include Authentication.


## Room for Improvement
The project is under improvement. The API has to be improved to include Authentication.
Authentication and Authorization


Room for improvement:
- Authentication
- Authorization
- Ratings
- 

To do:
- Authorize and Authenticate users
- Add ratings to books


## Acknowledgements
<!-- Give credit here.
- This project was inspired by...
- This project was based on [this tutorial](https://www.example.com).
- Many thanks to... -->


## Contact
Created by [@kibetamos](https://dev.to/kibetamos) - feel free to contact me!


<!-- Optional -->
<!-- ## License -->
<!-- This project is open source and available under the [... License](). -->

<!-- You don't have to include all sections - just the one's relevant to your project -->
