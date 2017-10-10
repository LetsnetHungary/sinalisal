  <main>
      <header>
        <?php require("_views/_includes/_headers/header.php");?>
      </header>
      <?php require("_views/_includes/cookie_alert.php");?>
      <div class = "back_image_holder">

      </div>
      <div class="front-pic">
        <div class="left-side">
          <div class="layer-container">
            <div class="layer">
              <div class="cont">
                <br>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <?php
                    if(empty($this->projects)){
                    ?>
                    <style>
                    .carousel-caption{
                      height: 160px;
                    }
                    .carousel-inner > .item{
                      height: 160px;
                    }
                    </style>
                    <div class="item active">
                      <img src="http://placehold.it/550x500" alt="Chania" width="460" height="345">
                      <div class="carousel-caption">
                        <div class="carousel-text">
                          <div class="dot-holder green">
                          </div>
                          <div class="text-holder">
                              Prémium precíziós implantátum rendszer az Egyesült Államok piacvezető gyártójától
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <img src="http://placehold.it/550x500" alt="Chania" width="460" height="345">
                      <div class="carousel-caption">
                        <div class="carousel-text">
                          <div class="dot-holder blue">
                          </div>
                          <div class="text-holder">
                              99.7%-os sikerességi arány
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <img src="http://placehold.it/550x500" alt="Flower" width="460" height="345">
                      <div class="carousel-caption">
                        <div class="carousel-text">
                          <div class="dot-holder orange">
                          </div>
                          <div class="text-holder">
                              Egyedülállóan széleskörű protetikai választék
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <img src="http://placehold.it/550x500" alt="Flower" width="460" height="345">
                      <div class="carousel-caption">
                        <div class="carousel-text">
                          <div class="dot-holder purple">
                          </div>
                          <div class="text-holder">
                              Kimagasló ár-érték arány
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <img src="http://placehold.it/550x500" alt="Flower" width="460" height="345">
                      <div class="carousel-caption">
                        <div class="carousel-text">
                          <div class="dot-holder gray">
                          </div>
                          <div class="text-holder">
                              26 éve az implantátum piacon
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
                  }
                  else {
                    $k = false;
                    ?>
                      <style>
                      <?php if(count($this->projects) === 1){
                        ?>
                      .carousel-control{
                        display: none;
                      }
                        <?php
                      }
                      ?>
                      .carousel-caption{
                        height: 300px;
                      }
                      .carousel-inner > .item{
                        height: 300px;
                      }
                      </style>

                    <?php
                    foreach ($this->projects as $key => $value) {
                      ?>
                      <div class='item <?php echo $k ? "" : "active" ?>'>
                        <img src="http://placehold.it/550x500" alt="Flower" width="460" height="345">
                        <div class="carousel-caption">
                          <div class="carousel-text">
                            <div class="event_holder">
                              <span><?php
                                echo $value["title"];
                              ?></span>
                              <div style="display: block; text-align: auto">
                                <?php
                                  echo $value["editor"];
                                ?>
                              </div>


                            </div>
                          </div>
                        </div>
                      </div>
                      <?php
                      $k = true;
                    }
                  }
                    ?>
                  </div>

                  <!-- Left and right controls -->
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
        <div class="right-side">
          <a href="http://implantdirect.com"><img src="/_assets/img/idlogo.png" alt=""></a>
        </div>
      </div>



    <div class="big-container" style="box-shadow: 0 0 40px rgba(0,0,0,.3)">
      <div class="img-container implant-csavarok">
        <div class="img">
          <img src="/_assets/img/implants.png" alt="" class="implants image">
        </div>
      </div>
      <div class="container container-right">
        <div id = "anim-try" class="textholder textholder-right">
          <div class="text">
            <div class="dot-holder green">
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
            <div class="dot-holder orange">
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
          <div class="text">
            <div class="dot-holder gray">
            </div>
            <div class="text-holder">
                26 éve az implantátum piacon
            </div>
          </div>
        </div>
        <script>
          jQuery(window).scroll(function() {
            var vscroll = jQuery(this).scrollTop();
            var div_height = document.getElementById("anim-try").offsetHeight * 0.5;
            var window_height = window.innerHeight;

            if (vscroll > div_height && vscroll < window_height + div_height * 2) {
              jQuery('#anim-try').css({
                "animation-play-state" : "running"
              });
            }

            var front_pic = document.getElementsByClassName("front-pic")[0]
            var positionx = (1 - (vscroll / window_height)) * 50
            front_pic.style.backgroundPosition = "50% " + positionx + "%"
          });
        </script>


      </div>

</div>
<div style="background-color: white; z-index: 2;">
  <div class="big-container gray-container">
    <div class="container">
      <div class="textholder">
        <div class="title">
          <p class="container__header">Rólunk</p>
          <hr class="line">
          <p>Cégünk 1991-ben alakult, már több mint 26 éve fogászati implantátumok,  protetikai tartozékok, és csontpótló anyagok forgalmazásával foglalkozunk,  mellyel hozzájárulhattunk több tízezer ember boldog mosolyához.</p>
          <p>  A Sinalisal Kft. az amerikai ImplantDirect implantátumrendszerek kizárólagos    magyarországi forgalmazója. Az ImplantDirect termékeket világszerte több mint  40 országban kiváló eredménnyel használják.  </p>
          <p>Az amerikai cég a világ egyik leginnovatívabb gyártójaként lépést tart az  implantológusok és a páciensek növekvő elvárásaival is, hogy a fogpótlások  mielőbb funkcióképesek és természethűen esztétikusak és maradandóak legyenek.</p>
          </div>
      </div>
    </div>
    <div class="img-container">
      <div class="img">
        <img src="/_assets/img/icon2.png" alt="" id="kep1" class="clock image">
      </div>
    </div>
  </div>
</div>


      <div class="big-container">

        <div class="img-container">
          <div class="img">
            <img src="/_assets/img/icon3.png"id = "kep2" alt="" class="clock image">
          </div>
        </div>
        <div class="container container-right">
          <div class="textholder textholder-right">
            <div class="title">
                <p class="container__header ">ImplantDirect implantátumok</p>
                <hr class="line">
                <p>A rendkívül széles implantátumrendszer választék garantálja, hogy az implantológus minden beavatkozáshoz kompromisszumoktól mentes, tökéletes megoldást találjon.
                </p>
                <p>
                  Az ImplantDirect implantátumok kónikus felépítése, speciális menetkiképzése és legmagasabb minőségű felületkezelése biztosítja a könnyű és biztonságos behelyezést és tartósságot.
                </p>
            </div>
            </div>
          </div>
      </div>

      <div style="background-color: white; z-index: 2;">
        <div class="big-container gray-container">
          <div class="container">
            <div class="textholder">
              <div class="title">
                <p class="container__header  ">Garancia és biztonság</p>
                <hr class="line">
                <p>Valamennyi termékünkre az Európai Unió szabályozásával megegyező mértékű, maximális időtartamú garanciát nyújtunk.</p>
                <p> Legfontosabb célkitűzésünk, hogy a beavatkozás és kezelés a páciens számára a lehető legkisebb fizikai és anyagi megterheléssel járjon.</p>
              </div>
            </div>
          </div>
          <div class="img-container">
            <div class="img">
              <img src="/_assets/img/icon1.png" alt="" id="kep3" class="clock image">
            </div>
          </div>
        </div>
      </div>
      <div class="big-container">

        <div class="img-container">
          <div class="img">
            <img src="/_assets/img/icon4.png" alt="" id="kep4" class="clock image">
          </div>
        </div>
        <div class="container container-right">
          <div class="textholder textholder-right">
            <div class="title">
                <p class="container__header ">Kompatibilitás</p>
                <hr class="line">
                <p>Tökéletes kompatibilitás – Zimmer Dental, Nobel Biocare és Straumann rendszerekkel. Részleges kompatibilitás: BioHorisons, AlphaBio rendszerekkel.</p>
            </div>
            </div>
          </div>
      </div>
      <div class = "image_back">
        <img src="/_assets/img/logo.png"  alt="">
      </div>
      <div class="big-container">
        <div class="container">
          <div class = "centertextholder">
            <div class = "centertextholder__header">
              <p class = "container__header">Szolgáltatásaink</p>
              <hr class = "centertextholder__header_hr">
              <div class="title">
                <p>Rendszeresen szervezünk akkreditált imlantológiai alap- és továbbképzéseket, igény szerint személyre szabott szakmai tanácsadással, konzultációval.</p>

                <p>Leggyakoribb témáink:</p>
                <div id="felsorolas">
                  <div class="szolgaltatasok">
                    <div class="dot-holder orange">
                    </div>
                    <div class="szolg">
                      Fogászati implantációs alapismeretek sebészeti és protetikai szempontból
                    </div>
                 </div>
                 <div class="szolgaltatasok">
                   <div class="dot-holder orange">
                   </div>
                   <div class="szolg">
                     Csont management, a lágyrész-plasztika szájsebészeti lehetőségei
                   </div>
                </div>
                <div class="szolgaltatasok">
                  <div class="dot-holder orange">
                  </div>
                  <div class="szolg">
                    Rendszerismertető tréning Implant Direct implantátumokkal
                  </div>
               </div>
               <div class="szolgaltatasok">
                 <div class="dot-holder orange">
                 </div>
                 <div class="szolg">
                   Extractiót követő azonnali implantáció
                 </div>
              </div>
              <div class="szolgaltatasok">
                <div class="dot-holder orange">
                </div>
                <div class="szolg">
                  Konzultációs lehetőség Implant Direct rendszerrel kapcsolatban / rendszerfüggetlenül
                </div>
             </div>
             <div class="szolgaltatasok">
               <div class="dot-holder orange">
               </div>
               <div class="szolg">
                 Regeneratív fogágy műtétek
               </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
            var window_height = window.innerHeight
            jQuery(window).scroll(function() {
              makeitfgrow("kep1")
              makeitfgrow("kep2")
              makeitfgrow("kep3")
              makeitfgrow("kep4")
              makeitfgrow("felsorolas")
            });

            function makeitfgrow(idname){
              var vscroll = jQuery(this).scrollTop();
              var pic = document.getElementById(idname)
              var top = pic.offsetTop
              top -= window_height
              top += 10
              if (vscroll >= top ) {
                pic.style.animationPlayState = "running"
                pic.style.webkitAnimationPlayState = "running"
              }
            }
            </script>
    </main>
    <footer>
      <?php require("_views/_includes/_footers/footer.php");?>
    </footer>
