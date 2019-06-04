<!DOCTYPE html>
<head>
<link href="stil2.css" type="text/css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script>
	$(document).ready(function(){
		showGraph();
	});
	function showGraph(){
		$.post("kontrol3.php",
		function(data){
			console.log(data);
			var aylar=[];
			var hasta_sayisi=[];
			for (var i in data){
				aylar.push(data[i].aylar);
				hasta_sayisi.push(data[i].hasta_sayisi);
			};
			var chartdata={
				labels:aylar,
				datasets:[
				{
				label:'2018 YILI KONAK İLÇESİ AYLIK HASTA SAYISI',
				data:hasta_sayisi,
				backgroundColor:[
				'#1E90FF',
				'#1E90FF',
				'#1E90FF',
				'#1E90FF',
				'#1E90FF',
				'#1E90FF',
				'#1E90FF',
				'#1E90FF',
				'#1E90FF',
				'#1E90FF',
				'#1E90FF',
				'#1E90FF'
				]
				}]
			};
		var cnv=$("#myChart");
		var barGraph=new Chart(cnv,{
			type:'bar',
			data:chartdata
		});
		});
	};
	
</script>
<style>
	div{
	width:1200px;
	height:200px;
	}
</style>
</head>

<body bgcolor="#eee">
<div align="center">
<img href="#" src="sağlıkbakan.jpg"/>
</div>



<div class="menu">
        <ul>
            <li><a href="anasayfa1.php">ANA SAYFA</a></li>
            <li><a href="">İLÇE GRAFİKLERİ</a>
                <ul>
                    <li><a href="ders12.php">BUCA</a></li>
                    <li><a href="ders13.php">BORNOVA</a></li>
                    <li><a href="ders14.php">KONAK</a></li>
                </ul>
            </li>
            <li><a href="ders15.php">KARŞILAŞTIRMALI GRAFİK</a></li>
            <li><a href="ders16.php">HASTANE SAYILARI</a></li>
        </ul>


<div>
<canvas id="myChart"></canvas>
</div>
</body>
</html>