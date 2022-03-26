<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html class="no-js">

<head>
	<title>Giới thiệu</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/share.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">
	<meta name="description" content="Du lịch theo phong cách riêng-QuangBinhTravel.">

	<link rel="shortcut icon" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/superfish.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/tour.css">


	<!-- js + css popup show mess -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="js/jquery.min.js"></script>

</head>
<style>
	div.b {
  white-space: nowrap; 
  width: 120px; 
  overflow: hidden;
  text-overflow: ellipsis; 
 
}
</style>
<body>

	<script>
		$(document).ready(function() {
			console.log("ready!");
			let url = window.location.pathname;
			if (url.includes("index")) {
				$(document).find(".menu-active-index").addClass("active");
			}

			if (url.includes("tour")){
				$(document).find(".menu-active-tour").addClass("active");
			}
			if (url.includes("hotels")){
				$(document).find(".menu-active-hotels").addClass("active");
			}
			if (url.includes("tourmaohiem")) {
				$(document).find(".menu-active-tourmaohiem").addClass("active");
			}
			if (url.includes("tourtrongoi")){
				$(document).find(".menu-active-tourtrongoi").addClass("active");
			}
			if (url.includes("hotel")){
				$(document).find(".menu-active-hotels").addClass("active");
			}
			if (url.includes("maybay")) {
				$(document).find(".menu-active-maybay").addClass("active");
			}
			if (url.includes("service")){
				$(document).find(".menu-active-service").addClass("active");
			}
			
			if (url.includes("thuexe")) {
				$(document).find(".menu-active-service").addClass("active");
				$(document).find(".menu-active-thuexe").addClass("active");
			}
			if (url.includes("chuphinh")) {
				$(document).find(".menu-active-service").addClass("active");
				$(document).find(".menu-active-chuphinh").addClass("active");
			}
			if (url.includes("gioithieu")) {
				$(document).find(".menu-active-gioithieu").addClass("active");
			}
			if (url.includes("contact")) {
				$(document).find(".menu-active-contact").addClass("active");
			}
			if (url.includes("thongtinhuuich")) {
				$(document).find(".menu-active-thongtinhuuich").addClass("active");
			}
			if (url.includes("camnang")) {
				$(document).find(".menu-active-thongtinhuuich").addClass("active");
				$(document).find(".menu-active-camnang").addClass("active");
			}
			if (url.includes("ngtac")) {
				$(document).find(".menu-active-thongtinhuuich").addClass("active");
				$(document).find(".menu-active-ngtac").addClass("active");
			}
			if (url.includes("FAQs")) {
				$(document).find(".menu-active-thongtinhuuich").addClass("active");
				$(document).find(".menu-active-FAQs").addClass("active");
			}
			if (url.includes("covid")) {
				$(document).find(".menu-active-thongtinhuuich").addClass("active");
				$(document).find(".menu-active-covid").addClass("active");
			}
			if (url.includes("hoanhuy")) {
				$(document).find(".menu-active-thongtinhuuich").addClass("active");
				$(document).find(".menu-active-hoanhuy").addClass("active");
			}
		
		});
	</script>

	<div id="fh5co-wrapper">
		<div id="fh5co-page">

			<header id="fh5co-header-section" class="sticky-banner" style="height: 70px;position: fixed;    box-shadow: 1px 1px 5px #848484ad;">
				<div class="container">
				
					<div class="nav-header">
					
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
						
						<h1 id="fh5co-logo"a href="index.php">
					
								<div class="logo-container">
								
								<h3 class="logo" style="margin-top:-5px;"><img src="images/logo.png" alt="" style="width:50px; height:60px;margin-top:-18px;">&nbsp;&nbsp;Quangbinh<span >travel.</span></h3>
								</div>
							</a>
						</h1>
						
						<nav id="fh5co-menu-wrap" role="navigation" >
							<ul class="sf-menu" id="fh5co-primary-menu" >
								<li class="menu-active-index" ><a href="index.php">Trang chủ</a></li>
								<li class="menu-active-tour" ><a href="" class="fh5co-sub-ddown">Tour</a>
									<ul class="fh5co-sub-menu">
										<li class="menu-active-tourmaohiem" ><a href="tourmaohiem.php" class="fh5co-sub-ddown">Tour mạo hiểm</a>
										</li>
										<li class="menu-active-tourtrongoi" ><a href="tourtrongoi.php"class="fh5co-sub-ddown">Tour trọn gói </a>
										</li>
									</ul>
								</li>
								<li class="menu-active-hotels" ><a href="hotels.php">Khách sạn</a></li>
								<li class="menu-active-maybay" ><a href="maybay.php">Máy bay</a></li>
								<li class="menu-active-service">
									<a href="" class="fh5co-sub-ddown">Dịch vụ</a>
									<ul class="fh5co-sub-menu">
										<li class="menu-active-thuexe"><a href="thuexe.php">Thuê xe</a></li>
										<li class="menu-active-chuphinh"><a href="photo.php"> Chụp hình</a></li>

									</ul>
								</li>
								<li class="menu-active-thongtinhuuich" ><a href="" class="fh5co-sub-ddown">Thông tin hữu ích</a>
									<ul class="fh5co-sub-menu">
										<li class="menu-active-camnang" ><a href="camnang.php">Cẩm nang</a></li>
										<li class="menu-active-ngtac"><a href="ngtac.php">Nguyên tắc kinh doanh</a></li>
										<li class="menu-active-FAQs"><a href="FAQs.php">Câu hỏi thường gặp</a></li>
										<li class="menu-active-covid"><a href="covid.php">Quy trình ứng phó COVID-19</a></li>
										<li class="menu-active-hoanhuy"><a href="hoanhuy.php">Chính sách hoàn huỷ</a></li>
										
									</ul>
								</li>
								<li class="menu-active-gioithieu"><a href="gioithieu.php">Giới thiệu</a></li>
								<li class="menu-active-contact"><a href="contact.php">Liên Hệ</a></li>
								<li style=" margin-top: -3px; padding-left:20px;">
									<?php
									if (!isset($_SESSION['name'])) {
										echo '
										 <a href="dangnhap.php" class="b"><div class="b"><i class="icon-user3" style="font-size: 24px;z-index: 1000; color:#848484;"></i>&ensp;
										
										Đăng nhập</div></a>';
									} else {
										echo '
                                        <a class="fh5co-sub-ddown">
                                        <div class="b"><i class="icon-user3" style="font-size: 24px;z-index: 1000; color:#848484;"></i>&ensp;' . $_SESSION['name'] . '</div></a>
                                        <ul class="fh5co-sub-menu">
                                            <li><a href="thongtincanhan.php">Thông Tin Cá Nhân</a></li>
                                            <li><a href="dangxuat.php">Đăng Xuất</a></li>
                                         </ul>                                     
                                        ';
									}
									?>
								</li>

							</ul>
						</nav>
					</div>
				</div>
			</header>