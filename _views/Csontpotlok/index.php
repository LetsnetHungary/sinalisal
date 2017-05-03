<?php $sidebar = json_decode($this->sidebar); ?>
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
          require("_views/_includes/csontpotlok_main.php");
        }
        else {
          require("_views/_includes/csontpotlok.php");
        }

      ?>
    </div>
  </div>
</main>
<footer>
  <?php require("_views/_includes/_footers/footer.php");?></footer>
</body>
</html>
