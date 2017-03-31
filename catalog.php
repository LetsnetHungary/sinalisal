<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="includes/css/catalog.css">
    <link rel="stylesheet" href="includes/css/sidebar.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <title></title>
  </head>
  <body>

    <?php require("includes/views/header.php");?>
    <main>
      <div class="flex-container">
        <div class="sidebar-place">
          <?php require("includes/views/sidebar.php");?>
        </div>

        <div class="main-flex">

          <div class="catalog-title">
            <p class="catalog-text">Katalógus</p>
            <hr class="hr1">
          </div>
          <div class="ebook-flex">

            <div class="catalog">
              <iframe class="buk" src="https://e.issuu.com/issuu-reader3-embed-files/stable/embed.html#iargs=eyJkb2N1bWVudElkIjoiMTQwMzE0MTI1NTQ4LTQ2NjhlYjY2ODQwMjg1OTgyZDUxZTQ3MzlmNzc0YTA4IiwidXNlcm5hbWUiOiJpbXBsYW50MDEiLCJkb2N1bWVudE5hbWUiOiJlbl9pbnRlcmFjdGl2ZV9jYXRhbG9nIiwiaW5pdGlhbFBhZ2VOdW1iZXIiOiIxIiwiZW1iZWRJZCI6IjEyOTExNjUvNzA5NTgwNyIsImVtYmVkQ29uZmlnIjp7Imhvc3RVcmwiOiJodHRwOi8vaW1wbGFudGRpcmVjdC5odS9pbnRlcmFjdGl2ZV9pbXBsYW50YXR1bV9rYXRhbG9ndXMuaHRtIiwiaG9zdFJlZmVycmVyIjoiaHR0cDovL2ltcGxhbnRkaXJlY3QuaHUva2F0YWxvZ3Vzb2suaHRtIiwiZW1iZWRJZCI6IjEyOTExNjUvNzA5NTgwNyIsImVtYmVkVHlwZSI6InNjcmlwdCIsInZpZXdNb2RlIjoiRE9VQkxFX1BBR0VfU1BSRUFEIiwiYXV0b0ZsaXAiOmZhbHNlLCJiYWNrZ3JvdW5kQ29sb3IiOiIjZmZmZmZmIiwibG9nbyI6IiIsImJhY2tncm91bmRJbWFnZSI6IiIsImJhY2tncm91bmRTdHJldGNoIjp0cnVlLCJ0aXRsZUJhckVuYWJsZWQiOmZhbHNlLCJzaGFyZU1lbnVFbmFibGVkIjp0cnVlLCJzaGFyZUJ1dHRvbkVuYWJsZWQiOnRydWUsInByb1NpZGViYXJFbmFibGVkIjpmYWxzZX0sImxvYWRTdGFydFRpbWVzdGFtcCI6MTQ5MDk2NDE2NjU3MywiZmVhdHVyZXMiOnsic2hvd0lzc3V1QnJhbmRpbmciOnRydWUsImZvcmNlUGFnZUZsaXAiOmZhbHNlfSwiaWRlbnRpZmllciI6IjEyOTExNjUvNzA5NTgwNy0wIn0=">
            </iframe>

            </div>
          </div>
          <div class="video-title">
            <p class="video-text">Videók</p>
            <hr class="hr2">
          </div>

          <div class="yt-flex">
            <div class="yt-item"><iframe class="yutub" src="//www.youtube.com/embed/lM8aFiqjN-Y" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"></iframe></div>
            <div class="yt-item"><iframe class="yutub" src="//www.youtube.com/embed/lM8aFiqjN-Y" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"></iframe></div>
            <div class="yt-item"><iframe class="yutub" src="//www.youtube.com/embed/lM8aFiqjN-Y" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"></iframe></div>
            <div class="yt-item"><iframe class="yutub" src="//www.youtube.com/embed/lM8aFiqjN-Y" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"></iframe></div>
            <div class="yt-item"><iframe class="yutub" src="//www.youtube.com/embed/lM8aFiqjN-Y" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"></iframe></div>


          </div>



        </div>
      </div>
    </main>
    <?php require("includes/views/footer.php");?>
  </body>
</html>
