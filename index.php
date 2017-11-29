<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Assignment 8 - Frameworks Survey</title>
	
	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
	
	<!--Import overrides.css-->
    <link type="text/css" rel="stylesheet" href="css/overrides.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body class="grey darken-3">

	<div class="container">

	<header class="center-align">

		<h1 class="arc"><em>Front-End Frameworks</em></h1>

	</header>
	
	<div class="charl">
	
		<div class="valign-wrapper row">
		
			<div class="col s7">

			<p class="big">In the world of web design, to give a more straightforward definition, a framework is defined as a package made up of a structure of files and folders of standardized code (HTML, CSS, JS documents etc.) which can be used to support the development of websites, as a basis to start building a site. Most websites share a very similar (not to say identical) structure. The aim of frameworks is to provide a common structure so that developers don’t have to redo it from scratch and can reuse the code provided. In this way, frameworks allow us to cut out much of the work and save a lot of time.</p>
			
			</div>
			
			<div class="col s5">
				<img src="images/frontend.jpg" class="right responsive-img" alt="">
			</div>
						
			</div>

			<p class="big">There are basically 2 types to differentiate: backend and frontend (this distinction is drawn depending on whether the framework is for the presentation layer or the application/ logical layer. It’s important to understand that frameworks are a conceptual notion: a pre-prepared standard kit from which to work. The concept of a framework can be applied to different processes carried out on the web: the programmer’s layer which connects the database to the site content and uses PHP language, and the designer’s layer, where that content must be presented in HTML documents with defined CSS style sheets so it can ultimately be viewed in a browser.</p>
			

			<p class="big">We are going to specifically focus on frontend frameworks. Within front-end frameworks, commonly referred to as <em>"CSS frameworks"</em>, we can draw a distinction between two types of framework according to their complexity: simple frameworks and complete frameworks. This distinction is subjective, and doesn’t mean one is better than the others but rather that they give different solutions depending on the level of complexity and/ or flexibility required.</p>
			
			<div class="valign-wrapper row">
			
			<div class="col s5">
				<img src="images/bootstrap.png" class="left responsive-img" alt="">
			</div>
			
			<div class="col s7">

			<p class="big">There are certain features that lead users to choose one front-end framework over another. Users have to look at what browsers the frameworks support and are compatible with such as Firefox, Google, Internet Explorer, and etc. It also applies to whether or not framework is mobile-friendly and responsive. Because the code is already written, code readability is also important to consider since if the user can not understand the code because it's unorganized, then it will lead them away from that framework. Community and the popularity of that framework is also important because it brings familiarity and allows the user to turn to a community when help is needed. Another feature that users typically look for is the framework's flexibility and how much they are able to customize. The speed and stability of the framework are also important features.</p>

			</div>
			
			</div>

			<p class="big"> Some examples of these frameworks are <em>Bootstrap</em> and <em>Foundation</em>. Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is the most popular one out there and has tons of stars on Github and lots of resources to get your questions answered. One of the easier ones to use, but some say it has a very distinctive “Bootstrap” look. Foundation is an advanced responsive front-end framework. Foundation is built with Sass, a powerful CSS preprocessor. It offers a lot of flexibility and customizability. Foundation is good for those who are experienced with front-end development and like to cover the basics while retaining a lot of creative control.</p>
		
			<p class="big">There are many different frameworks out there and it's up to the developer to decide which is best for them, looking at different factors and what each one offers. This user survey will explore which front-end frameworks are popular among users and what features of those frameworks they most appreciate.</p>
			

			<!-- Content taken from https://www.awwwards.com/what-are-frameworks-22-best-responsive-css-frameworks-for-web-design.html and https://www.thebalance.com/what-is-a-front-end-framework-and-why-use-one-2071948-->

		<h2 class="center-align"><em>User Survey</em></h2> 

			<form method="post" action="database_action.php">
			
			<div class="row">
			
				<div class="input-field col s6">
					<i class="material-icons prefix">account_circle</i>
					<label for="name"> Name: </label>
					<input type="text" name="name" id="name" required>
				</div>
				
				<div class="input-field col s6">
					<i class="material-icons prefix">email</i>
					<input type="email" name="email" id="email" class="validate" required>
					<label for="email" data-error="Please enter a valid email">Email: </label>
				</div>
			
			</div>

			<fieldset>

				<legend class="big">Front-End Frameworks</legend>

				<div class="questiontitle">What is your favorite front-end framework?</div>
				
				<div class="boxes">
				
					<p>
						<input type="radio" name="framework" id="bootstrap" value="Bootstrap">
						<label for="bootstrap">Bootstrap</label>
					</p>

					<p>
						<input type="radio" name="framework" id="foundation" value="Foundation">
						<label for="foundation">Foundation</label>
					</p>
					
					<p>
						<input type="radio" name="framework" id="stylus" value="Stylus">
						<label for="stylus">Stylus</label>
					</p>
					
					<p>
						<input type="radio" name="framework" id="materialize" value="Materialize">
						<label for="materialize">Materialize</label>
					</p>
					
					<p>
						<input type="radio" name="framework" id="semantic" value="Semantic">
						<label for="semantic">Semantic UI</label>
					</p>
					
					<p>
						<input type="radio" name="framework" id="pure" value="Pure">
						<label for="pure">Pure</label>
					</p>
					
					<p>
						<input type="radio" name="framework" id="uikit" value ="UIKit">
						<label for="uikit">UIKit</label>
					</p>
					
					<p>
						<input type="radio" name="framework" id="milligram" value="Milligram">
						<label for="milligram">Milligram</label>
					</p>
					
					<p>
						<input type="radio" name="framework" id="skeleton" value="Skeleton">
						<label for="skeleton">Skeleton</label>
					</p>
					
					<p>
						<input type="radio" name="framework" id="susy" value="Susy">
						<label for="susy">Susy</label>
					</p>
					
				</div>

	
				<div class="questiontitle">Which features of this front-end framework are the most important to you?</div>
				
					<div class="boxes">
					
					<p>
						<input type="checkbox" name="feature[]" id="flex" value="Flexibility">
						<label for="flex">Flexibility</label>
					</p>
					
					<p>
						<input type="checkbox" name="feature[]" id="browser" value="Browser Compatability">
						<label for="browser">Browser Compatability</label>
					</p>
					
					<p>
						<input type="checkbox" name="feature[]" id="community" value="Community & Popularity">
						<label for="community">Community & Popularity</label>
					</p>
					
					<p>
						<input type="checkbox" name="feature[]" id="mobile" value="Mobile Friendly">
						<label for="mobile">Mobile Friendly</label>
					</p>
					
					<p>
						<input type="checkbox" name="feature[]" id="stability" value="Stability">
						<label for="stability">Stability</label>
					</p>
					
					<p>
						<input type="checkbox" name="feature[]" id="speed" value="Speed">
						<label for="speed">Speed</label>
					</p>
					
					<p>
						<input type="checkbox" name="feature[]" id="readability" value="Readability">
						<label for="readability">Code Readability</label>
					</p>
				
					</div>


				<div class="questiontitle">Which features do you think this front-end framework can improve on?</div>
				
					<div class="boxes">
					
					<p>
						<input type="checkbox" name="improveFeat[]" id="flex2" value="Flexibility">
						<label for="flex2">Flexibility</label>
					</p>
					
					<p>
						<input type="checkbox" name="improveFeat[]" id="browser2" value="Browser Compatability">
						<label for="browser2">Browser Compatability</label>
					</p>
					
					<p>
						<input type="checkbox" name="improveFeat[]" id="community2" value="Community & Popularity">
						<label for="community2">Community & Popularity</label>
					</p>
					
					<p>
						<input type="checkbox" name="improveFeat[]" id="mobile2" value="Mobile Friendly">
						<label for="mobile2">Mobile Friendly</label>
					</p>
					
					<p>
						<input type="checkbox" name="improveFeat[]" id="stability2" value="Stability">
						<label for="stability2">Stability</label>
					</p>
					
					<p>
						<input type="checkbox" name="improveFeat[]" id="speed2" value="Speed">
						<label for="speed2">Speed</label>
					</p>
					
					<p>
						<input type="checkbox" name="improveFeat[]" id="readability2" value="Readability">
						<label for="readability2">Code Readability</label>
					</p>
					
					</div>

			</fieldset>

			<fieldset>
				<legend class="big">Suggestions</legend>
				
				<div class="row">
				
					<div class="input-field col s12">
						<textarea name="suggestion" id="suggestion" class="materialize-textarea" data-length="300"></textarea>
						<label class="big" for="suggestion">Do you recommend any other features that you would like to see added?</label>
					</div>
					

					<div class="input-field col s12">
						<textarea name="recommend" id="recommend" class="materialize-textarea" data-length="300"></textarea>
						<label class="big" for="recommend">Do you recommend any other front-end frameworks not listed in this survey?</label>
					</div>
					
					<div class="center-align">
						<button class=" orange lighten-1 btn waves-effect waves-light" type="submit" name="Submit">Submit</button>
					</div>
					
				</div>

			</fieldset>
				
			</form>
		
		</div>
			
		</div>

<!-- Downloading jQuery and Materialize file for JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
					
</body>

</html>

