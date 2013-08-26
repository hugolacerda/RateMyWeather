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
                            <i class="icon-sign-blank icon-stack-base"></i>
                            <i class="icon-thumbs-up icon-light"></i>
                            <span class="icon-stack">
                        </div>
                        <div class="span1">
                            <span class="icon-stack">
                            <i class="icon-sign-blank icon-stack-base"></i>
                            <i class="icon-thumbs-down icon-light"></i>
                            <span class="icon-stack">
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
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <!--/span-->
        <div class="span4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <!--/span-->
        <div class="span4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <!--/span-->
    </div>
    <!--/row-->
</div>
<!--/span-->
</div><!--/row-->
</div>
<hr>