<?php
require("connect.php");
$email=$_POST["eposta"];
$password=$_POST["sifre"];
$sorgula=mysqli_query($baglan, "SELECT eposta,sifre FROM users WHERE eposta='".email."' AND sifre='".password."'");
if(mysqli_num_rows($sorgula)>0{
	echo " başarılı";
}else{
	echo " kullanıcı adı veya parola yanlış";
}


?>