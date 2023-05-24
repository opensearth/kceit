<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="/mobile/css/global_teacher.css" />
    <link rel="stylesheet" href="/mobile/css/teacher_detail_dir.css" />
    
    
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
    />
  </head>
  <body style="background-color:#1e1e1e;">
    <div class="android-large-1">
      <div class="android-large-1-child"></div>
      <div class="opens">OpenS</div>
      <img class="image-12x-1-icon" alt="" src="/public/logo-1@2x.png" />
      

      <div class="android-large-1-item"></div>
      <b class="professor-detail"> Select Student</b>

      
      <?php 
    $emoji_link = ["https://cdn.discordapp.com/attachments/1110765721119633458/1110765900275142736/1.png",
    "https://cdn.discordapp.com/attachments/1110765721119633458/1110765900610670653/2.png",
    "https://cdn.discordapp.com/attachments/1110765721119633458/1110765900900094044/3.png",
    "https://cdn.discordapp.com/attachments/1110765721119633458/1110765901256597584/4.png",
    "https://cdn.discordapp.com/attachments/1110765721119633458/1110768154008887317/7.png",
    "https://cdn.discordapp.com/attachments/1110765721119633458/1110765901881561128/6.png"
    ];
    
    
    $loc = 180;
    for($i = 0 ; $i< count($results);$i++){
      $emoji_rand = rand(0,5);
    $emoji_img = $emoji_link[$emoji_rand];
    echo '
    <a href="/mst/'.$results[$i]->roll_no.'">
    <div class="rectangle-parent" style="top:'.$loc.'px;color:white">
        <div class="group-child"></div>
        <div class="group-item"><img style="border-radius:50px;width:100%;height:100%;" src="'.$emoji_img.'"></img></div>
        <b class="aryan-jaswal" style="font-size:12px">'.$results[$i]->name.'</b>
        <b class="principal">'.$results[$i]->roll_no.'</b>
        <b class="b">'.$results[$i]->branch.'</b>
        <b class="aryanjaswaliitgmailcom">Sem : '.$results[$i]->sem.'</b>
        <b class="mtech2015">'.$results[$i]->course.'</b>
        <b class="dbms-java">'.$results[$i]->starting_year.'-'.$results[$i]->grad_year.'</b>
        <b class="computer-science"></b>
      </div>
      </a>
    ';
    
    $loc = $loc + 180;
    }
    ?>
    
</div>
<script>
    let a = document.getElementsByClassName("android-large-1");
    <?php
    echo 'a[0].style.height = "'.$loc.'px";';
    ?>

    //android-large-1-item
    let b = document.getElementsByClassName("android-large-1-item");
    <?php
    echo 'b[0].style.height = "'.$loc.'px";';
    ?>
    </script>
  </body>
</html>
