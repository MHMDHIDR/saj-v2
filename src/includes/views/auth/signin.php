        <?php	
        	// Get redirect variable
        	if(isset($_GET['redirectTo'])) {
						$urlFrom = $_GET['redirectTo'];
					}
        	// If session username is set
	        if(isset($_SESSION['uname'])):
	        header('location: index?page=1');
	        exit();
					// else if there's no session with the name of ['uname']
					elseif(!isset($_SESSION['uname'])):
        ?>
				<!-- Sign In Page Start -->
	        <div class="col-sm-12">
	          <div class="smContainer underline-hover">
	          	<ol class="breadcrumb">
                <span>You are in:&nbsp;&nbsp;</span>
                <li><a href="index">Home</a></li>
                <li><a href="">Authentication</a></li>
                <li class="active">Sign In</li>
            	</ol>
	            <h3 class="underlined-text">Sign in</h3>
	            <?php 
		            // Require Sign In form functionality if session is not set
								require_once $controllersDir . 'auth/signinForm.php' 
							?>
	            <form action="signin" method="POST">
            	<?php
			      		// Force redirect url to equal : submit-article
            		if(isset($urlFrom)) {
			      			$urlFrom = 'submit-article';
			      			// Error message
			      			require $layoutsDir . 'public/alert.php';
			      			alert('You Must Sign In before submitting new article.', 'danger', '', false);
			      			echo '<input type="hidden" name="redirTo" value="'.$urlFrom.'">';
			      		}
		      		?>
	            	<!-- Username -->
	            	<div class="col-md-6 col-md-offset-3">
	            		<label for="username" class="visible-xs">Username</label>
	            		<input type="text" name="username" id="username" class="form-control custIn"
	            		value="<?php echo(isset($uname))?$uname:''?>" placeholder="Username" dir="auto" required>
	            	</div>
	            	<!-- Password -->
	            	<div class="col-md-6 col-md-offset-3">
	            		<label for="password" class="visible-xs">Password</label>
	            		<input type="password" name="password" id="password" class="form-control custIn" placeholder="Password" autocomplete="new-password" required>
	            	</div>
	            	<!-- Forgot Password -->
	            	<div class="col-md-6 col-md-offset-3 mb">
									<a href="forgot-password">Forgot Password?</a>
	            	</div>
	            	<!-- Submit Button -->
	            	<div class="col-sm-6 col-sm-offset-3">
									<button type="submit" class="btn btn-primary btn-block text-uppercase">Sign in</button>
	            	</div>
	            </form>
	          </div>
	        </div>
 	 			<?php /* Endif session isset check for sign in page */ endif ?>
        <!-- Sign In Page End -->