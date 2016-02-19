# _Repeat Counter, Week 2 Code Review_

#### _Code review for second week of level 2 PHP, 2.19.2016_

### By _**Joseph Karasek**_

## Description

_This web app is designed to take an input phrase, as well as a word to search for, and will return the number of instances of the given word within the phrase._

_The goal of this code review is to show basic understanding and competency with php and the Silex micro-framework, BDD using PHPUnit, and use of the Twig templating engine._

_The following criteria will be considered in review of this code._
* Did you include a README with a description of the program, setup instructions, a copyright, a license, and your name?
* Is the project tracked in Git, and did you regularly make commits with clear messages that finish the phrase "This commit will…"?
* Did you submit your English specs as a separate text file? Was it committed before you began your code?
* Did you complete your method by making your tests pass before starting on the Silex app?
* Do your specs start with the simplest case and progress to more complex cases? Do they cover enough different input values?
* Have all specs been written up correctly as test methods?
* Are all tests passing? Does your method correctly return the number of repeats?
* Is the RepeatCounter class being instantiated correctly? Is its countRepeats method being called correctly, passing it user input from a form?
* Were Twig template files used for all pages?
* Is your logic easy to understand?
* Did you use descriptive variable names?
* Does your code have proper indentation and spacing?

## Setup/Installation Requirements

1. _Fork and clone this repository from_ [gitHub](https://github.com/joekarasek/epicodus-php-repeat_counter.git).
2. Navigate to the root directory of the project in which ever CLI shell you are using and run the command: __composer install__ .
3. Create a local server in the /web directory within the project folder using the command: __php -S localhost:8000__ (assuming you are using a mac).
4. Open the directory http://localhost:8000 in any standard web browser.

## Known Bugs

_No known bugs at this time._

## Support and contact details

_If you have any questions, concerns, or feedback, please contact the author through_ [gitHub](https://github.com/joekarasek/epicodus-php-repeat_counter.git).

## Technologies Used

_This web application was created using the_  [Silex micro-framework](http://silex.sensiolabs.org/)_, as well _[Twig](http://twig.sensiolabs.org/), _a template engine for php, and tested using_ [PHPUnit](https://phpunit.de/).

### License

MIT License.

Copyright (c) 2016 **_Joseph Karasek_**
