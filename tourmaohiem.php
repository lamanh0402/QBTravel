<?php
include "header.php";
?>
<script src="js/modernizr-2.6.2.min.js"></script>
<link rel="stylesheet" href="css/tourmh.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

<div class="fh5co-hero">
    <div class="fh5co-overlay">
		<div class="fh5co-cover">
			<div class="video">
				<video src="videos/video.mov" loop muted autoplay></video>
			</div>
			<div class="desc">
					<div class="container">
						<div class="row">
							
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">

								  <!-- Nav tabs -->
								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Máy bay</a>
								      </li>
								      <li role="presentation">
								    	   <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Khách sạn</a>
								      </li>
									  <li role="presentation" class="active" >
										<a href="#packages" aria-controls="packages" role="tab" data-toggle="tab">Tours</a>
								   </li>
								      
								   </ul>

								   <!-- Tab panes -->

									<div class="tab-content">
									 
									 <div role="tabpanel" class="tab-pane " id="flights">
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
													<input type="text" class="form-control" id="country" placeholder="Quảng Bình" />
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
													<label for="class">Hạng ghế:</label>
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
													<input type="text" class="form-control" id="country"/>
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
									
													<label for="class">Số Phòng :</label>
													<input type="text" class="form-control" id="number" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
											
													<label for="class">Số người lớn :</label>
													<input type="text" class="form-control" id="number" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
											
													<label for="class"> Số trẻ em :</label>
													<input type="text" class="form-control" id="number" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>
										
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Tìm kiếm">
											</div>
										</div>
									 </div>

									 <div role="tabpanel" class="tab-pane active" id="packages">
									 	<div class="row">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Khởi hành từ :</label>
													<input type="text" class="form-control" id="country"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Đến :</label>
													<input type="text" class="form-control" id="country"placeholder="Quảng Bình"/>
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
											
													<label for="class"> Số Phòng :</label>
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
					</div>
				</div>
				
		</div>

		
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center heading-section animate-box">
						<h3>TOUR MẠO HIỂM</h3>
						<p style="font-size: 1.8rem;padding-top:30px;">Bạn thích những chuyến đi dài, khám phá những hang động hùng vĩ, bơi và cắm trại bên trong hang, hay đơn giản chỉ là tham gia <br> một chuyến trải nghiệm trong ngày, tất cả đều dành cho bạn.</p>
						<p style="font-size: 1.8rem;">Quý khách cần đặt tour hoặc tư vấn thêm xin vui lòng liên hệ <a style="color: #fd5e0c;">Hotline : 0123456789</a></p>
					</div>
				</div>
			</div>
			<!--<div class="wrapper ">
                <div class="carousel owl-carousel ">-->
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
						<img src="images/m12.jpg" alt="">
						<div class="contentt">
							<div>
								<span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Findex.html&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
								<span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Fnb1.html&layout=button_count&size=small&width=86&height=20&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></i></span>
								</div>
							<a class="title" style="font-size: 17px;">Trải nghiệm hệ thống hang động Tú Làn</a><br>
							<a class="tt"><i class="icon-calendar"></i>  1 ngày</a><br>
							<a class="tt"><i class="icon-map-marker" ></i> Hang động Tú Làn</a><br>
							<a style=" color: #333;" ><del>2.500.000 VNĐ</del><a style="color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;"> 2.125.000 VNĐ</a></a>
							<div class="stars" style="padding-top: 10px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="tour.php?id=4">Chi tiết</a></p>
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
							<a class="title" style="font-size:17px;">Khám Phá Hang Én</a><br> <br>
							<a class="tt"><i class="icon-calendar"></i>  2 ngày</a><br>
							<a class="tt"><i class="icon-map-marker" ></i> Hang Én</a><br>
							<a style=" color: #333;" ><del>7.600.000 VNĐ</del><a style='color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;'> 6.460.000 VNĐ</a></a>
							<div class="stars" style="padding-top: 10px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="tour.php?id=2">Chi tiết </a></p>
							</div>						
						</div>
					</div>
					<div class="card animate-box">
						<span class="discount">-15%</span>
						<img src="images/m13.jpg" alt="">
						<div class="contentt">
							<div>
								<span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Findex.html&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
								<span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Fnb1.html&layout=button_count&size=small&width=86&height=20&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></i></span>
							</div>
							<a class="title" style="font-size:17px;">Thám hiểm Hang Va</a><br> <br>
							<a class="tt"><i class="icon-calendar"></i>  2 ngày</a><br>
							<a class="tt"><i class="icon-map-marker" ></i> Phong Nha - Kẻ Bàng</a><br>
							<a style=" color: #333;" ><del>9.490.000 VNĐ</del><a style='color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;'> 8.066.500 VNĐ</a></a>
							<div class="stars" style="padding-top: 10px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="tour.php?id=7">Chi tiết</a></p>
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
							<a class="title" style="font-size: 17px;">Tour Phong Nha 4500m - Chinh phục xuyên Sơn Hồ</a><br> 
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
						<img src="images/m14.jpg" alt="">
						<div class="contentt">
							<div>
								<span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Findex.html&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
								<span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Fnb1.html&layout=button_count&size=small&width=86&height=20&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></i></span>
								</div>
							<a class="title" style="font-size: 17px;">Tour Khám Phá Hang Trạ Ang  </a><br><br>
							<a class="tt"><i class="icon-calendar"></i>  1 ngày </a><br>
							<a class="tt"><i class="icon-map-marker" ></i> Hang Trạ Ang</a><br>
							<a style=" color: #333;" ><del>1.500.000 VNĐ</del><a style='color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;'> 1.275.000 VNĐ</a></a>

							<div class="stars" style="padding-top: 10px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="tour.php?id=8">Chi tiết</a></p>
							</div>
						</div>
					</div>	
					

					<div class="card animate-box">
						<span class="discount">-15%</span>
						<img src="images/m15.jpg" alt="">
						<div class="contentt">
							<div>
								<span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Findex.html&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
								<span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Fnb1.html&layout=button_count&size=small&width=86&height=20&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></i></span>
								</div>
							<a class="title" style="font-size: 17px;">Tour Động Thiên Đường – Hang Tám Cô</a><br>
							<a class="tt"><i class="icon-calendar"></i>  1 ngày</a><br>
							<a class="tt"><i class="icon-map-marker" ></i> Động Thiên Đường – Hang Tám Cô</a><br>
							<a style=" color: #333;" ><del>1.390.000 VNĐ</del><a style='color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;'> 1.181.500 VNĐ</a></a>

							<div class="stars" style="padding-top: 10px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="tour.php?id=9">Chi tiết</a></p>
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
		





<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);margin-top:80px">
    <div class="container">
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
<footer>
		<div id="footer">
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
						<h3>Công ty</h3>
						<p>Tất cả các điểm đến hấp dẫn của Du lịch Quảng Bình sẽ được chúng tôi cập nhật đến Du khách, các Tour Quảng Bình đa dạng và phong phú về điểm đến và thời gian tham quan. Quý khách có thể đặt các Tour Quảng Bình trên website của chúng tôi.</p>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
						<h3>Thông tin liên hệ</h3>
						<ul>
							<li><a href="#"><i class="icon-map-marker"></i> 226 đường Trần Hưng Đạo, thành phố Đồng Hới, tỉnh Quảng Bình</a></li>
							<li><a href="#"><i class="icon-phone3"></i> 03643693924</a></li>
							<li><a href="#"><i class="icon-envelop"></i>quangbinhtravel@ gmail.com</a></li>
						</ul>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
						<h3>Thông tin cần biết</h3>
						<ul>
							<li><a href="#">Điều khoản thanh toán</a></li>
							<li><a href="#">Phương thức thanh toán</a></li>
							<li><a href="#">Bảo mật thông tin</a></li>
							<li><a href="#">Chính sách quy định</a></li>
						</ul>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
						<h3>Thông tin hứu ích</h3>
						<ul>
							<li><a href="#">Những câu hỏi thường gặp</a></li>
							<li><a href="#">Chính sách hoàn/huỷ tour</a></li>
							<li><a href="#">Thông tin đặt phòng/khách sạn</a></li>
							<li><a href="#">Du lich Quảng Bình</a></li>
							<li><a href="#">Thông tin Quảng Bình</a></li>
						</ul>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link" style="width: 370px;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6812.634349845928!2d106.60626916188014!3d17.46762913921121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314756dc946cf8c1%3A0x5e4ff2bd272991b6!2zMjI2IFRy4bqnbiBIxrBuZyDEkOG6oW8sIE5hbSBTw6FjaCwgxJDhu5NuZyBI4bubaSwgUXXhuqNuZyBCw6xuaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1619251906723!5m2!1svi!2s" width="100%" height="300" frameborder="0" style="border:0;outline: none;" allowfullscreen="" loading="lazy"></iframe>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<p class="fh5co-social-icons">
							<a href="#"><i class="icon-twitter2"></i></a>
							<a href="#"><i class="icon-facebook2"></i></a>
							<a href="#"><i class="icon-instagram"></i></a>
							<a href="#"><i class="icon-dribbble2"></i></a>
							<a href="#"><i class="icon-youtube"></i></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="cuoi">
		<div class="container">
		    <div class="row">
		        <div  class="col-md-12">
			        <div class="cuoi-container">
				        <div class="cuoi-left">
					        <img style="height: 35px; width: 35px;" src="img/km4.gif" alt=""><p >Chương Trình Khuyến Mãi Tháng 7</p>
				        </div>
				        <div class="cuoi-right">
					        <button class="btnc"> <a href="khuyenmai.html">Xem ngay</a></button>
						</div>
			        </div>
		        </div>
	        </div>
		</div>
    </div>

	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->

	<script>
         $(".carousel").owlCarousel({
           margin: 20,
           loop: true,
           autoplay: true,
           autoplayTimeout: 2000,
           autoplayHoverPause: true,
           responsive: {
             0:{
               items:1,
               nav: false
             },
             600:{
               items:2,
               nav: false
             },
             1000:{
               items:3,
               nav: false
             }
           }
         });
    </script>
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

