<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="/mobile/css/global.css" />
    <link rel="stylesheet" href="/mobile/css/teacher_detail_dir.css" />
    
    

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"
    />
  </head>
  <body bgcolor="black">
    <div class="android-large-1">
      <div class="title-box">
        <div class="title-box-child"></div>
        <img class="image-1-icon" alt="" src="/public/image-1@2x.png" />

        <b class="opens">OpenS</b>
      </div>
      <div class="background-black">
 
        
      </div>
    </div>

    <div class="teacher_data_title" style="color:white;position:absolute;top:120px;left:20vw;font-size: 30px;">
      Select Student
    </div>

    <?php 
    $loc = 180;
    $emoji_link = ["https://cdn.discordapp.com/attachments/1110765721119633458/1110765900275142736/1.png",
"https://cdn.discordapp.com/attachments/1110765721119633458/1110765900610670653/2.png",
"https://cdn.discordapp.com/attachments/1110765721119633458/1110765900900094044/3.png",
"https://cdn.discordapp.com/attachments/1110765721119633458/1110765901256597584/4.png",
"https://cdn.discordapp.com/attachments/1110765721119633458/1110768154008887317/7.png",
"https://cdn.discordapp.com/attachments/1110765721119633458/1110765901881561128/6.png"
];



    for($i = 0 ; $i< count($results);$i++){
    $emoji_rand = rand(0,5);
    $emoji_img = $emoji_link[$emoji_rand];
    echo '<a href="/mst/'.$results[$i]->roll_no.'">"<div class="teacher_detail" style="height:150px;width:80vw;color:white;position: absolute;top:'.$loc.'px;left:10vw;border-color: white;border-style: solid;">
    <img  style="border-radius: 80px;" src="'.$emoji_img.'" width="100px" height="100px"></img>
    <b style="position: relative; top:-70px;font-size:15px;">'.$results[$i]->name.'</b><br>
    <b style="position: relative; top:-60px;font-size:15px;left:30vw;color:grey">'.$results[$i]->roll_no.'</b><br>
    <b style="position: relative; top:-50px;font-size:8px;left:30vw;color:white;width:10px;"></b>
    <br>
    <b style="position: relative; top:-45px;font-size:10px;left:10vw;color:white;width:20vw;">'.$results[$i]->course.'</b>
    <br>
    
    <b style="position: relative; top:-40px;font-size:12px;left:6vw;color:white;width:20vw;">'.$results[$i]->branch.'</b>
    

    <b style="position: relative; top:-40px;font-size:10px;left:20vw;color:white;width:20vw;"> Sem :'.$results[$i]->sem.'</b>
    
    </div></a>';

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
