<?php require('Head.php');?>

		<!-- Main Navigation -->
		
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="<?= base_url('assets/images/phone-call.svg')?>" alt="">
			<span>+43 4566 7788 2457</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>


	<div class="register">

		<div class="container-fluid">
			
			<div class="row row-eq-height main22">
				<div class="col-lg-6 nopadding">
					
					<!-- Register -->

					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<br><br><br><br>
						<div class="register_content text-center">
							<h1 class="register_title">Please <span>Sign in</span> to <span>Continue</span>.... </h1>
						<!-- 	<h1 class="register_title">A Family of <span>Learning</span> & Dedicated to <span>Excellence</span> since 1995. </h1> -->
						<!-- 	<p class="register_text">A community with high expectation and high academic achievement. Committed to educating and nurturing all students so they may grow towards responsible global citizenship.</p> -->
							<!-- <div class="button button_1 register_button mx-auto trans_200"><a href="#">register now</a></div> -->
						</div>
					</div>

				</div>

				<div class="col-lg-6 nopadding">
					
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">

						<div class="search_background" ></div>
						<br><br>
						<div class="search_content text-center">
							<h1 class="search_title">Sign In</h1>
							 <?php  echo form_open('Usersignin_c/login', 'class="search_form" id="search_form"');?>
							
				 <?php echo form_input(['class'=>'input_field search_form_name','type'=>'email','id'=>'search_form_name','name'=>'useremail','value'=>set_value("useremail"),'placeholder'=>'Email ID']); ?> 
                 <?php echo form_error('useremail');?>

                	  <?php echo form_input(['class'=>'input_field search_form_category','id'=>'search_form_category','type'=>'password','name'=>'password','value'=>set_value("password"),'placeholder'=>'Password']); ?> 
                      <?php echo form_error('password');?>

								<!-- <input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Degree"> -->
								<button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">Login</button>

								     <!--<?php echo validation_errors();?>-->
								     <br><div class="text-danger" style="padding:10px;">
								   <?php echo $this->session->flashdata('msg'); ?>
								     </div>
							</form>
						</div> 
					</div>

				</div>
			</div>
		</div>
	</div>

<!-- Footer -->
	<?php require('Footer.php');?>