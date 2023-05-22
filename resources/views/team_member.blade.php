<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="mobile/css/global.css" />
    <link rel="stylesheet" href="mobile/css/teacher_detail_dir.css" />
    

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"
    />
  </head>
  <body>
    <div class="android-large-1">
      <div class="title-box">
        <div class="title-box-child"></div>
        <img class="image-1-icon" alt="" src="./public/image-1@2x.png" />

        <b class="opens">OpenS</b>
      </div>
      <div class="background-black">
 
        
      </div>
    </div>

    <div class="teacher_data_title" style="color:white;position:absolute;top:120px;left:20vw;font-size: 30px;">
      Team Member
    </div>

    <?php 
    $loc = 180;
    for($i = 0 ; $i< count($results);$i++){
    echo '<div class="teacher_detail" style="height:150px;width:80vw;color:white;position: absolute;top:'.$loc.'px;left:10vw;border-color: white;border-style: solid;">
    <img  style="margin-left:100px;border-radius: 80px;" src="'.$results[$i]->img.'" width="100px" height="100px"></img>
    <center>
    <b style="color:white;font-size:25px;">'.$results[$i]->name.'</b><br>
    </center>
    </div>';

    $loc = $loc + 180;
    }

   
    
    ?>

<script>
    let a = document.getElementsByClassName("background-black");
    <?php
    echo 'a[0].style.height = "'.$loc.'px";';
    ?>
    </script>

  </body>
</html>
