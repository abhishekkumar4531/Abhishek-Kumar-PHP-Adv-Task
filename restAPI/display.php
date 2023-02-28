<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Innoraft-Task</title>
  <!--<link rel="stylesheet" href="style.css">-->
  <style>
    <?php  include("style.css"); ?>
  </style>
</head>
<body>
  <?php
    require("getData.php");
    $obj = new GetData();
    $title_value = $obj->getapiData('https://ir-dev-d9.innoraft-sites.com/jsonapi/node/services');
    $titles = $title_value[0];
    $values = $title_value[1];
    $images = $title_value[2];
    $tLink = $title_value[3];

    /*foreach($titles as $title){
      echo $title ."<br>";
    }*/

    /*echo $titles[5] ."<br>";
      echo $values[5] ."<br>";
      echo '<img src="'. $images[5] .'">';*/
  ?>

  <div>

    <div class="odd-row">
      <div class="image">
        <a href="<?php echo $tLink[3]; ?>"><?php echo '<img src="'. $images[3] .'">'; ?></a>
      </div>
      <div class="content">
        <div>
          <?php
            echo '<a href="'. $tLink[3] .'">'. $titles[3] .'</a>';
            echo $values[3];
          ?>
          <div class="explore">
            <a href="<?php echo $tLink[3]; ?>">Explore Now</a>
          </div>
        </div>
      </div>
    </div>

    <div class="even-row">
      <div class="content">
        <div>
          <?php
            echo '<a href="'. $tLink[0] .'">'. $titles[0] .'</a>';
            echo $values[0];
          ?>
          <div class="explore">
            <a href="<?php echo $tLink[0]; ?>">Explore Now</a>
          </div>
        </div>
      </div>
      <div class="image">
        <a href="<?php echo $tLink[0]; ?>"><?php echo '<img src="'. $images[0] .'">'; ?></a>
      </div>
    </div>

    <div class="odd-row">
      <div class="image">
        <a href="<?php echo $tLink[1]; ?>"><?php echo '<img src="'. $images[1] .'">'; ?></a>
      </div>
      <div class="content">
        <div>
          <?php
            echo '<a href="'. $tLink[1] .'">'. $titles[1] .'</a>';
            echo $values[1];
          ?>
          <div class="explore">
            <a href="<?php echo $tLink[1]; ?>">Explore Now</a>
          </div>
        </div>
      </div>
    </div>

    <div class="even-row">
      <div class="content">
        <div>
          <?php
            echo '<a href="'. $tLink[2] .'">'. $titles[2] .'</a>';
            echo $values[2];
          ?>
          <div class="explore">
            <a href="<?php echo $tLink[2]; ?>">Explore Now</a>
          </div>
        </div>
      </div>
      <div class="image">
        <a href="<?php echo $tLink[2]; ?>"><?php echo '<img src="'. $images[2] .'">'; ?></a>
      </div>
    </div>

  </div>
</body>
</html>