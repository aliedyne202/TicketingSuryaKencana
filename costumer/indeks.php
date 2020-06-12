<!DOCTYPE html>
<?php

   if(!isset($_GET['halaman'])){
      $halaman = "indeks";
   }
   else {
      $halaman = $_GET['halaman']; 
   }
   
?>
<html>
<head>
   <link rel="stylesheet" href="css/style.css">
      <script src="js/script.js"></script>
   </head>

   <body>
      <img src="../img/logo.png" style="height: 50px; margin: 5px; ">
      <div class="rightnav">
      <a href="login.php">Login</a>
      <a href = "signup.php"> Daftar</a>

      </div>
      <div class="topnav">
         <a href="indeks.php?halaman=indeks" class="inactive"  id="Beranda">Beranda</a>
         <a href="indeks.php?halaman=pesan-tiket" class="inactive" id="PesanTiket">Pesan Tiket</a>
         <a href="indeks.php?halaman=kirimpaket" class="inactive" id="KirimPaket">Kirim Paket</a>
         <a href="indeks.php?halaman=jadwal"     class="inactive" id="Jadwal">Jadwal</a>
         <a href="indeks.php?halaman=bantuan"    class="inactive" id="Bantuan">Bantuan</a>
      </div>

      <?php
         if ($halaman == "indeks"){
            include 'beranda.php';
            echo'
               <script>
                  document.getElementById("Beranda").className = "active";
               </script>
            ';
         }

         else if ($halaman == "pesan-tiket"){
            include 'pesan-tiket.php';
            echo'
               <script>
                  document.getElementById("PesanTiket").className = "active";
               </script>
            ';
         }

         else if ($halaman == "kirimpaket"){
            include 'kirim-paket.php';
            echo'
               <script>
                  document.getElementById("KirimPaket").className = "active";
               </script>
            ';
         }

         else if ($halaman == "readypesan"){
            include 'readypesan.php';
            echo'
            <script>
               document.getElementById("PesanTiket").className = "active";
            </script>
            ';
         }

         else if ($halaman == "konfirmasipesan"){
            include 'konfirmasipesan.php';
            echo'
            <script>
               document.getElementById("PesanTiket").className = "active";
            </script>
            ';
         }
         
         else if ($halaman == "jadwal"){
            include 'jadwal.php';
            echo'
            <script>
               document.getElementById("Jadwal").className = "active";
            </script>
            ';
         }
         
         else if ($halaman == "bantuan"){
            include 'bantuan.php';
            echo'
            <script>
               document.getElementById("Bantuan").className = "active";
            </script>
            ';
         }
         
      ?>
   </body>
</html>