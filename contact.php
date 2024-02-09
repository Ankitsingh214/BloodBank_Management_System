<?php include"config.php";?>
<!DOCTYPE html>
<html lang="en">
<?php include"head.php";?>
<body>

<?php
	 include"top_nav.php";
?>
	
    <!-- Page Content -->
    <div class="container" style="margin-top:70px;">

			<div class="row">
				<div class="col-md-8">
				<?php
					if(isset($_POST["submit"]))
					{
					 $sql="INSERT INTO messages (NAME, CONTACT, EMAIL, MESSAGE, STATUS,LOGS) VALUES ('{$_POST["name"]}', '{$_POST["phone"]}', '{$_POST["email"]}', '{$_POST["message"]}', 1,NOW());";
						if($con->query($sql))
				{
					echo '
					<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Success!</strong> Your message has been Successfully sent.
					</div>
					
					
					';
				}
					}
				?>
		
				<h3 class='text-primary'>Send us a Message</h3>
                <form method="post" action="contact.php" role="form" >
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="name" required>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="email"  >
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="5" cols="100" class="form-control" name="message" required maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary" name="submit"><i class='fa fa-send'></i> Send Message</button>
                </form>
				
			</div>
			
            <div class="col-md-4">
                <h3 class='text-primary'>Contact Details</h3>
                <p>
                    Blood Bank &amp; <br>Friend Medical Trust, <br>
					Hitesh PG Prajapati Vas,<br>
					Municipality Office Thaltej Gam- Pin Code - 380059.<br>
					Ahmedabad, Gujarat.
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Phone</abbr>: +919574885276</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">Email</abbr>: <a href="#" >bloodbankin@gmail.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">Hours</abbr>: 24*7</p>
				<p><i class="fa fa-globe"></i> 
                    <abbr title="Website">Website</abbr>: <a href="index.php">www.bloodbank.org</a></p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/ankit.singhom.5"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/ankit-singh-b888b7222/"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/ankittech111"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://myaccount.google.com/?utm_source=sign_in_no_continue&pli=1"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>


        <hr>
		<?php include"footer.php"; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

   

</body>

</html>
