<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=b893c632&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-danger bg-danger">

  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container_new" style=background-image:url('1.jpg');>
<div class="container <img src="1.jpg" class="img-fluid" alt="...">">
<div class="row mt-3 text-center">
  <div class="col">
<h1>FILM ACTION</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="move 1.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">POWER RANGERS </h5>
        <p class="card-text">Saban's Power Rangers atau pendeknya Power Rangers adalah sebuah film pahlawan super Amerika 2017 berdasarkan pada tim pahlawan super dengan nama yang sama dan disutradarai oleh Dean Israelite. Film tersebut merupakan film fitur ketiga dari waralaba Power Rangers, dan film pertama dalam dua puluh tahun.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="move 2.jpg" class="card-img-top" height="470px">
      <div class="card-body">
        <h5 class="card-title">KAMEN RIDER</h5>
        <p class="card-text">Kamen Rider, bahasa Indonesia: Pengendara Bertopeng, atau juga dikenal di Indonesia sebagai Ksatria Baja Hitam, adalah seri tokusatsu dan manga fiksi sains yang diciptakan oleh Shotaro Ishinomori.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="move 3.jpg" class="card-img-top" height="450px">
      <div class="card-body">
        <h5 class="card-title">NARUTO</h5>
        <p class="card-text">Naruto the Movie: Ninja Clash in the Land of Snow adalah sebuah film animasi Jepang tahun 2004 yang didasarkan dari seri manga dan anime Naruto karya Masashi Kishimoto. Film ini dirilis di Jepang pada tanggal 21 Maret 2004.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="move 4.jpeg" class="card-img-top" height="422px">
      <div class="card-body">
        <h5 class="card-title">THE WALKING DEAD</h5>
        <p class="card-text">The Walking Dead adalah serial televisi horor pasca-apokaliptik Amerika yang dikembangkan oleh Frank Darabont untuk AMC, berdasarkan serial buku komik dengan nama yang sama oleh Robert Kirkman, Tony Moore, dan Charlie Adlard. Andrew Lincoln memerankan tokoh utama, deputi sherif Rick Grimes,[3] yang terbangun dari koma selama berbulan-bulan untuk menghadapi dunia pasca-apokaliptik yang dibanjiri oleh zombi, yang biasa disebut sebagai "walker".</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="move 6.jpg" class="card-img-top" height="422px">
      <div class="card-body">
        <h5 class="card-title">SPIDER-MAN</h5>
        <p class="card-text">Spider-Man: No Way Home menampilkan keseruan dari kekacauan yang terjadi di dunia Peter Parker setelah Far From Home. Peter Parker tak memiliki jalan lain untuk mengubah hidupnya sebagai seorang Spider-Man. Ia pun meminta bantuan kepada Doctor Strange (Benedict Cumberbatch) agar semua orang melupakan bahwa Peter Parker adalah Spider-Man. Mantra yang diucapkan oleh Doctor Strange justru membuka gerbang semesta lain. Dengan bantuan Tobey Maguie.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="move 7.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">VENOM</h5>
        <p class="card-text">Seorang jurnalis, Eddie Brock (Tom Hardy) ingin melakukan sebuah investasi kasus terhadap penemuan yang dipimpin oleh Dr. Carlton Drake (Riz Ahmed). Karena investigasinya, Eddie mengunjungi lab milik Dr. Calrlton Drake. Semuanya ditujukan untuk membuktikan bahwa Dr. Carlton Drake sedang sedang melakukan tindakan jahat menggunakan Symbiote.Venom kembali beraksi ketika seorang pembunuh berantai, Cletus Kasady bertransformasi menjadi sosok jahat.</p>
      </div>
    </div>
  </div>
    </div>
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
