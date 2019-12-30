<?php
    session_start();
    $user = $_POST['tendangnhap'];
$pass = $_POST['matkhau'];


$_SESSION["Email"]="";
$conn = mysqli_connect('localhost','root','','qld');
if(!$conn){
    die('co loi xay ra'.mysqli_connect_error() );

}

else{

    $sql = " SELECT * FROM taikhoan where '$user' = taikhoan and '$pass' = matkhau  ";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
         
                if($row['level']=='admin'){
                       
                       session_start();
                    //    session_register("Email");
                       $_SESSION["Email"]=$user;
                       header("location:quanly.php");
                }
                else 
                {

                    header("Location:trangchu.php");
                }
                 
         
        }
    }
    else
    {
            header("location:dangnhap.php");

    }

}
?>