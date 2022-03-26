<?php
include "header.php";
?>
<script>
    function validateForm() {
        let password = $(".personal-info").find("#password").val();
        let password1 = $(".personal-info").find("#password1").val();
        
    if (password != password1) {
        Swal.fire(
              'Thông báo',
              'Mật khẩu không trùng khớp!',
              'error'
          )
        return false;
    }
}

</script>

<!-- chỗ này get ra thông tin người dùng đã login bẳng session id (getbyid) -->
<?php       
          if(isset($_SESSION['id'])){

            $id = $_SESSION['id'];
            $link= mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
            mysqli_set_charset($link, 'UTF8');
            mysqli_select_db($link, "web");
            $sql="select * from user Where id='$id'";
            $result = mysqli_query($link, $sql);
            $row= mysqli_fetch_array($result); // biến row này là 1 hàng của bảng user tương ứng
        }
        else
        {
            header("Location:index.php");
        }
?>

<link rel="stylesheet" href="css/khachhang.css">
	<link rel="stylesheet" href="amthucc/style.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">





<div id="fh5co-wrapper">
		<div id="fh5co-page">
	
		<div class="container" style="margin-bottom: 100px; margin-top: 80px;" >
			<div class="view-account">
				<section class="module">
					<div class="module-inner">
						<div class="side-bar">
							<div class="user-info">
								<img class="img-profile img-circle img-responsive center-block" src="images/am6.jpg" alt=""  >
									<label class="btn8 text-center btn-outline-primary" style="margin-left: 27px;">
										<i class="icon-camera4" style="font-size: 17px;"></i> Thay đổi ảnh đại diện 
										<input type="file" class="account-settings-fileinput">
									</label>
									<div class="text-light small mt-1" style="font-size: 12px;">Điều kiện JPG, GIF or PNG. Lớn nhất 800K</div>
								<ul class="meta list list-unstyled">
									<li class="name" style="font-size: 20px; font-weight: 400;color: #f78536;"><?php echo $row['name'];?>
									</li>
									
									
									
								</ul>
							</div>
							<nav class="side-menu">
								<ul class="nav">
									<li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><span class="fa fa-user"></span> Hồ sơ của tôi</a></li>
									<li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><span class="fa fa-calendar"></span> Thông tin tài khoản</a></li>
									<li role="presentation"><a href="#Section3" aria-controls="profile" role="tab" data-toggle="tab"><span class="icon-heart4"></span> Đã thích <span class="label label-warning pull-right r-activity">2</span></a></li>
									<li role="presentation"><a href="#Section4" aria-controls="profile" role="tab" data-toggle="tab"><span class="icon-gift2"></span> Ưu đãi của tôi <span class="label label-warning pull-right r-activity">2</span></a></li>
									<li role="presentation"><a href="#Section5" aria-controls="profile" role="tab" data-toggle="tab"><span class="icon-question"></span> Hỏi đáp</a></li>
									<li role="presentation"><a href="#Section6" aria-controls="profile" role="tab" data-toggle="tab"><span class="icon-write"></span> Góp ý </a></li>
							       
								</ul>
							</nav>
						</div>
						<div class="content-panel">
						<div class="tab-content ">
							<div role="tabpanel" class="tab-pane fade in active" id="Section1">
								
                                <div class="col-md-12">
								<form action="capnhatthongtincanhan.php" class="form-horizontal" method="POST" onsubmit="return validateForm()" role="form">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>"/> 
								</div>
							    <div class="col-md-12" style="margin-bottom: 20px;">
								    <hr class="border-light m-0">
							    </div>
								<div class="card-body">
									<div class="form-group">
									  <label class="form-label">Tên tài khoản :</label>
									  <input class="form-control" name="name" type="text" value="<?php echo $row['name'];?>">
									</div>
									<div class="form-group">
									  <label class="form-label">Địa chỉ :</label>
									  <input type="text" name="diachi" class="form-control"  value="<?php echo $row['diachi'];?>">
									</div>
									<div class="form-group">
									  <label class="form-label">E-mail :</label>
									  <input class="form-control" name="email" type="text" value="<?php echo $row['email'];?>">
									</div>
									<div class="form-group">
										<label class="form-label">SĐT :</label>
										<input type="text" name="sdt"  class="form-control mb-1" value="<?php echo $row['sdt'];?>">
									</div>
									<div class="form-group">
										<label class="form-label">Mật khẩu :</label>
										<input class="form-control" id="password" name="password"  type="password" value="<?php echo $row['password'];?>">
									</div>
									<div class="form-group">
										<label class="form-label">Nhập lại mật khẩu :</label>
										<input class="form-control" id="password1"  name="password1" type="password" value="<?php echo $row['password'];?>">
									</div>
								</div>	
								<div class="text-center mt-3" style="padding-top: 20px;">
									<button type="submit" class="btn5">Cập nhật</button>&nbsp;&nbsp;&nbsp; <button type="reset" class="btn5">Hủy</button>&nbsp;
								</div>  

							


							 






							</div>
							<div role="tabpanel" class="tab-pane fade" id="Section2">
								<div id="tsum-tabs">
  
								  <main>
									
									<input id="tab1" type="radio" name="tabs" checked>
									<label for="tab1">Chờ xác nhận</label>
									  
									<input id="tab2" type="radio" name="tabs">
									<label for="tab2">Đã xác nhận</label>
									  
									<input id="tab3" type="radio" name="tabs">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="tab3">Đã đặt </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									  
									<input id="tab4" type="radio" name="tabs">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="tab4">Đã hủy</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									  
									<section id="content1">
										<div class="cxn text-center" style="margin-top: 20%;">
											<img src="images/sp.png" alt="" style="width: 100px; height: 100px;">
											<p> Chưa có  </p>
										</div>
									</section>
									  
									<section id="content2">
										<div class="col-md-6">
											<div class="thumb-wrapper">
											  <div class="img-box">
												<img src="images/anb1.jpeg" class="img-fluid" alt="Nikon"style="height: 200px; width: 100%;">
											  </div>
											  <div class="thumb-content" style="margin-top:10px">
												<div>
												  <span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Findex.html&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
												  <span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Ftour2.html&layout=button_count&size=small&width=86&height=20&appId" width="86" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></i></span>
												  </div>
												<h4 style="font-weight: bolder;">Serie Tour Quảng Bình 1 ngày, ghép đoàn</h4>
												<a class="tt"><i class="icon-calendar"></i>  1 ngày</a><br>
												<a class="tt"><i class="icon-map-marker" ></i> Phong Nha Kẻ Bàng</a><br>	
												<a style=" color: #333;" ><del>1.265.000 VNĐ</del><a style="color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;"> 1.075.000 VNĐ</a></a>        									
												<div class="star-rating">
												  <ul class="list-inline">
													<li class="list-inline-item"><i class="icon-star"></i></li>
													<li class="list-inline-item"><i class="icon-star"></i></li>
													<li class="list-inline-item"><i class="icon-star"></i></li>
													<li class="list-inline-item"><i class="icon-star"></i></li>
													<li class="list-inline-item"><i class="icon-star"></i></li>
												  </ul>
												</div>
												<a href="#" class="btn2 btn-primary">Chi tiết</a>
											  </div>						
											</div>
										</div>
										<div class="row" style="margin-top: 10px;">
											<div class="bio-row">
												<p><span> Tên người đặt </span>: Lê Thị Thanh Bình</p>
											</div>
										
											<div class="bio-row">
												<p><span>Email </span>: lttbinh.20it2@vku.udn.vn</p>
											</div>
											<div class="bio-row">
												<p><span>Điện thoại</span>: 0123456789</p>
											</div>
											<div class="bio-row">
												<p><span>Địa chỉ </span>: Quảng Bình</p>
											</div>
											<div class="bio-row">
												<p><span>Thành phố </span>: Đồng Hới</p>
											</div>
											<div class="bio-row">
												<p><span>Ngày khởi hành </span>: 30/7/2021</p>
											</div>
											<div class="bio-row">
												<p><span>Số người lớn </span>: 3</p>
											</div>
											<div class="bio-row">
												<p><span>Số trẻ em </span>: 1</p>
											</div>
											<div class="bio-row">
												<p><span>Hướng dẫn viên </span>: Đoàn Minh Quân</p>
											</div>
										</div>
										<div class="col-md-12 text-center">
											<p style="color: #f78536; font-weight: 400; font-size: 15px; margin-top: 30px;"><span>QuangBinh Travel đã xác nhận lúc</span> 2:10PM 23/7/2021 <br>
										Qúy khách vui lòng lưu ý : Tour đã xác nhận không được hoàn hủy dưới bất kỳ hình thức nào 
									<br> Chúc quý khách có một trải nghiệm du lịch vui vẻ  !</p>
										</div>
									</section>
									  
									<section id="content3">
										<div class="col-md-6">
											<div class="thumb-wrapper">
											  <div class="img-box">
												<img src="images/anb3.jpeg" class="img-fluid" alt="Headphone"  style="height: 200px; width: 100%;">
											  </div>
											  <div class="thumb-content" style="margin-top:10px">
												<div>
												  <span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Findex.html&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
												  <span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Ftour2.html&layout=button_count&size=small&width=86&height=20&appId" width="86" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></i></span>
												  </div>
												<h4 style="font-weight: bolder;">Tour Động Phong Nha - Vườn Thực Vật</h4>
												<a class="tt"><i class="icon-calendar"></i>  1 ngày</a><br>
												<a class="tt"><i class="icon-map-marker" ></i> Phong Nha Kẻ Bàng</a><br>	
												<a style=" color: #333;" ><del>950.000 VNĐ</del><a style="color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;"> 807.500 VNĐ</a></a>               
												<div class="star-rating">
												  <ul class="list-inline">
													<li class="list-inline-item"><i class="icon-star"></i></li>
													<li class="list-inline-item"><i class="icon-star"></i></li>
													<li class="list-inline-item"><i class="icon-star"></i></li>
													<li class="list-inline-item"><i class="icon-star"></i></li>
													<li class="list-inline-item"><i class="icon-star"></i></li>
												  </ul>
												</div>
												<a href="#" class="btn2 btn-primary">Chi tiết</a>
											  </div>						
											</div>
										  </div>
										  <div class="row" style="margin-top: 10px;">
										  <div class="bio-row">
												<p><span> Tên người đặt </span>: Lê Thị Thanh Bình</p>
											</div>
						
											<div class="bio-row">
												<p><span>Email </span>: lttbinh.20it2@vku.udn.vn</p>
											</div>
											<div class="bio-row">
												<p><span>Điện thoại</span>: 0123456789</p>
											</div>
											<div class="bio-row">
												<p><span>Địa chỉ </span>: Quảng Bình</p>
											</div>
											<div class="bio-row">
												<p><span>Thành phố </span>: Đồng Hới</p>
											</div>
											<div class="bio-row">
												<p><span>Ngày khởi hành </span>: 30/7/2021</p>
											</div>
											<div class="bio-row">
												<p><span>Số người lớn </span>: 3</p>
											</div>
											<div class="bio-row">
												<p><span>Số trẻ em </span>: 1</p>
											</div>
											<div class="bio-row" >
												<p><span> Hướng dẫn viên </span>: Dương Anh Đức</p>
											</div>
											
										<div class="bio-row"style="margin-left: 380px;">
												<p><span> Tổng chi phí </span>: 1.200.000VNĐ</p>
											</div>
										</div>
										<div class="text-center mt-3" style="margin-top: 40px;">
										<button class="btntg2" class="btn btn-primary btn-lg show-modal" data-toggle="modal" data-target="#myModalht"><a href="#">&emsp;<i class="icon-write" style="font-size: 20px;"></i> Đánh giá&emsp; </a></button>
										</div> 
									</section>
									  
									<section id="content4">
										<div class="cxn text-center" style="margin-top: 20%;">
											<img src="images/sp.png" alt="" style="width: 100px; height: 100px;">
											<p> Chưa có</p>
										</div>
									</section>
									  
								  </main>
								  </div>
							</div>



							<div class="modal fade" id="myModalht" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content ">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <div class="modal-body">
								<div class="hihi">
									<div class="feedback">
									  <div class="rating">
										<input type="radio" name="rating" id="rating-5">
										<label for="rating-5"></label>
										<input type="radio" name="rating" id="rating-4">
										<label for="rating-4"></label>
										<input type="radio" name="rating" id="rating-3">
										<label for="rating-3"></label>
										<input type="radio" name="rating" id="rating-2">
										<label for="rating-2"></label>
										<input type="radio" name="rating" id="rating-1">
										<label for="rating-1"></label>
										<div class="emoji-wrapper">
										  <div class="emoji">
											<svg class="rating-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
											<circle cx="256" cy="256" r="256" fill="#ffd93b"/>
											<path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534"/>
											<ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff"/>
											<ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347"/>
											<ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63"/>
											<ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff"/>
											<ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347"/>
											<ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63"/>
											<path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347"/>
										  </svg>
											<svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
											<circle cx="256" cy="256" r="256" fill="#ffd93b"/>
											<path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
											<path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347"/>
											<path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z" fill="#f4c534"/>
											<path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff"/>
											<path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347"/>
											<path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff"/>
											<path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z" fill="#f4c534"/>
											<path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff"/>
											<path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347"/>
											<path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff"/>
										  </svg>
											<svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
											<circle cx="256" cy="256" r="256" fill="#ffd93b"/>
											<path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
											<path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347"/>
											<path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff"/>
											<circle cx="340" cy="260.4" r="36.2" fill="#3e4347"/>
											<g fill="#fff">
											  <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10"/>
											  <path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z"/>
											</g>
											<circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347"/>
											<ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff"/>
										  </svg>
											<svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
									  <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
									  <path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347"/>
									  <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
									  <g fill="#fff">
										<path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z"/>
										<ellipse cx="356.4" cy="205.3" rx="81.1" ry="81"/>
									  </g>
									  <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
									  <g fill="#fff">
										<ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1"/>
										<ellipse cx="155.6" cy="205.3" rx="81.1" ry="81"/>
									  </g>
									  <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
									  <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff"/>
									</svg>
											<svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
											<circle cx="256" cy="256" r="256" fill="#ffd93b"/>
											<path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
											<path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
											<path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f"/>
											<path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
											<path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
											<path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f"/>
											<path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
											<path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347"/>
											<path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b"/>
										  </svg>
											<svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
											<g fill="#ffd93b">
											  <circle cx="256" cy="256" r="256"/>
											  <path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z"/>
											</g>
											<path d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z" fill="#e9eff4"/>
											<path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea"/>
											<path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88"/>
											<g fill="#38c0dc">
											  <path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z"/>
											</g>
											<g fill="#d23f77">
											  <path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z"/>
											</g>
											<path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347"/>
											<path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b"/>
											<path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2"/>
										  </svg>
										  </div>
										</div>
									  </div>
									</div>
									<div class="card-body col-md-12" style="margin-top: 20px;">
										<div class="form-group">
										  <label class="form-label">Đặt tiêu đề cho đánh giá của bạn</label>
										  <input type="text" class="form-control mb-1" value="">
										</div>
										<div class="form-group">
											<label class="form-label">Tóm tắt trải nghiệm của bạn</label>
											<input type="text" class="form-control mb-1" value="">
										  </div>
										<div class="form-group">
										  <label for="date-start" class="form-label">Chất lượng dịch vụ như thế nào?</label>
										  <input type="text" class="form-control mb-1" value="">
										</div>
									
										<div class="form-group">
											<label class="form-label">Hướng dẫn viên như thế nào?</label>
											<input type="text" class="form-control mb-1" value="">
										</div>
										<div class="form-group">
											<label class="form-label">Đánh sao cho nhân viên</label>

										<div id="half-stars-example">
											<div class="rating-group">
												<input class="rating__input rating__input--none" checked name="rating2" id="rating2-0" value="0" type="radio">
												<label aria-label="0 stars" class="rating__label" for="rating2-0">&nbsp;</label>
												<label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating2-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-05" value="0.5" type="radio">
												<label aria-label="1 star" class="rating__label" for="rating2-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-10" value="1" type="radio">
												<label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating2-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-15" value="1.5" type="radio">
												<label aria-label="2 stars" class="rating__label" for="rating2-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-20" value="2" type="radio">
												<label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating2-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-25" value="2.5" type="radio" checked>
												<label aria-label="3 stars" class="rating__label" for="rating2-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-30" value="3" type="radio">
												<label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating2-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-35" value="3.5" type="radio">
												<label aria-label="4 stars" class="rating__label" for="rating2-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-40" value="4" type="radio">
												<label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating2-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rating2" id="rating2-45" value="4.5" type="radio">
												<label aria-label="5 stars" class="rating__label" for="rating2-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rating2" id="rating2-50" value="5" type="radio">
											</div>
										</div>
										</div>
										
										<div class="row">
											<div class="col-sm-1">
												<div class="checkbox">
													<input type="checkbox" id="checkbox1" checked="">
													<label for="checkbox1"></label>
												</div>
											</div>
											<div class="col-sm-11">
												<p style="font-size:13px">Tôi chứng nhận rằng đánh giá này được dựa trên trải nghiệm riêng của tôi và là ý kiến chân thực của tôi về cơ sở này và rằng tôi không có mối liên hệ cá nhân hay công việc nào với cơ sở này và không được cơ sở này tặng bất kỳ khoản khuyến khích hay thanh toán nào để viết đánh giá này.</p>
											</div>
										</div>
				
										<div class="panel">
											
											<footer class="panel-footer">
												<button class="btn5 btn-warning pull-right show-modal2" data-toggle="modal" data-dismiss="modal" data-target="#myModalok" style="margin-top:-5px">Gửi</button>

												<ul class="nav nav-pills">
													<li>
														<a href="#"><i class="fa fa-map-marker"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-camera"></i></a>
													</li>
													<li>
														<a href="#"><i class=" fa fa-film"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-microphone"></i></a>
													</li>
												</ul>
											</footer>
										</div>
											
								  </div>
								  
								  </div>
                                </div>
                        </div>    
                    </div>
                </div>   
                <div class="modal fade" id="myModalok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
                    <div class="modal-dialog2" role="document">
                        <div class="modal-content2 clearfix">
                            <div class="modal-body2">
                                <div class="icon">
                                    <i style="margin-top: 20px;" class="icon-check"></i>
                                </div>
                                <h3 class="title2">Đã gửi!</h3>
                                <p class="description"> Cảm ơn bạn đã đánh giá! </p>
                                <a style="color: #fff;" href="thongtincanhan.php"><button class="btnok btn-default "> Thoát</button></a>
                            </div>
                        </div>
                    </div>
                </div>




							<div role="tabpanel" class="tab-pane fade" id="Section3">
								<div class="col-md-6">
									<div class="thumb-wrapper">
									  <div class="img-box">
										<img src="images/m1.jpg" class="img-fluid" alt="Nikon"style="height: 200px; width: 100%;">
									  </div>
									  <div class="thumb-content" style="margin-top:10px">
										<div>
										  <span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Findex.html&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
										  <span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Ftour2.html&layout=button_count&size=small&width=86&height=20&appId" width="86" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></i></span>
										  </div>
										<h4 style="font-weight: bolder;line-height:1.5;">Tour Động Phong Nha - Suối Nước Moọc</h4>
										<a class="tt"><i class="icon-calendar"></i>  1 ngày</a><br>
										<a class="tt"><i class="icon-map-marker" ></i> Động Phong Nha - Suối Nước Moọc</a><br>	
										<a style=" color: #333;" ><del>1.550.000 VNĐ</del><a style="color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;"> 1.317.500 VNĐ</a></a>                     									
										<div class="star-rating">
										  <ul class="list-inline">
											<li class="list-inline-item"><i class="icon-star"></i></li>
											<li class="list-inline-item"><i class="icon-star"></i></li>
											<li class="list-inline-item"><i class="icon-star"></i></li>
											<li class="list-inline-item"><i class="icon-star"></i></li>
											<li class="list-inline-item"><i class="icon-star"></i></li>
										  </ul>
										</div>
										<a href="#" class="btn2 btn-primary">Chi tiết</a>
									  </div>						
									</div>
								</div>
								  <div class="col-md-6">
									<div class="thumb-wrapper">
									  <div class="img-box">
										<img src="images/m4.jpg" class="img-fluid" alt="Headphone"  style="height: 200px; width: 100%;">
									  </div>
									  <div class="thumb-content" style="margin-top:10px">
										<div>
										  <span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Findex.html&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
										  <span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Ftour2.html&layout=button_count&size=small&width=86&height=20&appId" width="86" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></i></span>
										  </div>
										<h4 style="font-weight: bolder;line-height:1.5;">Tour Quảng Bình : Thập cảnh xứ Quảng – Non nước hữu tình</h4>
										<a class="tt"><i class="icon-calendar"></i>  1 ngày</a><br>
										<a class="tt"><i class="icon-map-marker" ></i> Quảng Bình</a><br>	
										<a style=" color: #333;" ><del>900.000 VNĐ</del><a style="color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;"> 765.000 VNĐ</a></a>               
           
										<div class="star-rating">
										  <ul class="list-inline">
											<li class="list-inline-item"><i class="icon-star"></i></li>
											<li class="list-inline-item"><i class="icon-star"></i></li>
											<li class="list-inline-item"><i class="icon-star"></i></li>
											<li class="list-inline-item"><i class="icon-star"></i></li>
											<li class="list-inline-item"><i class="icon-star"></i></li>
										  </ul>
										</div>
										<a href="#" class="btn2 btn-primary">Chi tiết</a>
									  </div>						
									</div>
								  </div>
								</div>
								
							<div role="tabpanel" class="tab-pane fade" id="Section4">
								<div class="demo" style="margin-top: 30px;">
									<div class="container" style="margin-left: -25px; margin-top: 20px;">
										<div class="row">
											<div class="col-lg-8">
												<div class="email-signature">
													<div class="signature-icon">
														<img src="img/km1.gif" alt="" style="width: 100px; height: 100px;"> 
													</div>
													<div class="signature-details">
														<span class="post" style="font-size: 20px;">Ưu đãi dành cho người Quảng Bình</span>
														<div class="mt-3">
															<button type="button" class="btn5">Xem chi tiết</button>&nbsp;
														</div> 
													</div>
													<ul class="signature-content">
														<li><i class="fa fa-check"></i> Miễn phí 20% cho tất cả các tour du lịch.</li>
														<li><i class="fa fa-check"></i> Miễn phí dịch vụ chụp hình lưu niệm.</li>
														<li><i class="fa fa-check"></i> Miễn phí Bãi tắm biển riêng tư tại Đồng Hới.</li>
														<li><i class="fa fa-check"></i> Miễn phí phòng tắm sau tour.</li>
														<li><i class="fa fa-check"></i> Miễn phí giường Dorm tại trụ sở QuangBinh Travel</li>

													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="demo">
									<div class="container" style="margin-left: -25px; margin-top: 20px;">
										<div class="row">
											<div class="col-lg-8">
												<div class="email-signature">
													<div class="signature-icon1">
														<img src="img/km4.gif" alt="" style="width: 100px; height: 100px;"> 
													</div>
													<div class="signature-details1">
														<span class="post" style="font-size: 20px;">Chương trình khuyến mãi tháng 7</span>
														<div class="mt-3">
															<button type="button" class="btn5">Xem chi tiết</button>&nbsp;
														</div> 
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>					
							</div>
							<div role="tabpanel" class="tab-pane fade" id="Section5">
								<div class="chat">
									<div class="chat-header clearfix">
										<div class="row">
											<div class="col-lg-6">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
													<img src="images/logo.png" alt="avatar" style="height:40px;width:34px;">
												</a>
												<div class="chat-about">
													<h6 class="m-b-0">QuangBinh Travel</h6>
													<small>Đang hoạt động</small>
												</div>
											</div>
											<div class="col-lg-6 hidden-sm text-right">
												<a href="javascript:void(0);" class="btn6 btn-outline-secondary" style="    border: 1px solid #6c757d!important;"><i class="fa fa-camera"></i></a>
												<a href="javascript:void(0);" class="btn6 btn-outline-primary"><i class="fa fa-image"></i></a>
												<a href="javascript:void(0);" class="btn6 btn-outline-info"><i class="fa fa-cogs"></i></a>
												<a href="javascript:void(0);" class="btn6 btn-outline-warning"><i class="fa fa-question"></i></a>
											</div>
										</div>
									</div>
									<div class="chat-history">
										<ul class="m-b-0">
											<li class="clearfix">
											<div class="message-data text-right">
													<span class="message-data-time">10:12 AM, hôm qua</span>
													<img src="images/hq1.jpeg" alt="avatar">
												</div>
												<div class="message other-message float-right">Xin chào.</div>
											</li>
											<li class="clearfix">
												<div class="message-data">
													<span class="message-data-time">10:12 AM, hôm qua</span>
												</div>
												<div class="message my-message">Chào bạn.</div>                                    
											</li>
											<li class="clearfix">
												<div class="message-data">
													<span class="message-data-time">10:12 AM, hôm qua</span>
												</div>
												<div class="message my-message">Chúng tôi có thể giúp gì cho bạn?.</div>                                    
											</li>
											<li class="clearfix">
												<div class="message-data text-right">
													<span class="message-data-time">10:20 AM, hôm qua</span>
													<img src="images/hq1.jpeg" alt="avatar">
												</div>
												<div class="message other-message float-right">Tôi có cần cọc treakking không ?</div>                                    
											</li>        
											<li class="clearfix">
												<div class="message-data">
													<span class="message-data-time">10:21 AM, hôm qua</span>
												</div>
												<div class="message my-message">Nếu bạn thường đi bộ đường dài bằng cọc trekking, hãy mang theo chúng, đặc biệt là đối với Hang Én. Chúng tôi có sẵn một vài bộ để mượn nhưng không thể đảm bảo có sẵn trước khi bạn đến.</div>
											</li>
											<li class="clearfix">
												<div class="message-data text-right">
													<span class="message-data-time">10:20 AM, hôm qua</span>
													<img src="images/hq1.jpeg" alt="avatar">
												</div>
												<div class="message other-message float-right">Vâng. cảm ơn ạ!</div>                                    
											</li>               
										</ul>
									</div>
									<div class="chat-message clearfix">

									<div class="col-md-12" style="width: 760px;">
										<div class="col-md-11" style="margin-left: -20px; ">
											<input type="text" class="form-control" placeholder="Nhập tin nhắn ở đây...">                                    
										</div>
										<div class="col-md-1">
											<div class="nhan input-group-prepend">
												<span class="input-group-text" style="color: #17a2b8; font-size: 24px;margin-left: -20px;"><i class="fa fa-send"></i></span>
											</div>
										</div>
									</div>
									</div>
									

								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="Section6">
								<div class="hihi">
									<div class="feedback">
									  <div class="rating">
										<input type="radio" name="rating" id="rating-5">
										<label for="rating-5"></label>
										<input type="radio" name="rating" id="rating-4">
										<label for="rating-4"></label>
										<input type="radio" name="rating" id="rating-3">
										<label for="rating-3"></label>
										<input type="radio" name="rating" id="rating-2">
										<label for="rating-2"></label>
										<input type="radio" name="rating" id="rating-1">
										<label for="rating-1"></label>
										<div class="emoji-wrapper">
										  <div class="emoji">
											<svg class="rating-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
											<circle cx="256" cy="256" r="256" fill="#ffd93b"/>
											<path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534"/>
											<ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff"/>
											<ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347"/>
											<ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63"/>
											<ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff"/>
											<ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347"/>
											<ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63"/>
											<path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347"/>
										  </svg>
											<svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
											<circle cx="256" cy="256" r="256" fill="#ffd93b"/>
											<path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
											<path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347"/>
											<path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z" fill="#f4c534"/>
											<path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff"/>
											<path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347"/>
											<path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff"/>
											<path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z" fill="#f4c534"/>
											<path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff"/>
											<path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347"/>
											<path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff"/>
										  </svg>
											<svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
											<circle cx="256" cy="256" r="256" fill="#ffd93b"/>
											<path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
											<path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347"/>
											<path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff"/>
											<circle cx="340" cy="260.4" r="36.2" fill="#3e4347"/>
											<g fill="#fff">
											  <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10"/>
											  <path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z"/>
											</g>
											<circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347"/>
											<ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff"/>
										  </svg>
											<svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
									  <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
									  <path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347"/>
									  <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
									  <g fill="#fff">
										<path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z"/>
										<ellipse cx="356.4" cy="205.3" rx="81.1" ry="81"/>
									  </g>
									  <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
									  <g fill="#fff">
										<ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1"/>
										<ellipse cx="155.6" cy="205.3" rx="81.1" ry="81"/>
									  </g>
									  <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
									  <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff"/>
									</svg>
											<svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
											<circle cx="256" cy="256" r="256" fill="#ffd93b"/>
											<path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
											<path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
											<path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f"/>
											<path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
											<path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
											<path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f"/>
											<path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
											<path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347"/>
											<path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b"/>
										  </svg>
											<svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
											<g fill="#ffd93b">
											  <circle cx="256" cy="256" r="256"/>
											  <path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z"/>
											</g>
											<path d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z" fill="#e9eff4"/>
											<path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea"/>
											<path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88"/>
											<g fill="#38c0dc">
											  <path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z"/>
											</g>
											<g fill="#d23f77">
											  <path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z"/>
											</g>
											<path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347"/>
											<path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b"/>
											<path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2"/>
										  </svg>
										  </div>
										</div>
									  </div>
									</div>
									<div class="card-body col-md-12" style="margin-top: 20px;">
										
											<div class="col-sm-12" style="text-align: center; ">
												<p>Với mong muốn không ngừng nâng cao chất lượng dịch vụ để phục vụ bạn ngày càng tốt hơn. QuangBinh Travel rất mong nhập được sự góp ý từ quý khách hàng !</p>
											</div>
										</div>
				
										<div class="col-sm-12" style="margin-top: 15px;">
											<form>
												<textarea placeholder="Để lại góp ý" rows="2" class="form-control input-lg p-text-area"></textarea>
											</form>
											<footer class="panel-footer">
												<button class="btn5 btn-warning pull-right show-modal2" data-toggle="modal" data-dismiss="modal" data-target="#myModalok2" style="margin-top:-5px">Gửi</button>

												<ul class="nav nav-pills">
													<li>
														<a href="#"><i class="fa fa-map-marker"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-camera"></i></a>
													</li>
													<li>
														<a href="#"><i class=" fa fa-film"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-microphone"></i></a>
													</li>
												</ul>
											</footer>
											<div class="modal fade" id="myModalok2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
                    <div class="modal-dialog2" role="document">
                        <div class="modal-content2 clearfix">
                            <div class="modal-body2">
                                <div class="icon">
                                    <i style="margin-top: 20px;" class="icon-check"></i>
                                </div>
                                <h3 class="title2">Đã gửi!</h3>
                                <p class="description"> Cảm ơn bạn đã góp ý! </p>
                                <a style="color: #fff;" href="thongtincanhan.php"><button class="btnok btn-default "> Thoát</button></a>
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
					
				</section>
			</div>
		</div>
	

<?php
include "footer.php";
?>