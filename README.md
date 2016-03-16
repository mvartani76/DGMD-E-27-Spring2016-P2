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
The comments and code are located in GitHub here: https://github.com/mvartani76/DGMD-E-27-Spring2016-P1<br>

## Variables
The variables are defined in the partial file _variables.scss.<br>

## Mixins
The mixins are defined in the partial file _mixins.scss.<br>

## Extends
The extends are defined here.<br>

## Nesting
Nesting is performed several places. A few examples are shown below.<br>

## Built-in Sass Functions
A few different built-in Sass functions are used primarily in mixins as shown below.<br>

## if/else
If/else conditional logic is used in a few mixins throughout the project. One instance of using if/else conditional logic is in the set-selector-props() mixin. The mixin sets various properties for the h2 and p tags for different media queries. The properties that are set for h2 and p are similar but not exact so the if/else logic is used to set the properties accordingly depending on which tag input is selected.<br>
```
// This mixin sets selected tag properties that are changed for different media queries
// This mixin was created as there is a lot of repeated code
@mixin set-selector-props($tag-prop, $base-header-font-size, $header-font-percentage-adjustment,
								$base-header-line-height, $header-line-percentage-adjustment,
								$base-value, $value-precentage-adjustment) {

	@if $tag-prop == "h2" {
		#{$tag-prop} {
				font-size: scale-unit-value($base-header-font-size, $header-font-percentage-adjustment);
				line-height: scale-unit-value($base-header-line-height, $header-line-percentage-adjustment);		
				padding-left: scale-unit-value($base-value, $value-precentage-adjustment);
				padding-right: scale-unit-value($base-value, $value-precentage-adjustment);
		}
	}
	@else if $tag-prop == "p" {
		#{$tag-prop} {
				font-size: scale-unit-value($base-header-font-size, $header-font-percentage-adjustment);
				line-height: scale-unit-value($base-header-line-height, $header-line-percentage-adjustment);		
				margin-left: scale-unit-value($base-value, $value-precentage-adjustment);
				margin-right: scale-unit-value($base-value, $value-precentage-adjustment);
		}		
	}

}
```
Another example of using if/else is in the set-font-size-and-line-height() mixin. The font-size and line-height is adjusted for the various media queries in formstyle.scss. This mixin was created since these properties were adjusted a lot and repeated unnecessarily. Both properties, however, were not adjusted all the time so the conditional logic was used to determine what parameters to set depedning on the mixin inputs.<br>
```
// This mixin sets the font size and line height.
// Since it is used for multiple media queries in formstyle.scss, decided to make a mixin and reduce code
//
// As the line-height is not always set in these media queries, put some conditional code in to alter css
// based on whether or not the user wants to set the variables...
//
// The user can choose not to set a parameter by setting the input parameter to "none"
@mixin set-font-size-and-line-height($font-size, $line-height) {
	@if $font-size == "none" {
		line-height: $line-height;
	}
	@else if $line-height == "none" {
		font-size: $font-size;
	}
	@else {
		font-size: $font-size;
		line-height: $line-height;
	}
}
```

## Loops
A Sass **@for** loop was used to create the grid system and is included in the **create-grid-system()** mixin as shown below. The mixin also utilizes the Sass built-in function, percentage(), to convert the decimal output of the division to a percentage.<br>
```
// Create Grid System Mixin
// @param {$num-columns} - The number of equally spaced columns
// Mixin uses a for loop to set the width (in percentage)
@mixin create-grid-system($num-columns) {
	@for $i from 1 through $num-columns {
		.col-#{$i} {
			width: percentage(($i / $num-columns));
		}
	}
}
```
## Partial Files
Several partial files are used throughout the project.<br>
