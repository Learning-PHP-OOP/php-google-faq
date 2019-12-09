<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title>Google Faq</title>
  <link rel="stylesheet" href="/style.css">
  <!--font -->
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
 </head>
 <body>
  <div class="container">

  <!--header -->
  <header>
   <div class="log">
    <a href="#"><img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="Google"></a>
    <a> Privacy e termini </a>
   </div>
   <div class="navbar">
   <div class="nav_list">
     <ul>
       <li>Introduzione</li>
       <li>Norme sulla privacy</li>
       <li>Termini di servizio</li>
       <li>Tecnologie</li>
       <li id="opentext">Domande frequenti</li>
     </ul>
   </div>
   <div class="account">
     <p>Account Google</p>
   </div>
   </div>
  </header>

  <!--main-->
  <main>
   <div class="faq">
    <?php
     include "data.php";
     include "helper.php";
    ?>
   </div>
  </main>


 </div>
</body>
</html>
