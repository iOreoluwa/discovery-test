<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>BIG 5 FACTORS</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link href="https://fonts.googleapis.com/css?family=Changa+One" rel="stylesheet">
		<!-- <link rel="stylesheet" href="css/main.css"> -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>Discovery | Contact</title>
		<!-- <link rel="stylesheet" href="main.css"> -->
		<!--JavaScript Ajax library-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

		<style type="text/css">

		/**************************
		ALERT BOX
		***************************/
		/* The alert message box*/

		.alert {
			max-width: 100%;
			padding: 20px;
			margin-left: 15%;
			margin-right: 15%;
			text-align: center;
			font-weight: bold;
			color: white;
			background-color: #8D1313;
			margin-bottom: 5%;
			opacity: 1;
			transition: opacity 0.6s;
		}

		.alert-successful{
			max-width: 100%;
			padding: 20px;
			margin-left: 15%;
			margin-right: 15%;
			text-align: center;
			font-weight: bold;
			color: white;
			background-color: #121B39;
			margin-bottom: 5%;
			opacity: 1;
			transition: opacity 0.6s;
		}
		/* the close button*/
				

		.closebtn {
			margin-left: 15px;
			color: white;
			font-weight: bold;
			float: right;
			font-size: 22px;
			line-height: 20px;
			cursor: pointer;
			transition: 0.3s;
		}

		/* Moving the house on the close button*/

		.closebtn:hover {
			color: black;
		}

		.input-error {
				box-shadow: 0px 0px 5px #8D1313;
		}
		</style>


		<script type="text/javascript">
				$(document).ready(function() {
						$("form").submit(function(event) {
								event.preventDefault();
								var name = $("#mail-name").val();
								var email = $("#mail-email").val();
								var subject = $("#mail-subject").val();
								var message = $("#mail-message").val();
								var submit = $("#mail-submit").val();
								$(".form-message").load("contactform.php", {
										name: name,
										email: email,
										subject: subject,
										message: message,
										submit: submit
								}); 
						});
				});
		</script>


	</head>
	<body>
	 <main>
	 		<div>
				<h1>Form</h1>
			</div>
			<form action="contactform.php" method="POST">
				<div>
						<input id="mail-name" type="text" name="name" id="name" placeholder="Name">
				</div>
				<div class="col-12 col-md-6">
						<input id="mail-email" type="email"  name="email" id="email" placeholder="Email">
				</div>
				<div class="col-12">
						<input id="mail-subject" type="text"  name="subject" id="subject" placeholder="subject">
				</div>
				<div class="col-12">
					<textarea id="mail-message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
				</div>
				<div class="col-12">
					<button id="mail-submit" type="submit" name="submit">Send Message</button>
				</div>
			</form>
		</main>
	</body>
</html>