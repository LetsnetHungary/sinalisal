<?php  $szolg = $rendszer->szolg?>
<div class="termek_container item-container">
  <div class="catalog-title">
    <p  class="title"><?php  echo $rendszer->title; ?></p>
    <hr class="hr1">
  </div>
      <div class="legacy__intro">
        <?php echo($rendszer->system) ?>
      </div>
  <div class="text_holder">
    <div class="termek_text">
      <?php foreach ($szolg as $key => $value): ?>
        <div class="szolgaltatasok">
            <div class="dot-holder orange">
            </div>
            <div class="szolg">
              <?php echo $value; ?>
            </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="termek_pic">
      <img src="<?php  echo $rendszer->image; ?>" alt="">
    </div>
  </div>
  <div class="legacy__intro" style = "margin-top: 20px;">
    <?php echo($rendszer->kompatibilis) ?>
  </div>
</div>
<div class="catalog_container item-container">
  <div class="catalog-title">
    <p  class="title">Katalógus</p>
    <hr class="hr1">
  </div>
  <?php
    if(!isset($rendszer->catalog_pdf)) {
  ?>
    <iframe class="buk" frameborder="0" src="<?php  echo $rendszer->catalog; ?>">
  </iframe>
  <?php } 
  else {
    ?>
    <embed class="catalog-pdf" width="100%" height="100%" name="plugin" id="plugin" src="/_assets/files/<?php echo $rendszer->catalog_pdf; ?>" type="application/pdf" internalinstanceid="67">
    <a class="download_link" target = "_blank" href="/_assets/files/<?php echo $rendszer->catalog_pdf; ?>">
      <div class="download_link">
        <div class="icon">
          <img src="../../_assets/img/download-icon2.png" alt="">
        </div>
        <p class = "catalog_mini">
          Letölthető katalógus
        </p>
      </div>
    </a>
    <?php } ?>
</div>
<?php
  if($rendszer->videos != "--")
  {
 ?>
<div class="youtube_container item-container">
  <div class="catalog-title">
    <p  class="title">Videók</p>
    <hr class="hr1">
  </div>
  <div class="cont">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
        <?php
        $c_v = count($rendszer->videos);
        for ($i=0; $i < $c_v ; $i++) {
          if ($i == 0) {
            ?>
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <?php
          }
          else{
          ?>
          <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>"></li>
          <?php
          }
        }
        ?>
      </ol>


      <div class="carousel-inner" role="listbox">
        <?php
        for ($i=0; $i < $c_v ; $i++) {
          if ($i == 0) {
            ?>
            <div class="item active">
              <img src="http://placehold.it/550x500" alt="Chania" width="460" height="345">
              <div class="carousel-caption">
                <div class="carousel-text">
                  <div class="yt-item">
                    <iframe frameborder="0" class="yutub" src="<?php  echo $rendszer->videos[$i];?>" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"></iframe>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }
          else{
          ?>
          <div class="item">
            <img src="http://placehold.it/550x500" alt="Chania" width="460" height="345">
            <div class="carousel-caption">
              <div class="carousel-text">
               <div class="yt-item"><iframe frameborder="0" class="yutub" src="<?php  echo $rendszer->videos[$i];?>" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"></iframe></div>

              </div>
            </div>
          </div>
          <?php
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
<?php } ?>
