<?php  $szolg = $rendszer->szolg; $meretek = $rendszer->meretek?>
<div class="termek_container item-container">
  <div class="catalog-title">
    <p  class="title"><? echo $rendszer->title; ?></p>
    <hr class="hr1">
  </div>
      <div class="legacy__intro">
        <?php echo($rendszer->system) ?>
      </div>
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
    <div class="termek_pic">
      <img src="<? echo $rendszer->image; ?>" alt="">
    </div>
  </div>
</div>
<p class = "catalog_mini"><a target = "_blank" href="<?php echo $rendszer->catalog; ?>">Letölthető katalógus</a></p>
<div class="" style = "margin-bottom: 15%;">

</div>
