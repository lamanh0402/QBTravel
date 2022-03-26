<?php
ob_start();
include "header.php";

if (!isset($_GET['id'])) {
    header("Location:index.php");
}
?>

<?php

//example url /tour.php?id=1 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
    mysqli_set_charset($link, 'UTF8');
    mysqli_select_db($link, "web");
    $sql = "select * from tour Where id='$id'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result); // biến row này là 1 hàng của bảng user tương ứng
}
?>

<link rel="stylesheet" href="css/tour.css">
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/tour23.js"></script>
<script src="js/tour21.js"></script>
<script src="js/tour22.js"></script>

<link rel="stylesheet" href="assets/css/lightgallery.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />

<script src="assets/js/lightgallery-all.min.js"></script>


<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        <div class="row row-bottom-padded-md">
            <div class="col-md-8 animate-box">
                <video src="<?php echo $row['linkvideo']; ?>" style="width: 750px;" controls></video>
                <div style="min-height: 150px; margin-top: 10px;">
                    <div class="container-xl carousel1">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="myCarousel1" class="carousel under-video slide" data-ride="carousel" data-interval="0">
                                    <!-- Carousel indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel1" data-slide-to="1"></li>
                                    </ol>
                                    <!-- Wrapper for carousel items -->
                                    <div class="carousel-inner">
                                        <div class="item carousel-item active">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="thumb-wrapper">
                                                        <div class="img-box">
                                                            <a data-fancybox="gallery" href="<?php echo $row['anh1']; ?>" data-caption="Caption for single image"><img src="<?php echo $row['anh1']; ?>" alt=""></a>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="thumb-wrapper">
                                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                        <div class="img-box">
                                                            <a data-fancybox="gallery" href="<?php echo $row['anh2']; ?>"><img src="<?php echo $row['anh2']; ?>" alt=""></a>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="thumb-wrapper">
                                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                        <div class="img-box">
                                                            <a data-fancybox="gallery" href="<?php echo $row['anh3']; ?>"><img src="<?php echo $row['anh3']; ?>" alt=""></a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item carousel-item">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="thumb-wrapper">
                                                        <div class="img-box">
                                                            <a data-fancybox="gallery" href="<?php echo $row['anh4']; ?>"><img src="<?php echo $row['anh4']; ?>" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="thumb-wrapper">
                                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                        <div class="img-box">
                                                            <a data-fancybox="gallery" href="<?php echo $row['anh5']; ?>"><img src="<?php echo $row['anh5']; ?>" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="thumb-wrapper">
                                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                                        <div class="img-box">
                                                            <a data-fancybox="gallery" href="<?php echo $row['anh6']; ?>"><img src="<?php echo $row['anh6']; ?>" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Carousel controls -->

                        </div>
                    </div>
                </div>

                <blockquote>
                    <h3 style="color: #d46210; font-weight: bolder; padding-top: 20px;"><?php echo $row['name']; ?></h3>
                    <p><?php echo $row['chitiet']; ?></p>
                </blockquote>
            </div>
            <div class="col-md-4 animate-box" style="border: .1rem solid #366359; background:#366359; min-height: 750px; border-radius: .5rem;">
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <h4 class="heading-title" style="color: #d46210;font-size: 2.5rem;font-weight: bolder; margin-top: 20px;">Gọi để được tư vấn</h4>
                    </div>
                </div>
                <div class="col-md-12" style="color: #fff;">
                    <table class="container2">
                        <tbody>
                            <tr>
                                <td>Ngày khởi hành</td>
                                <td><?php echo $row['ngaykhoihanh']; ?></td>
                            </tr>
                            <tr>
                                <td>Thời gian</td>
                                <td><?php echo $row['thoigian']; ?></td>
                            </tr>
                            <tr>
                                <td>Lịch trình</td>
                                <td><?php echo $row['lichtrinh']; ?></td>
                            </tr>
                            <tr>
                                <td>Mức độ mạo hiểm</td>
                                <td><?php echo $row['mucdomaohiem']; ?></td>
                            </tr>
                            <tr>
                                <td>Số khách mỗi tour </td>
                                <td><?php echo $row['maxkhach']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="col-md-12" style="width: 297.99px;  height: 40px; border: .1rem solid #fff; text-align: center; margin-left: 16px;">
                        <a style="color: #fff; font-weight: bolder; font-size: 18px;line-height: 3.5rem;"><?php echo $row['giatien']; ?>VNĐ</a>
                        </div>
                    <div class="col-md-12" style="padding-top: 10px;">
                        <button type="button" class="btn1 btn-primary btn-lg" data-toggle="modal" data-target="#myModal1" style="border: .3rem;">ĐẶT TOUR NGAY</button>

                        <p style="color: #fff;padding-top:10px;">Liên hệ càng sớm càng rẻ</p>
                        <p style="color: #fff;"><a style="font-weight: bolder; color: #fff;">Hotline : 0123456789</a></p>
                        <p style="color: #fff;">Hoặc để lại số điện thoại, chúng tôi sẽ gọi lại sau ít phút</p>
                    </div>
                    <div class="col-md-12">
                    <input type="" placeholder="Số điện thoại của tôi là" style="width: 297.99px;  border:.1rem solid #fff; padding: 7px;">
                    </div>
                    <div class="col-md-12">
                        <br><a class="btn btn-primary btn-sm" href="#" style="width: 100%;">Yêu cầu gọi lại</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">

                <!-- Modal -->
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="row-top-padded-sm " style="min-height: 480px;">

                                <form action="/examples/actions/confirmation.php" method="post">

                                    <div class="col-md-12" style="background-color: #f78536; color: #fff; height: 40px;">
                                        <a style="color: #fff; font-family: 'Open Sans', Arial, sans-serif; font-weight: bolder; font-size: 18px;line-height: 4rem; margin-left: 20px; border-radius: .5rem;"> THÔNG TIN TOUR</a>
                                    </div>
                                    <div class="col-md-12" style="margin-top:10px ;">
                                        <div class="input-field">
                                            <input style="font-weight: bolder; font-size: 18px;" type="text" name="thong-tin-tour" value="Tour <?php echo $row['name']; ?>" size="40" class="form-control" aria-invalid="false" id="from-place" required />
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="background-color: #f78536; color: #fff; height: 40px; margin-top: 10px;">
                                        <a style="color: #fff; font-family: 'Open Sans', Arial, sans-serif; font-weight: bolder; font-size: 18px;line-height: 4rem; margin-left: 20px; border-radius: .5rem;"> THÔNG TIN KHÁCH HÀNG</a>
                                    </div>
                                    <div class="col-sm-3 col-md-6">
                                        <section>
                                            <label for="class">Giới tính:</label>
                                            <select class="cs-select cs-skin-border">
                                                <option value="disabled selected">Nam</option>
                                                
                                                <option value="first">Nữ</option>
                                                <option value="business">Khác</option>
                                            </select>
                                        </section>
                                    </div>
                                    <div class="col-sm-9 col-md-6 ">
                                        <div class="input-field">
                                            <label for="from">Họ và tên:</label>
                                            <input type="text" class="form-control" id="name" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="input-field">
                                            <label for="date-start">Địa chỉ email:</label>
                                            <input type="text" class="form-control" id="email" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>

                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="input-field">
                                            <label for="date-start">Điện thoại:</label>
                                            <input type="text" class="form-control" id="phone" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>

                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="input-field">
                                            <label for="date-start">Địa chỉ:</label>
                                            <input type="text" class="form-control" id="address" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>

                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="input-field">
                                            <label for="date-start">Thành phố :</label>
                                            <input type="text" class="form-control" id="to-place" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>

                                        </div>
                                    </div>
                                    <div class="col-md-12" style="background-color: #f78536; color: #fff; height: 40px; margin-top: 10px;">
                                        <a style="color: #fff; font-family: 'Open Sans', Arial, sans-serif; font-weight: bolder; font-size: 18px;line-height: 4rem; margin-left: 20px; border-radius: .5rem;"> THÔNG TIN ĐẶT TOUR</a>
                                    </div>
                                    <div class="col-sm-4 col-md4">
                                        <div class="input-field">
                                            <label for="date-start">Ngày khởi hành :</label>
                                            <input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy" />
                                        </div>
                                    </div>
                                    <div class="col-sm-9 col-md-4">
                                        <div class="input-field">
                                            <label for="date-start">Số người lớn:</label>
                                            <input type="text" class="form-control" id="number" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>

                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="input-field">
                                            <label for="date-start">Số trẻ em:</label>
                                            <input type="text" class="form-control" id="number1" placeholder="" />
                                            <i class="error error-icon fas fa-exclamation-circle"></i>

                                        </div>
                                    </div>
                                    <div class="modal-footer" >
                                        <button type="submit" type="button" class="btn btn-default btn-next" style="background-color: #f78536; color: #fff; margin-top:30px; margin-right: 220px; font-size:18px">Đặt tour</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-confirm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="icon">
                                    <i class="material-icon">
                                        <img src="images/checkmark.png" alt="">
                                    </i>
                                </div>
                            </div>
                            <div class="modal-body">
                                <p class="text-center" style="font-size: 24px; font-weight: bolder; ">Cảm ơn bạn đã đặt tour! </p>
                                <p>Chúng tôi sẽ liên hệ ngay, nếu không hãy kiểm tra Email.</p>
                            </div>
                            <div class="modal-footer" >
                                <button type="button" class="btn btn-default "><a href="" style="color: #fff;">Đóng</a> </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <?php 
   switch ($id)
{
    case 1 :
        include "chitiethangtien.php" ;
        break;

    case 2 :
        include "chitiethangen.php" ;
        break;

    case 3 :
        include "tourvuonquocgia.php" ;
        break;

    case 4 :
        include "chitiettulan.php" ;
        break;

    case 5 :
        include "chitietxuyenson.php" ;
        break;

    case 6 :
        include "chitietthienduong.php" ;
        break;

    case 7 :
        include "chitiethangva.php" ;
        break;

    case 8 :
        include "chitiethangtraang.php" ;
        break;

    case 9 :
        include "chitietdongthienduongtamco.php" ;
        break;

    case 10 :
        include "chitietthienduonghangtoi.php" ;
        break;

    case 11 :
        include "vonguyengiap.php" ;
        break;

    case 12 :
        include "langbichhoa.php" ;
        break;

    case 13 :
        include "serie1ngay.php" ;
        break;

    case 14 :
        include "toursunspa.php" ;
        break;

    case 15 :
        include "tamlinh.php" ;
        break;

    case 16 :
        include "sieutietkiem.php" ;
        break;

    case 17 :
        include "pnhasuoimooc.php" ;
        break;

    case 18 :
        include "pnhatienson.php" ;
        break;
    
    
}
        ?>
								
    </div>
</div>

<?php
include "tourtuongtu.php";
?>




<script src="js/main.js"></script>
<script>
    $("div[id^='myModal']").each(function() {

        var currentModal = $(this);

        //click next
        currentModal.find('.btn-next').click(function() {
            currentModal.modal('hide');
            currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show');
        });

        //click prev
        currentModal.find('.btn-prev').click(function() {
            currentModal.modal('hide');
            currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal('show');
        });

    });
    $("form").submit(function(event) {
        if ($("input").first().val() === "correct") {
            $("span").text("Validated...").show();
            return;
        }

        $("span").text("Not valid!").show().fadeOut(1000);
        event.preventDefault();
    });
    $(document).ready(function() {
        $(".wish-icon i").click(function() {
            $(this).toggleClass("fa-heart fa-heart-o");
        });
    });
</script>

<?php
include "footer.php";
?>