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
	
									   <!-- Tab panes -->
	
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
														<input type="text" class="form-control" id="country"/>
													</div>
												</div>
												<div class="col-xxs-12 col-xs-6 mt">
													<div class="input-field">
														<label for="from">Đến :</label>
														<input type="text" class="form-control" id="country" placeholder="Quảng Bình"/>
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
								<div class="desc2 animate-box">
									<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
										<p><a target="_blank" class="fh5co-site-name">Sự hài lòng của quý khách là niềm vinh hạn của chúng tôi</a></p>
										<div class="text-effect">
										<span>Q</span><span>U</span><span>A</span><span>N</span><span>G</span><span>B</span><span>I</span><span>N</span><span>H</span>
										<span>T</span><span>R</span><span>A</span><span>V</span><span>E</span><span>L</span><span>.</span>
									</div>
										<h2>Bay tới Quảng Bình giá ưu đãi cùng Quảng Bình Travel</h2>
										<h3>Trải nghiệm trọn vẹn, giá cả phải chăng</h3>
										<span class="price"></span>
										<br>
										<p><a class="btn btn-primary btn-lg" href="#">Xem thêm</a></p>
									</div>
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
						<h3>Đặt vé máy bay</h3>
						<p>Bạn đang cần đặt vé máy bay ? Tại website của chúng tôi bạn có thể tự mình kiểm tra giá vé chuyến bay mà bạn đang cần tìm và đặt giữ chỗ trực tuyến. Hoặc đơn giản hơn bạn có thể gọi cho chúng tôi qua <a style="color: #F78536;"> Hotline: 0123456789 </a>, bạn sẽ nhận được báo giá ngay !</p>
					</div>
				</div>
				<div class="row row-bottom-padded-md">
					<div class="col-md-12 animate-box">
						<h3 class="heading-title">Các hình thức mua vé và thanh toán</h3>
					</div>
					<div class="col-md-6 animate-box">
						<div class="row">
							<div class="col-md-12">
								<h4>TRỰC TIẾP TẠI VĂN PHÒNG</h4>
								<p>Địa chỉ: 21 Mạc Đỉnh Chi, P Hải Đình, TP Đồng Hới, Quảng Bình <br>

									Nhân viên sẽ kiểm tra và báo giá trực tiếp cho quý khách. Quý khách xác nhận lại thông tin đặt giữ chỗ chuyến bay của mình và thanh toán tiền mặt tại văn phòng.
									
									</p>
							</div>
							<div class="col-md-12">
								<h4>ĐẶT VÉ TRỰC TUYẾN</h4>
								<p>Bạn có thể tự mình kiểm tra giá vé, đặt giữ chỗ thông qua website của chúng tôi. Mã đặt chỗ sẽ tự động chuyển về email của bạn. Sau khi thanh toán chuyển khoản, bạn sẽ nhận được code vé của mình.</p>
							</div>
							<div class="col-md-12">
								<h4>ĐẶT VÉ QUA HOTLINE, ZALO</h4>
								<p>Bạn có thể nhờ nhân viên của chúng tôi kiểm tra vé và giữ chỗ thông qua số Hotline, Zalo : 0123456789. Sau khi xác nhận đặt giữ chỗ và thanh toán, bạn sẽ nhận được code vé chuyến bay của mình.</p>
							</div>
							<div class="col-md-12">
								<h4>THANH TOÁN</h4>
								<p>Nếu bạn chọn hình thức thanh toán chuyển khoản, hãy chuyển cho chúng tôi thông qua các sô tài khoản dưới đây: <br>
									<i class="icon-arrow-bold-right "> Vietcombank: 0311000730050</i> <br>
									<i class="icon-arrow-bold-right "> BIDV: 53310000916402</i> <br>
									Vui lòng ghi rõ nội dung chuyển khoản và giữ lại biên lai chuyển khoản !</p>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 animate-box">
						<img class="img-responsive" src="images/maybay.jpeg" alt="" style="width: 600px;">
						<a href="#" class="flight-book">
							<div class="plane-name">
								<span class="p-flight">VietNam Airlines</span>
							</div>
							<div class="desc">
								<div class="left">
								</div>
								<div class="right">
									<span class="price">
										<i class="icon-arrow-down22"></i>
										XEM
									</span>
								</div>
							</div>
						</a>
						<a href="#" class="flight-book">
							<div class="plane-name">
								<span class="p-flight">Vietjetair</span>
							</div>
							<div class="desc">
								<div class="left">
								</div>
								<div class="right">
									<span class="price">
										<i class="icon-arrow-down22"></i>
										XEM
									</span>
								</div>
							</div>
						</a>
						<a href="#" class="flight-book">
							<div class="plane-name">
								<span class="p-flight">Bamboo Airways</span>
							</div>
							<div class="desc">
								<div class="left">
								</div>
								<div class="right">
									<span class="price">
										<i class="icon-arrow-down22"></i>
										XEM
									</span>
								</div>
							</div>
						</a>
						<a href="#" class="flight-book">
							<div class="plane-name">
								<span class="p-flight">Jetstart</span>
							</div>
							<div class="desc">
								<div class="left">
								</div>
								<div class="right">
									<span class="price">
										<i class="icon-arrow-down22"></i>
										XEM
									</span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="row row-bottom-padded-md">
					<div class="col-md-6 animate-box">
						<img src="images/maybay3.jpeg" alt="" style="width: 550px; height: 370px;">
					</div>
					<div class="col-md-6 animate-box">
						<div class="row">
							<div class="col-md-12 animate-box">
								<h4 class="heading-title">Đăng kí săn vé</h4>
							</div>
							</div>
							<div class="col-md-12">
								<a style="color: #848484;">Bạn đang cần tìm?</a>
								<li><a href="">Vé máy bay Tết Canh Tý ?</a></li>
								<li><a href="">Vé máy bay 0đ ?</a></li>
								<li><a href="">Vé máy bay giá rẻ các tháng ?</a></li>
								<li><a href="">Vé máy bay nước ngoài ?</a></li>
								<p>Bạn chưa ưng ý với mức giá vé hiện tại và mong muốn tìm được chuyến bay có giá tốt hơn ? <br>
									Hãy để lại thông tin của bạn, chúng tôi sẽ giúp bạn điều này !</p>
							</div>
							<div>
								<input type="" placeholder="Nhập địa chỉ email của bạn" style="width: 400px;  border:.1rem solid #F78536;">
								<a class="btn btn-primary btn-sm" href="#">Đăng kí</a>

                            </div>
						</div>
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