<html>
  <body>
        <?php
      
    $umur=16;
if($umur >=17){
echo "Kamu Boleh Menonton Tiktok";
}else if($umur >=16){
    echo "Kamu Hampir Boleh Menonton Tiktok";
    }

else{
 echo "Kamu masih kecil, jangan menonton tiktok";
}

//
echo "<br>";
$nilai = 80;
if($nilai >= 80){
echo "Grade A"; 
}else if ($nilai >= 70){
echo "Grade B";     
}else{
echo "Kamu Tidak Lulus";        
}  
//
echo "<br>";
$total_nilai=80;
//syntx
if($total_nilai>=100){
    echo"Selamat anda mendapatkan peringkat 1";
}else if($total_nilai>=90) {
    echo "Selamat anda mendapatkan peringkat 2";
}else{
    echo"Selamat anda mendapatkan peringkat 3";
}
//
echo "<br>";
$matkul=3;
//syntx
if($matkul==1){
    echo"Statistika";
}else if($matkul==2) {
    echo "Desaign Web";
}else{
    echo"Pemrograman Web";
}
//
echo "<br>";
$hargalaptop = 10000000;
        if($hargalaptop >= 20000000){
        echo "Laptop Kamu Mahal";    
}elseif ($hargalaptop >= 10000000){
    echo "Laptop Kamu Cukup Mahal";   

}

else{
    echo "Laptop Kamu  Murah";
}




    ?>
   </body>
</html>