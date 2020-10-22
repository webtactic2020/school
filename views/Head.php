<!DOCTYPE html>
<html lang="en">
<head>	
<title>Course</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/styles/bootstrap4/bootstrap.min.css')?>">
<link href="<?= base_url('assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/OwlCarousel2-2.2.1/animate.css')?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/styles/main_styles.css')?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/styles/responsive.css')?>">

</head>
<body>
	<style>
.dropbtn {
  background-color: #f9b206;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #eaa806;}
.header_side {
    background: #ffffff!important;
}
.logo2{
  width:270px;
}
.footer {
    padding-top: 0px;
}
.btn-secondary2 {
    color: #fff;
    background-color: #0082c9;
    border-color: #e61686;
}

.main_nav_item a:hover {
    color: #e7228c!important;
}
.main_nav_item {
    margin-right: 1px!important;
}
@media only screen and (max-width: 700px) {
.logo img {
    width: 178px!important;
}

.header {
    height: 60px;
    top: 0px!important;
}
 .main22 {
        display: flex;
        flex-direction: column-reverse;
    }
}
</style>
<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<a href="<?= base_url('Folk_c/index')?>"><div class="logo">
					<img class="logo2" src="<?= base_url('assets/images/logo2.png')?>" alt="">
				<!-- 	<span>course</span> -->
				</div></a>
			</div>