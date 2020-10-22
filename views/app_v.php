<?php require('Head.php');?>
<?php require('Header.php');?>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/styles/contact_styles.css')?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/styles/contact_responsive.css')?>">
<style>
.home_background_container .prlx{
background-image:url("<?= base_url('assets/images/contact_background.jpg')?>");
}
.about_title {
    font-size: 21px;
    font-weight: 500;
    color: #1a1a1a;
}
</style>
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" ></div>
		</div>
		<div class="home_content">
			<h1>Application</h1>
		</div>
	</div>


	<div class="contact">
		<div class="container">
			<h1 style="text-align: center">Letter Of Application</h1>
			<div class="row">
				<div class="col-lg-8">
					
		
						
				</div>
						<?php
						date_default_timezone_set('Asia/Kolkata');
						$appdate = date( 'd-m-Y', time () );
						?>
               
				<div class="col-lg-4">
					<div class="about">
						<div class="about_title"><!-- <?= $this->session->userdata('prename'); ?> --> <?= $this->session->userdata('fname'); ?> <?= $this->session->userdata('pname'); ?> <?= $this->session->userdata('lname'); ?></div>
						<p class="about_text"> <?= $this->session->userdata('address'); ?></p>
						<p class="about_text"> <?= $appdate ?></p>

					

					</div>
				</div>

			</div>
			<div class="row">
				 <?php  echo form_open('Folk_c/addapp', 'class="" id="search_form"');?>
						<div class="col-lg-6">
					<div class="about">
						<p class="about_text">To,</p>
						<div class="about_title"><?php echo form_input(['class'=>'input_field contact_form_name','type'=>'text','id'=>'contact_form_name','name'=>'to_whom','value'=>set_value("fname"),'required'=>'required','placeholder'=>'Name of person']); ?> </div>
						<p class="about_text"> School address,School address, School address,  School address, School address School address</p>
						

					

					</div>
				</div>

				<div class="col-lg-6">
					
		
						
				</div>
						
               
		
			</div>

			<div class="row">
				<div class="col-lg-12">
					
					<!-- Contact Form -->
					<div class="contact_form">

						<div class="about_title"><span>	Subject
 				<?php echo form_input(['class'=>'input_field contact_form_name','type'=>'text','id'=>'contact_form_name','name'=>'app_sub','value'=>set_value("fname"),'required'=>'required','placeholder'=>'Subject of letter']); ?> 
                 <?php echo form_error('fname');?></span>


						</div>

						<div class="contact_form_container">
						<p>Respected Sir/Madam,</p>
						
								<?php echo form_textarea(['class'=>'text_field contact_form_message','id'=>'contact_form_message','required'=>'required','name'=>'app_body','value'=>set_value("app_body"),'placeholder'=>'Body of Letter']);?>
                 <?php echo form_error('app_body');?>
				

                       <p>Thanking you,<br>
                       Yours Sincerely,<br>
                       <?= $this->session->userdata('fname'); ?> <?= $this->session->userdata('pname'); ?> <?= $this->session->userdata('lname'); ?></p>
                      <?php  echo form_hidden('app_status','active');?>
                       <?php  echo form_hidden('added_by', $this->session->userdata("user_email"));?>
                       <?php  echo form_hidden('user_id', $this->session->userdata("user_id"));?>
                       <?php  echo form_hidden('teacher_id', $this->session->userdata("tea_id"));?>

						<?php
						date_default_timezone_set('Asia/Kolkata');
						$date = date( 'd-m-Y h:i:s A', time () );
						?>
                        <?php  echo form_hidden('app_datee',$date);?>


							<!-- 	<input id="contact_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required."> -->
							<!-- 	<textarea id="contact_form_message" class="text_field contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea> -->
							<br>
								<button id="contact_send_btn" type="submit" class="contact_send_btn trans_200 mt-4" value="Submit">Submit</button>
							 <?php  echo form_close();?>
							       <div class="<?php echo $this->session->flashdata('msg_class'); ?>" style="padding:10px;">
								   <?php echo $this->session->flashdata('msg'); ?>
								   <?php echo $this->session->flashdata('Emailmsg'); ?>
								     </div>
						</div>
					</div>
						
				</div>

		

			</div>

			<!-- Google Map -->
<!-- 
			<div class="row">
				<div class="col">
					<div id="google_map">
						<div class="map_container">
							<div id="map"></div>
						</div>
					</div>
				</div>
			</div> -->

		</div>
	</div>

	<!-- Footer -->
	<?php require('Footer.php');?>

	