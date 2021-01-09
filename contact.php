<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Custom Mailer</title>
		
	</head>
	<body>
	<div class="site-content">
			<div id="contact" class="fullwidth-block" data-bg-color="#">
					<div class="container">
					<h2 class="section-title"><center><b> Send Mail</b></center></h2>
				
						<form class="contact-form" method="POST" action="form-to-email.php">
							<div class="row">
								<div class="col-md-6">
									<div class="control">
									 <label for="First Name *">Name *</label><br>
									<input class="fullname" type="text" name="fullname" required maxlength="50" placeholder="Name To Be Appended To Extension" style="width: 250px;">
									</div>
									<br>

									<div class="control">
									 <label for="Extension*">Name Extention*</label><br>
									<input class="end" type="text" name="end" required maxlength="50" placeholder="Extension(name@extension.com)" style="width: 250px;">
									</div>
									<br>									

									<div class="control">
									<label for="Email">Email *</label><br>
									<input class="email" type="email" name="email" required maxlength="50" placeholder="Receiver's Email" style="width: 250px;">
									</div>
									<br>
									
								</div>
								<div class="col-md-6">
									<div class="control">
									 <label for="Email Message Head *">Email Message Head *</label><br>
									<input class="msgHead" type="text" name="msgHead" required maxlength="50" placeholder="Head Of The Email To Be Sent" style="width: 250px;">
									</div>
									<br>

									<div class="control">
									<label for="Your Title">Mail Body *</label><br>
										<textarea class="message" name="message" placeholder="Message or Body of Email To Be Sent" required style="height: 250px; width: 270px;"></textarea>	
                                       </div>
									<div id="errors"></div>
									
									<p class="text-left">
										<input type="submit" name="submit" value="Submit" id="submit" />
									</p>
								</div>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</body>
	</html>