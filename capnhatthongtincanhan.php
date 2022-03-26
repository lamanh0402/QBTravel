<?php 
    session_start();
    $id = $_POST['id'];
    $name = $_POST['name'];
	$email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
	$password = $_POST['password'];
	$password1 = $_POST['password1'];
    
	if($password !=  $password1){
        header('Location: thongtincanhan.php'); // nhap  2 mat khau khog khop
    }
    else{

        $link= mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
        mysqli_select_db($link, "web");
        mysqli_set_charset($link, 'UTF8');
 
        $sql="update user set name ='$name', email= '$email',password= '$password', diachi= '$diachi', sdt='$sdt' Where id ='$id'";
        $rs = mysqli_query($link, $sql);
        
        if($rs!=null){

            $_SESSION['id'] = $id;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            //layas laij thông tin người dùng mới cập nhật lưu đè lên sesssion
            header("Location:thongtincanhan.php");
        }
        else
        {
            header("Location:index.php");
        }
        mysqli_free_result($rs);
        mysqli_close($link);
    }
?>