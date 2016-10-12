<?php
	$pageTitle = "Contact"; // set page title
	include_once('include/header.php');
?>
<!--content-->
<div class="container">
   <div class="contact">
	 <div class="contact-md">
		 <h3>Contact</h3>
		 <p>Please contact me with any query's</p>
	 </div>
	   <div class="col-md-6 contact-top">
					<h3>Please contact me</h3>
					<form>
						<div>
							<span>Your Name </span>		
							<input name="name" type="text" placeholder="FullName" required>
						</div>
						<div>
							<span>Your Email </span>		
							<input name="email" type="text" placeholder="Email Address" required>
						</div>
						<div>
							<span>Subject</span>		
							<input name="subject" type="text" placeholder="Subject" required>
						</div>
						<div>
							<span>Your Message</span>		
							<textarea name="message" placeholder="" required></textarea>
						</div>
						<input name="button" type="submit" value="Submit">
				  </form>
				</div>
				<div class="col-md-6 contact-top">
					<h3>Info</h3>

					<p>Please contact me on the form provided below for any enquires that you have, and on how I can improve
						my website for users.
					</p>
					<p>Thanks for all of your co-operation Sante</p>
					<p>
						<a href="https://www.google.ie/maps/search/1A+Esker+Glebe/@53.3503941,-6.4414521,18z">
						Sante Fitness<br>
						1A Esker Glebe<br>
						Lucan<br>
						Co.Dublin</a>
					</p>

				</div>
			<div class="clearfix"> </div>
	</div>
</div>
<!--contact end here-->
<?php
 	include"emailMe.php";
	include_once('include/footer.php');
?>