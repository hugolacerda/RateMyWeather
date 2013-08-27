<!-- Container -->
<div class="container">
    <div class="hero-unit">
        <div class="row">
            <div class="span5">
                <img src="<?php echo $data{'map'}; ?>" class="img-rounded" width="400">    <!-- map --> 
            </div>
            <div class="span5 ">
                <h1>City: <?php echo $data{'city'}; ?></h1>
                <br>
                <div class="row">
                    <div class="span4">
                        <p class="lead">
                            <strong>Weather Type:</strong> <?php echo $data{'weather_type'}; ?><br>
                            <strong>Temperature:</strong> <?php echo $data{'temp'}; ?><br>                           
                            <strong>Humidity:</strong> <?php echo $data{'humidity'}; ?><br>
                            <strong>Wind Speed:</strong> <?php echo $data{'wind_speed'}; ?><br>
                            <strong>Wind Direction:</strong> <?php echo $data{'wind_direction'}; ?>
                        </p>
                    </div>
                    <div class="span1">
                        <div class="temp"> <?php echo $data{'temp'}; ?> </div>
                        <img src="<?php echo $data{'icon'}; ?>" class="icon-rounded">
                    </div>
                </div>

                <div class="row">
                    <div class="focus-font">
                        <div class="span1">
                            <span class="icon-stack">
                            <form action="/home/rateWeather" enctype="multipart/form-data" method="post">
                                <input id="thumbs_up" type="submit" value="good" name="good">
                                <h2><?php echo $data{'like'}; ?></h2>
                            </form>
                            </span>
                            <!-- <span class="icon-stack"> -->
                        </div>
                        <div class="span1">
                            <span class="icon-stack">
                            <form action="/home/rateWeather" enctype="multipart/form-data" method="post">
                                <input id="thumbs_down" type="submit" value="bad" name="bad">
                                <h2><?php echo $data{'dislike'}; ?></h2>
                            </form>
                            </span>

                            <!-- <i class="icon-thumbs-down icon-light"></i> -->
                            <!-- <span class="icon-stack"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">     
              <div class="row-fluid">
                <div class="span4">
                  <h2><?php echo $data{'tomorrow_title'}; ?></h2>
                  <div class="row">
                      <div class="span4 offset1"><img src="<?php echo $data{'tomorrow_icon'}; ?>" class="icon-rounded" width="200"></div> <!-- ENDS Weather Icon -->
                      <div class="span7 row">
                        <div class="span4">
                            <div class="temp"> <?php echo $data{'tomorrow_high'}; ?>&deg;</div>
                            <p>High</p>
                            <!-- ENDS Weather High -->
                        </div>
                        <div class="span4 offset1">
                            <div class="temp"> <?php echo $data{'tomorrow_low'}; ?>&deg;</div>
                            <p>Low</p>
                            <!-- ENDS Weather Low -->
                        </div>
                      </div>
                  </div>
                  <p><?php echo $data{'tomorrow_text'}; ?></p>
                  <p><a class="btn" href="#">View details &raquo;</a></p>
                </div><!--/span-->
               
                <div class="span4">
                  <h2><?php echo $data{'day2_title'}; ?></h2>
                  <div class="row">
                      <div class="span4 offset1"><img src="<?php echo $data{'day2_icon'}; ?>" class="icon-rounded" width="200"></div> <!-- ENDS Weather Icon -->
                      <div class="span7 row">
                        <div class="span4">
                            <div class="temp"> <?php echo $data{'day2_high'}; ?>&deg;</div>
                            <p>High</p>
                            <!-- ENDS Weather High -->
                        </div>
                        <div class="span4 offset1">
                            <div class="temp"> <?php echo $data{'day2_low'}; ?>&deg;</div>
                            <p>Low</p>
                            <!-- ENDS Weather Low -->
                        </div>
                      </div>
                  </div>
                  <p><?php echo $data{'day2_text'}; ?></p>
                  <p><a class="btn" href="#">View details &raquo;</a></p>
                </div><!--/span-->
                
                <div class="span4">
                  <h2><?php echo $data{'day3_title'}; ?></h2>
                  <div class="row">
                      <div class="span4 offset1"><img src="<?php echo $data{'day3_icon'}; ?>" class="icon-rounded" width="200"></div> <!-- ENDS Weather Icon -->
                      <div class="span7 row">
                        <div class="span4">
                            <div class="temp"> <?php echo $data{'day3_high'}; ?>&deg;</div>
                            <p>High</p>
                            <!-- ENDS Weather High -->
                        </div>
                        <div class="span4 offset1">
                            <div class="temp"> <?php echo $data{'day3_low'}; ?>&deg;</div>
                            <p>Low</p>
                            <!-- ENDS Weather Low -->
                        </div>
                      </div>
                  </div>
                  <p><?php echo $data{'day3_text'}; ?></p>
                  <p><a class="btn" href="#">View details &raquo;</a></p>
                </div><!--/span-->
              </div><!--/row-->
     
            </div><!--/span-->
          </div><!--/row-->
         </div>
      <hr>