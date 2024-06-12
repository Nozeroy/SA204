<?php 
  session_start();
  include 'includes/connect.php';
  include 'includes/errors.php';

  $numbers = [];

  while (count($numbers) < 5) {
      $randNum = rand(10, 53);
      if (!in_array($randNum, $numbers)) {
          $numbers[] = $randNum;
      }
  }
  
  list($rdm1, $rdm2, $rdm3, $rdm4, $rdm5) = $numbers;

  $sql1 = "SELECT * FROM bdd_sae.Produits WHERE PID = $rdm1";
  $result1 = mysqli_query($con, $sql1);
    
  $row1 = mysqli_fetch_assoc($result1);
  $promo1 = $row1['Pnom'];

  $sql2 = "SELECT * FROM bdd_sae.Produits WHERE PID = $rdm2";
  $result2 = mysqli_query($con, $sql2);

  $row2 = mysqli_fetch_assoc($result2);
  $promo2 = $row2['Pnom'];

  $sql3 = "SELECT * FROM bdd_sae.Produits WHERE PID = $rdm3";
  $result3 = mysqli_query($con, $sql3);

  $row3 = mysqli_fetch_assoc($result3);
  $bestsell1 = $row3['image'];

  $sql4 = "SELECT * FROM bdd_sae.Produits WHERE PID = $rdm4";
  $result4 = mysqli_query($con, $sql4);

  $row4 = mysqli_fetch_assoc($result4);
  $bestsell2 = $row4['Pnom'];

  $sql5 = "SELECT * FROM bdd_sae.Produits WHERE PID = $rdm5";
  $result5 = mysqli_query($con, $sql5);

  $row5 = mysqli_fetch_assoc($result5);
  $bestsell3 = $row5['Pnom'];




?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
  <link href="./css/main.css" rel="stylesheet">
  <title>Accueil</title>
  <script src="js/main.js"></script>
</head>

<body onload="checkCookie()">
  
  <div class="container">
    <header class="header">
      <?php include 'includes/nav.php'; ?>
    </header>
    <section class="promo-section">
      <div class="promo-bg"></div>
      <div class="promo-circle promo-circle-top"></div>
      <div class="promo-circle promo-circle-bottom"></div>
      <div class="promo-item promo-item-left">
        <div class="promo-item-bg"><?php echo $promo1;  ?></div>
        <div class="promo-item-text"></div>
      </div>
      <div class="promo-item promo-item-right">
        <div class="promo-item-bg"><?php echo $promo2 ?></div>
        <div class="promo-item-text"></div>
      </div>
    </section>
    
    <section class="best-sell-section">
      <div class="best-sell-bg"></div>
      <div class="best-sell-item best-sell-item-left">
        <div class="best-sell-item-bg"><?php echo $bestsell1; ?></div>
        <div class="best-sell-item-text"></div>
      </div>
      <div class="best-sell-item best-sell-item-middle">
        <div class="best-sell-item-bg"><?php echo $bestsell2; ?></div>
        <div class="best-sell-item-text"></div>
      </div>
      <div class="best-sell-item best-sell-item-right">
        <div class="best-sell-item-bg"><?php echo $bestsell3; ?></div>
        <div class="best-sell-item-text"></div>
      </div>
    </section>
  </div>
</body>
</html>
