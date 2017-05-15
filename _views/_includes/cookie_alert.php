<div class="cookie_big_container">
  <div class="cookie_text_holder">
    A weboldalon cookie-kat használunk, hogy a legjobb felhasználói élményt nyújthassuk.
    <a href="aszf.pdf"> További információk</a>
  </div>
  <div class="cookie_accept_button" id="cookie">
      <button type="button" name="button">Elfogadom</button>
  </div>
</div>
<script type="text/javascript">
  document.getElementById("cookie").onclick = cookie_vanish
  var cookie_alert = getCookie("cookie_alert");
  console.log(cookie_alert);
  if(cookie_alert == 1){
    cookie_vanish()
  }
  function cookie_vanish(){
    document.getElementsByClassName("cookie_big_container")[0].style.display = "none";
    document.cookie = "cookie_alert = 1"
  }
  function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
</script>
