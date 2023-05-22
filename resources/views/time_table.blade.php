<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="/mobile/css/global.css" />
    <link rel="stylesheet" href="/mobile/css/time_table.css" />
    
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"
    />
  </head>
  <body>
    <div class="android-large-1">
      <div class="title-box">
        <div class="title-box-child"></div>
        <img class="image-1-icon" alt="" src="/public/image-1@2x.png" />

        <b class="opens">OpenS</b>
      </div>
      <div class="background-black"></div>

      
    </div>
<div class="pdf_viewer" style="color:white;position: absolute;top:30vh;">
  <center>
    <b style="font-size:25px;margin-left:10px;">
    Time Table <br>
<?php
echo $results[0]->Title;
?>
</b><br><br>
      <iframe style="margin-left:20px;height:450px;margin-left:-30px;" src="<?php echo $results[0]->link?>" width="100%" height="100%"></iframe>
    </center>  
    </div>
  </body>
</html>
