<?
$baslik = "Origin Hesabın Hazır"; // Başlık

$tasarim = "akiner.css"; // Tasarım Linki



?>
<? 
// Dosyayı okumak için aç 
$dosya = fopen("origin.txt","r"); 

// Dosyayı satır satır $sozler'e aktar 
while($satir = fgets($dosya,1024)) 
$sozler[] = $satir; 

// Dosyayı kapat 
fclose($dosya); 

// Diziden rastgele bir sözü $soz'e aktar 
$hesap = $sozler[rand(0,count($sozler)-1)]; 
?>

<!doctype html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<title><? echo $baslik ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
   <meta property="og:description" content="<? echo $baslik ?>"> 
  <meta property="og:site_name" content="<? echo $baslik ?>">
  <meta property="og:title" content="<? echo $baslik ?>"> 
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
<link rel="stylesheet" type="text/css" href="<? echo $tasarim ?>">
<script>
	var page;
</script>

</head>

<script src="ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>
	<div class="general">
    	        <script>
			page = 2;
		</script>
        	<div class="content">
        	<img src="https://www.mc-tr.com/19mayis.png" border="0" alt="Free Gift Card" class="logo" />
            <h1>Oyunlu <span>Origin Hesabın hazır</span></h1>
             

				  
		  <a href="<?echo $hesap?>" style="  background: #3498db;  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);  background-image: -moz-linear-gradient(top, #3498db, #2980b9);  background-image: -ms-linear-gradient(top, #3498db, #2980b9);  background-image: -o-linear-gradient(top, #3498db, #2980b9);  background-image: linear-gradient(to bottom, #1db954, #1db954);  -webkit-border-radius: 28;  -moz-border-radius: 28;  border-radius: 28px;  font-family: Arial;  color: #ffffff;  font-size: 20px;  padding: 10px 20px 10px 20px;  text-decoration: none;">Hesap bilgilerini almak için tıkla</a> </br>

 <h2>Sayfayı yenileyerek yeni hesap alabilirsiniz.</h2>  

        </div>
		    </div>
    <div class="dark">
    	<div class="popin">
        	<div id="step">
            	<div class="system"><h3 id="system"></h3></div>
            	<div class="bar">
                	<div class="round1"></div>
                    <div class="round2"></div>
                    <div class="round3"></div>
                    <div class="advance1"></div>
                    <div class="advance2"></div>
                    <div class="advance3"></div>
                	<div class="advance"></div>
                    <div class="advanced"></div>
                </div>
                <div class="screen" id="screen"></div>
                <div class="numbers" id="numbers"></div>
                <div class="result" id="result">
				
				
				  <input type="hidden" name="type" value="spotify">

   
  </div>    
            </div>
        </div>
    </div>
    





    
</body>



</html>
