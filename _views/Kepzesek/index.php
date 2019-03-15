
  <?php require("_views/_includes/_headers/header.php");?>

  <?php require("_views/_includes/cookie_alert.php"); ?>
    <main>
        <?php
        $counter = 0;
        $c_a = (count($this->courses)) % 2;
          foreach ($this->courses as $course) {
            ?>
            <div class="course <?php echo $counter % 2 == $c_a ? "gray" : "" ?>">
              <p class="container__header"><?php  echo $course["title"]; ?></p>
              <hr class="line">
              <div class="content"><?php  echo $course["editor"]; ?></div>
            </div>

            <?php
            $counter++;
          }
         ?>
    </main>
    <?php require("_views/_includes/_footers/footer.php");?>
  </body>
</html>
