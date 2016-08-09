<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<title>Simple Contact Form</title>
	<meta name="description" content="This is a really simple contact form." />
	<meta name="keywords"  content="simple, php, contact, form" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $("#contactForm").submit(function(e) {
                var url = "app/ContactControl.php";

                $.ajax({
                    type: "POST",
                    url: url,
                    data: $("#contactForm").serialize(),
                    success: function(data)
                    {
                        alert(data);
                    }
                });
                e.preventDefault();
            });
        });

    </script>
</head>

<body>
<div class="parent">
	<div class="child">
		<section id="wrap">
			<h1>Simple Contact Form</h1>
			<form id="contactForm">
				<!-- Name -->
				<label class="label">Name</label>
				<input type="text" name="name" class="input" placeholder="Your name" required>

				<!-- Email -->
				<label class="label">Email</label>
				<input type="text" name="email" class="input" placeholder="Your email" required>
				
				<!-- Message -->
				<label class="label">Message</label>
				<textarea id="message" class="input" placeholder="Your message" name="message" rows="5" required></textarea>

				<!-- Submit -->
				<input type="submit" name="submit" class="submit" value="Submit" />
				
				<!-- Success -->
				<div class="success">Thank you for your message!</div>
			</form>
		</section>
	</div>
</div>
</body>
</html>