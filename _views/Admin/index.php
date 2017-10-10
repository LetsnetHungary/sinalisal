<main>

  <header>
    <form class="" action="Auth/logout" method="post" style="display: flex; justify-content: flex-end">
      <input type="submit" name="logout" value="Log me out" class="btn btn-danger">
    </form>
  </header>
  <main>
      <div class="container">
        <nav aria-label="Page navigation example" class="buttons">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#" onclick="setup(0)">New</a></li>
          </ul>
        </nav>
        <nav aria-label="Page navigation example" class="buttons">
          <ul class="pagination">
            <?php
              $counter = 1;
              if(isset($this->projects))
              foreach($this->projects as $value){
                ?>
                <li class="page-item"><a class="page-link" href="#" onclick="setup(<?php echo $counter++; ?>)"><?php echo $value["title"]; ?></a></li>
                <?php
              }
            ?>
          </ul>
        </nav>
        <nav aria-label="Page navigation example" class="buttons">
          <ul class="pagination">
            <?php
              if(isset($this->courses))
              foreach($this->courses as $value){
                ?>
                <li class="page-item"><a class="page-link" href="#" onclick="setup(<?php echo $counter++; ?>)"><?php echo $value["title"]; ?></a></li>
                <?php
              }
            ?>
          </ul>
        </nav>
        <nav aria-label="Page navigation example" class="buttons">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#" onclick="setup(<?php echo $counter++; ?>)">Upload Image</a></li>
          </ul>
        </nav>
      </div>

      <div class="new" style="display: none" id="0">
        <div class="container">
          <form method="post" id="egf" action="Upload">
            <div class="form-group">
              <label for="title_area">Type</label>
              <select name="cast" class="form-control">
                <option value="project">Project</option>
                <option value="course">Course</option>
              </select>
            </div>
            <div class="form-group">
              <label for="title_area">Title</label>
              <input name="title" class="form-control" id="title_area">
            </div>
            <div class="form-group">
              <label for="date_area">Content</label>
              <textarea class="ckeditor" name="editor" id="content_area"></textarea>
            </div>
            <div class="form-group submit_holder">
              <input type="submit" name="save" class="btn btn-primary"id="new_form" value="Save">
            </div>
          </form>
        </div>
      </div>


      <?php
      $counter = 1;
      if(isset($this->projects))
        foreach ($this->projects as $key => $value) {
          ?>
          <div class="existing1" id="<?php echo $counter++ ?>" style="display: none">
            <div class="container">
              <form method="post" action="Upload">
                <div class="title_row column">
                  <div class="form-group mod">
                    <label for="title_area">Title</label>
                    <input name="title" class="form-control" id="title_area">
                  </div>
                  <div class="prev_title prev">
                    <?php
                      echo $value["title"];
                    ?>
                  </div>
                </div>
                <div class="content_row column">
                  <div class="form-group mod">
                    <label for="date_area">Content</label>
                    <textarea class="ckeditor" name="editor" id="content_area"></textarea>
                  </div>
                  <div class="content prev">
                    <?php
                      echo $value["editor"];
                    ?>
                  </div>
                </div>
                <div class="form-group mod submit_holder">
                  <input type="hidden" name="id" value="<?php echo $key; ?>">
                  <input type="submit" name="delete" class="btn btn-danger" value="Delete project">
                  <input type="submit" name="save_changes" class="btn btn-primary" value="Save changes">
                </div>
              </form>
            </div>
          </div>
          <?php
        }
      ?>

      <?php
      if(isset($this->courses))
        foreach ($this->courses as $key => $value) {
          ?>
          <div class="existing1" id="<?php echo $counter++ ?>" style="display: none">
            <div class="container">
              <form method="post" action="Upload">
                <div class="title_row column">
                  <div class="form-group mod">
                    <label for="title_area">Title</label>
                    <input name="title" class="form-control" id="title_area">
                  </div>
                  <div class="prev_title prev">
                    <?php
                      echo $value["title"];
                    ?>
                  </div>
                </div>
                <div class="content_row column">
                  <div class="form-group mod">
                    <label for="date_area">Content</label>
                    <textarea class="ckeditor" name="editor" id="content_area"></textarea>
                  </div>
                  <div class="content prev">
                    <?php
                      echo $value["editor"];
                    ?>
                  </div>
                </div>
                <div class="form-group mod submit_holder">
                  <input type="hidden" name="id" value="<?php echo $key; ?>">
                  <input type="submit" name="delete" class="btn btn-danger" value="Delete project">
                  <input type="submit" name="save_changes" class="btn btn-primary" value="Save changes">
                </div>
              </form>
            </div>
          </div>
          <?php
        }
      ?>

      <div class="image" style="display: none" id="<?php echo $counter++; ?>">

        <div class="images" style="display: flex; justify-content: center; align-items: center; padding: 10px; flex-wrap: wrap;">
          <?php
            foreach(scandir("images/") as $value){
              if(substr($value, -3) == "jpg" || substr($value, -3) == "png" ||substr($value, -3) == "gif" ||substr($value, -3) == "png"){
              ?>
              <div style="display: flex;align-items: center;flex-direction: column; height: 300px;">
                <div class="image_holder">
                  <div class="background"  style="background: url(images/<?php echo $value; ?>)">
                  </div>
                  <img src="images/<?php echo $value; ?>" alt="" class="img">
                  <form action="Upload" method="post" style="position: absolute; z-index: 5;" class="delete">
                    <input type="hidden" name="name" value="<?php echo $value ?>">
                    <button type="submit" name="deleteimage" style="background-color: rgba(0,0,0,0); border-color: rgba(0,0,0,0)"><i class="material-icons" style="font-size: 60px; cursor: pointer; color: red; width: 60px; height: 60px">close</i></button>
                  </form>
                </div>
                <p style=" word-wrap: break-word; max-width: 220px;">images/<?php echo $value; ?></p>
              </div>
              <?php
            }}
          ?>
        </div>
        <div class="container">
          <form method="post" enctype="multipart/form-data" style="display: flex; align-items: center" action="Upload">
              <div class="custom-file">
                <input type="file" id="img" name="image" class="custom-file-input" style="width: 500px;">
                <span class="custom-file-control form-control-file"></span>
              </div>
            <input type="submit" value="Upload image" name="uploadimage" class="btn btn-primary" style="margin-left: 5px">
          </form>
        </div>
      </div>
  </main>
  <script type="text/javascript" src ="../../_assets/js/admin.js"></script>


</main>
<footer>
  <?php require("_views/_includes/_footers/footer.php");?>
</footer>
