<?php
 if (isset($_POST['proses'])) {
 $pertama = $_POST['pertama'];
 $kedua = $_POST['kedua'];
 $operasi = $_POST['operasi'];
  switch ($operasi) {
   case 'tambah':
    $hasil = $pertama + $kedua;
   break;
   case 'kurang':
    $hasil = $pertama - $kedua;
   break;
   case 'kali':
    $hasil = $pertama * $kedua;
   break;
   case 'bagi':
    $hasil = $pertama / $kedua;
   }
}
 ?>

<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">

  <title>Aritmatika</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">

 <body background="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS2tl2lgn_UZTcH9-eTfn0_xceOORDUNCCgDevirq5siRSpUS5r">
 <div class="kalkulator">
  <h1>INI KALKULATOR</h1>
  <form action="" method="post">
   <input class="number" type="number" name="pertama" placeholder="Bilangan Pertama">
   <input class="number" type="number" name="kedua" placeholder="Bilangan Kedua">
   <select class="option" name="operasi">
    <option value="tambah">+</option>
    <option value="kurang">-</option>
    <option value="kali">x</option>
    <option value="bagi">/</option>
   </select>
   <button type="submit" name="proses" class="tombol" value="Hitung">Hitung</button>
   <button class="tombol" onclick="javascript:eraseText();">Bersih</button>
   </form>
   <?php if(isset($_POST['proses'])){ ?>
   <input type="text" value="<?php echo $hasil; ?>" class="number">
  <?php }else{ ?>
   <input type="text" value="0" class="number">
  <?php } ?>
</div>

<script type="text/javascript">
    function eraseText() {
     document.getElementById("number").value = "";
	}
</script>

 </body>

 </html>
