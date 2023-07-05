<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--  I will use the font awesome icons library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- I will also use a google font that i like -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="styles.css"> <!-- link to my stylesheet -->
	<title>Creating a responsive, working contact form | Full stack tutorial</title>
</head>
<body>

	<h2>
		This is a working demo, enter your email and try it out.		
	</h2>

	<!-- I need a container to host my contact form, also this container will act
	as a css grid with two sections -->
	<div class="contact-section">
		<!-- In the first section we will have the contact-info -->
		<div class="contact-info">
			<h3>Send us your question</h3>
			<p class="text">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. At porro odio necessitatibus magni molestias nisi hic, provident mollitia praesentium voluptatem nostrum architecto debitis non laborum 
			</p>
			<p class="text">
				Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam consequuntur a eveniet quis esse laboriosam adipisci quasi reiciendis, aut dicta fugiat sed, ad. Esse quis, temporibus, porro impedit eaque eum!
			</p>
			<img src="fox.png" alt="">
		</div>

		<!-- In the second section we will have our contact form -->
		<form name="contact-form" action="" method="post" autocomplete="off">
			<!-- Every input field will have his own container. -->
			<div class="block">
				<i class="fas fa-user"></i>
				<input type="text" name="firstname" placeholder="Enter your firstname">
			</div>

			<div class="block">
				<i class="fas fa-envelope"></i>
				<input type="text" name="email" placeholder="Enter your email">
			</div>
			
			<div class="block">
				<i class="fas fa-comment-alt"></i>
				<textarea name="message" placeholder="Write your message"></textarea>
			</div>

			<button type="submit">Send message <i class="fas fa-paper-plane"></i></button>

			<p class="please-wait"></p>
			<p class="error"></p>
			<p class="success"></p>
		</form>
	</div>

	<script src="script.js"></script><!-- link to the javascript file -->
</body>
</html>