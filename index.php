<?php
include "header.php";
?>
	<link rel="stylesheet" href="amthucc/style.css">
	<link rel="icon" type="image/png" href="images/share.png">

	<link rel="stylesheet" href="amthucc/jquery.flipster.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<div class="popup-wrapper" id="popup"style="z-index: 999;">
	<div class="popup-container" >
		        <div class="modal-content3">
				    <form action="" method="post">
				        <div class="modal-header4">
					        <div class="icon-boxh mx-auto">						
						       <img src="images/qua1.png" alt="" style="height: 150px;width:150px;">
					        </div>
				        </div>
				        <div class="text-center">
					        <h3 style="line-height: 1.6;">Đăng ký tài khoản ngay để nhận nhiều ưu đãi hấp dẫn đến từ <a style="color: #F78536;"> QuangBinh Travel</a></h3>	
					        <p style="margin-top: 30px;">Giảm ngay 10% cho lần đặt tour đầu tiên đối với tài khoản mới</p>
						
								<div class="col-md-12 " style="height:auto;">
								<button class="btnc"><a href="dangnhap.php"> Đăng ký</a></button>
 								</div>
							
					        <div class="input-group3">
						        
							</div>
				        </div> 
			        </form>			
		        </div>
		<a class="popup-close" href="#popup">x</a>
	</div>
</div>
<div class="fh5co-hero">
			<div class="fh5co-overlay"> </div>
			<div class="fh5co-cover">
				<div class="video">
					<video src="videos/video.mov" loop muted autoplay></video>
				</div>
				<div class="desc">
					<div class="container">
						<div class="row">
						<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<p><a target="_blank" class="fh5co-site-name">Sự hài lòng của quý khách là niềm vinh hạn của chúng tôi</a></p>
									<div class="text-effect">
										<span>Q</span><span>U</span><span>A</span><span>N</span><span>G</span><span>B</span><span>I</span><span>N</span><span>H</span>
										<span>T</span><span>R</span><span>A</span><span>V</span><span>E</span><span>L</span><span>.</span>
									</div>
									<h2>Du lịch theo phong cách riêng</h2>
									<h3>Trải nghiệm trọn vẹn, giá cả phải chăng</h3>
									<span class="price"></span>
								
								</div>
							</div>
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">

								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation" class="active">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Máy bay</a>
								      </li>
								      <li role="presentation">
								    	   <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Khách sạn</a>
								      </li>
									  <li role="presentation">
										<a href="#packages" aria-controls="packages" role="tab" data-toggle="tab">Tours</a>
								   </li>
								      
								   </ul>


									<div class="tab-content">
									 
									 <div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Điểm khởi hành :</label>
													<input type="text" class="form-control" id="country"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Điểm đến :</label>
													<input type="text" class="form-control" id="to-place" placeholder="Quảng Bình" />
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Ngày đi :</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">Ngày về :</label>
													<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Hạng ghế :</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>Phổ thông</option>
														<option value="economy">Phổ thông</option>
														<option value="first">Thương gia</option>
														<option value="business">Hạng nhất</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
											
													<label for="class">Số người lớn :</label>
													<input type="text" class="form-control" id="number" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
											
													<label for="class">Số trẻ em :</label>
													<input type="text" class="form-control" id="number" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Tìm Kiếm">
											</div>
										</div>
									 </div>

									 <div role="tabpanel" class="tab-pane" id="hotels">
									 	<div class="row">
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">Thành phố, địa điểm hoặc tên khách sạn :</label>
													<input type="text" class="form-control" id="from-place"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Ngày nhận phòng :</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">Ngày trả phòng :</label>
													<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-sm-12 mt">
												
													<label for="class">Số phòng :</label>
													<input type="text" class="form-control" id="number" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												
													<label for="class">Số người lớn :</label>
													<input type="text" class="form-control" id="number" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
											
													<label for="class">Số trẻ em :</label>
													<input type="text" class="form-control" id="number" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Tìm kiếm">
											</div>
										</div>
									 </div>

									 <div role="tabpanel" class="tab-pane" id="packages">
									 	<div class="row">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Khởi hành từ :</label>
													<input type="text" class="form-control" id="from-place"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Đến :</label>
													<input type="text" class="form-control" id="to-place" placeholder="Quảng Bình"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Từ ngày :</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">Đến ngày :</label>
													<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-sm-12 mt">
												
													<label for="class">Số phòng :</label>
													<input type="text" class="form-control" id="number" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												
													<label for="class">Số người lớn :</label>
													<input type="text" class="form-control" id="number" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												
													<label for="class">Số trẻ em :</label>
													<input type="text" class="form-control" id="number" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Tìm kiếm">
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
		
	
		


<div class="tabs">
	<button class="tablinks active" data-electronic="allproducts"><i class="icon-home" style="font-size: 20px;"></i>  Trang Chủ</button>
	<button class="tablinks" data-electronic="module"><i class="icon-camera4" style="font-size: 22px; "></i> Khám Phá</button>
	<button class="tablinks" data-electronic="Microcontrollers"><i class="icon-glass" style="font-size: 20px;"></i>Ẩm Thực</button>
	<button class="tablinks" data-electronic="binh"><i class="icon-map3" style="font-size: 22px;"> </i> Văn hóa</button>
	<button class="tablinks" data-electronic="xiu"><i class="icon-hand"style="font-size: 22px;"></i> Team Building</button>
 </div>

 <!-- Tab content -->
<div class="wrapper_tabcontent">
	<div id="allproducts" class="tabcontent active">
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>TOUR NỔI BẬT</h3>
						<p>Bạn thích những chuyến đi dài, khám phá những danh lam thắng cảnh, bơi và cắm trại , hay đơn giản chỉ là tham gia một chuyến trải nghiệm trong ngày, tất cả đều dành cho bạn.</p>
					</div>
				</div>
				<div class="card-container">
				    <div class="card  animate-box " >
						<span class="discount">-15%</span>
						<img  src="images/tour9.jpeg" alt="">
						<div class="contentt">
							<div>
							<span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2F&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
							<span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Ftour2.html&layout=button_count&size=small&width=86&height=20&appId" width="86" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
							</div>
							<a class="title" style="font-size: 17px;">Chinh phục hang Tiên</a><br> <br>
							<a class="tt"><i class="icon-calendar"></i>  2 ngày</a><br>
							<a class="tt"><i class="icon-map-marker" ></i> Hang Tiên - Phong Nha</a><br> 
							<a style=" color: #333;" ><del>3.650.000 VNĐ</del><a style="color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;"> 3.102.500 VNĐ</a></a>
							<div class="stars" style="padding-top: 10px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="tour.php?id=1">Chi tiết </a></p>
							</div>						
						</div>
					</div>
					<div class="card animate-box">
						<span class="discount">-15%</span>
						<img src="images/anb1.jpeg" alt="">
						<div class="contentt">
							<div>
								<span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Findex.html&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
								<span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Fnb1.html&layout=button_count&size=small&width=86&height=20&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></i></span>
								</div>
							<a class="title" style="font-size: 17px;">Serie Tour Quảng Bình 1 ngày, ghép đoàn</a><br>
							<a class="tt"><i class="icon-calendar"></i>  1 ngày</a><br>
							<a class="tt"><i class="icon-map-marker" ></i> Phong Nha Kẻ Bàng</a><br>
							<a style=" color: #333;" ><del>1.265.000 VNĐ</del><a style="color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;"> 1.075.250 VNĐ</a></a>
							<div class="stars" style="padding-top: 10px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="tour.php?id=13">Chi tiết</a></p>
							</div>						
						</div>
					</div>
					<div class="card animate-box">
						<span class="discount">-15%</span>
						<img src="images/td.jpeg" alt="">
						<div class="contentt">
							<div>
								<span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Findex.html&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
								<span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Fnb1.html&layout=button_count&size=small&width=86&height=20&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></i></span>
							</div>
							<a class="title" style="font-size:17px;">Khám phá động Thiên Đường 7000m</a><br> <br>
							<a class="tt"><i class="icon-calendar"></i>  1 ngày</a><br>
							<a class="tt"><i class="icon-map-marker" ></i> Phong Nha Kẻ Bàng</a><br>
							<a style=" color: #333;" ><del>2.000.000 VNĐ</del><a style='color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;'> 1.700.000 VNĐ</a></a>
							<div class="stars" style="padding-top: 10px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="tour.php?id=6">Chi tiết </a></p>
							</div>						
						</div>
					</div>
					<div class="card animate-box">
						<span class="discount">-15%</span>
						<img src="images/anb3.jpeg" alt="">
						<div class="contentt">
							<div>
								<span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Findex.html&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
								<span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Fnb1.html&layout=button_count&size=small&width=86&height=20&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></i></span>
							</div>
							<a class="title" style="font-size:17px;">Tour động Phong Nha - vườn Thực Vật</a><br> <br>
							<a class="tt"><i class="icon-calendar"></i>  1 ngày</a><br>
							<a class="tt"><i class="icon-map-marker" ></i> Phong Nha Kẻ Bàng</a><br>
							<a style=" color: #333;" ><del>950.000 VNĐ</del><a style='color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;'> 807.500 VNĐ</a></a>
							<div class="stars" style="padding-top: 10px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="tour.php?id=3">Chi tiết </a></p>
							</div>						
						</div>
					</div>
					<div class="card animate-box">
						<span class="discount">-15%</span>
						<img src="images/anb4.jpeg" alt="">
						<div class="contentt">
							<div>
								<span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Findex.html&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
								<span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Fnb1.html&layout=button_count&size=small&width=86&height=20&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></i></span>
							</div>
							<a class="title" style="font-size:17px;">Tour Sun Spa Resort Quảng Bình - Động Thiên Đường - Ozo Tree Top Park</a><br> 
							<a class="tt"><i class="icon-calendar"></i>  3 ngày, 2 đêm</a><br>
							<a class="tt"><i class="icon-map-marker" ></i> Quảng Bình</a><br>
							<a style=" color: #333;" ><del>3.590.000 VNĐ</del><a style='color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;'> 3.051.500 VNĐ</a></a>
							<div class="stars" style="padding-top: 10px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="tour.php?id=14">Chi tiết</a></p>
							</div>
						</div>
					</div>
					<div class="card animate-box">
						<span class="discount">-15%</span>
						<img src="images/anb5.jpeg" alt="">
						<div class="contentt">
							<div>
								<span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Findex.html&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
								<span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Fnb1.html&layout=button_count&size=small&width=86&height=20&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></i></span>
								</div>
							<a class="title" style="font-size: 17px;">Tour Phong Nha 4500m - Chinh phục xuyên Sơn Hồ</a><br> <br>
							<a class="tt"><i class="icon-calendar"></i>  1 ngày</a><br>
							<a class="tt"><i class="icon-map-marker" ></i> Phong Nha Kẻ Bàng</a><br>
							<a style=" color: #333;" ><del>1.900.000 VNĐ</del><a style='color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;'> 1.615.000 VNĐ</a></a>

							<div class="stars" style="padding-top: 10px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="tour.php?id=5">Chi tiết</a></p>
							</div>
						</div>
					</div>	

					<div class="card animate-box">
						<span class="discount">-15%</span>
						<img src="images/m2.jpg" alt="">
						<div class="contentt">
							<div>
								<span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Findex.html&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
								<span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Fnb1.html&layout=button_count&size=small&width=86&height=20&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></i></span>
								</div>
							<a class="title" style="font-size: 17px;">Tour Quảng Bình | Gói siêu tiết kiệm</a><br><br>
							<a class="tt"><i class="icon-calendar"></i>  3 ngày 2 đêm </a><br>
							<a class="tt"><i class="icon-map-marker" ></i> Quảng Bình</a><br>
							<a style=" color: #333;" ><del>2.500.000 VNĐ</del><a style='color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;'> 2.125.000 VNĐ</a></a>

							<div class="stars" style="padding-top: 10px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="tour.php?id=16">Chi tiết</a></p>
							</div>
						</div>
					</div>	
					

					<div class="card animate-box">
						<span class="discount">-15%</span>
						<img src="images/m1.jpg" alt="">
						<div class="contentt">
							<div>
								<span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Findex.html&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
								<span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Fnb1.html&layout=button_count&size=small&width=86&height=20&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></i></span>
								</div>
							<a class="title" style="font-size: 17px;">Tour Động Phong Nha - Suối Nước Moọc</a><br>
							<a class="tt"><i class="icon-calendar"></i>  1 ngày</a><br>
							<a class="tt"><i class="icon-map-marker" ></i> Động Phong Nha - Suối nước Moọc</a><br>
							<a style=" color: #333;" ><del>1.550.000 VNĐ</del><a style='color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;'> 1.317.500 VNĐ</a></a>

							<div class="stars" style="padding-top: 10px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="tour.php?id=17">Chi tiết</a></p>
							</div>
						</div>
					</div>	


					<div class="card animate-box">
						<span class="discount">-15%</span>
						<img src="images/m3.jpg" alt="">
						<div class="contentt">
							<div>
								<span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Findex.html&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
								<span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Fnb1.html&layout=button_count&size=small&width=86&height=20&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></i></span>
								</div>
							<a class="title" style="font-size: 17px;">Tour Động Thiên Đường - Sông Chày Hang Tối</a><br>
							<a class="tt"><i class="icon-calendar"></i>  1 ngày</a><br>
							<a class="tt"><i class="icon-map-marker" ></i> Phong Nha Kẻ Bàng</a><br>
							<a style=" color: #333;" ><del>1.590.000 VNĐ</del><a style='color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;'> 1.351.500 VNĐ</a></a>

							<div class="stars" style="padding-top: 10px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="tour.php?id=10">Chi tiết</a></p>
							</div>
						</div>
					</div>	

				
				</div>
					
				</div>
			</div>

		<div id="fh5co-destination">
			<div class="tour-fluid" style="padding-top: 70px;">
				<div class="row">
					<div class="col-md-12">
						<ul id="fh5co-destination-list" class="animate-box">
							<li class="one-forth text-center" style="background-image: url(images/kp11.jpg); ">
								<a>
									<div class="case-studies-summary">
										<h2></h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/tl1.jpeg); ">
								<a>
									<div class="case-studies-summary">
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/tl4.jpeg); ">
								<a>
									<div class="case-studies-summary">
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/kp1.jpeg); ">
								<a>
									<div class="case-studies-summary">
									</div>
								</a>
							</li>

							<li class="one-forth text-center" style="background-image: url(images/kp2.jpeg); ">
								<a>
									<div class="case-studies-summary">
										<h2>Chùa Hoằng Phúc</h2>
									</div>
								</a>
							</li>
							<li class="one-half text-center">
								<div class="title-bg">
									<div class="case-studies-summary">
										<h2>Khám phá Quảng Bình</h2>
										<span><a >Xem thêm </a></span>
									</div>
								</div>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/kp3.jpeg); ">
								<a>
									<div class="case-studies-summary">
										<h2>Đá Nhảy</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/banhbeo..jpg); ">
								<a>
									<div class="case-studies-summary">
										<h2>Bánh Bèo</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/kp4.jpeg); ">
								<a>
									<div class="case-studies-summary">
										<h2>Cá Trắm kho</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/kp5.jpeg); ">
								<a>
									<div class="case-studies-summary">
										<h2>Bánh Xèo</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/banhloc.jpg); ">
								<a>
									<div class="case-studies-summary">
										<h2>Bánh lọc</h2>
									</div>
								</a>
							</li>
						</ul>		
					</div>
				</div>
			</div>
		</div>

		<div class="container" style="margin-top: 50px;">
			<div class="container">
				<div class="rowa">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3> Vấn đề hỏi đáp và an toàn</h3>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col-md-12" style="margin-bottom: 70px;">
				<div class="col-md-7 animate-box">
					<div class="rowa">
						<div class="chtg col-md-12">
							<ul>
							  <li>
								<input type="checkbox" checked>
								<i></i>
								<h2>Tôi nên mang loại áo quần gì cho chuyến thăm quan?</h2>
								<p>&emsp; Mặc dù số lượng bộ bạn muốn mang theo sẽ khác nhau tùy thuộc vào thời gian chuyến tham quan của bạn là bao lâu, chúng tôi khuyên bạn nên mang trang phục thoải mái để tiện di chuyển và nên mang thêm quần áo ấm vào mùa đông (giữa tháng 11 đến giữa tháng 3). 
									Đối với các tour mạo hiểm, khám phá hang động chúng tôi khuyên bạn nên mặc áo dài tay và yêu cầu quần dài để bảo vệ tốt nhất trong rừng và hang động. 
									Đối với các địa điểm tâm linh thì nên mang theo trang phục lịch sự.</p>
							  </li>
							  <li>
								<input type="checkbox" checked>
								<i></i>
								<h2>Làm cách nào để đến đồng hới?</h2>
								<p>&emsp;Bạn có thể đến Đồng Hới bằng máy bay của Vietnam Airlines, Bamboo Airlines, từ Hà Nội hoặc Thành phố Hồ Chí Minh (các hãng khác có sẵn trên các chuyến bay từ Thành phố Hồ Chí Minh). 
									Bạn cũng có thể đi tàu hoặc xe khách qua đêm từ Hà Nội đều khá thuận tiện, tuy nhiên việc sắp xếp vé tàu trước khi đến Việt Nam có thể khó hoặc tốn kém hơn. Bạn cũng có thể lựa chọn đi tàu, xe khách hoặc ô tô riêng từ Huế, Đà Nẵng hoặc Hội An. 
									Bạn có thể tham khảo tại <a href="#camnang.html" style="color: #F78536;"> Cẩm nang</a> của chúng tôi trực tuyến để biết thêm thông tin liên quan đến việc du lịch đến khu vực của chúng tôi.</p>
							  </li>
							  <li>
								<input type="checkbox" checked>
								<i></i>
								<h2>Tôi có phải cho biết về tình trạng sức khoẻ không?</h2>
								<p>&emsp;Chúng tôi cần được biết về các thông tin sức khỏe, bệnh lý (nếu có) của bạn nhằm đảm bảo tuyệt đối an toàn của bạn trong tour của chúng tôi. Đặc thù tour mạo hiểm là khám phá hang động nằm sâu bên trong rừng, nơi mà điều kiện y tế rất hạn chế, chỉ ở mức độ sơ cứu. Nếu bạn có bệnh lý cần lưu ý, chúng tôi muốn được biết để chuẩn bị kỹ hơn để đảm bảo an toàn tuyệt đối cho bạn khi đi tour. Các thông tin mà bạn cung cấp sẽ được bảo mật. Ngoài ra, nếu bạn có bất kì dị ứng gì với đồ ăn, thức uống, các loại thuốc, bạn cũng nên cung cấp thông tin đó để chúng tôi có thể lưu ý hơn về các bữa ăn trong tour cho bạn.</p>
							  </li>
							  <li>
								<input type="checkbox" checked>
								<i></i>
								<h2>Chính sách thanh toán như thế nào?</h2>
								<p>&emsp;Đối với mỗi tour khách hàng vui lòng thanh toán trước 70% để được xác nhận đăng kí tour và thời gian hoàn tất thanh toán phải trước 1 tuần tham gian tour. 
									Còn lại 30% phải hoàn tất thanh toán ngay sau khi kết thúc tour. 
									Ngoài ra quý khách cũng có thể thanh toán trước 100%.</p>
							  </li>
							  <li>
								<input type="checkbox" checked>
								<i></i>
								<h2>Có sân bay quốc tế nào ở Việt Nam không?</h2>
								<p>&emsp;Ở Việt Nam có sân bay quốc tế lớn là sân bay Tân Sơn Nhất (Thành phố Hồ Chí Minh) và sân bay Nội Bài (thủ đô Hà Nội). Cả 2 sân bay này đều có những chuyến bay trực tiếp đến sân bay Đồng Hới (tỉnh Quảng Bình), nơi cách văn phòng QuangBinh Travel 45km.</p>
							  </li>
							  <li>
								<input type="checkbox" checked>
								<i></i>
								<h2>Chúng tôi phải đặt tour trước bao lâu?</h2>
								<p>&emsp;Qúy khách vui lòng đặt tour trước ít nhất 10 ngày để chúng tôi sắp xếp lịch trình phù hợp nhất.</p>
							  </li>
							</ul>						
						</div>
						<div class="col-md-12 text-center">
								<button class="btntg1"><a href="FAQs.php">Những câu hỏi thường gặp</a></button>
						</div>
					</div>
				</div>	
				<div class="col-md-5 animate-box" style="margin-top: 10px;">
					<div class="image-container">
						<div class="image"><a data-fancybox="galleryhd" href="images/hai.jpeg" data-table=""><img src="images/hai.jpeg"></div></a>
						<div class="image"><a data-fancybox="galleryhd" href="images/ht3.jpeg" data-table=""><img src="images/ht3.jpeg"></div></a>
						<div class="image"><a data-fancybox="galleryhd" href="images/kp11.jpg" data-table=""><img src="images/kp11.jpg"></div></a>
						<div class="image"><a data-fancybox="galleryhd" href="img/ngu8.jpg" data-table=""><img src="img/ngu8.jpg"></div></a>
						<div class="image"><a data-fancybox="galleryhd" href="img/ngu3.jpg" data-table=""><img src="img/ngu3.jpg"></div></a>
						<div class="image"><a data-fancybox="galleryhd" href="img/ngu9.jpg" data-table=""><img src="img/ngu9.jpg"></div></a>
						<div class="image"><a data-fancybox="galleryhd" href="img/ngu6.jpg" data-table=""><img src="img/ngu6.jpg"></div></a>
						<div class="image"><a data-fancybox="galleryhd" href="images/t4.jpeg" data-table=""><img src="images/t4.jpeg"></div></a>
						<div class="image"><a data-fancybox="galleryhd" href="images/kp1.jpeg" data-table=""><img src="images/kp1.jpeg"></div></a>
					</div>
				</div>
			</div>
		</div>
       
		
		
	<section class="newsletter" style="	background: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url(images/hai.png) no-repeat;">
		<div class="letter" >
		<a>“Du khách lần đầu đến với Quảng Bình chắc hẳn sẽ còn bỡ ngỡ, lo lắng lịch trình đi lại, phương tiện di</a><br>
			<a> chuyển, nơi ăn, chốn ở, chi phí hoạt động... Hiểu được điều đó, QuangBinh Travel đã giúp bạn chọn lọc và liệt kê lịch trình</a><br>
			<a> gợi ý chi tiết, vừa trải nghiệm thiên nhiên và cũng vừa an toàn.”</a><br>
		
		</div>
		

	</section>

	<div id="fh5co-features">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box" style="width: 70%;">
					<h3>Cẩm nang </h3>
					<p>Chúng tôi là đội ngũ điều hành, hướng dẫn viên tại Quảng Bình xin chia sẻ đến Quý bạn kinh nghiệm du lịch Quảng Bình 2021 được chắt lọc qua nhiều năm kinh nghiệm lữ hành địa phương để trả lời các câu hỏi của bạn giúp bạn có một chuyến đi đầy thú vị.</p>
				</div>
				<div class="col-md-4 animate-box">

					<div class="feature-left">
						<span class="icon">
							<i class="icon-hotairballoon"></i>
						</span>
						<div class="feature-copy">
							<h3>Du lịch Quảng Bình có gì?</h3>
							<p>Hiếm có nơi nào ở Việt Nam lại tập trung nhiều danh lam thắng cảnh đẹp và địa hình đa dạng như Quảng Bình...</p>
							<p><a href="camnang.php">Đọc thêm</a></p>
						</div>
					</div>

				</div>

				<div class="col-md-4 animate-box">
					<div class="feature-left">
						<span class="icon">
							<i class="icon-search"></i>
						</span>
						<div class="feature-copy">
							<h3>Ở Quảng Bình đi lại bằng gì?</h3>
							<p>Xe máy, nếu bạn muốn như một dân phượt thì các bạn có thể thuê xe gắn máy ...</p>
							<p><a href="camnang.php">Đọc thêm</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="feature-left">
						<span class="icon">
							<i class="icon-leaf"></i>
						</span>
						<div class="feature-copy">
							<h3>Du lịch Quảng Bình nên đi vào tháng mấy?</h3>
							<p>Quảng Bình cũng như những nơi khác thuộc miền Trung, cũng có...</p>
							<p><a href="camnang.php">Đọc thêm</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box">

					<div class="feature-left">
						<span class="icon">
							<i class="icon-wine"></i>
						</span>
						<div class="feature-copy">
							<h3> Du lịch Quảng Bình nên ăn gì?</h3>
							<p>Du lịch Quảng Bình nên thưởng thức các loại hải sản tươi sống được bày bán rất nhiều ...</p>
							<p><a href="camnang.php">Đọc thêm</a></p>
						</div>
					</div>

				</div>

				<div class="col-md-4 animate-box">
					<div class="feature-left">
						<span class="icon">
							<i class="icon-gift"></i>
						</span>
						<div class="feature-copy">
							<h3>Du lịch Quảng Bình mua gì về làm quà</h3>
							<p>Ngoài bánh lọc bạn có thể mua bánh tráng Tân An, khoai deo, nước mắm Bảo Ninh, Sâm Bố Chính, Rượu Võ Xá...</p>
							<p><a href="camnang.php">Đọc thêm</a></p>
						</div>
					</div>

				</div>
				<div class="col-md-4 animate-box">
					<div class="feature-left">
						<span class="icon">
							<i class="icon-search"></i>
						</span>
						<div class="feature-copy">
							<h3>Giá vé tham quan ở Quảng Bình 2021</h3>
							<p>Đối với những bạn muốn đi du lịch Quảng Bình tự túc hay phượt thì nên nắm được một số thông tin về giá vé...</p>
							<p><a href="camnang.php">Đọc thêm</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-testimonial" >
		<div class="container" >
			<div class="row animate-box" style="margin: 40px;font-size: 40px;">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Đánh giá của khách hàng</h2>
				</div>
			</div>
			<div class="row" >
				<div class="col-md-4">
			
					<div class="box-testimony animate-box">
					
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;4 ngày không có internet, không có sóng điện thoại và hòa mình vào thiên nhiên ngủ trong những căn lều bé bé xinh xinh - ăn cơm tận rừng sâu , tắm bên bờ suối dưới trời 14 độ - rồi xông hơi bếp lữa, nướng khoai lang bên lò than hồng… bên cạnh những con người xa lạ nhưng lại ấm áp tình người như 1 GĐ vậy.&rdquo;</p>
						</blockquote>
					
						<p class="author">Khách đánh giá tour Thám Hiểm Tú Làn [2021] <span class="subtext"></span></p>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Thay mặt cả nhà gửi lời cảm ơn QuangBinh Travel – Đã cho cả gia đình tôi 1 chuyến đi hoàn hảo, một cảm nhận rất thân thiết về con người Quảng Bình. Đến một miền đất lạ mà thấy thân thương và mến khách lạ thường. Việc quyết đi Quảng Bình rất nhanh chóng trong vòng 2 ngày rồi vội vàng tìm trên google thấy tên Cty QuangBinh Travel,rồi kí hợp đồng trong vòng buổi sáng vậy mà được đón tiếp như những người thân về thăm quê.&rdquo;</p>
						</blockquote>
							 <p class="author" style="flex: 70%;"> Chị Lan Anh [ Tour serie khám phả Quảng Bình 1 ngày] <span class="subtext"></span></p>
					</div>
					
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Trong quá trình di chuyển gặp một số trục trặc, nhưng hướng dẫn viên đã xử lý vô cùng khéo léo. Chuyến đi cũng rất tuyệt vời, chúng tôi nhất định sẽ quay lại.&rdquo;</p>
						</blockquote>
						<p class="author">Anh Ngọc<span class="subtext"></span></p>
					</div>
					
				</div>
			</div>
		</div>
	</div>	
		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Thông tin từ QuangBinh Travel</h3>
						<p></p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/vungchus.jpeg" alt="" style="height: 250px;" ></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#">Giảm 15% cho tất cả các tour từ ngày 30/4 đến 31/5</a></h3>
									<span class="posted_by">29 tháng 4</span>
									<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
									<p>Chương trình Du lịch Quảng Bình dịp lễ 30 tháng 4 sẽ đưa du khách chinh phục các địa danh ở Quảng Bình, đặc biệt đến Viếng mộ Đại tướng Võ nguyên Giáp để tri ân nhân ngày giải Phóng miền nam.[...]</p>
									<p><a href="#">Đọc thêm...</a></p>
								</div>
							</div> 
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/covid.jpeg" alt="" style="height: 250px;"></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#">Quy trình ứng phó với covid 19</a></h3>
									<span class="posted_by">11 tháng 2</span>
									<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
									<p>Thực hiện Chỉ thị 05/CT-TTg, ngày 28/01/2021 của Thủ tướng Chính phủ về một số biện pháp cấp bách phòng, chống dịch Covid-19;[...]</p>
									<p><a href="#">Đọc thêm...</a></p>
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/anhtt11.jpeg" alt=""style="height: 250px;"></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#">Cắm trại chinh phục hang Chà lòi tại Quảng Bình</a></h3>
									<span class="posted_by">25 tháng 5</span>
									<span class="comment"><a href="">15<i class="icon-bubble2"></i></a></span>
									<p>Du lịch đang dần phục hồi sau bùng phát của Covid 19 lần 2. Thời điểm này mặc dù là mùa thấp điểm của du lịch Việt Nam tuy nhiên nhiều tín hiệu tích cực khi du khách dần quay trở lại đi du lịch. Xem thêm: Du lịch Quảng Bình những kinh nghiệm “không […]</p>
									<p><a href="#">Đọc thêm...</a></p>
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-md-block"></div>
				</div>

				<div class="col-md-12 text-center animate-box" style="margin:50px;">
					<p><a class="btn btn-primary btn-outline btn-lg" href="gioithieu.php">Xem tất cả <i class="icon-arrow-right22"></i></a></p>
				</div>

			</div>
		</div>
		

	</div>

	<div id="Microcontrollers" class="tabcontent">
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-section animate-box">
						<h3>ẨM THỰC</h3>
						
						<p> Quảng Bình, không chỉ là dải đất miền Trung nổi tiếng với vườn quốc gia Phong Nha – Kẻ Bàng được UNESCO công nhận di sản thế giới, bờ biển dài và đẹp, những con người chất phát thật thà, kiên cường trong thời chiến cũng như chống lại thiên nhiên khá khắc nghiệt ở nơi đây. Đó còn là tên một vùng đất chứa trong mình nhiều đặc sản mang hương vị đặc trưng khiến cho người đến đây cứ lưu luyến mãi chẳng quay về.</p>
						
						<p>Nếu đã có dịp ghé qua hay đi du lịch Quảng Bình, bạn nên thưởng thức những món ăn mang dấu ấn hương vị riêng của vùng đất hẹp nhất hình chữ S này nhé.	</p>				</div>
				</div>
			</div>
		</div>
	
			<section class="amthuc" >
				<div class="hero1" style="	background: linear-gradient(rgba(0, 0, 0, 0.808),rgba(0, 0, 0, 0.76)),url(images/amthu.jpeg) no-repeat;">
					<div class="title text-center">       
						<h1 class="at" style="font-size: 30px; font-weight:500; margin-top: 40px;">
							Ẩm thực Quảng Bình 
						</div>
					<div class="carousel">
					  <ul>
						<li class="entry-img"><a data-fancybox="gallery" href="images/anh10a.jpg"  data-table="">
						  <img src="images/ruuo.jpg" > </a>
						  <a class="ten" style="color: #fff;">Rượu trắng Võ Xá</a>
						</li>
						<li class="entry-img"><a data-fancybox="gallery" href="images/anh4a.jpg" data-table="">
						  <img src="images/chaohau.jpg"></a>
						  <a class="ten" style="color: #fff">Cháo hàu</a>
						</li>
						<li class="entry-img"><a data-fancybox="gallery" href="images/anh8a.jpg" data-table="">
						  <img src="images/goi.jpg"></a>
						  <a class="ten" style="color: #fff">Gỏi cá nghéo</a>
				   
						<li class="entry-img"><a data-fancybox="gallery" href="images/anh1a.jpg" data-table="">
						  <img src="images/banhxeo.jpg"></a>
						  <a class="ten" style="color: #fff">Bánh xèo</a>
						</li>
						
						<li class="entry-img"><a data-fancybox="gallery" href="images/anh3a.jpg" data-table="">
						  <img src="images/lau.jpg"></a>
						  <a class="ten" style="color: #fff">Lẩu cá khoai</a>
						</li>
				   
						<li class="entry-img"><a data-fancybox="gallery" href="images/anh7a.jpg" data-table="">
						  <img src="images/muc.jpg"></a>
						  <a class="ten" style="color: #fff">Mực khô</a>
						</li>
						<li class="entry-img"><a data-fancybox="gallery" href="images/anh2a.jpg" data-table="">
						  <img src="images/banhcanh.jpg"></a>
						  <a class="ten" style="color: #fff">Bánh canh</a>
						</li>
						<li class="entry-img"><a data-fancybox="gallery" href="images/anh6a.jpg" data-table="">
						  <img src="images/so.jpg"></a>
						  <a class="ten" style="color: #fff">Sò huyết sông Roòn</a>
						</li>
					
					   
						</li>
						<li class="entry-img"><a data-fancybox="gallery" href="images/anh9a.jpg" data-table="">
						  <img src="images/khoaideo.jpg"></a>
						  <a class="ten"style="color: #fff">Khoai deo</a>
						</li>
					 
						<li class="entry-img"><a data-fancybox="gallery" href="images/anh11a.jpg" data-table="">
						  <img src="images/banhtrang.jpg"></a>
						  <a class="ten"style="color: #fff">Bánh tráng Tân An</a>
						</li>
						<li class="entry-img"><a data-fancybox="gallery" href="images/anh5a.jpg" data-table="">
						  <img src="images/botloc.jpg"></a>
						  <a class="ten"style="color: #fff">Bánh bột lọc</a>
						</li>
						<li class="entry-img"><a data-fancybox="gallery" href="images/anh12a.jpg" data-table="">
						  <img src="images/com.jpg"></a>
						  <a class="ten"style="color: #fff">Cơm bồi - Ốc đực</a>
						</li>
				   
			  
					  </ul>
					</div>
				</div>
			</section>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="boxat">
							<img src="images/chaocanh.jpeg">
							<div class="box-content">
								<h3 class="title">Cháo canh</h3>
								<span class="post">Ẩm thực</span>
							</div>
							<ul class="icon">
								<li class="entry-img"><a data-fancybox="galleryat" href="images/anh2a.jpg" data-table=""><i class="icon-eye"></i></a></li>
								<li><a ><i class="icon-heart4"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxat">
							<img src="images/banhbotloc.jpeg">
							<div class="box-content">
								<h3 class="title">Bánh bột lọc</h3>
								<span class="post">Ẩm thực</span>
							</div>
							<ul class="icon">
								<li class="entry-img"><a data-fancybox="galleryat" href="images/anh5a.jpg" data-table=""><i class="icon-eye"></i></a></li>
								<li><a ><i class="icon-heart4"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxat">
							<img src="images/banhbeo.jpeg">
							<div class="box-content">
								<h3 class="title">Bánh bèo</h3>
								<span class="post">Ẩm thực</span>
							</div>
							<ul class="icon">
								<li><a href="#"><i class="icon-eye"></i></a></li>
								<li><a ><i class="icon-heart4"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxat">
							<img src="images/banhkhoai.jpeg">
							<div class="box-content">
								<h3 class="title">Bánh khoái</h3>
								<span class="post">Ẩm thực</span>
							</div>
							<ul class="icon">
								<li><a href="#"><i class="icon-eye"></i></a></li>
								<li><a ><i class="icon-heart4"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxat">
							<img src="images/chao-hau.jpeg">
							<div class="box-content">
								<h3 class="title">Cháo hàu</h3>
								<span class="post">Ẩm thực</span>
							</div>
							<ul class="icon">
								<li class="entry-img"><a data-fancybox="galleryat" href="images/anh4a.jpg" data-table=""><i class="icon-eye"></i></a></li>								
								<li><a ><i class="icon-heart4"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxat">
							<img src="images/lau-ca-khoai-1.jpeg">
							<div class="box-content">
								<h3 class="title">Lẩu cá khoai</h3>
								<span class="post">Ẩm thực</span>
							</div>
							<ul class="icon">
								<li class="entry-img"><a data-fancybox="galleryat" href="images/anh3a.jpg" data-table=""><i class="icon-eye"></i></a></li>								
								<li><a ><i class="icon-heart4"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxat">
							<img src="images/comboi.jpeg">
							<div class="box-content">
								<h3 class="title">Cơm bồi-ốc hút</h3>
								<span class="post">Ẩm thực</span>
							</div>
							<ul class="icon">
								<li class="entry-img"><a data-fancybox="galleryat" href="images/anh12a.jpg" data-table=""><i class="icon-eye"></i></a></li>								
								<li><a ><i class="icon-heart4"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxat">
							<img src="images/denbien.jpeg">
							<div class="box-content">
								<h3 class="title">Ram Đẻn biển</h3>
								<span class="post">Ẩm thực</span>
							</div>
							<ul class="icon">
								<li><a href="#"><i class="icon-eye"></i></a></li>
								<li><a ><i class="icon-heart4"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxat">
							<img src="images/banh-xeo.jpeg">
							<div class="box-content">
								<h3 class="title">Bánh xèo</h3>
								<span class="post">Ẩm thực</span>
							</div>
							<ul class="icon">
								<li class="entry-img"><a data-fancybox="galleryat" href="images/anh1a.jpg" data-table=""><i class="icon-eye"></i></a></li>								
								<li><a ><i class="icon-heart4"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxat">
							<img src="images/sohuyet.jpeg">
							<div class="box-content">
								<h3 class="title"> Sò huyết sông Roòn</h3>
								<span class="post">Ẩm thực</span>
							</div>
							<ul class="icon">
								<li class="entry-img"><a data-fancybox="galleryat" href="images/anh6a.jpg" data-table=""><i class="icon-eye"></i></a></li>								
								<li><a ><i class="icon-heart4"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxat">
							<img src="images/caphongnha.jpeg">
							<div class="box-content">
								<h3 class="title">Cá sông son</h3>
								<span class="post">Ẩm thực</span>
							</div>
							<ul class="icon">
								<li><a href="#"><i class="icon-eye"></i></a></li>
								<li><a ><i class="icon-heart4"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxat">
							<img src="images/chaocabau.jpeg">
							<div class="box-content">
								<h3 class="title">cháo cá bàu sen</h3>
								<span class="post">Ẩm thực</span>
							</div>
							<ul class="icon">
								<li><a href="#"><i class="icon-eye"></i></a></li>
								<li><a ><i class="icon-heart4"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxat">
							<img src="images/goicangheo.jpeg">
							<div class="box-content">
								<h3 class="title">gỏi cá nghéo</h3>
								<span class="post">Ẩm thực</span>
							</div>
							<ul class="icon">
								<li class="entry-img"><a data-fancybox="galleryat" href="images/anh8a.jpg" data-table=""><i class="icon-eye"></i></a></li>								
								<li><a ><i class="icon-heart4"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxat">
							<img src="images/khoaideo.jpeg">
							<div class="box-content">
								<h3 class="title">khoai deo</h3>
								<span class="post">Ẩm thực</span>
							</div>
							<ul class="icon">
								<li class="entry-img"><a data-fancybox="galleryat" href="images/anh9a.jpg" data-table=""><i class="icon-eye"></i></a></li>								
								<li><a ><i class="icon-heart4"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxat">
							<img src="images/banhtrangtanan.jpeg">
							<div class="box-content">
								<h3 class="title">bánh tráng tân an</h3>
								<span class="post">Ẩm thực</span>
							</div>
							<ul class="icon">
								<li class="entry-img"><a data-fancybox="galleryat" href="images/anh11a.jpg" data-table=""><i class="icon-eye"></i></a></li>								
								<li><a ><i class="icon-heart4"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxat">
							<img src="images/banhanhcaloc.jpeg">
							<div class="box-content">
								<h3 class="title">bánh canh cá lóc</h3>
								<span class="post">Ẩm thực</span>
							</div>
							<ul class="icon">
								<li><a href="#"><i class="icon-eye"></i></a></li>
								<li><a ><i class="icon-heart4"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxat">
							<img src="images/muckho.jpeg">
							<div class="box-content">
								<h3 class="title">mực khô</h3>
								<span class="post">Ẩm thực</span>
							</div>
							<ul class="icon">
								<li class="entry-img"><a data-fancybox="galleryat" href="images/anh7a.jpg" data-table=""><i class="icon-eye"></i></a></li>								
								<li><a ><i class="icon-heart4"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxat">
							<img src="images/nhunrioc.jpeg">
							<div class="box-content">
								<h3 class="title">nhún ruốc</h3>
								<span class="post">Ẩm thực</span>
							</div>
							<ul class="icon">
								<li><a href="#"><i class="icon-eye"></i></a></li>
								<li><a ><i class="icon-heart4"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>	
	</div>

	<div id="module" class="tabcontent">
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-section animate-box">
						<h3>KHÁM PHÁ</h3>
						<p> Sau đây sẽ là những địa điểm du lịch nổi tiếng nhất Quảng Bình được du khách từ khắp các nơi trong cả nước lẫn nước ngoài vô cùng yêu thích. Mọi người khi đến Quảng Bình không nên chỉ tham quan một điểm mà hãy kết hợp vài điểm đến đẹp và hấp dẫn ở Quảng Bình để có thể tự mình khám phá hết vẻ đẹp hoang sơ, độc đáo của vùng đất này nhé!</p>					</div>
				</div>
			</div>
		</div>
		<div class="wrapper" style="margin-bottom: 50px;">
        
			<div class="galleryb">
				<div class="gallery__item gallery__item--1">
				<a data-fancybox="Lamanh" href="https://www.youtube.com/watch?v=UFjn04eU6tI&t=38s"  data-table="" >
					<div class="gallery__link">
					<img src="images/x1.jpg" class="gallery__image" /> 
						<div class="gallery__overlay">
							<span>Phong Nha - Kẻ Bàng</span>
							<input type="checkbox" id="control-modal5" style="display:none" />
							 <label for="control-modal5" class="btn5">  Xem thêm</label>
						</div>
					
					</div>
					</a>
				</div>
			
				<div class="gallery__item gallery__item--2">
					<div class="gallery__link">
						<img src="images/x2.jpg" class="gallery__image" />
						<div class="gallery__overlay">
							<span>Động Thiên Đường</span>
							<input type="checkbox" id="control-modal" style="display:none" />
							<label for="control-modal" class="btn5">Xem thêm</label>
						</div>
					</div>
				</div>
		
				<div class="gallery__item gallery__item--3">
				<a data-fancybox="Lamanh" href="https://www.youtube.com/watch?v=tckXsrVbbMI"  data-table="" >
				
					<div class="gallery__link">
						<img src="images/x3.jpg" class="gallery__image" />
						<div class="gallery__overlay">
							<span>Hang Tiên</span>
							<input type="checkbox" id="control-modal" style="display:none" />
							<label for="control-modal" class="btn5">Xem thêm</label>
						</div>
					</div>
				</a>
				</div>
		
				<div class="gallery__item gallery__item--4">
					<div class="gallery__link">
						<img src="images/x4.jpg" class="gallery__image" />
						<div class="gallery__overlay">
							<span>Hang Tú Làn</span>
							<input type="checkbox" id="control-modal" style="display:none" />
							<label for="control-modal" class="btn5">Xem thêm</label>
						</div>
					</div>
				</div>
		
				<div class="gallery__item gallery__item--5">
					<div  class="gallery__link">
						<img src="images/x5.jpg" class="gallery__image" />
						<div class="gallery__overlay">
							<span>Suối Moọc</span>
							<input type="checkbox" id="control-modal" style="display:none" />
							<label for="control-modal" class="btn5">Xem thêm</label>
						</div>
					</div>
				</div>
		
				<div class="gallery__item gallery__item--6">
					<div  class="gallery__link">
						<img src="images/x6.png" class="gallery__image" />
						<div class="gallery__overlay">
							<span>Làng Bích Họa - Cảnh Dương</span>
							<input type="checkbox" id="control-modal" style="display:none" />
							<label for="control-modal" class="btn5">Xem thêm</label>
						</div>
					</div>
				</div>
		
				<div class="gallery__item gallery__item--7">
					<div class="gallery__link">
						<img src="images/x7.jpg" class="gallery__image" />
						<div class="gallery__overlay">
							<span>Ozo Treetop Park</span>
							<input type="checkbox" id="control-modal" style="display:none" />
							<label for="control-modal" class="btn5">Xem thêm</label>
						</div>
					</div>
				</div>
		
				<div class="gallery__item gallery__item--8">
					<div class="gallery__link">
						<img src="images/x8.jpg" class="gallery__image" />
						<div class="gallery__overlay">
							<span>Bãi Đá Nhảy</span>
							<input type="checkbox" id="control-modal" style="display:none" />
							<label for="control-modal" class="btn5">Xem thêm</label>
						</div>
					</div>
				</div>
		
				<div class="gallery__item gallery__item--9">
					<div class="gallery__link">
						<img src="images/x9.jpg" class="gallery__image" />
						<div class="gallery__overlay">
							<span>Cồn Cát Quang Phú</span>
							<input type="checkbox" id="control-modal" style="display:none" />
							<label for="control-modal" class="btn5">Xem thêm</label>
						</div>
					</div>
				</div>
		
				<div class="gallery__item gallery__item--10">
					<div class="gallery__link">
						<img src="images/x10.jpg" class="gallery__image" />
						<div class="gallery__overlay">
							<span>Chùa Hoằng Phúc</span>
							<input type="checkbox" id="control-modal" style="display:none" />
							<label for="control-modal" class="btn5">Xem thêm</label>
						</div>
					</div>
				</div>
		
				<div class="gallery__item gallery__item--11">
					<div class="gallery__link">
						<img src="images/x11.jpg" class="gallery__image" />
						<div class="gallery__overlay">
							<span>Suối Bang</span>
							<input type="checkbox" id="control-modal" style="display:none" />
							<label for="control-modal" class="btn5">Xem thêm</label>
						</div>
					</div>
				</div>
		
				<div class="gallery__item gallery__item--12">
					<div class="gallery__link">
						<img src="images/x12.jpg" class="gallery__image" />
						<div class="gallery__overlay">
							<span>Soi Farm</span>
							<input type="checkbox" id="control-modal" style="display:none" />
							<label for="control-modal" class="btn5">Xem thêm</label>
						</div>
					</div>
				</div>
		
		
				<div class="gallery__item gallery__item--13">
					<div class="gallery__link">
						<img src="images/x13.jpg" class="gallery__image" />
						<div class="gallery__overlay">
							<span>East Hill</span>
							<input type="checkbox" id="control-modal" style="display:none" />
							<label for="control-modal" class="btn5">Xem thêm</label>
						</div>
					</div>
				</div>
		
				<div class="gallery__item gallery__item--14">
					<div class="gallery__link">
						<img src="images/x14.jpg" class="gallery__image" />
						<div class="gallery__overlay">
							<span>Hang Sơn Đoòng</span>
							<input type="checkbox" id="control-modal" style="display:none" />
							<label for="control-modal" class="btn5">Xem thêm</label>
						</div>
					</div>
				</div>
		
				<div class="gallery__item gallery__item--15">
					<div class="gallery__link">
						<img src="images/x15.jpg" class="gallery__image" />
						<div class="gallery__overlay">
							<span>Vũng Chùa - Đảo Yến</span>
							<input type="checkbox" id="control-modal" style="display:none" />
							<label for="control-modal" class="btn5">Xem thêm</label>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<div id="binh" class="tabcontent">
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-section animate-box">
						<h3>VĂN HÓA</h3>
						<p> Quảng Bình không chỉ có những thắng cảnh nổi tiếng tuyệt đẹp như vườn quốc gia Phong Nha Kẻ Bàng, biển Nhật Lệ, biển Đá Nhảy… mà nơi đây có nhiều di tích lịch sử, văn hóa, có giá trị như Chùa Hoằng Phúc, Vũng Chùa, Hang Tám Cô…. Hiện nay Quảng Bình có trên 200 di tích và dấu hiệu di tích, 95 di tích đã được xếp hạng (có 51 di tích cấp quốc gia). Quảng Bình Travel xin giới thiệu đến quý khách những điểm du lịch tâm linh hấp dẫn không nên bỏ qua khi du lịch Quảng Bình.
					</div>
				</div>
			</div>
		</div>
		<div class="containervh">
			<div class="cardvh">
				<div class="imgBx">
					<img width="360" height="280"src="images/xiu7.jpg">
				</div>
				<div class="contentvh">
					<h1>Quảng Bình Quan</h1>
					<p>
					Đây chính là biểu tượng của mảnh Quảng Bình.
					 Nơi đây không chỉ nổi tiếng có những hang động kỳ vĩ nổi tiếng mà còn có những di tích lịch sử giá trị. Trong đó phải kể đến Quảng Bình Bình Quan, được xây dựng năm 1639 từ thời Chúa Nguyễn là một trong những thành lũy kiên cố, và trọng yếu hàng đầu của Chúa Nguyễn ở Đàng Trong. Trải qua thời gian, sau nhiều lần bị hư hại nặng nề, Quảng Bình Quan đã được phục chế về gần như nguyên dạng để tồn tại như một minh chứng lịch sử.
					 Quảng Bình Quan tọa lạc ngay trung tâm phường Đồng Hải giữa bốn ngả đường : phía Tây là đường đi lên Đức Ninh, phía Đông là đường Mẹ Suốt đi xuống bến sông Nhật Lệ, phía Bắc là đường đi Hà Nội, phía Nam là đường đi Huế.</p>
				</div>
			</div> 
		
			<div class="cardvh">
			 <div class="imgBx">
				 <img width="360" height="280"src="images/xiu8.jpg">
			 </div>
			 <div class="contentvh" >
				 <h1 >Làng nghề nón lá Thổ Ngọa</h1>
				 <p>Thổ Ngọa nằm ở phường Quảng Thuận, TX Ba Đồn là mảnh đất có bề dày văn hóa, lịch sử có gần 40% số hộ dân tham gia vào nghề truyền thống làm nón. Tuy là nghề phụ nhưng nghề làm nón nơi đây rất phát triển, mang lại cho người dân nguồn thu nhập khá ổn định.
					 Sản phẩm nón lá Thổ Ngọa được xem như một thứ phục trang luôn gắn bó với người phụ nữ. 
					 Nón Thổ Ngọa luôn được cải tiến mẫu mã, nâng cao chất lượng nhằm hướng tới mục đích làm đẹp và tăng vẻ duyên dáng của người phụ nữ. 
					 Đã hàng trăm năm nghề nón truyền thống gắn bó thiết thân với đời sống của người dân Thổ Ngọa, nên dẫu hôm nay, 
					 những phường làm nón không còn rộn rã như thuở trước, thì nghề nón vẫn làm nên nét đặc trưng riêng có của mảnh đất này.
		
				 </p>
			 </div>
		 </div> 
		
		 <div class="cardvh">
			 <div class="imgBx">
				 <img width="360" height="280"src="images/xiu6.jpg">
			 </div>
			 <div class="contentvh">
				 <h1>Vũng Chùa - Đảo Yến</h1>
				 <p>Nằm cách Đèo Ngang 7km về phía nam, thuộc thôn Thọ Sơn, xã Quảng Đông, huyện Quảng Trạch (Quảng Bình). 
					 Nơi an nghỉ cuối cùng của Đại tướng Võ Nguyên Giáp chính là ngọn núi Thọ, mũi Rồng ở vùng biển Vũng Chùa – Đảo Yến thuộc dãy Hoành Sơn đâm ngang ra biển. 
					 Nằm bên vịnh nước sâu Hòn La, dưới chân Đèo Ngang hùng vĩ, Vũng Chùa là bãi biển sạch, cát trắng trải dài, được bao quanh bởi màu xanh ngút ngàn của cây cỏ. 
					 So với nhiều bãi biển khác, Vũng Chùa thu hút du khách bởi vẻ đẹp hoang sơ và yên bình. 
					 
					 Đây không chỉ là điểm du lịch tâm linh mà còn là một thắng cảnh tuyệt đẹp không nên bỏ qua nếu bạn du lịch Quảng Bình. 
		
		
				 </p>
			 </div>
		 </div> 
		
		 <div class="cardvh">
			 <div class="imgBx">
				 <img width="360" height="280"src="images/xiu4.jpg">
			 </div>
			 <div class="contentvh">
				 <h1>Lễ Cầu Ngư</h1>
				 <p>Lễ hội thường được ngư dân các làng biển tổ chức vào dịp tháng Giêng (âm lịch) nhằm tưởng nhớ ơn đức của cá Ông, cá Bà, mong cho trời yên biển lặng, 
					 mưa thuận gió hòa, nhiều tôm cá để người dân ấm no. Lễ Cầu ngư còn cầu mùa, cầu phúc, cầu thiện, cầu an, cầu lành, cầu cho thiên nhiên thuận hòa,
					  đất nước thanh bình, làng xã yên vui, nhà nhà hạnh phúc.
					  Lễ hội Cầu ngư Quảng Bình có mặt trong Danh mục Di sản văn hóa phi vật thể quốc gia 
					   không chỉ là một sự kiện văn hóa quan trọng của tỉnh Quảng Bình mà còn là động lực thúc đẩy ngành du lịch Quảng Bình tiếp tục phát triển mạnh mẽ trong thời gian tới.
					 </p>
			 </div>
		 </div> 
		
		 <div class="cardvh">
			 <div class="imgBx">
				 <img width="360" height="280"src="images/xiu5.jpg">
			 </div>
			 <div class="contentvh">
				 <h1>Lăng Mộ Lễ Thành Hầu Nguyễn Hữu Cảnh</h1>
				 <p> Nguyễn Hữu Cảnh sinh năm 1650 tại thôn Phước Long, Chương Tín, huyện Phong Lộc (nay là xã Vạn Ninh, huyện Quảng Ninh, tỉnh Quảng Bình).
					 Là người đóng góp công sức rất lớn trong công cuộc mở cõi phương Nam. 
					 Lăng Mộ Lễ Thành Hầu Nguyễn Hữu Cảnh tọa lạc trên một ngọn đồi cao, không gian rộng rãi thoáng mát của dãy núi An Mã thuộc xã Trường Thủy, huyện Lệ Thủy
					 đã được xếp hạng là di tích lịch sử cấp quốc gia trở thành điểm đến ý nghĩa không nên bỏ qua mỗi khi du lịch Quảng Bình. Hiện nay, trong khuôn viên lăng mộ Nguyễn Hữu Cảnh ở Quảng Bình còn có một tấm bia đá rất có giá trị.</p>
			 </div>
		 </div> 
		
		 <div class="cardvh">
			 <div class="imgBx">
				 <img width="360" height="280"src="images/xiu3.jpg">
			 </div>
			 <div class="contentvh">
				 <h1>Lễ Hội Đua Thuyền</h1>
				 <p>Nếu bạn có dịp du lịch Quảng Bình vào dịp “Tết Độc Lập” quốc khánh 2/9 thì hãy đến huyện Lệ Thủy 
					 để hòa mình vào không khí sôi nổi náo nhiệt của lễ hội đua thuyền truyền thống trên sông Kiến Giang.
					 Đây là hoạt động văn hóa, thể dục thể thao được tổ chức thường niên nhằm khơi dậy tinh thần đoàn kết dân tộc, 
					 tinh thần thượng võ trên quê hương Đại tướng Võ Nguyên Giáp. Xuất phát từ hội bơi, đua của làng, 
					 của tổng với mục đích cầu cho mưa thuận, gió hòa mùa màng bội thu; thi thố sức trai, 
					 sức gái để chuẩn bị vật lộn với mùa mưa bão, chế ngự thiên nhiên.
					
					 Ngày 27.8.2019, Bộ trưởng Bộ Văn Hóa -Thể Thao – Du Lịch Nguyễn Ngọc Thiện đã ký quyết định đưa lễ hội đua, bơi thuyền trên sông Kiến Giang vào danh mục di sản văn hóa phi vật thể quốc gia.</p>
			 </div>
		 </div> 
		
		 <div class="cardvh">
			 <div class="imgBx">
				 <img width="360" height="280"src="images/xiu2.jpg">
			 </div>
			 <div class="contentvh">
				 <h1>Hội Rằm Tháng 3 - Minh Hóa</h1>
				 <p> Được diễn ra từ ngày 10 – 15/3 âm lịch với nhiều nét đặc sắc, hấp dẫn. Đây là dịp để đồng bào các dân tộc trên địa bàn huyện giao lưu, gặp gỡ và tổ chức mua bán, trao đổi hàng hóa và cũng là để quảng bá hình ảnh du lịch của địa phương.
					 Nếu bạn du lịch Quảng Bình vào dịp này hãy đến với Minh Hóa để hoà mình vào không khí tưng bừng của lễ hội đêm trăng rằm tháng ba huyền ảo, tham gia phiên chợ tình.
					 Lắng nghe những làn điệu dân ca truyền thống, tìm hiểu đặc sản tiếng "Nguồn" mà chỉ nơi đây mới có.
					 Đặc biệt, năm nay, huyện Minh Hóa còn long trọng tổ chức lễ đón nhận bằng di sản phi vật thể quốc gia “Nghệ thuật trình diễn dân gian, tri thức dân gian hò thuốc cá” và bằng công nhận di tích lịch sử căn cứ kháng chiến vua Hàm Nghi tại Minh Hóa.
					 </p>
			 </div>
		 </div> 
		
		 <div class="cardvh">
			 <div class="imgBx">
				 <img width="360" height="280"src="images/xiu1.jpg">
			 </div>
			 <div class="contentvh">
				 <h1>Tượng đài mẹ Suốt</h1>
				 <p> Tọa lạc trên bến đò sông Nhật Lệ, là di tích lịch sử Quảng Bình để lại nhiều cảm xúc và 
					 ấn tượng cho mỗi du khách khi ghé thăm nơi này. Năm 2003, tượng đài mẹ Suốt cùng quần thể khu tưởng niệm được cắt 
					 băng khánh thành. Tượng đài mẹ Suốt cũng như tinh thần của mẹ sống mãi cùng với năm tháng và lưu mãi trong lòng những 
					 người con Quảng Bình về một hình ảnh người phụ nữ anh hùng.
					 Tượng đài cao 7 mét bao gồm cả bệ. Khuôn mặt hướng về phía sông Nhật Lệ như luôn đau đáu nỗi mong cống hiến nhiều hơn cho đất nước, cho những người con dân tộc.
					 Bên cạnh di tích tượng đài mẹ Suốt, bến đò mẹ chèo biết bao chuyến đò năm xưa cũng được người dân giữ gìn và bảo vệ. 
					 Di tích bến đò mẹ Suốt nằm ở thôn Trung Kính, Bảo Ninh, gần với chợ Đồng Hới ở phía tả ngạn sông Nhật Lệ.
				 </p>
			 </div>
		 </div> 
		 <div class="cardvh">
			<div class="imgBx">
				<img width="360" height="280"src="images/m5.jpg">
			</div>
			<div class="contentvh">
				<h1>Chùa Non - Núi Thần Đinh</h1>
				<p>Nằm về phía nam thành phố Đồng Hới. Núi có hình dáng khác với hình dạng các ngọn núi khác ở chung quanh. Nó có hình tựa như một đụn rơm lớn, nhưng chỏm núi lại bằng phẳng chứ không nhọn như nhiều chỏm núi khác.
					Trên đỉnh núi Thần Đinh có một khu đất rộng, khá bằng phẳng là nơi người xưa đã chọn để xây dựng chùa Non. Chùa Non bị thời gian và chiến tranh tàn phá, nay chỉ còn lại một ngôi miếu nhỏ và nền móng của ngôi chùa cũ. Nhiều nhà đầu tư đang xin được khôi phục xây dựng lại chùa Non làm nơi dâng hương thờ Phật. Đến đây, du khách đều được nghe kể về sự linh thiêng của chùa Non. Những người thành tâm khi đến dâng hương uống nước giếng nước thần, về sau sẽ gặp nhiều may mắn, tránh được ốm đau bệnh tật, làm ăn phát đạt.
				</p>
			</div>
		</div>  

		<div class="cardvh">
			 <div class="imgBx">
				 <img width="360" height="280"src="images/m6.jpg">
			 </div>
			 <div class="contentvh" >
				 <h1 >Đền tưởng niệm liệt sỹ Trường Sơn bến phà Long Đại</h1>
				 <p>Nằm trên trục đường chiến lược 15, tại xã Hiền Ninh ,Quảng Ninh là điểm giao thông huyết mạch trên tuyến đường Hồ Chí Minh, bến phà Long Đại trở thành một trong những tọa độ lửa là trọng điểm ném bom, phá hoại điên cuồng của đế quốc Mỹ trong những năm 1965 đến 1972. Nơi đây đã hứng chịu hàng triệu tấn bom dội xuống suốt giai đoạn 1965 – 1972. 
				 Đền Tưởng niệm liệt sĩ Trường Sơn bến phà Long Đại là tổng thể 3 công trình gồm đền chính (nơi thờ tự linh hồn các liệt sĩ), tháp báo ân và tháp chuông. Xung quanh đền là hệ thống bậc tam cấp, cây cảnh, vườn hoa được thiết kế hòa hợp với tự nhiên. Để tri ân các anh hùng liệt sỹ đã hi sinh anh dũng tại bến phà. 
				 </p>
			 </div>
		 </div> 
		
		 <div class="cardvh">
			 <div class="imgBx">
				 <img width="360" height="280"src="images/m7.jpg">
			 </div>
			 <div class="contentvh">
				 <h1>Đền Thờ Liễu Hạnh Công Chúa</h1>
				 <p>Đền nằm dưới chân núi Đèo Ngang, ở một khu đất khá bằng phẳng, sát đường thiên lý Bắc – Nam trước đây, phía sau đền là dãy Hoành Sơn, ngay trước mặt là hồ nước ngọt của xã Quảng Đông, mặt đền quay hướng Nam cũng là hướng biển. Đền thờ Liễu Hạnh công chúa ở Đèo Ngang, Quảng Bình vừa có sự tích riêng, vừa là hình tượng Mẫu Liễu Hạnh chung trong đời sống tâm linh của nhân dân ta.
		
				 </p>
			 </div>
		 </div> 
		
		 <div class="cardvh">
			 <div class="imgBx">
				 <img width="360" height="280"src="images/m8.jpg">
			 </div>
			 <div class="contentvh">
				 <h1>Nhà lưu niệm Đại tướng Võ Nguyên Giáp</h1>
				 <p>Nằm cách Thành phố Đồng Hới hơn 40km về phía Nam, thuộc huyện Lệ Thủy. Nơi đây nổi tiếng có dòng Kiến Giang như dải lụa màu xanh; những cánh đồng thẳng cánh cò bay; những cây đa, bến nước, sân đình và giọng hò khoan man mác. Chắc chắn sẽ làm xiêu lòng lữ khách khi dừng chân ở miền quê được xem là vựa lúa của Quảng Bình. Đây cũng chính là quê hương của Đại tướng Võ Nguyễn Giáp. Và càng thú vị hơn khi du khách được đến thăm căn nhà lưu niệm để hiểu rõ hơn về nơi in dấu kỷ niệm tuổi thơ của Đại tướng.
					 </p>
			 </div>
		 </div> 
			
			 
		 </div>
		 
	</div>
	<div id="xiu" class="tabcontent">
		<div id="fh5co-tours" class="fh5co-section-gray" style="padding: 4em;">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center heading-section animate-box">
						<h3>TEAM BUILDING</h3>
						<p> Nhằm rèn luyện khả năng lãnh đạo, xây dựng tinh thần đoàn kết teamwork tập thể, nâng cao khả năng sáng tạo, tư duy, sự khéo léo, óc nhanh nhạy, và đồng thời có những bức ảnh/video cực đẹp để truyền thông cho thương hiệu của doanh nghiệp, chương trình Team Building được xây dựng và thiết kế riêng cho các tour có nhu cầu, concept phong phú, thử thách đa dạng hướng tới những mục tiêu khác nhau. Liên hệ ngay với chúng tôi – QuangBinh Travel – hứa hẹn sẽ mang lại cho quý khách những trải nghiệm thật ý nghĩa</p>
					</div>
				</div>
				<div class="row row-bottom-padded-md">
					<div class="col-md-6 animate-box">
						<div class="row">
							<div class="col-md-12 text-center">
								<img style="width: 100px; height: 100px; padding: 10px ;" src="images/hihi.png" alt="">
								<p style="color: #333; font-size: 24px; font-weight: bold;">CÁ NHÂN</p>
							</div>
						</div>
						<div class="row">
							<div class="enho col-md-12">
								<div class="enho col-md-12" style="line-height: 3rem; align-items: center; font-size: 16px; color: #333;">
									<li>Team building giúp phá vỡ mọi rào cản vô hình, giới hạn của bản thân.</li> 
								   <li>Phát huy khả năng tư duy, sáng tạo của mỗi cá nhân.</li>
								   <li>Tìm ra những khả năng tiềm ẩn của mỗi cá nhân.</li>
								   <li>Thúc đẩy sự tự tin, chủ động trong công việc.</li>
								   <li>Thực tập trở thành leader thông qua việc xây dựng kế hoạch, tổ chức, phân công công việc, bố trí, sắp xếp các thành viên và tài nguyên hợp lý để hướng team đạt được mục tiêu chung.</li>
								   <li>Trau dồi thêm nhiều kĩ năng cuộc sống thông qua các hoạt động.</li>
							    </div>
						    </div>
					    </div>
					</div>	
					<div class="col-md-6 animate-box">
						<div class="row">
							<div class="col-md-12 text-center">
								<img style="width: 100px; height: 100px; padding: 10px ;" src="img/ngu12.png" alt="">
								<p style="color: #333; font-size: 24px; font-weight: bold;">NHÓM</p>
							</div>
						</div>
						<div class="row">
							<div class="enho col-md-12" style="line-height: 3rem; align-items: center; font-size: 16px; color: #333;">
									<li>Team building giúp xây dựng được tinh thần đoàn kết, niềm tin giữa những cá nhân với nhau. </li>
									<li>Mang đến bầu không khí thư giãn thoải mái, giảm stress trong công việc.</li>
									<li>Nhận biết điểm mạnh, điểm yếu của từng cá nhân để phối hợp tốt hơn.</li>
									<li>Giúp các thành viên biết dựa trên sức mạnh tập thể để sáng tạo, và đưa ra các giải pháp mới nhằm giải quyết vấn đề.</li>
									<li>Xây dựng lòng tin và cùng nhau hỗ trợ hoàn thành mục tiêu chung.</li>
									<li>Khẳng định tầm quan trọng của kỹ năng làm việc nhóm</li> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="building210" style="background-image: url(img/ngu13.png); background-size: 100%;height: 515px;" >
			<div class="building2101">
				<p style="font-size: 18px;"> <em> <span style="font-size: 24px;"> "</span>Tham gia vào hoạt động team building của QuangBinh Travel, các đội/nhóm sẽ có nhiều hoạt động thú vị để lựa chọn như : Đua vượt chướng ngại vật, săn tìm kho báu, đua thuyền, thám hiểm hang động và nhiều hoạt động khác. Khiến những người tham gia trở nên gắn bó và đoàn kết hơn qua từng trải nghiệm.<span style="font-size: 24px;"> "</span></em></p>				
			</div>
		    <div class="buil">
			    <button style="font-size: 18px;">Liên hệ ngay</button>
			</div>
		</div>

			<div class="container" style="margin-top: 50px;">
				<div class="row row-bottom-padded-md">
					<div class="col-md-4 animate-box">
						<div class="row">
							<div class="col-md-12" style="padding:60px 0px">
								<strong style="color: black; font-size: 32px;">Giới thiệu</strong>
							</div>
						</div>
					</div>	
					<div class="col-md-8 animate-box">
						<div class="row">
							<div class="col-md-12">
								<p style="line-height: 1.6; font-size: 16px;"> &emsp; Team building trong rừng nhiệt đới là cơ hội tuyệt vời để thoát khỏi chốn thành thị hoặc các điểm du lịch tấp nập. Tuy nhiên, đây lại không phải là dịp để nghỉ ngơi mà là để trải nghiệm cuộc sống, xây dựng tinh thần đồng đội và nâng cao khả năng làm việc nhóm thông qua các trò chơi ly kỳ, các hoạt động phiêu lưu mạo hiểm. Ngoài ra, mọi người còn có cơ hội tìm hiểu thêm về văn hóa thông qua việc thưởng thức đặc sản địa phương, trò chuyện với người dân tộc bản địa và cùng cắm trại trong rừng.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-md-4 animate-box">
						<div class="row">
							<div class="col-md-12" style="padding:200px 0px;">
								<strong style="color: black; font-size: 32px;">Ý tưởng</strong>
							</div>
						</div>
					</div>	
					<div class="col-md-8 animate-box">
						<div class="row">
							<div class="col-md-12">
								<a style="line-height: 1.6; font-size: 16px; color: #333;"> &emsp;Chúng tôi có rất nhiều ý tưởng để giúp bạn lên kế hoạch cho một chương trình Team-building lý tưởng. Một số ý tưởng sẵn có như sau :</a><br>
							</div>
						    <div class="col-md-12">		
								<div class="tick" style="padding: 10px 0;">
									<div class="tick1"> 
										<img style="width: 18px; height: 18px;" src="img/ngu1.png">
									</div>
									<div class="tick2">
									    <p><span style="color: #F78536; font-size: 18px;">Tour thiết kế như một cuộc đua :</span> Một nhóm có thể chia thành nhiều đội nhỏ và thi thố với nhau để đạt được những mục tiêu theo chương trình. </p> 
									</div>
								</div>
								<div class="tick" >
									<div class="tick1"> 
										<img style="width: 18px; height: 18px;" src="img/ngu1.png">
									</div>
									<div class="tick2">
									    <p><span style="color: #F78536; font-size: 18px;">Tour thiết kế cho cả nhóm :</span> Mọi người trong nhóm sẽ cùng nhau tham gia các trò chơi, hoạt động hoặc thử thách mạo hiểm trong suốt chương trình.</p> 
									</div>
								</div>
								<div class="tick">
									<div class="tick1"> 
										<img style="width: 18px; height: 18px;" src="img/ngu1.png">
								    </div>
									<div class="tick2">
										<p><span style="color: #F78536; font-size: 18px;">Tour rèn luyện kỹ năng :</span> Mọi người sẽ được học và thực hành các kỹ năng cắm trại, kỹ năng đi rừng, đi hang, bơi hang, sơ cấp cứu, kỹ năng tồn tại,... Các kỹ năng này sẽ được giới thiệu bởi chuyên gia hang động hoặc các tour guide chuyên nghiệp của chúng tôi.</p> 
									</div>
								</div>
								<div class="tick">
									<div class="tick1"> 
						     			<img style="width: 18px; height: 18px;" src="img/ngu1.png">
									</div>
									<div class="tick2">
						    			<p><span style="color: #F78536; font-size: 18px;">Tour nâng cao nhận thức về môi trường và các dự án cộng đồng :</span>
											 QuangBinh Travel sẽ chia sẻ với bạn các kiến thức về bảo tồn sinh học tại nơi hoang dã. Vào ngày cuối, mọi người sẽ chung tay giúp đỡ làng quê Tân Hóa bằng việc tham gia lao động công ích.</p> 
									</div>
								</div>
								<div class="tick">
									<div class="tick1"> 
									    <img style="width: 18px; height: 18px;" src="img/ngu1.png">
									</div>
								    <div class="tick2">
										<p><span style="color: #F78536; font-size: 18px;">Tour thiết kế bởi riêng bạn ! </span> Chúng tôi sẵn sàng hợp tác với bất kỳ ý tưởng nào các bạn đưa ra (với sự cân nhắc kỹ lưỡng về tính an toàn).</p>
									</div>
								</div>										
							</div>
						</div>
					</div>
				</div>
			</div>
	
			<div class="building2">
				<img style="width: 100%; height: 500px; padding: 50px 0; " src="img/ngu11.jpg" >	
			</div>

			<div class="container" style="margin-top: 50px;">
				<div class="row row-bottom-padded-md">
					<div class="col-md-4 animate-box">
						<div class="row">
							<div class="col-md-12" style="padding: 200px 0px;">
								<strong style="color: black; font-size: 32px;" >Nhóm</strong>
							</div>
						</div>
					</div>	
					<div class="col-md-8 animate-box">
						<div class="row">
							<div class="col-md-12">
								<p style="line-height: 1.6; font-size: 18px; color: #333;">QuangBinh Travel có thể nhận tour team-building với các nhóm sau :</p><br> 
									<div class="tick">
										<div class="tick1" > 
											<img style="width: 18px; height: 18px;" src="img/ngu1.png">
										</div>
										<div class="tick2" >
										<p><span style="color: #F78536; font-size: 18px;">Số lượng người trong 1 nhóm :</span> Từ 4 tới 100 người (còn tùy thuộc vào thời tiết và tình trạng đặt chỗ). </p> </div>
									</div>
									<div class="tick">
										<div class="tick1"> 
											<img style="width: 18px; height: 18px;" src="img/ngu1.png">
										</div>
										<div class="tick2">
										<p><span style="color: #F78536; font-size: 18px;">Độ tuổi các thành viên trong nhóm :</span> Từ 12 đến 65 tuổi.</p> </div>
										</div>
										<div class="tick">
											<div class="tick1"> 
												<img style="width: 18px; height: 18px;" src="img/ngu1.png">
											</div>
											<div class="tick2">
										<p><span style="color: #F78536; font-size: 18px;">Ngôn ngữ sử dụng :</span> Tiếng Việt hoặc Tiếng Anh.</p> </div>
										</div>
										<div class="tick">
											<div class="tick1"> 
												<img style="width: 18px; height: 18px;" src="img/ngu1.png">
											</div>
											<div class="tick2">
										<p> Tất cả các nhóm với kinh nghiệm tham gia hoạt động ngoài trời khác nhau.</p> </div>
										</div>
									<p style="padding: 10px 0;"> &emsp; Giá của tour team-building phụ thuộc vào các yếu tố sau: số lượng người trong 1 nhóm, thời gian tour, loại hình tour và yêu cầu thêm (nếu có) (sẽ thêm phụ phí nếu đi cuối tuần hay vào kì nghỉ lễ). Những nhóm lớn nên đặt chỗ càng sớm càng tốt để chúng tôi có thể chuẩn bị sớm và đầy đủ cũng như để hạn chế việc bị trùng với các tour/nhóm khác.</p>
									   <div class="tick3" style="padding-bottom: 50px;">
										<strong >
											<em>
												Mọi thắc mắc, vui lòng liên hệ với chúng tôi qua email: quangbinhhtravel@gmail.com hoặc số điện thoại sales hotline : +84 (0) 123456789. 
											</em>
										</strong>
									</div>
								</div>							
						</div>
					</div>
				</div>
			</div>
			 <div class="building3" style="padding: 50px 0; text-align: center; color: black; " >
				<h2>MỘT SỐ HÌNH ẢNH KHÁCH HÀNG CỦA QUANGBINH TRAVEL</h2>
			 </div>	
			 <div class="building4" style="margin-left: 2.4%;">
				<div class="row">
					    <div class="column">						
							<a data-fancybox="hi" href="img/ngu4.jpg"  data-table="">
								<img src="img/ngu4.jpg" style="width:100%"> 
							</a>
					    </div>
						<div class="column">
							<a data-fancybox="hi" href="img/ngu5.jpg"  data-table="">
								<img src="img/ngu5.jpg" style="width:100%"> 
							</a>						</div>
						<div class="column">
							<a data-fancybox="hi" href="img/ngu6.jpg"  data-table="">
								<img src="img/ngu6.jpg" style="width:100%"> 
							</a>						</div>
						<div class="column">
							<a data-fancybox="hi" href="img/ngu7.jpg"  data-table="">
								<img src="img/ngu7.jpg" style="width:100%"> 
							</a>					    </div>
			        </div>
				    <div class="row">
						<div class="column">
							<a data-fancybox="hi" href="img/ngu3.jpg"  data-table="">
								<img src="img/ngu3.jpg" style="width:100%"> 
							</a>						
						</div>
						<div class="column">
							<a data-fancybox="hi" href="img/ngu8.jpg"  data-table="">
								<img src="img/ngu8.jpg" style="width:100%"> 
							</a>						
						</div>
						<div class="column">
							<a data-fancybox="hi" href="img/ngu9.jpg"  data-table="">
								<img src="img/ngu9.jpg" style="width:100%"> 
							</a>						
						</div>
						<div class="column">
							<a data-fancybox="hi" href="img/ngu10.jpg"  data-table="">
								<img src="img/ngu10.jpg" style="width:100%"> 
							</a>						
						</div>    
					</div>
					<div class="row">
						<div class="column">
							<a data-fancybox="hi" href="img/ngu15.jpg"  data-table="">
								<img src="img/ngu15.jpg" style="width:100%"> 
							</a>						
						</div>
						<div class="column">
							<a data-fancybox="hi" href="img/ngu16.jpg"  data-table="">
								<img src="img/ngu16.jpg" style="width:100%"> 
							</a>						
						</div>
						<div class="column">
						    <a data-fancybox="hi" href="img/ngu17.jpg"  data-table="">
								<img src="img/ngu17.jpg" style="width:100%"> 
							</a>						
						</div>
						<div class="column">
						    <a data-fancybox="hi" href="img/ngu18.jpg"  data-table="">
								<img src="img/ngu18.jpg" style="width:100%"> 
							</a>						
						</div>										  
					</div>							
			    </div>
	        </div>
	    </div>
    </div>
</div>
		
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "105896261698244");
  chatbox.setAttribute("attribution", "biz_inbox");
  window.fbAsyncInit = function() {
	FB.init({
	  xfbml            : true,
	  version          : 'v10.0'
	});
  };

  (function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
	fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>






<?php
include "footer.php";
?>