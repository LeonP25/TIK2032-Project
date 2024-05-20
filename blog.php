<?php
include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="assets/css/styles.css" />



    <title>Tugas Pemro Web</title>
  </head>
  <body>

    

    <header class="l-header">
      <nav class="nav bd-grid">
       
        <div class="welcome-container">
          <h1 class="Middle-Head">Zeon</h1>
        </div>
        
        <div class="nav-menu" id="nav-menu">
          <ul class="nav-list">
            <li class="nav-item">
              <a href="#home" class="nav-link home active">Home</a>
            </li>
      
            <li class="nav-item">
              <a href="#blog" class="nav-link projects">Blog</a>
            </li>
            <li class="nav-item">
              <a href="#galery" class="nav-link projects">Gallery</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link contact">Contact</a>
            </li>
          </ul>
        </div>

        <div class="nav-toggle" id="nav-toggle">
          <i class="bx bx-menu"></i>
        </div>
      </nav>
    </header>

    <main class="l-main">

     
      
      <section class="projects section" id="blog">
        <h2 class="section-title">Projects</h2>
       
        <div class="project-container" id="blogContainer">
            <?php
    $query = "SELECT * FROM blog";
    $result = mysqli_query($conn, $query);

    $no = 1;

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($no >=0) {
            ?>
          <div class="project-img">
    <img src="assets/img/<?= $row["image"] ?>" alt="asp.net" />
    <p class="project-title"><?= $row["judul"] ?></p>
    <p class="project-subtitle">
     <?= $row["deskripsi"] ?>
    </p>
    <a href="#" target="_blank" class="small-btn button">
        Selengkapnya<i class="bx bxl-github"></i></a>

</div>
<?php } 
            $no++;
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    } ?>

        </div>
        
     
      </section>


    </main>


    <footer class="footer section" id="contact">
      <h2 class="section-title">Get in touch</h2>
      <p class="footer-title">Leon</p>
      <div class="footer-social">
        <a
          href="#"
          target="_blank"
          class="footer-icon"
          >
            <br />
            camyyt02@gmail.com
          </a
        >
          <a href="https://www.linkedin.com/in/zulfiqar-shaikh-6a6893202/" target="_blank" class="footer-icon">
              <br />
              085156237557</a>
        
      </div>
      <p>&#169; Leonardus Morizio Paat
      220211060231</p>
    </footer>

    <script src="script.js"></script>
    <script>
      var text = "Leonardus Morizio Paat";
      var speed = 100; // milliseconds per character

      function typeWriter() {
        if (text.length > 0) {
          document.getElementById("typewriter").innerHTML += text.charAt(0);
          text = text.substring(1);
          setTimeout(typeWriter, speed);
        }
      }

      typeWriter();
    </script>


  </body>
</html>
