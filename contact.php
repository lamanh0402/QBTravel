<?php
include "header.php";
?>
<link rel="stylesheet" href="css/contact.css">

<div class="contact" >
				<div class="contact-info"style="padding-top: 70px;">
					<div class="card">
					  <i class="card-icon icon-envelope2"></i>
					  <p style="color: black;">quangbinhtravel@gmail.com</p>
					</div>
			  
					<div class="card">
					  <i class="card-icon icon-phone2"></i>
					  <p style="color: black;">0911451240</p>
					</div>
			  
					<div class="card">
					  <i class="card-icon icon-map-marker"></i>
					  <p style="color: black;">226 Trần Hưng Đạo, TP Đồng Hới, Quảng Bình</p>
					</div>
					<div class="card">
					  <i class="card-icon icon-globe2"></i>
					  <p style="color: black;">https://quangbinhhtravel.com</p>
					</div>
				  </div>
			   <div class="contact-in" style="margin-top: 50px;">
				  <div class="contact-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15223.25253533983!2d106.60148422717396!3d17.468655808477845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314756dc946cf8c1%3A0x5e4ff2bd272991b6!2zMjI2IFRy4bqnbiBIxrBuZyDEkOG6oW8sIE5hbSBTw6FjaCwgxJDhu5NuZyBI4bubaSwgUXXhuqNuZyBCw6xuaCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1624428780515!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				  </div>
				  <div class="contact-form">
					<h1> Liên hệ </h1>
					<br>
				  <form id="myForm">
				  <input type="text" id="name"  placeholder="Tên" class="contact-form-txt"/>
				  <input type="text" id="email" placeholder="Email" class="contact-form-txt"/>
				  <textarea placeholder="Tin nhắn" id="body" class="contact-form-textarea"></textarea>
				  <input type="button" onclick="sendEmail()" value="Gửi" class="contact-form-btn"/>
				</form>
				</div>
			  </div>
			 
			 
			
			
			</div>









			<script>
				
			</script>
<?php
include "footer.php";
?>
