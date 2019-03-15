<div class="termek_container item-container">
  <div class="catalog-title">
    <p  class="title"><?php  echo $rendszer->title; ?></p>
    <hr class="hr1">
  </div>
  <div class="text_holder">
    <div class="termek_text">
      <p>
      <?php  echo $rendszer->text1; ?>
      </p>
      <p>
      <?php  echo $rendszer->text2; ?>
      </p>
      <p>
      <?php  echo $rendszer->text3; ?>
      </p>
    </div>
  </div>
</div>


<style media="screen">
  .termek_text {
    max-width: 80%!important;
    display: block;
  }

  .termek_text p {
    margin: 30px 0!important;
  }
</style>
