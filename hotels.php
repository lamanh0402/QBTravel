<?php
include "header.php";
?>
<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover">
				<div class="video">
					<video src="videos/movie2.mov" loop muted autoplay></video>
				</div>
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<!-- <a href="index.html" id="main-logo">Travel</a> -->
								<div class="tabulation animate-box">

								  <!-- Nav tabs -->
								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Máy bay</a>
								      </li>
								      <li role="presentation" class="active">
								    	   <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Khách sạn</a>
								      </li>
								      <li role="presentation">
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
										   <label for="date-start">Số người lớn :</label>
                                            <input type="text" class="form-control" id="number" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>
										   </div>
										   <div class="col-xxs-12 col-xs-6 mt">
										   <label for="date-start">Số trẻ em :</label>
                                            <input type="text" class="form-control" id="number" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>
										   </div>
										   <div class="col-xs-12">
											   <input type="submit" class="btn btn-primary btn-block" value="Tìm Kiếm">
										   </div>
									   </div>
									</div>

									<div role="tabpanel" class="tab-pane active" id="hotels">
										<div class="row">
										   <div class="col-xxs-12 col-xs-12 mt">
											   <div class="input-field">
												   <label for="from">Thành phố, địa điểm hoặc tên khách sạn :</label>
												   <input type="text" class="form-control" id="name"/>
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
											   <section>
												   <label for="class">Số phòng :</label>
												   
                                            <input type="text" class="form-control" id="number" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>
										   </div>
										   <div class="col-xxs-12 col-xs-6 mt">
											   <section>
												   <label for="class">Số người lớn :</label>
									
                                            <input type="text" class="form-control" id="number" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>
										   </div>
										   <div class="col-xxs-12 col-xs-6 mt">
											
												  
												   <label for="date-start">Số trẻ em :</label>
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
											   <section>
												   <label for="class">Số phòng :</label>
												   <input type="text" class="form-control" id="number" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>
										   </div>
										   <div class="col-xxs-12 col-xs-6 mt">
											   <section>
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
										<h3>Khách sạn Quảng Bình giá cả tốt nhất. Ngoài chuyên các Tours Du lịch Quảng Bình. Chúng tôi hỗ trợ du khách đặt khách sạn giá rẻ, khách sạn đẹp khi đến với Quảng Bình.</h3>
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
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Khách sạn Quảng Bình</h3>
						<p>Bạn đang cần tìm khách sạn tại Quảng Bình ? Bạn muốn biết rõ dịch vụ tiện ích của khách sạn ? gần biển, trung tâm hay không ? Có ăn sáng, hồ bơi hay không ? Hay bạn muốn biết khách sạn nào tốt nhất, rẻ nhất trong cùng tiêu chuẩn sao ? <br> Hãy liên hệ với chúng tôi qua <a style="color: #F78536;"> Hotline : 0123456789</a>

						</p>
					</div>
				</div>
				<div class=card-container style="margin-top: 30px;">
				    <div class="card">
						<img src="images/ks8.jpeg" alt="">
						<div class="contentt">
							<a class="title">Khách sạn Sun Spa Resort Quảng Bình</a><br> <br>
							<a class="tt"><i class="icon-map-marker" ></i> Địa chỉ : Võ Nguyên Giáp, Bảo Bình, TP Đồng Hới</a><br> 
							<a><i class="icon-price-tag2"></i><a style="color:#F34C50; font-size: 1.5rem; font-weight:500;"> 1.750.000 VNĐ</a>
							<div class="stars" style="margin-left: 140px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="hotel.php?id=2">Chi tiết </a></p>
							</div>
						</div>
					</div>
					<div class="card">
						<img src="images/ks.jpeg" alt="">
						<div class="contentt">
							<a class="title">Khách sạn Mường Thanh Luxury Nhật Lệ (5 sao) Quảng Bình</a><br>
							<a class="tt"><i class="icon-map-marker"></i> Địa chỉ : 121 Trương Pháp, Hải Thành, thành phố Đồng Hới</a><br>
							<a><i class="icon-price-tag2"></i><a style="color:#F34C50; font-size: 1.5rem;font-weight:500;"> 1.200.000 VNĐ</a></a>
							<div class="stars"style="margin-left: 140px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="hotel.php?id=1">Chi tiết </a></p>
							</div>						
						</div>
					</div>
					<div class="card">
						<img src="images/ks5.jpeg" alt="">
						<div class="contentt">
							<a class="title">Khách sạn Mường Thanh Holiday (4 sao) Quảng Bình</a><br>
							<a class="tt"><i class="icon-map-marker"></i> Địa chỉ : 119 Trương Pháp, Quang Phú, thành phố Đồng Hới</a><br>
							<a><i class="icon-price-tag2"></i><a style="color:#F34C50; font-size: 1.5rem;font-weight:500;"> 950.000 VNĐ</a></a>
							<div class="stars"style="margin-left: 140px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="hotel.php?id=4">Chi tiết </a></p>
							</div>						
						</div>
					</div>
					<div class="card">
						<img src="images/ksrv.jpg" alt="">
						<div class="contentt">
							<a class="title"> Riverside Hotel - Quảng Bình </a><br> <br>
							<a class="tt"><i class="icon-map-marker"></i> Địa chỉ : 15 Trương Pháp, Hải Thành, thành phố Đồng Hới</a><br>
							<a><i class="icon-price-tag2"></i><a style="color:#F34C50; font-size: 1.5rem;font-weight:500;"> 950.000 VNĐ</a></a>
							<div class="stars"style="margin-left: 140px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="hotel.php?id=7">Chi tiết</a></p>
							</div>
						</div>
					</div>

					<div class="card">
						<img src="images/kssam.jpg" alt="">
						<div class="contentt">
							<a class="title"> Khách sạn SAM Quảng Bình </a><br> <br>
							<a class="tt"><i class="icon-map-marker"></i> Địa chỉ : 118A Hữu Nghị, Nam Lý, thành phố Đồng Hới</a><br>
							<a><i class="icon-price-tag2"></i><a style="color:#F34C50; font-size: 1.5rem;font-weight:500;"> 890.000 VNĐ</a></a>
							<div class="stars"style="margin-left: 140px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="hotel.php?id=8">Chi tiết</a></p>
							</div>
						</div>
					</div>
					<div class="card">
						<img src="images/ks3.jpeg" alt="">
						<div class="contentt">
							<a class="title">Khách sạn Phú Cường (3 sao) Quảng Bình</a><br>
							<a class="tt"><i class="icon-map-marker"></i> Địa chỉ : 381 Trương Pháp, Quang Phú, thành phố Đồng Hới</a><br>
							<a><i class="icon-price-tag2"></i><a style="color:#F34C50; font-size: 1.5rem;font-weight:500;"> 800.000 VNĐ</a></a>
							<div class="stars"style="margin-left: 140px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="hotel.php?id=3">Chi tiết </a></p>
							</div>						
						</div>
					</div>
					
					<div class="card">
						<img src="images/ks6.jpeg" alt="">
						<div class="contentt">
							<a class="title">Khách sạn Luxe (3 sao) Quảng Bình</a><br>  <br>
							<a class="tt"><i class="icon-map-marker"></i> Địa chỉ : 55 Trương Pháp, Bắc Lý, thành phố Đồng Hới</a><br>
							<a><i class="icon-price-tag2"></i><a style="color:#F34C50; font-size: 1.5rem;font-weight:500;"> 800.000 VNĐ</a></a>
							<div class="stars"style="margin-left: 140px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="hotel.php?id=5">Chi tiết</a></p>
							</div>
						</div>
					</div>
					<div class="card">
						<img src="images/ks7.jpeg" alt="">
						<div class="contentt">
							<a class="title"> Khách sạn Quang Phú (3 sao) Quảng Bình</a><br>
							<a class="tt"><i class="icon-map-marker"></i> Địa chỉ : 379 Trương Pháp, Bắc Lý, thành phố Đồng Hới</a><br>
							<a><i class="icon-price-tag2"></i><a style="color:#F34C50; font-size: 1.5rem;font-weight:500;"> 720.000 VNĐ</a></a>
							<div class="stars"style="margin-left: 140px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="hotel.php?id=6">Chi tiết</a></p>
							</div>
						</div>
					</div>


					<div class="card">
						<img src="images/ksamanda.png" alt="">
						<div class="contentt">
							<a class="title"> Amanda Hotel Quảng Bình</a><br> <br>
							<a class="tt"><i class="icon-map-marker"></i> Địa chỉ : Trần Hưng Đạo, Bảo Ninh, thành phố Đồng Hới</a><br>
							<a><i class="icon-price-tag2"></i><a style="color:#F34C50; font-size: 1.5rem;font-weight:500;"> 650.000 VNĐ</a></a>
							<div class="stars"style="margin-left: 140px;">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								
							</div>
							<div class="col-md-12 text-center animate-box">
								<p><a class="btn btn-primary btn-outline btn-lg" href="hotel.php?id=9">Chi tiết</a></p>
							</div>
						</div>
					</div>



					

					
			
				<div class="row" style="padding-top: 90px; padding-bottom:70px;">
					<div class="col-md-12 animate-box">
						<h2 class="heading-title"> <br> Hướng dẫn để đặt một phòng khách sạn tốt ở Quảng Bình</h2>
					</div>
					<div class="col-md-6 animate-box">
						<p>Chắc hẳn bạn sẽ không muốn tìm một khách sạn ở nơi xa khi mà di chuyển đến các điểm tham quan phải mất hàng giờ đồng hồ đúng không? Vì vậy QuangBinh Travel liệt kê một số khu vực khách sạn nằm ở vị trí thuận tiện và được nhiều du khách tìm hiểu nhất nhé:

						</p>
						<a>Khu vực trung tâm thành phố Đồng Hới</a>
						<p>
							Nếu bạn thích một nơi sôi động và muốn tìm một nơi để tận hưởng các tiện nghi, mua sắm, giải trí tại Quảng Bình thì các khách sạn tại khu vực trung tâm thành phố Đồng Hới là một sự lựa chọn tuyệt vời. Bạn sẽ được hòa mình vào bầu không khí vừa hiện đại nhưng cũng có phần rất hoang sơ của nơi đây. Mặc khác đây là nơi tụ hợp của rất nhiều các khách sạn từ bình dân cho đến các sang chảnh 4-5 sao. Vậy nên du khách có thể dễ dàng chọn được một khách sạn ưng ý nhất!
						</p>
						<a>Khu vực bờ biển Nhật lệ</a>
                         <p>Cách trung tâm thành phố Đồng Hới khoảng 3km về phía Đông Nam chính là bãi biển Nhật Lệ. Bạn nên đặt phòng tại đây nếu bạn là người yêu thích sự yên tĩnh và bầu không khí tươi mát, trong lành. Bạn có thể ngắm nhìn bình minh và hoàng hôn lãng mạn.

						</p>
						
					</div>
					<div class="col-md-6 animate-box">
						<img class="img-responsive" src="images/ks2.jpeg" alt="" style="width: 900px; height: 450px;">
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

<?php
include "footer.php";
?>