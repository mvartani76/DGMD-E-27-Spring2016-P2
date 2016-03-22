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
**thingstodo.scss** Stylesheet for the things to do page.<br>

## Generated CSS Files:
These files are generated from the SASS source files above.<br><br>
**normalize.css** - The stylesheet that normalizes everything between browsers.<br>
**styles.css** - The main overall stylesheet for the site. This has media queries in it.<br>
**weather-style.css** - Weather widget sidebar specific stylings.<br>
**formstyle.css** - Form specific stylesheet.<br>
**thingstodo.css** - Stylesheet for the things to do page.<br>

##JS Source Files:
**eqheight.js** - Javascript code from Ben Howdle that makes columns the same heights.<br>
**menu.js** - jQuery code snippet that toggles classes to make a mobile responsive menu. It uses a "hamburger button" in the mobile portrait mode.<br>
**openWeather.js** - jQuery code snippet from Michael Lynch (http://michaelynch.com) distributed under MIT license to access the OpenWeather API.<br>

# Assignment Specific Topics
## Browser/Operating System
I primarily used a Google Chrome browser (Version 48.0.2564.116 m) running on a Windows 10 (64 bit) machine and Safari running on an Apple iPhone 6s plus (iOS 9.2.1).
## Build a Responsive Website
I am using the responsive website I built from Assignment 1.<br>
The URL for Assignment 1 is: http://dgmd-e27-p1.mikevartanian.me/index.php<br>
The comments and code for Assignment 1 are located in GitHub here: https://github.com/mvartani76/DGMD-E-27-Spring2016-P1<br>

## Variables
The variables are defined in the following partial files:<br>
**_variables.scss** - This variable file contains the generic variables used throughout many different source files.<br>
**_form_variables.scss** - This variable file contains the form specific variables used in **formstyle.scss**.<br>
**_weather_variables.scss** - This variable file contains the weather widget specific variables used in **weather-style.scss**.<br>
**_thingstodo_variables.scss** This mixin file contains the specific variables used in **thingstodo.scss**.<br>
<br>
Variables are used throughout the source sass files as well as mixins, functions, and extends.<br>

A simple example of variables being used is shown starting on **line 36** of **styles.scss**.
```SCSS
.wrapper {
	width: $wrapper-width;
	max-width: $wrapper-max-width;
	margin: 0 auto;
	float: none;
	background-color: $primary-background-color;	
}
```
Here we can see that there are three (3) variables used in the above styling.<br>

Another slightly more complicated but still very simple example of variables being used is shown from **line 9** in **weather-style.scss**.
```SCSS
.weather-wrapper {
	width: $weather-wrapper-width;
	padding: {
		left: $weather-wrapper-padding-left;
		right: $weather-wrapper-padding-right;
		top: $weather-wrapper-padding-top;
	}
	margin: 0 auto;
	color: white;
	background-color: $weather-wrapper-background-color;
	text-align: center;

	& + p {
		font-family: 'Lato', sans-serif;
		color: $weather-wrapper-paragraph-text;
	}
}
```
There are six (6) variables used in this simple class styling above.<br>
## Mixins
The mixins are defined in the following partial files:<br>
**_mixins.scss** - This mixin file contains the generic mixins used through many difference source files.<br>
**_form_mixins.scss** - This mixin file contains the form specific mixins used in **formstyle.scss**.<br>
**_weather_mixins.scss** - This mixin file contains the weather widget specific mixins used in **weather-style.scss**.<br>
**_thingstodo_mixins.scss** This mixin file contains the specific mixins used in **thingstodo.scss**.<br>

A very simple example of a mixin is **set-form-fieldset**. It is defined on **line 37** of **_form_mixins.scss** and is shown below.
```SCSS
// This mixin sets the fieldset parameters
@mixin set-form-fieldset {
	fieldset {
		border: medium none !important;
		margin: 0 0 10px;
		min-width: 100%;
		padding: 0;
		width: 100%;
		font:400 1em/1.5em "Lato", Helvetica, Arial, sans-serif;
		color: $form-primary-text-color;
		text-align: center;
	}
}
```
It doe not use any input parameters. It is included on **line 60** of **formstyle.scss** as shown below.
```SCSS
// Set the fieldset parameters using a mixin
@include set-form-fieldset;
```
Another mixin that is a little bit more complicated is **set-selector-props()**. This mixin is defined on **line 3** of **_mixins.scss** as shown below.
```SCSS
// This mixin sets selected tag properties that are changed for different media queries
// This mixin was created as there is a lot of repeated code
@mixin set-selector-props($tag-prop, $base-header-font-size, $header-font-percentage-adjustment,
								$base-header-line-height, $header-line-percentage-adjustment,
								$base-value, $value-precentage-adjustment) {

	@if $tag-prop == "h2" {
		#{$tag-prop} {
				font-size: scale-unit-value($base-header-font-size, $header-font-percentage-adjustment, 2);
				line-height: scale-unit-value($base-header-line-height, $header-line-percentage-adjustment, 2);		
				padding-left: scale-unit-value($base-value, $value-precentage-adjustment, 2);
				padding-right: scale-unit-value($base-value, $value-precentage-adjustment, 2);
		}
	}
	@else if $tag-prop == "p" {
		#{$tag-prop} {
				font-size: scale-unit-value($base-header-font-size, $header-font-percentage-adjustment, 2);
				line-height: scale-unit-value($base-header-line-height, $header-line-percentage-adjustment, 2);		
				margin-left: scale-unit-value($base-value, $value-precentage-adjustment, 2);
				margin-right: scale-unit-value($base-value, $value-precentage-adjustment, 2);
		}		
	}

}
```
As we can see, this mixin is more complicated. It uses input parameters, helper functions, and conditional statements. This mixin is used in several places to set properties for the various media queries. One instance is shown on **line 206** of **styles.scss** inside the main tag as shown below.
```SCSS
// Nesting the main tag
main {

	@include set-selector-props(h2, $main-base-h2-font-size, $main-desktop-width-h2-font-size-scale-factor,
				$main-base-h2-line-height, $main-desktop-width-h2-line-height-scale-factor,
				$main-base-h2-padding, $main-desktop-width-h2-padding-scale-factor);

	@include set-selector-props(p, $main-base-p-font-size, $main-desktop-width-p-font-size-scale-factor,
				$main-base-p-line-height, $main-desktop-width-p-line-height-scale-factor,
				$main-base-p-margin, $main-desktop-width-p-margin-scale-factor);	

	@include set-selector-img-props(0%, 1%, 1%, 1.4em);
}
```
## Extends
The extends used for this assignment are defined in **_form_extends.scss** and are used in **formstyle.scss**. The extend definitions are shown below.<br>
```SCSS
#form-heading-color-extend {
	color: $form-heading-font-color;
	background-color: $form-background-color;
}

#form-input-border-color-extend {
	border:1px solid $form-border-color;
	background-color: $form-input-background-color;	
}

#form-width-margin-padding-extend {
	width:100%;
	margin:0 0 5px;
	padding:10px;
}

#form-display-margin-left-extend {
	display: block;
	margin-left: 2%;
}
```
The four extends, **#form-heading-color-extend**, **#form-input-border-color-extend**, and **#form-width-margin-padding-extend**, and **#form-display-margin-left-extend** are extend-only ids that help observe DRY principles for the other ids/tags in **formstyle.scss** while organizing the stylesheet visually so it makes sense.<br>

For example, I wanted to keep the different form specific IDs together but as there was a lot repeated code, I used an extend to have them grouped together in the compiled css stylesheet. This is shown in the code snippet starting on **line 63** from **formstyle.scss** below.<br>

```SCSS
// Using extends to set parameters here as I want to group the #contact_id IDs together for my own sanity but still try to observe DRY principles
#contact_id input[type="text"], #contact_id input[type="email"], #contact_id input[type="tel"], #contact_id input[type="url"],
#contact_id input[type="time"], #contact_id textarea {
	@extend #form-input-border-color-extend;
	@extend #form-width-margin-padding-extend;
}

// Using extends to set parameters here as I want to group the #login_id IDs together for my own sanity but still try to observe DRY principles
#login_id input[type="text"], #login_id input[type="password"], #login_id textarea {
	@extend #form-input-border-color-extend;
	@extend #form-width-margin-padding-extend;
}

// Using extends to set parameters here as I want to group the #register_id IDs together for my own sanity but still try to observe DRY principles
#register_id input[type="text"], #register_id input[type="email"], #register_id input[type="tel"], #register_id input[type="url"], #register_id input[type="password"] {
	@extend #form-input-border-color-extend;
	@extend #form-width-margin-padding-extend;
}
```

## Nesting
Nesting is performed several places including source sass files as well as mixins. A couple examples are shown below.<br>
The first example shows nesting of the .menu class starting on **line 51** of **styles.scss**.
```SCSS
// Nesting the .menu class as well as nesting the ul tag
// inside the .menu class
.menu {
	background-color: $secondary-background-color;

	// Nesting the ul tag
	ul {
		margin: 0;
		padding: 0;
		list-style-type: none;
		overflow: auto;
	
		li {
			font-family: 'Lato', sans-serif;
		}
		a {
			color: $menu-link-color;
			text-decoration: none;
			font-weight: bold;
			float: left;
		}
		a:hover, li.active a {
			color: $menu-active-color;
		}
	}
}
```
The next example shows nesting of **div.photography** starting on **line 113** of **styles.scss**.
```SCSS
// Nested the div.photography class
// Needed to separate this from the main nesting
div.photogallery {
	h2 {
		padding-top: 0em;
		background-color: $primary-background-color;
		color: $primary-heading-text-color;
		text-align: center;
		font-family: 'Francois One', sans-serif;
	}

	p {
		font-family: 'Lato', sans-serif;
		background-color: $primary-background-color;
		color: $primary-light-text-color;
		padding: {
			left: $photo-photogallery-p-padding-left;
			right: $photo-photogallery-p-padding-right;
		}
	}
}
```
## Built-in Sass Functions
A few different built-in Sass functions are used primarily in functions/mixins as shown below.<br>
The **unquote()** and **unit()** functions were used to remove the quotes and add a unit to the **scale-unit-value()** function on **line 45** of **_helper_functions.scss** as shown below. The **round()** built in function is used inside **round-decimal()** as well.<br>
```SCSS
// Scale a unit number by $scale-value, rounding to $num-decimal-places
// This function first removes the unit, scales it by $scale-value, which is the percentage number without
// the %, rounds to the desired number of decimal places, and then adds the unit back.
// Using Sass built-in functions, unquote() and unit().
@function scale-unit-value($value-to-be-scaled, $scale-value, $num-decimal-places) {
	@return unquote(round-decimal(strip-unit($value-to-be-scaled) * convert-percentage($scale-value), $num-decimal-places) + unit($value-to-be-scaled))
}
```
As mentioned above, the **round()** built-in function is used in **round-decimal()** starting on **line 31** of **_helper_functions.scss** as shown below.<br>
```SCSS
// Since the sass built-in function, round(), only rounds to the nearest
// whole number, I created the following function to round to a selected
// number of decimal point
// Function accepts the following inpus
// {$number} - Number to be rounded
// {$num-decimal-points} - Number of decimal points to round to
@function round-decimal($number, $num-decimal-places) {
	$output: 1;
	@for $i from 1 through $num-decimal-places {
		$output: $output * 10;
	}
	// Using Sass built-in function, round()	
	@return round($number*$output) / $output;
}
```
The **percentage()** function is used in the **create-grid-system()** mixin on **line 53** of **_mixins.scss** to convert the decimal output to a percentage as shown below.<br>
```SCSS
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
Another **unquote()** function is used on **line 42** of **_mixins.scss** in the **set-header-img-height-width()** mixin to remove the quotes from the image file and path name as shown below.<br>
```SCSS
// This mixin sets the header background image, height, and width
// The $header-img-file is input as a string so we need to remove the quotes using the built-in Sass function
// unquote() in order for it to work with the url() function.
@mixin set-header-img-height-width($header-img-file, $header-height, $header-width){
		background: url(unquote($header-img-file)) no-repeat;
		width: $header-width;
		height: $header-height;
}
```

## if/else
If/else conditional logic is used in a few mixins throughout the project. One instance of using if/else conditional logic is in the **set-selector-props()** mixin, which starts on **line 3** of **_mixins.scss**. The mixin sets various properties for the **h2** and **p** tags for different media queries. The properties that are set for **h2** and **p** are similar but not exact so the if/else logic is used to set the properties accordingly depending on which tag input is selected.<br>
```SCSS
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
Another example of using if/else is in the **set-font-size-and-line-height()** mixin which is defined starting on **line 8** of **_form_mixins.scss**. The font-size and line-height is adjusted for the various media queries in **formstyle.scss**. This mixin was created since these properties were adjusted a lot and repeated unnecessarily. Both properties, however, were not adjusted all the time so the conditional logic was used to determine what parameters to set depedning on the mixin inputs.<br>
```SCSS
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
A Sass **@for** loop was used to create the grid system and is included in the **create-grid-system()** mixin as shown below. The mixin also utilizes the Sass built-in function, **percentage()**, to convert the decimal output of the division to a percentage. **Create-grid-system()** is defined starting on **line 50** of **_mixins.scss**.<br>
```SCSS
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
Several partial files are used throughout the project and are listed below.<br>
### Variables
**_variables.scss** - This variable file contains the generic variables used throughout many different source files.<br>
**_form_variables.scss** - This variable file contains the form specific variables used in **formstyle.scss**.<br>
**_weather_variables.scss** - This variable file contains the weather widget specific variables used in **weather-style.scss**.<br>
**_thingstodo_variables.scss** This mixin file contains the specific variables used in **thingstodo.scss**.<br>
### Mixins
**_mixins.scss** - This mixin file contains the generic mixins used through many difference source files.<br>
**_form_mixins.scss** - This mixin file contains the form specific mixins used in **formstyle.scss**.<br>
**_weather_mixins.scss** - This mixin file contains the weather widget specific mixins used in **weather-style.scss**.<br>
**_thingstodo_mixins.scss** This mixin file contains the specific mixins used in **thingstodo.scss**.<br>
### Extends
**_form_extends.scss** - This extend file contains extends used in **formstyle.scs**.<br>
### Other
**_helper_functions.scss** - This file contains helper functions used in the various mixin files. I separated from the mixin files to make it look a little cleaner.<br>
## Compass Mixins
Compass Mixins were used selectively throughout the project and examples are shown below.<br>

### transition-property(), transition-duration(), and transition-timing-function()

**transition-property()**, **transition-duration()**, and **transition-timing-function()** are used in the **toggle-nav** class via a user created sass mixin, **transition-compass()**.<br>

#### User mixin delcaration
**transition-compass()** is defined starting on **line 119** of **_mixins.scss** and is shown below.
```SCSS
// This mixin sets transitions of various parameters for a few different browser types
// This mixin uses the compass mixins to accomplish this
@mixin transition-compass($transition-variable, $transition-time, $transition-timing-function) {
	@include transition-property($transition-variable);
	@include transition-duration($transition-time);
	@include transition-timing-function($transition-timing-function);
}
```
#### Use in toggle-nav class (line 420 of styles.scss)
```SCSS
.toggle-nav {
	padding: $menu-phone-portrait-width-toggle-nav-padding;
	float:left;
	display:block;
	background-color: $secondary-background-color;
	color: $menu-toggle-primary-text-color;
	font-size: $menu-phone-portrait-width-toggle-nav-font-size;
	
	// Replace the css transition: color linear 0.15s; with the 
	// equivalent compass mixins (included inside user created sass mixin, transition-compass())
	// This also provides cross browser support which was not included when just setting the
	// transition property using CSS
	@include transition-compass(color, $menu-phone-portrait-width-color-transition-time, linear);
	
	text-decoration: none;
	font-weight: bold;
}
```
### single-box-shadow()
**single-box-shadow()** is used on **line 125** of **formstyle.scss** to replace the CSS property, box-shadow: ... and give it cross browser support. This code is used for the active state of the buttons in the various form IDs (contact_id, login_id, and register_id) as shown below.<br>
```SCSS
#contact_id button[type="submit"]:active, #login_id button[type="submit"]:active,
#register_id button[type="submit"]:active {
	// Replaced box-shadow CSS property with Compass mixin, single-box-shadow() to give cross browswer support
	@include single-box-shadow(0, 1px, 3px, rgba(0, 0, 0, 0.5), inset);
}
```
I did have a NULL as an input parameter after 3px as shown below but it flagged a CSS error so I removed it.
```SCSS
	@include single-box-shadow(0, 1px, 3px, NULL, rgba(0, 0, 0, 0.5), inset);
```
### translate()
**translate()** is used on **line 387** of **styles.scss** to help with the hamburger bar menu in the phone portrait media query as shown in the code below.
```SCSS
	    ul:after {
	        width: 0px;
	        height: 0px;
	        position:absolute;
	        top: 0%;
	        left: 5%;
	        content:'';
	        // Use the compass mixin, translate(), to replace transform: translate and
	        // add cross browser support
	        @include translate(0%,-100%);
	    }
```
### scale()
The compass mixin, **scale()**, is used to slightly change the images in the photogallery page when the mouse hovers over the image as a neat effect. The **scale()** mixin is declared on **line 83** of **_mixins.scss** in my own custom mixin, **set-col-1-2-4()** as shown in the code below.
```SCSS
// This mixin sets the font size and centers h3
// This mixin also scales the images within col-1-2-4 when the mouse hovers
// over the image. Using the compass mixin, scale(), to do the scaling
@mixin set-col-1-2-4-props($h3-font-size, $img-scale-x, $image-scale-y){

	// Nesting the col-1-2-4 class
	.col-1-2-4 {
		h3 {
			font-size: $h3-font-size;
			margin: 0 auto;
			text-align: center;
		}

		img:hover {
			// Compass mixin that scales the images in the photogallery when hovering over the image
			@include scale($img-scale-x,$image-scale-y);
		}
	}
}
```
One instance of the mixin that uses the compass scale is on **line 231** of **styles.scss** as shown below.
```SCSS
	// Set col-1-2-4 properties
	// This mixin includes the compass mixin, scale()
	@include set-col-1-2-4-props(1.25em,1.02,1.02);
```
## Compass Helper Functions
In addition to the Compass mixins, helper functions are used within the code as appropriate.<br>
### headers()
The **headers()** compass helper function is used in **styles.scss** (line 26) to set the font-size-adjust property for all headers as shown in the code below.<br>
```SCSS
body, caption, th, td, input, textarea, select, option, legend, fieldset, #{headers()} {
  font-size-adjust: $primary-font-size-adjust;
}
```
The **headers()** compass helper function is also used in **styles.scss** (line 30) to set the font family for all headers as shown in the code below.<br>
```SCSS
#{headers()} {
	font-family: 'Francois One', sans-serif;
}
```
