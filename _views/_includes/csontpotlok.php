<?php  $szolg = $rendszer->szolg; $meretek = $rendszer->meretek?>
<div class="termek_container item-container">
  <div class="catalog-title">
    <p  class="title"><?php echo $rendszer->title; ?></p>
    <hr class="hr1">
  </div>
      <div class="legacy__intro">
        <?php echo($rendszer->system) ?>
      </div>
    <div class="content__container">
      <div class="text__container">
        <div class="legacy__intro">
          Méretek:
        </div>
        <div class="text_holder">
          <div class="termek_text">
            <?php foreach ($meretek as $key => $value): ?>
              <div class="szolgaltatasok">
                  <div class="dot-holder orange">
                  </div>
                  <div class="szolg">
                    <?php echo $value; ?>
                  </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="legacy__intro">
          Előnyök:
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
        </div>
      </div>
      <div class="termek_pic">
        <img src="<?php  echo $rendszer->image; ?>" alt="">
      </div>
    </div>
  </div>
  <a target = "_blank" href="<?php echo $rendszer->catalog; ?>">
  <div class="download_link">
    <div class="icon">
      <img src="../../_assets/img/download-icon2.png" alt="">
    </div>
    <p class = "catalog_mini">
      Letölthető katalógus
    </p>
  </div>
</a>
<div class="" style = "margin-bottom: 15%;">

</div>
