<hr style="border: .1rem solid #f78536;">
			<div class="wrapper">
    
    <input type="radio" name="slider" checked id="home">
    <input type="radio" name="slider" id="blog">
    <input type="radio" name="slider" id="code">
	<input type="radio" name="slider" id="help">

    
    <nav>
	<label for="home" class="home"><i class="icon-home"></i>Bảng giá phòng</label>
                <label for="blog" class="blog"><i class="icon-blog"></i>Tiện ích</label>
                <label for="code" class="code"><i class="icon-code"></i>Chính sách</label>
	  <label for="help" class="help"><i class="icon-envelop"></i>Đánh giá</label>
    
      
      <div class="slider"></div>
    </nav>
<section>


    <div class="content content-1" >
	
        <h3 style="font-size: 2.6rem;  color: #f78536; text-align: center;">Bảng giá phòng <?php echo $row['ten']; ?>   2021 
        </h3>
        <table class="container1">
			  <thead>
				<tr>
				  <th><h1>Loại phòng</h1></th>
				  <th><h1>Số lượng</h1></th>
				  <th><h1>Giá công bố(VND)</h1></th>
				  <th><h1>Giá đặt tại QuangBinh Travel</h1></th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td>Deluxe Twin</td>
				  <td> 50     </td>
				  <td>800.000 </td>
				  <td>1.500.000</td>
				</tr>
                <tr>
                  <td>Deluxe Double                  </td>
				  <td> 02    </td>
				  <td>1.500.000 </td>
				  <td>800.000</td>
                </tr>
                <tr>
                  <td>Executive Double Suite	</td>
				  <td> 06</td>
				  <td>3.000.000</td>
				  <td>1.600.000</td>
                </tr>
                <tr>
                    <td>Superior Twin	</td>
                    <td> 04</td>
                    <td>1.200.000</td>
                    <td>720.000</td>
                </tr>
                <tr>
                    <td>Extra Bed</td>
                    <td>&emsp; </td>
                    <td>400.000 </td>
                    <td>300.000</td>
                  </tr>
				  <tr>
                    <td>Superior Double</td>
                    <td>11 </td>
                    <td>1.200.000 </td>
                    <td>720.000</td>
                  </tr>
				  <tr>
                    <td>Superior Triple</td>
                    <td>14 </td>
                    <td>1.200.000 </td>
                    <td>950.000</td>
                  </tr>
				  <tr>
                    <td>Presidental Double Suite</td>
                    <td>01 </td>
                    <td>9.000.000 </td>
                    <td>5.000.000</td>
                  </tr>
			  </tbody>
			</table>

			
			
    </div>


      <div class="content content-2">
          
       
	  <h3 style="font-size: 2.6rem;  color: #f78536; text-align: center; padding-top: 30px;">Tiện ích của  <?php echo $row['ten']; ?>   
	             </h3>
				 <div style="display: flex; flex-wrap:wrap; width: 70%; margin: 0 auto; padding:50px; border-radius: 2px; border: 1px solid #f2dfa4;">
				 <div style="flex: 50%; ">
                <li>Bãi đậu xe ô tô tại khách sạn</li>
                <li>Hồ bơi</li>
                <li>Business Center</li>
                <li> Dịch vụ trông trẻ </li>
			   <li> Phòng gia đình </li>
			   <li> Phục vụ phòng </li>
               <li> Dịch vụ giữ hành lý </li>
			   <li> Quầy bar cạnh bể bơi </li>
			   <li> Quán cà phê </li>
			   <li> Bãi biển riêng 
		
                </li> </div>
				<div style="flex: 50%; padding-left:100px;">
                <li> Dịch vụ thu đổi ngoại tệ </li>
                <li>                Phòng tập gym               </li>
                <li>                Phòng xông hơi                </li>
                <li>                Spa/Beauty Salon/Massage                </li>
                <li>                Thang máy               </li>
                <li>                Wifi / Internet                </li>
                <li>                Dịch vụ dọn phòng</li>
                <li>                Dịch vụ thu đổi ngoại tệ                </li>
                <li>                Karaoke</li>
                <li> Máy Fax/Máy in </li>

				</div>
      </div>

      </div>

      <div class="content content-3">
	  <h3 style="font-size: 2.6rem;  color: #f78536; text-align: center; padding-top: 30px;">Chính sách của <?php echo $row['ten']; ?>  
	             </h3>
				 <div style=" width: 80%; margin: 0 auto; padding:20px; border-radius: 2px; border: 1px solid #f2dfa4;">
	  <p style="padding-top: 10px;"><a style="font-size: 18px;">Thời gian nhận phòng</a> 14:00</p>
                   <p><a style="font-size: 18px;" >Thời gian trả phòng</a> 12:00</p> 
                    <p><a style="font-size: 18px;"> Khoảng cách di chuyển</a></p>
                    <p>Sun Spa Resort Quảng Bình nằm ngay chân cầu Nhật Lệ, bán đảo Bảo Ninh, cách sân bay Đồng Hới khoảng 8 km và cách ga Đồng Hới khoảng 7 km.</p>
				   <p>Khoảng cách từ Sun Spa Resort Quảng Bình đến các địa điểm tham quan, du lịch nổi tiếng ở Quảng Bình </p>
				   <p>
					   – Khoảng cách đến Vũng Chùa Đảo Yến : 60 km.<br>
					   – Khoảng cách đến Động Phong Nha : khoảng 50 km. <br>
					   – Khoảng cách đến Động Thiên Đường : khoảng 70 km. 
					   – Khoảng cách đến Suối nước Moọc : khoảng 65 km.<br>
					
				   </p>
                    <p><a style="font-size: 18px;" >Hướng dẫn nhận phòng                    </a></p>
                    <p>Quý khách vui lòng xuất trình Hộ chiếu/CMND và booking của Vi Vu Quảng Bình khi nhận phòng tại khách sạn. <br>
                        (Khách sạn có thể sẽ yêu cầu Quý khách số thẻ tín dụng hoặc tiền đặt cọc cho các dịch vụ phát sinh trong thời gian lưu trú của Quý khách).   </p>
                    <p><a style="font-size: 18px;" >Chính sách nhận và trả phòng                    </a></p>
                 <p> ✔️ Việc đặt phòng sẽ tùy thuộc vào tình trạng phòng trống của khách sạn.        </p>
                    <p> ✔️ Thời gian nhận phòng: sau 14 giờ .Thời gian trả phòng: trước 12 giờ.                    </p>
                    <p>✔️ Nếu khách nhận phòng sớm trước 6 giờ sáng, tiền phòng được tính thêm một đêm (có bao gồm ăn sáng); nhận phòng sớm từ 6 giờ sáng đến 9 giờ sáng phụ thu 50% tiền phòng một đêm (có bao gồm ăn sáng); nhận phòng sớm từ 9 giờ sáng đến 14 giờ phụ thu 30% tiền phòng một đêm (không bao gồm ăn sáng).                    </p>
                    <p>✔️ Nếu khách trả phòng muộn từ 12 giờ trưa đến 15 giờ tính 30% tiền phòng của một đêm, trả phòng muộn từ 15 giờ đến 18 giờ tính 50% tiền phòng của một đêm và sau 18 giờ sẽ tính 100% của một đêm.                    </p>
                    <p><a style="font-size: 18px;">Chính sách phụ thu                    </a></p>
                    <p>✔️ Tối đa 02 trẻ em dưới 5 tuổi miễn phí ăn sáng và ngủ chung giường bố mẹ.</p>
				   <p>✔️ Trẻ từ 5 – 11 tuổi sử dụng chung giường bố mẹ và phụ thu ăn sáng :</p>
				   <li> Khu Building : 140.000 VNĐ/trẻ/đêm </li>
                   <li>  Khu Villa : 155.000 VNĐ/trẻ/đêm </li>
				   <p> ✔️ Trẻ từ 12 tuổi trở lên, tính như người lớn bắt buộc phụ thu giường phụ (có bao gồm ăn sáng) : </p>
				   <li> Khu Building : 700.000 VND/người/đêm </li>
                   <li>    Khu Villa : 950.000 VND/người/đêm</li>
       </div>
	  </div>
	  


       <div class="content content-4">
                    <div class="embin">

                        <div class="embin-heading"> <br>
                            <p>Xếp hạng và đánh giá</p>
                        </div>



                        <div class="reviews" style="margin-left: 110px;">
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-half"></i>
                            <a style="color: chocolate;">4.9/5</a>
                            <a style="color: gray;">(16 đánh giá)</a>

                        </div> <br>
                        <div class="OK">

                            <div class="rating-list">
                                <div class="rating-list-left text-black" style="line-height: 7px;">
                                    <div class="reviews">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                </div>
                                <div class="rating-list-center">
                                    <div class="progress">
                                        <div style="width: 56%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5">
                                            <span class="sr-only"></span>
                                        </div>
                                    </div>
                                    <div class="progress1">
                                        <div style="width: 56%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5">
                                            <span class="sr-only"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="rating-list-right text-black">75%</div>
                            </div>


                            <div class="rating-list">
                                <div class="rating-list-left text-black" style="line-height: 7px;">
                                    <div class="reviews">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>

                                    </div>
                                </div>
                                <div class="rating-list-center">
                                    <div class="progress">
                                        <div style="width: 56%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5">
                                        </div>
                                    </div>
                                    <div class="progress2">
                                        <div style="width: 56%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5">
                                        </div>
                                    </div>

                                </div>
                                <div class="rating-list-right text-black">20%</div>
                            </div>


                            <div class="rating-list">
                                <div class="rating-list-left text-black" style="line-height: 7px;">
                                    <div class="reviews">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>

                                    </div>
                                </div>
                                <div class="rating-list-center">
                                    <div class="progress">
                                        <div style="width: 56%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5">
                                            <span class="sr-only"></span>
                                        </div>
                                    </div>
                                    <div class="progress3">
                                        <div style="width: 56%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5">
                                            <span class="sr-only"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="rating-list-right text-black">5%</div>
                            </div>


                            <div class="rating-list">
                                <div class="rating-list-left text-black" style="line-height: 7px;">
                                    <div class="reviews">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>

                                    </div>
                                </div>
                                <div class="rating-list-center">
                                    <div class="progress">
                                        <div style="width: 56%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-primary">
                                            <span class="sr-only"></span>
                                        </div>
                                    </div>
                                    <div class="progress4">
                                        <div style="width: 56%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-primary">
                                            <span class="sr-only"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="rating-list-right text-black">0%</div>
                            </div>



                            <div class="rating-list">
                                <div class="rating-list-left text-black" style="line-height: 7px;">
                                    <div class="reviews">
                                        <i class="icon-star"></i>

                                    </div>
                                </div>
                                <div class="rating-list-center">
                                    <div class="progress">
                                        <div style="width: 56%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-primary">
                                            <span class="sr-only"></span>
                                        </div>
                                    </div>
                                    <div class="progress5">
                                        <div style="width: 56%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-primary">
                                            <span class="sr-only"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="rating-list-right text-black">0%</div>
                            </div>


                            </div=>
                        </div>
                        <br> <br>

                        <div class="embin-box-xiu">

                            <div class="embin-box">
                                <div class="box-top">
                                    <div class="profile">
                                        <div class="profile-img">
                                            <img src="img/duc.jpg">
                                        </div>
                                        <div class="name-user">
                                        <p style="color: chocolate;">Dương Đức</p>
                                            <div class="reviews">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="col1">
                                    <div class="col11">
                                        <div class="cilent-comment">
                                            <p>“Hotel rất có phong cách, có cả hồ bơi rất sạch (khách sạn có cả máy hút cát làm sạch đáy hồ bơi), ăn sáng ngon, đặc biệt là cô chủ nhỏ rất xinh và luôn tươi cười, nhiệt tình hướng dẫn khi khách có nhu cầu.”</p>
                                        </div>
                                        <span style="color: darkgray; font-size: 13px; padding-top: 30px;">|1.11.2020|</span>
                                    </div>
                                    <div class="col12">
                                        <div class="col121">
                                            <img style="width: 200px; height: 155px;" src="images/fb2.jpg">
                                        </div>
                                        <div class="col122">
                                            <img style="width: 200px; height: 155px;" src="images/fb3.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="embin-box-xiu">

                            <div class="embin-box">
                                <div class="box-top">
                                    <div class="profile">
                                        <div class="profile-img">
                                            <img src="img/danganh.jpg">
                                        </div>
                                        <div class="name-user">
                                            <p style="color: chocolate;">Đăng Anh</p>
                                            <div class="reviews">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="col1">
                                    <div class="col11">
                                        <div class="cilent-comment">
                                            <p>“View quá xuất sắc, nằm ngay trung tâm nữa thực sự rất tiện lợi . Phòng sạch sẽ, bửa sáng rất tuyệt, phòng đầy đủ tiện nghi. Thích nhất là kiểu thiết kế trong cây trong phòng tắm, rất độc và lạ.Nhân viên thân thiện, nhiệt tình. mình không bao giờ làm mấy cái review này nhưng thực sự rất tuyệt. Xứng đáng 10 điểm”</p>
                                        </div>
                                        <span style="color: darkgray; font-size: 13px; padding-top: 30px;">|30.02.2021|</span>
                                    </div>
                                    <div class="col12">
                                        <div class="col121">
                                            <img style="width: 200px; height: 155px;" src="images/fb4.jpg">
                                        </div>
                                        <div class="col122">
                                            <img style="width: 200px; height: 155px;" src="images/fb1.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="embin-box-xiu">

                            <div class="embin-box">
                                <div class="box-top">
                                    <div class="profile">
                                        <div class="profile-img">
                                            <img src="img/quan.jpg">
                                        </div>
                                        <div class="name-user">
                                            <p style="color: chocolate;">Đoàn Minh Quân</p>
                                            <div class="reviews">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="col1">
                                    <div class="col11">
                                        <div class="cilent-comment">
                                            <p>“Thay mặt cả nhà gửi lời cảm ơn QuangBinh Travel – Đó là một cảm giác gia đình tuyệt vời và các nhân viên rất hào phóng trong lời khuyên và sự giúp đỡ của họ. Hai chú chó cũng là một sự bổ sung đáng hoan nghênh cho một không gian tuyệt vời!”</p>
                                        </div>
                                        <span style="color: darkgray; font-size: 13px; padding-top: 30px;">|14.08.2020|</span>
                                    </div>
                                    <div class="col12">
                                        <div class="col121">
                                            <img style="width: 200px; height: 175px;" src="images/fb5.jpg">
                                        </div>
                                        <div class="col122">
                                            <img style="width: 200px; height: 175px;" src="images/fb6.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                       

                        <div class="nut">
                            <button style="font-size: 20px;">Xem thêm</button>
                        </div>


                    </div>
                </div>
		</div>
</div>