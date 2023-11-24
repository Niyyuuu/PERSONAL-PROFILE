<?php
include("config.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Niu</title>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://unpkg.com/@sidsbrmnn/scrollspy@1.x/dist/scrollspy.min.js"></script>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="index.php" />
  <link rel="stylesheet" href="config.php" />
  <link rel="stylesheet" href="komen/phpstyle.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
  <script src="/path/to/dist/scrollspy.min.js"></script>
  <script>
    window.onload = function () {
      scrollSpy("nav", {
        sectionSelector: "section",
        targetSelector: "a.navbaramba",
        offset: 120,
        activeClass: "active",
      });
    };
  </script>
  <!-- <div class="logooo">
      <link rel="icon" href="logooo.png" />
    </div> -->
  <nav class="navbar">
    <a href="#" class="navbar-title">Niu</a>
    <div class="navbar-nav">
      <a class="navbaramba active" href="#home">Home</a>
      <a class="navbaramba" href="#about">About</a>
      <a class="navbaramba" href="#skill">Skills</a>
      <a class="navbaramba" href="#portofolio">Portofolio</a>
      <a class="navbaramba" href="comment.php">Comment</a>
      <a class="navbaramba" href="admin.php">Admin</a>
    </div>
  </nav>

  <section class="home" id="home">
    <p class="hello">Hello, My Name Is</p>
    <p class="nama">Ghoniyyu Gama</p>
    <p class="nama">Manggala</p>
    <p class="now">
      Welcome To My Website, I'm a <span>Front-End Web Developer</span>
    </p>
    <div class="sosmedimg">
      <a href="mailto:niyyuuuu@gmail.com"><img src="gmail.png"></a>
      <a href="https://instagram.com/niyyuuuu?igshid=NGVhN2U2NjQ0Yg=="><img src="instagram.png"></a>
      <a href="https://x.com/SzaTozy?t=InAhOpUZHR2u_p4ZwBMBKQ&s=09"><img src="twitter.png"></a>
    </div>
    <p class="sosmed">Social Media</p>
  </section>

  <section id="about">
    <div class="container">
      <div class="container-table">
        <h1>Personal Data</h1>
        <table>
          <div class="container-personaldata">
            <tbody>
              <tr>
                <td>Name</td>
                <td>:</td>
                <td>Ghoniyyu Gama Manggala</td>
              </tr>

              <tr>
                <td>Date of Birth</td>
                <td>:</td>
                <td>Thursday, the 5th April 2007</td>
              </tr>

              <tr>
                <td>Address</td>
                <td>:</td>
                <td>Permata Regensi Bekasi B3/40</td>
              </tr>

              <tr>
                <td>Email</td>
                <td>:</td>
                <td>niyyuuuu@gmail.com</td>
              </tr>

              <tr>
                <td>Phone Number</td>
                <td>:</td>
                <td>+62 8886341824</td>
              </tr>

              <tr>
                <td>Gender</td>
                <td>:</td>
                <td>Male</td>
              </tr>

              <tr>
                <td>Religion</td>
                <td>:</td>
                <td>Islam</td>
              </tr>

              <tr>
                <td>Citizenship</td>
                <td>:</td>
                <td>Indonesia</td>
              </tr>

              <tr>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </div>
        </table>

        <h1>Education</h1>
        <table>
          <div class="container-education">
            <tbody>
              <tr>
                <td>2022-Now</td>
                <td>SMK Telekomunikasi Telesandi Bekasi</td>
              </tr>

              <tr>
                <td>2019-2022</td>
                <td>SMPIT Mutiara Hikmah</td>
              </tr>

              <tr>
                <td>2013-2019</td>
                <td>SDIT Fitrah Hanniah</td>
              </tr>

              <tr>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </div>
        </table>

        <h1>Experience and Achievement</h1>
        <table>
          <div class="container-experience">
            <tbody>
              <tr>
                <td>2019-2022</td>
                <td>Member of Student Organization</td>
              </tr>
              <tr>
                <td>2023</td>
                <td>Awarded Silver Medal in English National Olympiad</td>
              </tr>
            </tbody>
          </div>
        </table>
      </div>
      <div class="container-img">
        <img src="niu.jpg" alt="" />
      </div>
    </div>
</body>
</section>

<section style="width: 100%; justify-content: center; display: flex; flex-direction: column;" id="skill">
  <div class="kotak">
    <?php
    $result = mysqli_query($conn, "SELECT * FROM skills");
    while ($row = mysqli_fetch_assoc($result)): ?>
      <?php
      $level = "Beginner";
      if ($row["persen"] > 33) {
        $level = "Intermediate";
      } else if ($row["persen"] > 66) {
        $level = "Advanced";
      } ?>
      <div class="wrap-skills">
        <div style="width: 100%; display: flex;">
          <div>
            <img src="./img/<?php echo $row["image"]; ?>" alt="" style="height: 50px; padding-right: 20px;">
          </div>
          <div style="width: 100%; border-radius: 10px;">
            <h3>
              <?php echo $row["skill_name"]; ?> :
            </h3>
            <div style="width: 100%; background-color: #6f6f6f; border-radius: 10px;">
              <div
                style="width: <?php echo $row["persen"] ?>%; background-color: <?php echo $row["warna"]; ?>; border-radius: 10px; padding-bottom: 2px; padding-left: 10px;">
                <?php echo $level; ?>
              </div>
            </div>
          </div>
        </div>
        <p style="float: right; position: absolute; margin-top: 10px; margin-left: 800px;">
          <?php echo $row["persen"] . "%" ?>
        </p>
      </div>
    <?php endwhile; ?>
  </div>
</section>
<section id="portofolio">
  <div class="portofolio-content-top">
    <div class="card-1">
      <img src="logoniu.png" alt="Niu-Logo">
      <h1>Logo Niustore</h1>
      <p>The logo above is a logo made using Adobe Illustrator</p>
    </div>
    <div class="card-2">
      <img src="kemal logo.png" alt="Rafli-Logo">
      <h1>Logo KemCall </h1>
      <p>The logo above is a logo made using Figma</p>
    </div>
    <div class="card-3">
      <img src="astro.jpg" alt="Niu-Logo">
      <h1>Shirt image design</h1>
      <p>The shirt image design above is a design made using Adobe Photoshop</p>
    </div>
  </div>
  <div class="portofolio-content-bottom">
    <a href="./D-Architect-Portofolio/D-Architect-Portofolio/index.html">
      <div class="card-4">
        <img src="portofolio.png" alt="Niu-Logo">
        <h1>Architect Website</h1>
        <p>The website above is made using HTML and CSS</p>
      </div>
    </a>
  </div>
</section>
<footer>
  <div class="box">
    <p>Copyright <i class="fa fa-copyright" aria-hidden="true"></i>2023 <br>
      Made By Niu With <br> <i class="fa-solid fa-heart fa-fade fa-xl" style="color: #ff0000; padding-top: 15px;"></i>
    </p>
  </div>
</footer>
<script>
  feather.replace();
</script>
</body>

</html>