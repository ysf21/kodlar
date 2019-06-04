 <?php
header('Content-Type:application/json');
$baglanti=mysqli_connect("localhost","root","","hastane_kayit");
$sorgu=mysqli_query($baglanti,"SELECT aylar,hasta_sayisi FROM buca");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglanti);
echo json_encode($data);
?>