# DEV PAL 

## Author
Brian Kestenholz

## Email
briankesten@yahoo.com

## Live URL
<http://p3.netcaredata.com>

## GitHub HTTPS Address
<https://github.com/briankesten/p3>

## Description
Dev Pal provides tools that make developer's lives easier. Feel free to explore the site and try out some tools.
* Tool 1: Lorem Ipsum Text Output - The Dev Pal Lorem Ipsum Generator will output text that you can use for your web development projects. This site makes use of the badcow/lorem-ipsum package which provides a library for generating lorem ipsum text.  In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, translated as "pain itself") is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Reference: Wikipedia - https://en.wikipedia.org/wiki/Lorem_ipsum
* Tool 2: Random User Generator - The Dev Pal Random User Generator will output a list of random users which can save countless time when this type of information needs to be generated. This script makes use of the fzaninotto/faker package.

## Screencast Demo
<http://www.screencast.com/t/jDz4uKbCu>

## Details for teaching team
* Utilizes Laravel 5.1 framework
* Utilizes Get and Post routes and contains three pages (home, ipsum, usergen)
* Utilizes Blade Template engine to build UI
* All input is validated using Laravel validation
    1. Used blade IN validation rule on the Lorem Ipsum select form 
    2. Required validation on select Lorem Ipsum form
    3. Numeric range validation min and max values on usergen form
* Utilizes views and controllers
* Simple Bootstrap design which displays across multiple devices
* Extra challenges completed: 
    1. Made the application look nice
    2. Gave the user generation more options: birthdate, location, profile text, password, and email
    3. Validated all input using Laravel validation
    4. XKCD Password Generator converter (added 10/22/2015) because of extension  
    5. Authored a simple custom package to Packagist (netcare/passbuilder) and utilized it in project

## Outside code
* Bootstrap: http://getbootstrap.com/
* JQuery: https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js
* Shim: https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js
* Respond: https://oss.maxcdn.com/respond/1.4.2/respond.min.js
* Badcow Lorem Ipsum Package: https://packagist.org/packages/badcow/lorem-ipsum
* Fzaninotto Faker Package: https://packagist.org/packages/fzaninotto/faker
* Laravel Framework: http://laravel.com/


