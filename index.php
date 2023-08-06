      <!DOCTYPE html>
      <html lang="en">

      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>Selamat Datang</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
        <script>
          < script >
            document.getElementById("daftar-sekarang-btn").addEventListener("click", function () {
              // Check the user's login status here
              var isLoggedIn = false; // Replace with your login status check logic

              if (!isLoggedIn) {
                // Redirect to the registration page if the user is not logged in
                window.location.href = "pendaftaran.php"; // Replace with the appropriate URL
              }
            });
        </script>
        <script>
          // Initialize ScrollReveal
          ScrollReveal().reveal('.sr-fade', {
            delay: 200,      // Delay before the animation starts (milliseconds)
            duration: 800,   // Duration of the animation (milliseconds)
            distance: '20px', // Distance the element moves during animation
            origin: 'bottom', // Origin of the animation
            easing: 'ease-in-out', // Easing function for the animation
          });
        </script>


        </script>
        
        <style>
          h1,
          h2 {
            font-family: 'Inter-Bold', sans-serif;
          }

          h3,
          h4,
          nav {
            font-family: 'Inter', sans-serif;
          }
        </style>
<!--
    <nav>
    <img src="images/navman.png" alt="Logo" class="logo">
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Feedback</a></li>
      </ul>
    </nav>
        -->
    
        <nav>
          <img src="images/navman.png" alt="Logo" class="logo">
          <ul class="menu">
            <li><a href="#program-teman-juara">Program Kami</a></li>
            <li><a href="#testimoni">Testimoni</a></li>
            <li><a href="#benefit">Benefit</a></li>
            <li id="login-link"><a href="login.php">Sign In</a></li>
          </ul>
        </nav>


        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      </head>

      <body>

        <div class="container sr-fade">
          <div class="image-container">
            <img src="images/human.svg" alt="Image Description">
          </div>

          <h1 class="sr-fade">Bimbel</h1>
          <h2 class="sr-fade">Teman Juara</h2>
          <h4 class="sr-fade">Bersama bisa menjadi sang juara
          </h4>

          <div class="button-container sr-fade">
            <!--
          <button type="button" id="daftar-sekarang-btn" class="btn">Daftar Sekarang</button>
        -->
            <button type="button" class="btn" onclick="window.location.href='daftar.php'">Daftar Sekarang</button>

            <button type="button" class="btn">Tentang Kami</button>
          </div>
          <div id="tentang-kami" class="container sr-fade">
            <h1 class="sr-fade">Tentang Kami</h1>
            <div class="container">

              <h4 class="sr-fade">Layanan bimbingan belajar kami menawarkan berbagai program belajar dari jenjang TK
                hingga
                SMP
                yang disesuaikan dengan kebutuhan dan minat siswa, mulai dari pelajaran matematika, bahasa Inggris
                hingga
                IPA
                maupun IPS. Kami memiliki tutor yang berpengalaman dan berkualitas dalam membimbing siswa dalam belajar,
                sehingga siswa dapat lebih mudah memahami materi pelajaran dan meraih prestasi akademik yang lebih baik.
                Ingin
                belajar dimana saja dan kapan saja? Kami memiliki dua sistem pembelajaran, yakni pembelajaran secara
                online
                dan
                pembelajaran secara offline loh.. Menarik bukan? Belajar kapan saja dan dimana saja bisa bersama Teman
                Juara
              </h4>
            </div>



            <div class="sr-fade">
              <div class="card-container1">
                <div class="card1">
                  <h3>Bimble Offline</h3>
                  <p>Kamu akan belajar secara Offline bersama pengajar yang tentunya suasana belajarmu akan lebih seru
                    dan
                    menyenangkan loh.. kamu akan mendapatkan akses langsung ke materi pembelajaran , diskusi interaktif
                  </p>
                </div>

                <div class="card1">
                  <h3>Bimble Online</h3>
                  <p>Ini nih, cocok banget buat kamu yang suka belajar dimana saja dan kapan saja, bimbel online dapat
                    dilakukan secara asingkronus atau sinkronus, tergantung pada cara penyelenggara menyediakan konten
                    dan
                    interaksi dengan siswa itu sendiri.</p>
                </div>
              </div>
            </div>
            <div class="sr-fade">
              <div class="image-container2">
                <img src="images/human2.png" alt="Image Description">
              </div>
            </div>
            <div id="program-teman-juara" class="container sr-fade">
              <h1 class="sr-fade">Program Pilihan Teman Juara</h1>
              <h4 class="sr-fade"> Pilih program bimbingan sesuai dengan kebutuhan kamu </h4>
            </div>
            <div class="container sr-fade">
              <div class="card-container">
                <div class="card">
                  <img src="img/TK.jpg" alt="Image 1">
                  <div class="card-content">


                    <a href="#" class="rounded-button">Program TK</a>
                  </div>
                </div>

                <div class="card">
                  <img src="img/sd.jpg" alt="Image 1">
                  <div class="card-content">


                    <a href="#" class="rounded-button">Program SD</a>
                  </div>
                </div>

                <div class="card">
                  <img src="img/smp.jpg" alt="Image 1">
                  <div class="card-content">


                    <a href="#" class="rounded-button">Program SMP</a>
                  </div>
                </div>
              </div>
            </div>




            <h1 class="sr-fade">Apa saja benefit yang bisa di dapat bersama teman juara</h1>
            <h4 class="sr-fade"> Benefit fasilitas yang diperoleh setelah bergabung di Bimbingan Teman Juara akan
              mempermudah
              kamu untuk
              mencapai
              impianmu! </h4>



            <div class="container sr-fade">
              <div class="card-container-benef">
                <div class="card-benef">
                  <img src="images/benef1.svg" alt="Image 1">
                  <div class="card-content-benef">
                    <p>
                      Belajar lebih fokus dalam suasana bimbel.
                      Tenang dan terkontrol, siswa dapat belajar dengan fokus dan efektif. Hal ini akan membantu siswa
                      dalam memahami materi pelajaran dengan baik.

                    </p>
                  </div>
                </div>

                <div class="card-benef">
                  <img src="images/benef2.svg" alt="Image 2">
                  <div class="card-content-benef">
                    <p>
                      Pembelajaran yang terjadwal. Hal ini akan membantu siswa dalam mengatur waktu belajar dengan lebih
                      efektif dan meningkatkan produktivitas.

                    </p>
                  </div>
                </div>
              </div>

              <div class="card-container-benef">
                <div class="card-benef">
                  <img src="images/benef3.svg" alt="Image 3">
                  <div class="card-content-benef">
                    <p>
                      Meningkatkan prestasi Akademik. Tutor-tutor yang perpengalaman akan membantu siswa dalam memahami
                      pelajaran dan mengatasi kesulitan yang dihadapi dalam belajar.

                    </p>
                  </div>
                </div>

                <div class="card-benef">
                  <img src="images/benef4.svg" alt="Image 4">
                  <div class="card-content-benef">
                    <p>
                      bimbel dapat menyesuaikan metode. pembelajaran dengan gaya belajar siswa. Hal ini membantu siswa
                      memahami materi pelajaran dengan lebih baik

                    </p>
                  </div>
                </div>
              </div>
            </div>


            <h1 class="sr-fade">Testimoni Teman Juara</h1>

            <div class="container sr-fade">
              <div class="card-container-testi">
                <div class="card-testi">
                  <img src="images/prof1.jpg" alt="Image 1">
                  <div class="card-content-testi">

                    <h3>Putra</h3>
                    <p>Penyampaian materi mudah dipahami, dan pembimbelnya sabar</p>

                  </div>
                </div>

                <div class="card-testi">
                  <img src="images/prof2.jpg" alt="Image 1">
                  <div class="card-content-testi">

                    <h3>Adinda</h3>
                    <p>Kakak pembimbelnya sabar, materi yang diajarkan sesuai dengan kurikulum</p>

                  </div>
                </div>

              </div>
              <!--
              <h1 class="sr-fade">Alumni</h1>
            



                <div class="section-slider">
    <div class="slider-container">
      <div class="slider-card active">
        <img src="images/prof2.jpg" alt="Image 1">
        <div class="card-content">
        </div>
      </div>
      <div class="slider-card">
        <img src="images/prof1.jpg" alt="Image 2">
        <div class="card-content">
          <h3>Image 2</h3>
          <p>Description of Image 2</p>
        </div>
      </div>
      <div class="slider-card">
        <img src="image3.jpg" alt="Image 3">
        <div class="card-content">
          <h3>Image 3</h3>
          <p>Description of Image 3</p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                <script src="app.js"></script>

        -->

      </body>

      <footer>
      <div class="logofoot">
      <img src="images/navman.png" alt="Logo" class="logo">
        </div>

        <div class="container">
          <p>Hubungi Kami Lebih Lanjut</p>
          <div class="footer-links">
            <a href="www.instagram.com/temanjuara" class="social-link">
              <img src="img/instagram.svg" alt="Instagram Logo">
            </a>
            <a href="gmail.com/" class="social-link">
              <img src="img/gmail.svg" alt="Email Logo">
            </a>
            <a href="" class="social-link">
              <img src="img/whatsapp.svg" alt="whatsapp">
            </a>
          </div>
          <p>&copy; 2023 Teman Juara.</p>
        </div>
      </footer>


      </html>