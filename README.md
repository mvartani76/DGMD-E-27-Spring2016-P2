#DGMD-E-27-Spring2016-P2

This is the second assignment for DGMD E-27.

#Source Code

The code consists of the following files:

##Source HTML/php:
**index.php** - This is the landing page for the site. It consists of a header at the top with an image the is swapped using media queries. There is also a main section that has some text describing the site and neighborhood as well as some responsive images that use picturefill.js. There is also a sidebar that incorporates a weather widget using the openweather API.

**photogallery.php** - This is a page for showing various neighborhood photo albums which could be accessed by clicking on the image. The images currently do not link anywhere but could later. There is no weather sidebar on this page but this page incorporates the equal heights javascript code from Ben Howdle (http://benhowdle.im/easy-peasy-equal-heights.html).

**thingstodo.php** - This is a page for showing pictures of things to do in the city where my neighborhood resides. This page also shows the column swapping when going from desktop to mobile portrait mode as described in the week 3 videos. This page also uses more media queries around the end points for the typical media queries to maximize the image sizes for the appropriate screen widths.

**contact.php/login.php/register.php** - These are all form based php files with the weather widget side bar on the right side.

##SASS Source Files:
**normalize.scss** - The stylesheet that normalizes everything between browsers.<br>
**styles.scss** - The main overall stylesheet for the site. This has media queries in it.<br>
**weather-style.scss** - Weather widget sidebar specific stylings.<br>
**formstyle.scss** - Form specific stylesheet.<br>
**_variables.scss** - Partial file for storing sass variables.<br>
**_mixins.scss** - Partial file for storing sass mixins.<br>

## Generated CSS Files:
These files are generated from the SASS source files above.<br><br>
**normalize.css** - The stylesheet that normalizes everything between browsers.<br>
**styles.css** - The main overall stylesheet for the site. This has media queries in it.<br>
**weather-style.css** - Weather widget sidebar specific stylings.<br>
**formstyle.css** - Form specific stylesheet.<br>

##JS Source Files:
**eqheight.js** - Javascript code from Ben Howdle that makes columns the same heights.<br>
**menu.js** - jQuery code snippet that toggles classes to make a mobile responsive menu. It uses a "hamburger button" in the mobile portrait mode.<br>
**openWeather.js** - jQuery code snippet from Michael Lynch (http://michaelynch.com) distributed under MIT license to access the OpenWeather API.<br>

# Assignment Specific Topics
## Browser/Operating System
I primarily used a Google Chrome browser (Version 48.0.2564.116 m) running on a Windows 10 (64 bit) machine and Safari running on an Apple iPhone 6s plus (iOS 9.2.1).
## Build a Responsive Website
I am using the responsive website I built from Assignment 1.<br>
The URL is: http://dgmd-e27-p1.mikevartanian.me/index.php<br>
The comments and code is located in GitHub here: https://github.com/mvartani76/DGMD-E-27-Spring2016-P1<br>

## Variables
The variables are defined in the partial file _variables.scss.<br>

## Mixins
The mixins are defined in the partial file _mixins.scss.<br>


