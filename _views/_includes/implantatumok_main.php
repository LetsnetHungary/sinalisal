<div class="termek_container item-container">
  <div class="catalog-title">
    <p  class="title"><? echo $rendszer->title; ?></p>
    <hr class="hr1">
  </div>
  <div class="text_holder">
    <div class="termek_text">
      <div class="">
        <p>
        <? echo $rendszer->text1; ?>
        </p>
      </div>
      <div class="" style="display: flex; align-items: center">
        <p>
        <? echo $rendszer->text2; ?>
        </p>
        <div class="termek_pic">
          <img src="../../_assets/img/implants.png" alt="">
        </div>
      </div><div class="">
        <p>
        <? echo $rendszer->text3; ?>
        </p>
      </div>
    </div>

  </div>
</div>


<style media="screen">
  .termek_text {
    max-width: 100%!important;
    display: block;
  }

  .termek_text p {
    margin: 30px 0!important;
  }
</style>
