<?php 
    session_start();
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	if($email==""||$password==""){
		header("Location:login.php");
	}
	else
	{
	//kết nối cơ sở dữ liệu để làm việc
		 $link= mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
            mysqli_select_db($link, "web");
            mysqli_set_charset($link, 'UTF8');
     // lấy tất cả bản ghi trong danh sách
            $sql = "SELECT * FROM user WHERE email ='$email' and password = '$password'";
            $rs = mysqli_query($link, $sql);
            
            if($rs!=null){
            if(mysqli_num_rows($rs)==0){
            	header("Location: dangnhap.php");
            }
            else
            {
                while($row = mysqli_fetch_assoc($rs)){
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                }

            	header("Location:index.php");
            }
        }
        else
        	echo "LỖI KẾT NỐI ";
              mysqli_free_result($rs);
            mysqli_close($link);
	}
 ?>
