<?php
  $sidebar = json_decode($this->sidebar);
  $main = $_GET["main"];
  $rendszer = json_decode($this->rendszer);
?>
<header>
  <?php require("_views/_includes/_headers/header.php");?>
</header>

<?php require("_views/_includes/cookie_alert.php"); ?>
<main>
  <div class="container_fuck_bootstrap">
    <div class="sidebar">
        <?php require("_views/_includes/_headers/cs_sidebar.php");?>
    </div>
    <div class="content">
      <?php
          require("_views/_includes/csontpotlok.php");
      ?>
    </div>
  </div>
</main>
<footer>
  <?php require("_views/_includes/_footers/footer.php");?></footer>
</body>
</html>
