<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>	
</head>
<body>

<div id="container">
	<h1>Merhaba Dünya!</h1>

<form role="form" action="<?php echo base_url("welcome/add_Kullanici") ?>" method="post">
	
  <input type="text" name="kullanici_adi"> <br>

  <input type="text" name="kullanici_soyadi"> <br>
 <button type="submit" >Gönder</button>

</form>
</div>
<br><br>
<div>
	

	<?php foreach ($kullnaicilar as $kbilgi) {	
		 ?>
		 <li> <img 
               width="80"
         src="<?php echo base_url("resim") . "/" .$kbilgi->resim_url ?>">      
<div><?php echo $kbilgi->k_ad." ".$kbilgi->k_soyad  ?> <a href="<?php echo base_url("welcome/delete_kullanici/$kbilgi->id") ?>">Sil</a>| <a href="<?php echo base_url("welcome/update_kullaniciPage/$kbilgi->id") ?>">Güncelle</a>|
          <a href="<?php echo base_url("welcome/newresim/$kbilgi->id") ?>">Resim Ekle</a>
</div>
	  	
	  </li>
     
<?php } ?>
</div>

</body>
</html>