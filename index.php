<!-- FŐOLDAL -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


  <link rel="stylesheet" type ="text/css" href ="includes/css/fooldal.css">
  <link rel="stylesheet" type ="text/css" href ="includes/css/header.css">





    <title>Főoldal</title>
  </head>
  <body>


    <main>
      <header>
        <?php require("includes/views/header.php");?>
      </header>
      <div class = "back_image_holder">

      </div>
      <div class="front-pic">
        <div class="left-side">
          <div class="layer-container">
            <div class="layer">
            <style>

              .layer {
                height: 250px;
              }

              .carousel {
                height: 100%;
                width: 100%;
              }

              .sliderimg {
                width: 500px;
                height: 250px;
                object-fit: cover;
              }

              .objfit {
                margin: 0;
                padding: 0;
              }

            </style>
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" >
                  <img class="d-block img-fluid sliderimg" src="http://placehold.it/500x250" alt="First slide" style = "opacity : 0;">
                </div>
                <div class="carousel-item ">
                  <img class="d-block img-fluid sliderimg" src="http://placehold.it/400x200" alt="Second slide" style = "opacity : 0;">
                </div>
                <div class="carousel-item ">
                  <img class="d-block img-fluid sliderimg" src="http://placehold.it/400x200" alt="Third slide" style = "opacity : 0;">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              </div>
            </div>
          </div>
        </div>
        <div class="right-side">
        </div>
      </div>
      <div class="big-container">

        <div class="img-container">
          <div class="img">
          </div>
        </div>


      <div class="container">
        <div class="textholder">
          <div class="text">
            <div class="dot-holder orange">
            </div>
            <div class="text-holder">
                Prémium precíziós implantátum rendszer az Egyesült Államok piacvezető gyártójától
            </div>
          </div>
          <div class="text">
            <div class="dot-holder blue">
            </div>
            <div class="text-holder">
                99.7%-os sikerességi arány
            </div>
          </div>
          <div class="text">
            <div class="dot-holder green">
            </div>
            <div class="text-holder">
                Egyedülállóan széleskörű protetikai választék
            </div>
          </div>
          <div class="text">
            <div class="dot-holder purple">
            </div>
            <div class="text-holder">
                Kimagasló ár-érték arány
            </div>
          </div>
        </div>
      </div>
</div>
<div style="background-color: white; z-index: 2;">
  <div class="big-container gray-container">
    <div class="container">
      <div class="textholder">
        <div class="title">
          <p class="container__header margin">Megközelítés gyalogosan</p>
        </div>
      </div>
    </div>
    <div class="img-container">
      <div class="img">
        <img src="includes/img/clock.jpg" alt="" class="clock image">
      </div>
    </div>
  </div>
</div>



      <div class="big-container">
        <div class="container">
          <div class="textholder">
            <div class="title">
                <p class="container__header margin">De tényleg az ár a legfontosabb?</p>
            </div>
            </div>
          </div>
        <div class="img-container">
          <div class="img">
            <img src="includes/img/penz.jpg" alt="" class="clock image">
          </div>
        </div>
      </div>

      <div style="background-color: white; z-index: 2;">
        <div class="big-container gray-container">
          <div class="container">
            <div class="textholder">
              <div class="title">
                <p class="container__header margin">Megközelítés gyalogosan</p>
              </div>
            </div>
          </div>
          <div class="img-container">
            <div class="img">
              <img src="includes/img/clock.jpg" alt="" class="clock image">
            </div>
          </div>
        </div>
      </div>
      <div class = "image_back">

      </div>
      <div class="big-container">
        <div class="container">
          <div class = "centertextholder">
            <div class = "centertextholder__header">
              <p class = "container__header">Hoszabb szöveg</p>
              <hr class = "centertextholder__header_hr">
            </div>
          </div>
          </div>
      </div>

    </main>
    <footer>
      <?php require("includes/views/footer.php");?>
    </footer>

  </body>
</html>
