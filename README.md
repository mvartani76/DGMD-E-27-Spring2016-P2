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
The URL for Assignment 1 is: http://dgmd-e27-p1.mikevartanian.me/index.php<br>
The comments and code for Assignment 1 are located in GitHub here: https://github.com/mvartani76/DGMD-E-27-Spring2016-P1<br>

## Variables
<u>The variables are defined in the following partial files:</u><br>
**_variables.scss** - This variable file contains the generic variables used throughout many different source files.<br>
**_form_variables.scss** - This variable file contains the form specific variables used in **formstyle.scss**.<br>
**_weather_variables.scss** - This variable file contains the weather widget specific variables used in **weather-style.scss**.<br>
<br>
Variables are used throughout the source sass files as well as mixins, functions, and extends.<br>
## Mixins
The mixins are defined in the following partial files:<br>
**_mixins.scss** - This mixin file contains the generic mixins used through many difference source files.<br>
**_form_mixins.scss** - This mixin file contains the form specific mixins used in **formstyle.scss**.<br>
**_weather_mixins.scss** - This mixin file contains the weather widget specific mixins used in **weather-style.scss**.<br>
<br>
## Extends
The extends used for this assignment are defined in **_form_extends.scss** and are used in **formstyle.scss**. The extend definitions are shown below.<br>
```
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

The four extends, **#form-heading-color-extend**, **form-input-border-color-extend**, and **form-width-margin-padding-extend**, and **#form-display-margin-left-extend** are extend-only ids that help observe DRY principles for the other ids/tags in formstyle.scss while organizing the stylesheet visually so it makes sense.<br>

For example, I wanted to keep the different form specific IDs together but as there was a lot repeated code, I used an extend to have them grouped together in the compiled css stylesheet. This is shown in the code snippet from **formstyle.scss** below.<br>

```
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
Nesting is performed several places. A few examples are shown below.<br>

## Built-in Sass Functions
A few different built-in Sass functions are used primarily in functions/mixins as shown below.<br>
The **unquote()** and **unit()** functions were used to remove the quotes and add a unit to the **scale-unit-value()** function as shown below.<br>
```
// Scale a unit number by $scale-value
// This function first removes the unit, scales it by $scale-value, which is the percentage number without
// the % and then adds the unit back.
@function scale-unit-value($value-to-be-scaled, $scale-value) {
	@return unquote(strip-unit($value-to-be-scaled) * convert-percentage($scale-value) + unit($value-to-be-scaled))
}
```
The **percentage()** function is used in the **create-grid-system()** mixin to convert the decimal output to a percentage as shown below.<br>
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
Another **unquote()** function is used in the **set-header-img-height-width()** mixin to remove the quotes from the image file and path name as shown below.<br>
```
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
If/else conditional logic is used in a few mixins throughout the project. One instance of using if/else conditional logic is in the **set-selector-props()** mixin. The mixin sets various properties for the **h2** and **p** tags for different media queries. The properties that are set for **h2** and **p** are similar but not exact so the if/else logic is used to set the properties accordingly depending on which tag input is selected.<br>
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
Another example of using if/else is in the **set-font-size-and-line-height()** mixin. The font-size and line-height is adjusted for the various media queries in **formstyle.scss**. This mixin was created since these properties were adjusted a lot and repeated unnecessarily. Both properties, however, were not adjusted all the time so the conditional logic was used to determine what parameters to set depedning on the mixin inputs.<br>
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
A Sass **@for** loop was used to create the grid system and is included in the **create-grid-system()** mixin as shown below. The mixin also utilizes the Sass built-in function, **percentage()**, to convert the decimal output of the division to a percentage.<br>
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

## Compass Mixins
Compass Mixins were used selectively throughout the project and examples are shown below.<br>

### transition-property(), transition-duration(), and transition-timing-function()

**transition-property()**, **transition-duration()**, and **transition-timing-function()** are used in the **toggle-nav** class via a user created sass mixin, **transition-compass()**.<br>

#### User mixin delcaration
```
// This mixin sets transitions of various parameters for a few different browser types
// This mixin uses the compass mixins to accomplish this
@mixin transition-compass($transition-variable, $transition-time, $transition-timing-function) {
	@include transition-property($transition-variable);
	@include transition-duration($transition-time);
	@include transition-timing-function($transition-timing-function);
}
```
#### Use in toggle-nav class
```
.toggle-nav {
	padding:1em;
        float:left;
        display:block;
        background-color: $secondary-background-color;
        color:#fff;
        font-size:20px;

        // Replace the css transition: color linear 0.15s; with the 
        // equivalent compass mixins (included inside user created sass mixin, transition-compass())
        // This also provides cross browser support which was not included when just setting the
        // transition property using CSS
        @include transition-compass(color, 0.15s, linear);

	text-decoration: none;
	font-weight: bold;
}
```
### single-box-shadow()
**single-box-shadow()** is used in **formstyle.scss** to replace the CSS property, box-shadow: ... and give it cross browser support. This code is used for the active state of the buttons in the various form IDs (contact_id, login_id, and register_id) as shown below.<br>
```
#contact_id button[type="submit"]:active, #login_id button[type="submit"]:active,
#register_id button[type="submit"]:active {
	// Replaced box-shadow CSS property with Compass mixin, single-box-shadow() to give cross browswer support
	@include single-box-shadow(0, 1px, 3px, NULL, rgba(0, 0, 0, 0.5) inset);
}
```
## Compass Helper Functions
In addition to the Compass mixins, helper functions are used within the code as appropriate.<br>
### headers()
The **headers()** compass helper function is used to set the font-size-adjust property for all headers as shown in the code below.<br>
```
body, caption, th, td, input, textarea, select, option, legend, fieldset, #{headers()} {
  font-size-adjust: $primary-font-size-adjust;
}
```
The **headers()** compass helper function is also used to set the font family for all headers as shown in the code below.<br>
```
#{headers()} {
	font-family: 'Francois One', sans-serif;
}
```
