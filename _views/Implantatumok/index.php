<?
$main = $_GET["main"];
$sidebar = json_decode($this->sidebar);
$rendszer = json_decode($this->rendszer);
$c_v = count($rendszer->videos);
?>
<header>
  <?php require("_views/_includes/_headers/header.php");?>
</header>
  <main>
    <div class="container_fuck_bootstrap">
      <div class="sidebar">

          <?php require("_views/_includes/_headers/sidebar.php");?>
      </div>
      <div class="content">
        <?php

          if($main) {
            require("_views/_includes/implantatumok_main.php");
          }
          else {
            require("_views/_includes/implantatumok.php");
          }

        ?>
      </div>
    </div>
  </main>
  <footer>
    <?php require("_views/_includes/_footers/footer.php");?></footer>
  </body>
</html>
