<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Shores of Glenwood</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/weather-style.css">
	<link rel="stylesheet" href="css/thingstodo.css">	
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script>
	    // Picture element HTML5 shiv
	    document.createElement( "picture" );
	</script>
	<script src="js/picturefill.min.js" async></script>
</head>
<body>
	<div class="wrapper">
		<div class="row">
			<header class="col-4">
			</header>
		</div>
		<div class="row">
			<div class="col-4 menu">
				<ul class="active-toggle">
					<li><a href="./index.php">Home</a></li>
					<li><a href="#">About</a></li>
					<li class="active"><a href="./thingstodo.php">Things to Do</a></li>
					<li><a href="./photogallery.php">Photo Gallery</a></li>
					<li><a href="./login.php">Login</a></li>
					<li><a href="./register.php">Register</a></li>
					<li><a href="./contact.php">Contact Us</a></li>
				</ul>
				<a class="toggle-nav" href="#">&#9776;</a>
			</div>
		</div>
		<div class="row">
			<!-- Added the col-push-1 class which moves this column right 25% to make this display (col-2)
			     display in the middle for screen sizes >479px.
			     For screen sizes <=479px, they will display in normal order as written. -->
			<main class="col-2 col-push-1" data-key="sameHeights">
				<h2>Things to Do in Commerce Township</h2>
				
				<p style="clear: both;">As there are many lakes and rivers nearby, there are many water activities to do here in our community from boating and water skiing to
				fishing, kayaking, paddle boarding, and swimming.</p>

					<!-- Using picturefill, load different pictures depending on the width of the screen
					This picture is in the lower right hand corner of the main section -->
					<picture class="thingstodo_main_left_pic">
						<!--[if IE 9]><video style="display: none;"><![endif]-->
						<source srcset="images/lowerstraitslake-250.jpg" media="(min-width: 1050px)">
						<source srcset="images/lowerstraitslake-200.jpg" media="(min-width: 768px) and (max-width: 1049px) ">
						<source srcset="images/lowerstraitslake-150.jpg" media="(min-width: 480px) and (max-width: 767px) ">
						<!--[if IE 9]></video><![endif]-->
						<img src="images/lowerstraitslake-350.jpg" alt="Lower Straits Lake">
					</picture>

					<!-- Using picturefill, load different pictures depending on the width of the screen
					This picture is in the lower right hand corner of the main section -->
					<picture class="thingstodo_main_right_pic">
						<!--[if IE 9]><video style="display: none;"><![endif]-->
						<source srcset="images/loonlake-250.jpg" media="(min-width: 1050px)">
						<source srcset="images/loonlake-200.jpg" media="(min-width: 768px) and (max-width: 1049px) ">
						<source srcset="images/loonlake-150.jpg" media="(min-width: 480px) and (max-width: 767px) ">
						<!--[if IE 9]></video><![endif]-->
						<img src="images/loonlake-350.jpg" alt="Loon Lake">
					</picture>
					<p style="clear: both;"></p>
					<!-- Using picturefill, load different pictures depending on the width of the screen
					This picture is in the lower right hand corner of the main section -->
					<picture class="thingstodo_main_left_pic">
						<!--[if IE 9]><video style="display: none;"><![endif]-->
						<source srcset="images/kayaking-250.jpg" media="(min-width: 1050px)">
						<source srcset="images/kayaking-200.jpg" media="(min-width: 768px) and (max-width: 1049px) ">
						<source srcset="images/kayaking-150.jpg" media="(min-width: 480px) and (max-width: 767px) ">
						<!--[if IE 9]></video><![endif]-->
						<img src="images/kayaking-350.jpg" alt="Kayaking">
					</picture>

					<!-- Using picturefill, load different pictures depending on the width of the screen
					This picture is in the lower right hand corner of the main section -->
					<picture class="thingstodo_main_right_pic">
						<!--[if IE 9]><video style="display: none;"><![endif]-->
						<source srcset="images/paddleboard-250.jpg" media="(min-width: 1050px)">
						<source srcset="images/paddleboard-200.jpg" media="(min-width: 768px) and (max-width: 1049px) ">
						<source srcset="images/paddleboard-150.jpg" media="(min-width: 480px) and (max-width: 767px) ">
						<!--[if IE 9]></video><![endif]-->
						<img src="images/paddleboard-350.jpg" alt="Paddle Boarding">
					</picture>

					<p style="clear: both;">
						<br>
						There are also many restaurants, farms, golf courses, and parks to explore.
					</p> 

					<!-- Using picturefill, load different pictures depending on the width of the screen
					This picture is in the lower right hand corner of the main section -->
					<picture class="thingstodo_main_left_pic">
						<!--[if IE 9]><video style="display: none;"><![endif]-->
						<source srcset="images/BeaconHill-250.jpg" media="(min-width: 1050px)">
						<source srcset="images/BeaconHill-200.jpg" media="(min-width: 768px) and (max-width: 1049px) ">
						<source srcset="images/BeaconHill-150.jpg" media="(min-width: 480px) and (max-width: 767px) ">
						<!--[if IE 9]></video><![endif]-->
						<img src="images/BeaconHill-350.jpg" alt="Beacon Hill Golf Course">
					</picture>	

					<!-- Using picturefill, load different pictures depending on the width of the screen
					This picture is in the lower right hand corner of the main section -->
					<picture class="thingstodo_main_right_pic">
						<!--[if IE 9]><video style="display: none;"><![endif]-->
						<source srcset="images/long-family-orchard-farm-250.jpg" media="(min-width: 1050px)">
						<source srcset="images/long-family-orchard-farm-200.jpg" media="(min-width: 768px) and (max-width: 1049px) ">
						<source srcset="images/long-family-orchard-farm-150.jpg" media="(min-width: 480px) and (max-width: 767px) ">
						<!--[if IE 9]></video><![endif]-->
						<img src="images/long-family-orchard-farm-350.jpg" alt="Beacon Hill Golf Course">
					</picture>
					<p style="clear: both;"></p>
					<!-- Using picturefill, load different pictures depending on the width of the screen
					This picture is in the lower right hand corner of the main section -->
					<picture class="thingstodo_main_left_pic">
						<!--[if IE 9]><video style="display: none;"><![endif]-->
						<source srcset="images/its-a-matter-of-taste-250.jpg" media="(min-width: 1050px)">
						<source srcset="images/its-a-matter-of-taste-200.jpg" media="(min-width: 768px) and (max-width: 1049px) ">
						<source srcset="images/its-a-matter-of-taste-150.jpg" media="(min-width: 480px) and (max-width: 767px) ">
						<!--[if IE 9]></video><![endif]-->
						<img src="images/its-a-matter-of-taste-350.jpg" alt="Beacon Hill Golf Course">
					</picture>

					<!-- Using picturefill, load different pictures depending on the width of the screen
					This picture is in the lower right hand corner of the main section -->
					<picture class="thingstodo_main_right_pic">
						<!--[if IE 9]><video style="display: none;"><![endif]-->
						<source srcset="images/corn-long-250.jpg" media="(min-width: 1050px)">
						<source srcset="images/corn-long-200.jpg" media="(min-width: 768px) and (max-width: 1049px) ">
						<source srcset="images/corn-long-150.jpg" media="(min-width: 480px) and (max-width: 767px) ">
						<!--[if IE 9]></video><![endif]-->
						<img src="images/corn-long-350.jpg" alt="Corn Fields">
					</picture>

			</main>
			<!-- Added the col-push-1 class which moves this column right 25% to make this display (col-1)
			     display in the right for screen sizes >479px
			     For screen sizes <=479px, they will display in normal order as written. -->
			<div class="col-1 col-push-1 outside-w-wrapper" data-key="sameHeights">
				<h3>Local Time &amp; Weather</h3>
				<p>
					<?php
					// Return date/time info of a timestamp; then format the output
					date_default_timezone_set('America/New_York');
					
					$mydate=getdate();
					echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
					echo "<br>";
					
	   				$currenttime = date('h:i A');
	   				echo date('h:i A',strtotime($currenttime));
	   				echo "<br>";
	   				echo "<br>";
					?>
				</p>
				<!-- This is the placeholder html code to insert the openweather code using javascript
				I thought this would be a nice touch to add to a neighborhood community website...
				This code was inspired from the following links:
				https://github.com/michael-lynch/open-weather
				http://openweathermap.org/

				Unfortunately, my city does not show up on the database so it chose the closest city to it... -->
				<div class="weather-wrapper hide">
					<img src="#" class="weather-icon" alt="Weather Icon" />
			
					<p><strong>Place</strong><br>
					<span class="weather-place"></span></p>
			
					<p><strong>Temperature</strong>
					<br><span class="weather-temperature"></span></p>
					
					<p><strong>Description</strong>
					<br><span class="weather-description capitalize"></span></p>
					
					<p><strong>Humidity</strong>
					<br><span class="weather-humidity"></span></p>
					
					<p><strong>Wind speed</strong>
					<br><span class="weather-wind-speed"></span></p>
					
					<p><strong>Sunrise</strong>
					<br><span class="weather-sunrise"></span></p>
					
					<p><strong>Sunset</strong>
					<br><span class="weather-sunset"></span></p>
				</div>
			</div>

			<!-- Added the col-pull-3 class which moves this column left 75% to make this display (col-1)
			     display in the left for screen sizes >479px
			     For screen sizes <=479px, they will display in normal order as written. -->
			<aside class="col-1 col-pull-3" data-key="sameHeights">
				<h3>Commerce Township Info</h3>
				<ul>
					<li><a href="https://en.wikipedia.org/wiki/Commerce_Township,_Michigan" target="_blank">Population:</a> 40,186</li>
			        <li><a href="https://en.wikipedia.org/wiki/Commerce_Township,_Michigan" target="_blank">Total Area:</a> 29.8 square miles</li>
			        <li><a href="http://www.distance-cities.com/distance-detroit-mi-to-commerce-township-mi" target="_blank">Miles northwest from Detroit:</a> 28</li>
			        <li><a href="https://en.wikipedia.org/wiki/Commerce_Township,_Michigan" target="_blank">Number of Households:</a> 12,379</li>
			        <li><a href="https://en.wikipedia.org/wiki/Commerce_Township,_Michigan" target="_blank">Number of Families:</a> 9,754</li>
			        <li><a href="https://en.wikipedia.org/wiki/Commerce_Township,_Michigan" target="_blank">Median Household Income:</a> $72,702</li>
			        <li><a href="https://en.wikipedia.org/wiki/Commerce_Township,_Michigan" target="_blank">Median Family Income:</a> $79,976</li>
			        <li><a href="https://en.wikipedia.org/wiki/Commerce_Township,_Michigan" target="_blank">Median Age:</a> 36 years</li>
			        <li><a href="https://en.wikipedia.org/wiki/Commerce_Township,_Michigan" target="_blank">Number of School Districts:</a> 2</li>
		        </ul>
			</aside>

		</div>
	</div>
	<div class="row">
	    <footer class="col-4">
	    	<p>&copy; 2016 Shores of Glenwood Neighborhood Association </p>
	    </footer>
	</div>

	<!-- Specific code for configuring the openweather data to the subdivision location -->
	<script src="/js/openWeather.js"></script>
	<script>
		$(function() {
		
			$('.weather-temperature').openWeather({
				key: '1ae2a03185008da881e3c6cf3c53b1fc',
				city: 'Commerce Township, MI',
				units: 'f',
				descriptionTarget: '.weather-description',
				windSpeedTarget: '.weather-wind-speed',
				minTemperatureTarget: '.weather-min-temperature',
				maxTemperatureTarget: '.weather-max-temperature',
				humidityTarget: '.weather-humidity',
				sunriseTarget: '.weather-sunrise',
				sunsetTarget: '.weather-sunset',
				placeTarget: '.weather-place',
				iconTarget: '.weather-icon',
				customIcons: '/images/icons/weather/',
				success: function() {
				
					//show weather
					$('.weather-wrapper').show();
					
				},
				error: function(message) {
				
					console.log(message);
				
				}
			});
			
		});
	
	</script>
	<script src="js/eqheight.js"></script>
	<script type="text/javascript">
	if ('addEventListener' in window) {
	    window.addEventListener('resize', function(){
	        sameHeights();
	    });
	    window.addEventListener('load', function(){
	        sameHeights();
	    });
	}
	</script>	
</body>
</html>