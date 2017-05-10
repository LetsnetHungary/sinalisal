<div class="big-container">
  <?php

  foreach($sidebar as $key => $value) {
      ?>
      <div class="sidebar-section">
         <div class="p-container">
           <p class="sidebar-p"><?php echo $key; ?></p>
         </div>

           <hr class="sidebar-hr">

             <div class="list-container">
               <div class="inside-container">
                <?php
                $c_value = count($value);
                for ($i=0; $i < $c_value ; $i++) {
                  ?>
                      <a class="sidebar-items" href="/Csontpotlok/Rendszerek/<? echo $value[$i]; ?>"><span><? echo $value[$i]; ?></span></a>
                  <?
                }
                ?>
               </div>
             </div>
        </div>
      <?php
  }

  ?>
</div>
