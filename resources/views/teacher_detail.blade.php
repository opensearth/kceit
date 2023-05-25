<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./mobile/css/global_teacher.css" />
    <link rel="stylesheet" href="./mobile/css/teacher_detail_dir.css" />
    
    
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
    />
  </head>
  <body style="background-color:#1e1e1e;">
    <div class="android-large-1">
    <a href="/" style="text-decoration: none;color:white">
      <div class="android-large-1-child"></div>
      <div class="opens">OpenS</div>
      <img class="image-12x-1-icon" alt="" src="./public/logo-1@2x.png" />
      
</a>
      <div class="android-large-1-item"></div>
      <b class="professor-detail"> Faculty Directory</b>

      
      <?php 
    
    $loc = 180;
    for($i = 0 ; $i< count($results);$i++){
    echo '
    <div class="rectangle-parent" style="top:'.$loc.'px;color:white">
        <div class="group-child"></div>
        <div class="group-item"><img style="border-radius:50px;width:100%;height:100%;" src="'.$results[$i]->image_link.'"></img></div>
        <b class="aryan-jaswal" style="font-size:12px">'.$results[$i]->name.'</b>
        <b class="principal">'.$results[$i]->position.'</b>
        <b class="b">+91-'.$results[$i]->phone_number.'</b>
        <b class="aryanjaswaliitgmailcom">'.$results[$i]->email_id.'</b>
        <b class="mtech2015">'.$results[$i]->qualification.'</b>
        <b class="dbms-java">'.$results[$i]->major_subject.'</b>
        <b class="computer-science">'.$results[$i]->department.'</b>
      </div>
    ';
    
    $loc = $loc + 180;
    }
    ?>
    
</div>
  </body>
</html>
