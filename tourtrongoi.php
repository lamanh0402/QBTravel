<?php
include "header.php";
?>

<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
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
											</div>911
											
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

		</div>
		
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center heading-section animate-box">
						<h3>TOUR TRỌN GÓI</h3>
						<p style="font-size: 1.8rem;padding-top:30px;">Nếu bạn đang có kế hoạch du lịch Quảng Bình, hãy tham khảo các chương trình tour du lịch trên website của chúng tôi. QuangBinh Travel là công ty du lịch chuyên nghiệp hàng đầu tại Quảng Bình. Chúng tôi tự tin sẽ mang đến cho bạn chuyến du lịch Quảng Bình chất lượng nhất.</p>
						<p style="font-size: 1.8rem;">Quý khách cần đặt tour hoặc tư vấn thêm xin vui lòng liên hệ <a style="color: #fd5e0c;">Hotline : 0123456789</a></p>
					</div>
				</div>
				<div class="card-container">
				    <div class="card  animate-box " >
						<span class="discount">-15%</span>
						<img  src="images/m9.jpg" alt="">
						<div class="contentt">
							<div>
							<span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2F&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
							<span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Ftour2.html&layout=button_count&size=small&width=86&height=20&appId" width="86" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
							</div>
							<a class="title" style="font-size: 17px;">Tour Bắc Quảng Bình, viếng mộ đại tướng Võ Nguyên Giáp</a><br> 
							<a class="tt"><i class="icon-calendar"></i>  2 ngày</a><br>
							<a class="tt"><i class="icon-map-marker" ></i> Hang Tiên - Phong Nha</a><br> 
							<a style=" color: #333;" ><del>1.000.000 VNĐ</del><a style="color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;"> 850.000 VNĐ</a></a>
							<div class="stars" style="padding-top: 10px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="tour.php?id=11">Chi tiết </a></p>
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
						<img src="images/m4.jpg" alt="">
						<div class="contentt">
							<div>
								<span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Findex.html&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
								<span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Fnb1.html&layout=button_count&size=small&width=86&height=20&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></i></span>
							</div>
							<a class="title" style="font-size:17px;">Tour Quảng Bình: Thập cảnh xứ Quảng – Non nước hữu tình</a><br> 
							<a class="tt"><i class="icon-calendar"></i>  1 ngày</a><br>
							<a class="tt"><i class="icon-map-marker" ></i> Phong Nha Kẻ Bàng</a><br>
							<a style=" color: #333;" ><del>900.000 VNĐ</del><a style='color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;'> 765.000 VNĐ</a></a>
							<div class="stars" style="padding-top: 10px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="tour.php?id=12">Chi tiết </a></p>
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
						<img src="images/m10.jpg" alt="">
						<div class="contentt">
							<div>
								<span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Findex.html&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
								<span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Fnb1.html&layout=button_count&size=small&width=86&height=20&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></i></span>
								</div>
							<a class="title" style="font-size: 17px;">Tour tâm linh | Khám phá Quảng Bình địa linh nhân kiệt</a><br> <br>
							<a class="tt"><i class="icon-calendar"></i>  2 ngày 1 đêm</a><br>
							<a class="tt"><i class="icon-map-marker" ></i> Quảng Bình</a><br>
							<a style=" color: #333;" ><del>2.190.000 VNĐ</del><a style='color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;'> 1.861.500 VNĐ</a></a>

							<div class="stars" style="padding-top: 10px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="tour.php?id=15">Chi tiết</a></p>
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
						<img src="images/m11.jpg" alt="">
						<div class="contentt">
							<div>
								<span class="wish-icon"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Findex.html&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></span>
								<span class="wish-icon-share"><iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fquangbinhhtravel.000webhostapp.com%2Fnb1.html&layout=button_count&size=small&width=86&height=20&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></i></span>
								</div>
							<a class="title" style="font-size: 17px;">Tour Động Phong Nha - Động Tiên Sơn</a><br>
							<a class="tt"><i class="icon-calendar"></i>  1 ngày</a><br>
							<a class="tt"><i class="icon-map-marker" ></i> Phong Nha Kẻ Bàng</a><br>
							<a style=" color: #333;" ><del>1.290.000 VNĐ</del><a style='color:#F34C50; font-size: 1.7rem; margin-left: 40px;font-weight:500;'> 1.096.500 VNĐ</a></a>

							<div class="stars" style="padding-top: 10px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="tour.php?id=18">Chi tiết</a></p>
							</div>
						</div>
					</div>	

				
				</div>
					<div class="col-md-12 text-center animate-box">
						<p style="margin: 50px;"><a class="btn btn-primary btn-outline btn-lg" href="#">Xem thêm <i class="icon-arrow-right22"></i></a></p>
					</div>
				</div>
			</div>
		</div>





<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
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
							 <p class="author" style="flex: 70%;"> Chị Lan Anh [ Tour serie khám phá Quảng Bình 1 ngày ] <span class="subtext"></span></p>
					</div>
					
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Trong quá trình di chuyển gặp một số trục trặc, nhưng hướng dẫn viên đã xử lý vô cùng khéo léo. Chuyến đi cũng rất tuyệt vời, chúng tôi nhất định sẽ quay lại.&rdquo;</p>
						</blockquote>
						<p class="author">Anh Ngọc [ Tour chinh phục hang Tiên ]<span class="subtext"></span></p>
					</div>

            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>