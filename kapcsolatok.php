<!-- FŐOLDAL -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" type ="text/css" href ="includes/css/kapcsolatok.css">
      <link rel="stylesheet" href="includes/css/footer.css">
      <link rel="stylesheet" href="includes/css/header.css">
    <title>Főoldal</title>
  </head>
  <body>
  <?php require("includes/views/header.php");?>
    <main>
      <div class="left-side">
        <div class="container">
          <div class="telefon data">
            <div class="icon">
              <img src="includes/img/phone-icon.png" alt="">
            </div>
            <div class="data-holder">
              <p class="h2">Telefon</p>
              <span>+36 1/316 9912</span>
              <span>+36-1/316-1032</span>
            </div>
          </div>
          <div class="cim data">
            <div class="icon">
              <img src="includes/img/location-icon.png" alt="">
            </div>
            <div class="data-holder">
              <p class="h2">Cím</p>
              <span>1025 Budapest, Berkenye u. 8/b</span>
            </div>
          </div>
          <div class="email data">
            <div class="icon">
              <img src="includes/img/email-icon.png" alt="">
            </div>
            <div class="data-holder">
                <p class="h2">Email</p>
                <span>sinalisal@sinalisal.hu</span>
            </div>
          </div>

          </div>
        </div>
      </div>
      <div class="right-side">
        <iframe frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB0Wtgq5BzHxC9l7BnJRewL_fiG5QbaiBI&q=Budapest,+Berkenye+u.+8b,+1025" allowfullscreen>
        </iframe>
      </div>
    </main>
    <?php require("includes/views/footer.php");?>
  </body>
</html>
