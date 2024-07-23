<title>About Us</title>
<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

    <style type="text/css">
      body {
        background-color: #E8F0F2;
      }
    </style>
  </head>

  <body>
    <link rel="stylesheet" type="text/css" href="styles/aboutus.css">

    <!--                MAIN BODY PAGE           -->
    <main>
      <!-- HERO -->
      <div class="nero">
        <div class="nero__heading">
          <span class="nero__bold">About Us</span>
        </div>
      </div>
    </main>

    <div class="center">
      <h2>Background</h2>
      <p>DCDG was established by Jose Dave B. Torno in 2001. He was influenced by his older brother into launching a business. The business originally started in Angeles, Pampanga where they sell their products in a night market, commonly known as "Tiangge". Moreover, during festivals in Pampanga, they see it as an opportunity to market their products. Their merchandise includes curtains, accessories, clothes, toys, and essential goods for pandemic.</p>

      <br>
      <h2>Location</h2>
      <p>The company has 5 branches situated in Baguio. Each branch locations are as follows: (1) Upper Mabini St., (2) Magsaysay Avenue, (3) Second Hand Proper City Market, (4) Abanao Street, and lastly (5) Carnation Alley.</p>

      <div align="center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207.74311396651163!2d120.59655050735503!3d16.41428610000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391a1678b799de7%3A0x2da30e1c6897c727!2sDiamond%20Colour&#39;s!5e1!3m2!1sen!2sph!4v1649755230090!5m2!1sen!2sph" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <p><b>Branch 1.</b> Upper Mabini St.</p>
      </div>

      <br><br>
    </div>
<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
