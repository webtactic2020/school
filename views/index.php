<style>
.hero_slide_background{
background-image: url("<?= base_url('assets/images/slider_background.jpg')?>");
}
.search_background{
	background-image: url("<?= base_url('assets/images/search_background.jpg')?>");
}
#headingOne{
	background-color: #f9b206;
    border: 2px solid white;
    border-radius: 15px;
	}

.btn-link {
    font-weight: 500;
    color: #171717;
    background-color: #e4212100;
}
.btn-link:hover {
    color: #eaedf1;
   }
   .accordion {
    font-weight: 900;
}
</style>
	


	<div class="home">

		
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">
				
			
				<div class="hero_slide">
					<div class="hero_slide_background" ></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
						</div>
					</div>
				</div>
				
			
				<div class="hero_slide">
					<div class="hero_slide_background" ></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
						</div>
					</div>
				</div>
				

				<div class="hero_slide">
					<div class="hero_slide_background" ></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
						</div>
					</div>
				</div>

			</div>

			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
		</div>

	</div>

	<!-- <div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="<?= base_url('assets/images/earth-globe.svg')?>" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Online Courses</h2>
								<a href="courses.html" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="<?= base_url('assets/images/books.svg')?>" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Our Library</h2>
								<a href="courses.html" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
					<a href="<?= base_url('Folk_c/app_v')?>">	<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="<?= base_url('assets/images/professor.svg')?>" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Application</h2>
								<a href="teachers.html" class="hero_box_link">view more</a>
							</div>
						</div> </a>
					</div>

				</div>
			</div>
		</div>
	</div> -->

	<!-- Events -->


   
    
  
	<div class="events page_section">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Notices</h1>
					</div>
				</div>
			</div>
			
			<div class="event_items">

    <div class="accordion" id="accordionExample">
				   <?php if (count($not)): ?>
                     <!--     <?php echo "<pre>";
                          print_r($pro);?> -->
                            <?php $Sr=1 ?>
                                    
                                      <?php foreach ($not as $n): ?>
 
				<!-- Event Item -->
   <?php   

   $dt = explode("-",$n->n_date);
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

   				$clss = explode(",",$n->n_cls);
   					/*print_r($clss);*/
   				 $classid = $this->session->userdata('classid');

   				 $nstudent = $n->n_student;

   				 $studentid = $this->session->userdata('user_id');
   	
   				if (in_array($classid, $clss, TRUE) or in_array('all', $clss, TRUE) or ($studentid == $nstudent)){
/*print_r($clss);*/

						
    ?>

  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne<?=$n->n_id;?>" aria-expanded="true" aria-controls="collapseOne">
         <?= $Sr++.')' ?> <?= $n->n_title ?>
        </button>
        <span style="font-size: 14px; color: white; float: right; "><?= $day;?> <?= $month;?> <?= $time[0];?></span>
      </h2>
    </div>

     <div id="collapseOne<?=$n->n_id;?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
    
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-1">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day"><?= $day;?> </div>
									<div class="event_month"><?= $month;?></div>
										<div class="event_month"><?= $time[0];?></div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-2">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#"><?= $n->n_title ?></a></div>
									<div class="event_location">By - <?= $n->fname ?> <?= $n->pname ?> <?= $n->lname ?></div>
									<!-- <div class="event_location"><?= $time[1];?></div> -->
									 <p style="color:black">Details -<?= $n->n_text ?></p>
									
								</div>
							</div>

  
							<div class="col-lg-4 order-lg-3 order-3">
								<div class="event_image">
									<?php if($n->n_img==''){ ?>

									<?php }else{ ?>
									<p style="color:black">File - <?=$n->n_img;?></p>
									<a download="<?=$n->n_img;?>" href="<?= base_url('assets/images/notice/'.$n->n_img)?>">	
										<div class="newsletter_submit_btn trans_300">
									<p style="text-align: center; color: white;padding: 7px;">Download</p>
									</div>
									</a>
									
							<?php } ?>
								<!-- 	<img style="min-height: 182px" src="<?= base_url('assets/images/notice.PNG')?>" alt="https://unsplash.com/@theunsteady5"> -->
							
								</div>
							</div>

						</div>	
					</div>
				</div>
		  </div>
    </div>
  </div>
 

<?php 	} ?>
				
                                     <?php endforeach; ?>
                                                                    
                                

                      <?php    endif;  ?>

		</div>

			</div>
				
		</div>
	</div>

	<!-- Popular -->

<!-- 	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Popular Courses</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
		
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="<?= base_url('assets/images/course_1.jpg')?>" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">A complete guide to design</a></div>
							<div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="<?= base_url('assets/images/author.jpg')?>" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Michael Smith, <span>Author</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="<?= base_url('assets/images/course_2.jpg')?>" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Beginners guide to HTML</a></div>
							<div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="<?= base_url('assets/images/author.jpg')?>" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Michael Smith, <span>Author</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
						</div>
					</div>
				</div>

			
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="<?= base_url('assets/images/course_3.jpg')?>" alt="https://unsplash.com/@dsmacinnes">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Advanced Photoshop</a></div>
							<div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="<?= base_url('assets/images/author.jpg')?>" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Michael Smith, <span>Author</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div> -->

	<!-- Register -->
<!-- 
	<div class="register">

		<div class="container-fluid">
			
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">
					
					

					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<div class="register_content text-center">
							<h1 class="register_title">Register now and get a discount <span>50%</span> discount until 1 January</h1>
							<p class="register_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempo.</p>
							<div class="button button_1 register_button mx-auto trans_200"><a href="#">register now</a></div>
						</div>
					</div>

				</div>

				<div class="col-lg-6 nopadding">
					
				

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" ></div>
						<div class="search_content text-center">
							<h1 class="search_title">Search for your course</h1>
							<form id="search_form" class="search_form" action="post">
								<input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Course Name" required="required" data-error="Course name is required.">
								<input id="search_form_category" class="input_field search_form_category" type="text" placeholder="Category">
								<input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Degree">
								<button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">search course</button>
							</form>
						</div> 
					</div>

				</div>
			</div>
		</div>
	</div> -->

	<!-- Services -->

<!-- 	<div class="services page_section">
		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Our Services</h1>
					</div>
				</div>
			</div>

			<div class="row services_row">

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="<?= base_url('assets/images/earth-globe.svg')?>" alt="">
					</div>
					<h3>Online Courses</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="<?= base_url('assets/images/exam.svg')?>" alt="">
					</div>
					<h3>Indoor Courses</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="<?= base_url('assets/images/books.svg')?>" alt="">
					</div>
					<h3>Amazing Library</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="<?= base_url('assets/images/professor.svg')?>" alt="">
					</div>
					<h3>Exceptional Professors</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="<?= base_url('assets/images/blackboard.svg')?>" alt="">
					</div>
					<h3>Top Programs</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="<?= base_url('assets/images/mortarboard.svg')?>" alt="">
					</div>
					<h3>Graduate Diploma</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

			</div>
		</div>
	</div> -->

	<!-- Testimonials -->

<!-- 	<div class="testimonials page_section">
		
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url(<?= base_url('assets/images/testimonials_background.jpg')?>)"></div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>What our students say</h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					
					<div class="testimonials_slider_container">

						
						<div class="owl-carousel owl-theme testimonials_slider">
							
							
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="<?= base_url('assets/images/testimonials_user.jpg')?>" alt="">
										</div>
										<div class="testimonial_name">james cooper</div>
										<div class="testimonial_title">Graduate Student</div>
									</div>
								</div>
							</div>

							
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="<?= base_url('assets/images/testimonials_user.jpg')?>" alt="">
										</div>
										<div class="testimonial_name">james cooper</div>
										<div class="testimonial_title">Graduate Student</div>
									</div>
								</div>
							</div>

							
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="<?= base_url('assets/images/testimonials_user.jpg')?>" alt="">
										</div>
										<div class="testimonial_name">james cooper</div>
										<div class="testimonial_title">Graduate Student</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>

		</div>
	</div> -->

	<!-- Events -->

	<!-- <div class="events page_section">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Upcoming Events</h1>
					</div>
				</div>
			</div>
			
			<div class="event_items">

		
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">07</div>
									<div class="event_month">January</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Student Festival</a></div>
									<div class="event_location">Grand Central Park</div>
									<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="<?= base_url('assets/images/event_1.jpg')?>" alt="https://unsplash.com/@theunsteady5">
								</div>
							</div>

						</div>	
					</div>
				</div>

			
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">07</div>
									<div class="event_month">January</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Open day in the Univesrsity campus</a></div>
									<div class="event_location">Grand Central Park</div>
									<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="<?= base_url('assets/images/event_2.jpg')?>" alt="https://unsplash.com/@claybanks1989">
								</div>
							</div>

						</div>	
					</div>
				</div>

		
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">07</div>
									<div class="event_month">January</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Student Graduation Ceremony</a></div>
									<div class="event_location">Grand Central Park</div>
									<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="<?= base_url('assets/images/event_3.jpg')?>" alt="https://unsplash.com/@juanmramosjr">
								</div>
							</div>

						</div>	
					</div>
				</div>

			</div>
				
		</div>
	</div> -->

	<!-- Footer -->
	<?php require('Footer.php');?>