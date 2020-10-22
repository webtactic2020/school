		<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<?php 
$type = $this->session->userdata('utype');

if($type == 't' or $type == 'a'){
?>

<li class="main_nav_item"><a href="<?= base_url('Main_c/register')?>">Register</a></li>
<li class="main_nav_item"><a href="<?= base_url('Main_c/project')?>">Project</a></li>
<?php }else{ ?>



<li class="main_nav_item">						
<div class="dropdown">
  <button class="btn btn-secondary2 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  	Assignments <?php if(count($notification)>0){ ?><span class="badge badge-warning"><?=count($notification);?></span><?php } ?>
  </button>
  <div class="dropdown-content">
   <?php if(count($notification)>0){ ?>
 <?php foreach($notification as $notify):?>

    <a  href="<?= base_url('Folk_c/viewass')?>"><b><?=$notify->ppname;?></b><small><p>   <?=$notify->dt;?> </p></small></a>
   
<?php endforeach;?>
<?php }else{ ?>
 <a  href="<?= base_url('Folk_c/viewass')?>"><b>View all Assignments</b></a>
<?php } ?>

  </div>

</div>
</li>

<li class="main_nav_item">
	<a href="<?= base_url('Folk_c/app_v')?>"><button class="btn btn-secondary2">Application</button></a>
</li>

<li class="main_nav_item">
	<a href="<?= base_url('Folk_c/about')?>"><button class="btn btn-secondary2">About Us</button></a>
</li>

	<?php } ?>
						
			
<!-- <li class="main_nav_item">						
<div class="dropdown">
  <button class="dropbtn"><?=$this->session->userdata('fname');?> <?=$this->session->userdata('lname');?></button>
  <div class="dropdown-content">
    <a href="<?= base_url('Usersignin_c/logout')?>">logout</a>
  </div>
</div>
</li> -->
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
						
<li class="main_nav_item">						
<div class="dropdown">
  <button class="dropbtn"><?=$this->session->userdata('fname');?> <?=$this->session->userdata('lname');?></button>
  <div class="dropdown-content">
    <a href="<?= base_url('Usersignin_c/logout')?>">logout</a>
  </div>
</div>
</li>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>

		<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="<?= base_url('Folk_c/index')?>">Home</a></li>
					<li class="menu_item menu_mm"><a href="<?= base_url('Folk_c/viewass')?>">Assignments <?php if(count($notification)>0){ ?><span class="badge badge-warning"><?=count($notification);?></span><?php } ?></a></li>
				<!-- 	<li class="menu_item menu_mm"><a href="courses.html">Courses</a></li>
					<li class="menu_item menu_mm"><a href="elements.html">Elements</a></li>
					<li class="menu_item menu_mm"><a href="news.html">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li> -->
					<li class="menu_item menu_mm"><a href="<?= base_url('Folk_c/app_v')?>">Application</a></li>
					<li class="menu_item menu_mm"><a href="<?= base_url('Folk_c/about')?>">About Us</a></li>
					<li class="menu_item menu_mm"><a href="<?= base_url('Usersignin_c/logout')?>">Logout</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Webtactic All rights reserved</div>
			</div>

		</div>

	</div>