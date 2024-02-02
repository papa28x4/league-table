<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About ZPortal API

5000 students from 37 states (including the FCT) across Nigeria apply to study one of 6 courses offered by 20 selected universities.

The goal of this application is to 1) automate the creation of the admission list for each university based on certain criteria and 2) provide some measure of data analysis.
Requirements:
1a) A student can only select one of the six courses.

1b) Student can pick 2 universities of choice where he hopes to study the course picked in (1a)

2a) When a course is choosen by a student, the 4 subjects which the student would be required to write to gain admission for that course will be assigned to the student's profile
2b) The courses offered are: Medicine, Engineering, Agriculture, Economics, Accounting and Law.

*Subject Combinations are as follows*

*Medicine*: Biology, Physics & Chemistry
*Engineering*: Mathematics, Physics & Chemistry
*Agriculture*: Biology, Agriculture, Chemistry
*Economics*: Economics, Government, Mathematics
*Law*: CRK, Literature in English & Government
*Accounting*: Accounting, Mathematics & Government 

Note: English subject is compulsory for all courses.

3a) Your university list should have a mixture of Federal, State and Private universities. Also include some universities of technology in this list

3b) Universities of technology and private universities do not offer medicine yet. So if a student selects medicine, he should not be able to select a university of technology or a private university

4) When the exam has been written and marked, an admin should have the ability to enter the scores for each student for the different subjects written.

You should prevent accidental inputting of scores for a subject not in a student's subject combination.

Note: This application will not handle the exam testing. It will be used to just record the scores.


- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
