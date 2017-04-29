<?
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
        <div class="termek_container item-container">
          <div class="catalog-title">
            <p  class="title"><? echo $rendszer->title; ?></p>
            <hr class="hr1">
          </div>
          <div class="text_holder">
            <div class="termek_text">
              <p>
              <? echo $rendszer->text; ?>
              </p>
            </div>
            <div class="termek_pic">
              <img src="<? echo $rendszer->image; ?>" alt="">
            </div>
          </div>
        </div>
        <div class="catalog_container item-container">
          <div class="catalog-title">
            <p  class="title">Katalógus</p>
            <hr class="hr1">
          </div>

            <iframe class="buk" frameborder="0" src="<? echo $rendszer->catalog; ?>">
          </iframe>

        </div>
        <div class="youtube_container item-container">
          <div class="catalog-title">
            <p  class="title">Videók</p>
            <hr class="hr1">
          </div>
          <div class="cont">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

              <ol class="carousel-indicators">
                <?
                for ($i=0; $i < $c_v ; $i++) {
                  if ($i == 0) {
                    ?>
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <?
                  }
                  else{
                  ?>
                  <li data-target="#myCarousel" data-slide-to="<?echo $i; ?>"></li>
                  <?
                  }
                }
                ?>
              </ol>


              <div class="carousel-inner" role="listbox">
                <?
                for ($i=0; $i < $c_v ; $i++) {
                  if ($i == 0) {
                    ?>
                    <div class="item active">
                      <img src="http://placehold.it/550x500" alt="Chania" width="460" height="345">
                      <div class="carousel-caption">
                        <div class="carousel-text">
                          <div class="yt-item"><iframe frameborder="0" class="yutub" src="<? echo $rendszer->videos[$i];?>" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"></iframe></div>
                        </div>
                      </div>
                    </div>
                    <?
                  }
                  else{
                  ?>
                  <div class="item">
                    <img src="http://placehold.it/550x500" alt="Chania" width="460" height="345">
                    <div class="carousel-caption">
                      <div class="carousel-text">
                       <div class="yt-item"><iframe frameborder="0" class="yutub" src="<? echo $rendszer->videos[$i];?>" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"></iframe></div>

                      </div>
                    </div>
                  </div>
                  <?
                }
                }
                ?>


              </div>

              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <?php require("_views/_includes/_footers/footer.php");?></footer>
  </body>
</html>
