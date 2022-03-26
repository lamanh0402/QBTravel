<?php 

	$email = $_POST['email'];
    $name = $_POST['name'];
	$password = $_POST['password'];
	$password1 = $_POST['password1'];
    
	if($password !=  $password1){
        header('Location: xiu.php'); // hien len form dang ky
    }
    else{
        $link= mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");
        mysqli_set_charset($link, 'UTF8');
        mysqli_select_db($link, "web");

        $sql = "SELECT * FROM user WHERE email ='$email'";
        $rs = mysqli_query($link, $sql);

        if(mysqli_num_rows($rs)!=0)
            header("Location:dangnhap.php");
        else
        {       
            //nen them name
            $sql="INSERT INTO user(email,name,password) VALUES (N'$email',N'$name',N'$password')";
            $result = mysqli_query($link, $sql);

            if($result==null)
            {
                header('Location: dangnhap.php');
            }
            else
            {
                header('Location: dangnhap.php');
            }
            mysqli_close($link);
        }
    }
?>