<link rel="stylesheet" type="text/css" href="<?= base_url('assets/styles/news_styles.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/styles/news_responsive.css');?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/styles/contact_styles.css')?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/styles/contact_responsive.css')?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/styles/elements_styles.css')?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/styles/elements_responsive.css')?>">

	<!-- Home -->
<style>
	.home_background_container{
		background-image:url(<?= base_url('assets/images/news_background.jpg');?>);
	}
	.text_field {

    height: 75px!important;
}
.colblack{
color:black;
line-height: 1.29;
}
.accordion {
    background: #e8c776;
    color: #352a1a;
    }
    ::-webkit-file-upload-button {
  background: #ff9600;
  color: black;
  
}
.contact_form_container {
    margin-top: 22px!important;
}

#completed{
	 display: none;
}
#pending{
 	display: none;
}
.bbt{
	background: none;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;
	padding: 5px;
}
.bbt:hover{
	color:black;

}
.bbt1{
	color: blue;
}
.bbt2{
	color: green;
}
.bbt3{
	color: red;
}

.accordion.active {
    color: #000000;
}

@media only screen and (max-width: 700px) {
 .main {
        display: flex;
        flex-direction: column-reverse;
    }

    .news {
    width: 100%;
    padding-top: 0px;
    padding-bottom: 118px;
}
.accordion_container .accordion{
	padding: 10px;
}

.news_post_date div:first-child {
    font-size: 14px;
}

.mobb .accordion {
    height: 51px;
    width: 90%;
}
.elements_accordions {
    margin-top: 32px;
}
.pbars_accordions {
    margin-top: 16px;
}
.text_field {
    height: 38px!important;
    width: 87%;
}
.colblack{
line-height: 1.29;
}
.news_post_text {
    margin-top: 0px;
}
.accordion_panel p {
    padding-top: 1px;
}
.news_post_title_container {
    margin-top: 2px;
}
.pbars_accordions {
    margin-top: -16px!important;
}
}

  

</style>
	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style=""></div>
		</div>
		<div class="home_content">
			<h1 >Assignments</h1>
		</div>
	</div>

	<!-- News -->
		
						
	
	<div class="news">
		<div class="container">
			<div class="main row">

				<!-- News Column -->

				<div class="col-lg-8" id='all'>
					<h2 style="color: black"><?=$this->session->userdata('fname');?> <?=$this->session->userdata('lname');?> All Assignments List</h2>
					<div class="news_posts">
							   <?php if (count($pro)){ ?>
       					      <?php foreach ($pro as $proo):?>


       					      	   <?php   $dt = explode("-",$proo->dt);
   			$day = $dt[0];
   			if($dt[1]==1){
   				$month = 'January';
   			}else if($dt[1]==2){
				$month = 'February';
   			}else if($dt[1]==3){
				$month = 'March';
   			}else if($dt[1]==4){
				$month = 'April';
   			}else if($dt[1]==5){
				$month = 'May';
   			}else if($dt[1]==6){
				$month = 'June';
   			}else if($dt[1]==7){
				$month = 'July';
   			}else if($dt[1]==8){
				$month = 'August';
   			}else if($dt[1]==9){
				$month = 'September';
   			}else if($dt[1]==10){
				$month = 'October';
   			}else if($dt[1]==11){
				$month = 'November';
   			}else{
				$month = 'December';
   			}
   				$time = explode(" ",$dt[2]);



						
    ?>
						<!-- News Post -->
							<div class="elements_accordions">

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"> <?= $proo->ppname; ?><span style="margin-left: auto;padding-right: 64px"><?= $proo->dt; ?></span></div>
								<div class="accordion_panel">
						<div class="news_post">
							<div class="news_post_image">
								<!-- <img src="<?= base_url('assets/images/news_1.jpg');?>" alt="https://unsplash.com/@dsmacinnes"> -->
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
												<div class="event_day"><?= $day;?> </div>
									<div class="event_month" style="color:white" ><?= $month;?></div>
										<div class="event_month"><?= $time[0];?></div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.html"><?= $proo->ppname; ?></a>
									</div>
									<div class="news_post_meta">
								<!-- 		<span class="news_post_author"><a href="#">By Christian Smith</a></span>
										<span>|</span>
										<span class="news_post_comments"><a href="#">3 Comments</a></span> -->
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p class="colblack" ><?= $proo->pdetail; ?></p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a download="<?= $proo->pname;?>" href="<?= base_url('assets/images/projects/'.$proo->pimg)?>">Download</a>
							</div>
							<div>

								

					<div class="contact_form">
					
							         <div class="pbars_accordions">
			
		         <div class="row ">


		         								<!-- Accordions -->
	<div class="elements_accordions mobb">
		         				<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center contact_title" style="font-size: 20px;"> View/Update Feedback</div>
								<div class="accordion_panel">
							<div class="contact_form_container">
							 <?php  echo form_open_multipart('Folk_c/addrepo', 'class="" id="myform"');?>
							
							<!-- <?php echo form_input(['class'=>'form-control','type'=>'text','name'=>'re_preport','value'=>set_value("re_preport"),'placeholder'=>'Project Details']); ?>  -->
							            <div class="row">
							            <div class="col-lg-6 col-sm-12">     

								<textarea id="contact_form_message" class="text_field contact_form_message" name="preport" placeholder="<?php if($proo->preport != ''){ echo $proo->preport; ?> <?php } else { echo 'Pending';}?>" required="required" data-error="Please, write us a message."></textarea>
								<?php echo form_error('preport');?>
								<br>
							  
									</div>
									 <div class="col-lg-6 col-sm-12">   
									<?php echo form_upload(['name'=>'reportimg' ,'required'=>'required']);?>
					                <?php if(isset($upload_error)) {echo $upload_error;}?>
								 <?php  echo form_hidden('ass_id',$proo->aid);?>
								 <?php if($proo->reportimg != ''){ ?>
								 	<div class="news_post_button text-center trans_200">
								<a download="<?= $day;?> <?= $month;?>" href="<?= base_url('assets/images/feedback/'.$proo->reportimg)?>">feedback</a>
							</div>

						<?php } ?>

								
							</div>
<button id="" type="submit" class="contact_send_btn trans_200" value="Submit">SUBMIT</button>
<?= form_close(); ?>
						</div>
						</div>
								</div>
							</div>
					

					<!-- 		<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center contact_title" style="font-size: 20px;"> Your feedback <?php if($proo->preport != ''){ ?>submitted<?php } else { echo 'pending';}?></div>
								<div class="accordion_panel">
												<p class="colblack" > <?php if($proo->preport != ''){
					 echo $proo->preport; ?>
						<div class="news_post_button text-center trans_200">
								<a download="<?= $proo->pname;?>" href="<?= base_url('assets/images/feedback/'.$proo->reportimg)?>">feedback</a>
							</div>
				<?php } else { echo 'Pending';}?></p>
								</div>
							</div> -->



							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center contact_title" style="font-size: 20px;"> Teachers Response</div>
								<div class="accordion_panel">
									<p class="colblack"> <?php if($proo->re_preport != ''){ ?><?= $proo->re_preport; ?> <?php }else{?>pending</p> <?php } ?>
								</div>
							</div>

						</div>
						</div>
					</div>

	

					</div>
						
			

								
							</div>

							</div>
							</div>

						</div>
						</div>

		         <?php endforeach; ?>

         <?php }else{ ?>
          <h1 class="text-white">No New Assignment Assigned</h1>
       <?php   }?>
					</div>

					<!-- Page Nav -->

				<!-- 	<div class="news_page_nav">
						<ul>
							<li class="active text-center trans_200"><a href="#">01</a></li>
							<li class="text-center trans_200"><a href="#">02</a></li>
							<li class="text-center trans_200"><a href="#">03</a></li>
						</ul>
					</div> -->

				</div>

				<!-- Sidebar Column -->
								<div class="col-lg-8" id="completed">
					<h2 style="color: black"><?=$this->session->userdata('fname');?> <?=$this->session->userdata('lname');?> Completed Assignments List</h2>
					<div class="news_posts">
							   <?php if (count($pro1)){ ?>
       					      <?php foreach ($pro1 as $proo):?>


       					      	   <?php   $dt = explode("-",$proo->dt);
   			$day = $dt[0];
   			if($dt[1]==1){
   				$month = 'January';
   			}else if($dt[1]==2){
				$month = 'February';
   			}else if($dt[1]==3){
				$month = 'March';
   			}else if($dt[1]==4){
				$month = 'April';
   			}else if($dt[1]==5){
				$month = 'May';
   			}else if($dt[1]==6){
				$month = 'June';
   			}else if($dt[1]==7){
				$month = 'July';
   			}else if($dt[1]==8){
				$month = 'August';
   			}else if($dt[1]==9){
				$month = 'September';
   			}else if($dt[1]==10){
				$month = 'October';
   			}else if($dt[1]==11){
				$month = 'November';
   			}else{
				$month = 'December';
   			}
   				$time = explode(" ",$dt[2]);



						
    ?>
						<!-- News Post -->
							<div class="elements_accordions">

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"> <?= $proo->ppname; ?><span style="margin-left: auto;padding-right: 64px"><?= $proo->dt; ?></span></div>
								<div class="accordion_panel">
						<div class="news_post">
							<div class="news_post_image">
								<!-- <img src="<?= base_url('assets/images/news_1.jpg');?>" alt="https://unsplash.com/@dsmacinnes"> -->
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
												<div class="event_day"><?= $day;?> </div>
									<div class="event_month" style="color:white" ><?= $month;?></div>
										<div class="event_month"><?= $time[0];?></div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.html"><?= $proo->ppname; ?></a>
									</div>
									<div class="news_post_meta">
								<!-- 		<span class="news_post_author"><a href="#">By Christian Smith</a></span>
										<span>|</span>
										<span class="news_post_comments"><a href="#">3 Comments</a></span> -->
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p class="colblack" ><?= $proo->pdetail; ?></p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a download="<?= $proo->pname;?>" href="<?= base_url('assets/images/projects/'.$proo->pimg)?>">Download</a>
							</div>
							<div>

								

					<div class="contact_form">
					
							         <div class="pbars_accordions">
			
		         <div class="row ">


		         								<!-- Accordions -->
	<div class="elements_accordions">
		         				<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center contact_title" style="font-size: 20px;"> View/Update Feedback</div>
								<div class="accordion_panel">
							<div class="contact_form_container">
							 <?php  echo form_open_multipart('Folk_c/addrepo', 'class="" id="myform"');?>
							
							<!-- <?php echo form_input(['class'=>'form-control','type'=>'text','name'=>'re_preport','value'=>set_value("re_preport"),'placeholder'=>'Project Details']); ?>  -->
							            <div class="row">
							            <div class="col-6">     

								<textarea id="contact_form_message" class="text_field contact_form_message" name="preport" placeholder="<?php if($proo->preport != ''){ echo $proo->preport; ?> <?php } else { echo 'Pending';}?>" required="required" data-error="Please, write us a message."></textarea>
								<?php echo form_error('preport');?>
								<br><button id="" type="submit" class="contact_send_btn trans_200" value="Submit">SUBMIT</button>
							  
									</div>
									 <div class="col-6">   
									<?php echo form_upload(['name'=>'reportimg' ,'required'=>'required']);?>
					                <?php if(isset($upload_error)) {echo $upload_error;}?>
								 <?php  echo form_hidden('ass_id',$proo->aid);?>
								 <?php if($proo->reportimg != ''){ ?>
								 	<div class="news_post_button text-center trans_200">
								<a download="<?= $day;?> <?= $month;?>" href="<?= base_url('assets/images/feedback/'.$proo->reportimg)?>">feedback</a>
							</div>
						<?php } ?>

								<?= form_close(); ?>
							</div>

						</div>
						</div>
								</div>
							</div>
					

					<!-- 		<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center contact_title" style="font-size: 20px;"> Your feedback <?php if($proo->preport != ''){ ?>submitted<?php } else { echo 'pending';}?></div>
								<div class="accordion_panel">
												<p class="colblack" > <?php if($proo->preport != ''){
					 echo $proo->preport; ?>
						<div class="news_post_button text-center trans_200">
								<a download="<?= $proo->pname;?>" href="<?= base_url('assets/images/feedback/'.$proo->reportimg)?>">feedback</a>
							</div>
				<?php } else { echo 'Pending';}?></p>
								</div>
							</div> -->



							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center contact_title" style="font-size: 20px;"> Teachers Response</div>
								<div class="accordion_panel">
									<p class="colblack"> <?php if($proo->re_preport != ''){ ?><?= $proo->re_preport; ?> <?php }else{?>pending</p> <?php } ?>
								</div>
							</div>

						</div>
						</div>
					</div>

	

					</div>
						
			

								
							</div>

							</div>
							</div>

						</div>
						</div>

		         <?php endforeach; ?>

         <?php }else{ ?>
          <h1 class="text-white">No New Assignment Assigned</h1>
       <?php   }?>
					</div>

					<!-- Page Nav -->

				<!-- 	<div class="news_page_nav">
						<ul>
							<li class="active text-center trans_200"><a href="#">01</a></li>
							<li class="text-center trans_200"><a href="#">02</a></li>
							<li class="text-center trans_200"><a href="#">03</a></li>
						</ul>
					</div> -->

				</div>



				<div class="col-lg-8" id="pending">
					<h2 style="color: black"><?=$this->session->userdata('fname');?> <?=$this->session->userdata('lname');?> Pending Assignments List</h2>
					<div class="news_posts">
							   <?php if (count($pro2)){ ?>
       					      <?php foreach ($pro2 as $proo):?>


       					      	   <?php   $dt = explode("-",$proo->dt);
   			$day = $dt[0];
   			if($dt[1]==1){
   				$month = 'January';
   			}else if($dt[1]==2){
				$month = 'February';
   			}else if($dt[1]==3){
				$month = 'March';
   			}else if($dt[1]==4){
				$month = 'April';
   			}else if($dt[1]==5){
				$month = 'May';
   			}else if($dt[1]==6){
				$month = 'June';
   			}else if($dt[1]==7){
				$month = 'July';
   			}else if($dt[1]==8){
				$month = 'August';
   			}else if($dt[1]==9){
				$month = 'September';
   			}else if($dt[1]==10){
				$month = 'October';
   			}else if($dt[1]==11){
				$month = 'November';
   			}else{
				$month = 'December';
   			}
   				$time = explode(" ",$dt[2]);



						
    ?>
						<!-- News Post -->
							<div class="elements_accordions">

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"> <?= $proo->ppname; ?><span style="margin-left: auto;padding-right: 64px"><?= $proo->dt; ?></span></div>
								<div class="accordion_panel">
						<div class="news_post">
							<div class="news_post_image">
								<!-- <img src="<?= base_url('assets/images/news_1.jpg');?>" alt="https://unsplash.com/@dsmacinnes"> -->
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
												<div class="event_day"><?= $day;?> </div>
									<div class="event_month" style="color:white" ><?= $month;?></div>
										<div class="event_month"><?= $time[0];?></div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.html"><?= $proo->ppname; ?></a>
									</div>
									<div class="news_post_meta">
								<!-- 		<span class="news_post_author"><a href="#">By Christian Smith</a></span>
										<span>|</span>
										<span class="news_post_comments"><a href="#">3 Comments</a></span> -->
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p class="colblack" ><?= $proo->pdetail; ?></p>
							</div>
							<div class="news_post_button text-center trans_200">
								<a download="<?= $proo->pname;?>" href="<?= base_url('assets/images/projects/'.$proo->pimg)?>">Download</a>
							</div>
							<div>

								

					<div class="contact_form">
					
							         <div class="pbars_accordions">
			
		         <div class="row ">


		         								<!-- Accordions -->
	<div class="elements_accordions">
		         				<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center contact_title" style="font-size: 20px;"> View/Update Feedback</div>
								<div class="accordion_panel">
							<div class="contact_form_container">
							 <?php  echo form_open_multipart('Folk_c/addrepo', 'class="" id="myform"');?>
							
							<!-- <?php echo form_input(['class'=>'form-control','type'=>'text','name'=>'re_preport','value'=>set_value("re_preport"),'placeholder'=>'Project Details']); ?>  -->
							            <div class="row">
							            <div class="col-6">     

								<textarea id="contact_form_message" class="text_field contact_form_message" name="preport" placeholder="<?php if($proo->preport != ''){ echo $proo->preport; ?> <?php } else { echo 'Pending';}?>" required="required" data-error="Please, write us a message."></textarea>
								<?php echo form_error('preport');?>
								<br><button id="" type="submit" class="contact_send_btn trans_200" value="Submit">SUBMIT</button>
							  
									</div>
									 <div class="col-6">   
									<?php echo form_upload(['name'=>'reportimg' ,'required'=>'required']);?>
					                <?php if(isset($upload_error)) {echo $upload_error;}?>
								 <?php  echo form_hidden('ass_id',$proo->aid);?>
								 <?php if($proo->reportimg != ''){ ?>
								 	<div class="news_post_button text-center trans_200">
								<a download="<?= $day;?> <?= $month;?>" href="<?= base_url('assets/images/feedback/'.$proo->reportimg)?>">feedback</a>
							</div>
						<?php } ?>

								<?= form_close(); ?>
							</div>

						</div>
						</div>
								</div>
							</div>
					

					<!-- 		<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center contact_title" style="font-size: 20px;"> Your feedback <?php if($proo->preport != ''){ ?>submitted<?php } else { echo 'pending';}?></div>
								<div class="accordion_panel">
												<p class="colblack" > <?php if($proo->preport != ''){
					 echo $proo->preport; ?>
						<div class="news_post_button text-center trans_200">
								<a download="<?= $proo->pname;?>" href="<?= base_url('assets/images/feedback/'.$proo->reportimg)?>">feedback</a>
							</div>
				<?php } else { echo 'Pending';}?></p>
								</div>
							</div> -->



							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center contact_title" style="font-size: 20px;"> Teachers Response</div>
								<div class="accordion_panel">
									<p class="colblack"> <?php if($proo->re_preport != ''){ ?><?= $proo->re_preport; ?> <?php }else{?>pending</p> <?php } ?>
								</div>
							</div>

						</div>
						</div>
					</div>

	

					</div>
						
			

								
							</div>

							</div>
							</div>

						</div>
						</div>

		         <?php endforeach; ?>

         <?php }else{ ?>
          <h1 class="text-white">No New Assignment Assigned</h1>
       <?php   }?>
					</div>

					<!-- Page Nav -->

				<!-- 	<div class="news_page_nav">
						<ul>
							<li class="active text-center trans_200"><a href="#">01</a></li>
							<li class="text-center trans_200"><a href="#">02</a></li>
							<li class="text-center trans_200"><a href="#">03</a></li>
						</ul>
					</div> -->

				</div>


				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Archives -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Total Assignments</h3>
							</div>
							<ul class="sidebar_list">
								<li class="sidebar_list_item"><button class="bbt bbt1" onclick="showDiv('all')">All Assignments (<?=count($pro);?>)</button></li>
								<li class="sidebar_list_item"><button class="bbt bbt2" onclick="showDiv('completed')" >Completed Assignments (<?=count($pro1);?>)</button></li>
								<li class="sidebar_list_item"><button class="bbt bbt3" onclick="showDiv('pending')">Pending Assignments (<?=count($pro2);?>)</button></li>
								
							</ul>
						</div>

						<!-- Latest Posts -->

		<!-- 				<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Latest posts</h3>
							</div>
							
							<div class="latest_posts">
								
								
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="<?= base_url('assets/images/latest_1.jpg');?>" alt="https://unsplash.com/@dsmacinnes">
									</div>
									<div class="latest_post_title"><a href="news_post.html">Why do you need a qualification?</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">By Christian Smith</a></span>
										<span>|</span>
										<span class="latest_post_comments"><a href="#">3 Comments</a></span>
									</div>
								</div>

								
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="<?= base_url('assets/images/latest_2.jpg');?>" alt="https://unsplash.com/@erothermel">
									</div>
									<div class="latest_post_title"><a href="news_post.html">Why do you need a qualification?</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">By Christian Smith</a></span>
										<span>|</span>
										<span class="latest_post_comments"><a href="#">3 Comments</a></span>
									</div>
								</div>

								
								<div class="latest_post">
									<div class="latest_post_image">
										<img src="<?= base_url('assets/images/latest_3.jpg');?>" alt="https://unsplash.com/@element5digital">
									</div>
									<div class="latest_post_title"><a href="news_post.html">Why do you need a qualification?</a></div>
									<div class="latest_post_meta">
										<span class="latest_post_author"><a href="#">By Christian Smith</a></span>
										<span>|</span>
										<span class="latest_post_comments"><a href="#">3 Comments</a></span>
									</div>
								</div>
								
							</div>
								
						</div>
 -->
						<!-- Tags -->

			<!-- 			<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Tags</h3>
							</div>
							<div class="tags d-flex flex-row flex-wrap">
								<div class="tag"><a href="#">Course</a></div>
								<div class="tag"><a href="#">Design</a></div>
								<div class="tag"><a href="#">FAQ</a></div>
								<div class="tag"><a href="#">Teachers</a></div>
								<div class="tag"><a href="#">School</a></div>
								<div class="tag"><a href="#">Graduate</a></div>
							</div>
						</div> -->

					</div><br><br>
				</div>
			</div>
		</div>
	</div>

	<?php require('Footer.php');?>

<script src="<?= base_url('assets/js/elements_custom.js')?>"></script>
<script type="text/javascript">
	function showDiv(divId)
{

	var div1 = 'all';
	var div2 = 'completed';
	var div3 = 'pending';
	if(div2 == divId){
		 document.getElementById('pending').style.display = 'none' ;
		  document.getElementById('all').style.display = 'none' ;
	}else if(div3 == divId){
		 document.getElementById('completed').style.display = 'none' ;
		  document.getElementById('all').style.display = 'none' ;
	}else{
		 document.getElementById('completed').style.display = 'none' ;
		  document.getElementById('pending').style.display = 'none' ;
	}
    document.getElementById(divId).style.display = 'block' ;
}
</script>