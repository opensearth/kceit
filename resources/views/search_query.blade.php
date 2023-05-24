<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="mobile/css/global.css" />
    <link rel="stylesheet" href="mobile/css/mst_query.css" />
    
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
    />
  </head>
  <body>
    <div class="android-large-2">
      <div class="android-large-2-child"></div>
      <div class="opens">OpenS</div>
      <img class="image-12x-1-icon" alt="" src="/public/logo-1@2x.png" />

      <div class="android-large-2-item"></div>
      <b class="mst-result">MST RESULT</b>
      
      <input type="text" id="roll_num" class="android-large-2-inner" placeholder="Roll or Name.." style="font-size:35px;border-radius:50px;background-color:white;">
      
      <button class="rectangle-div" style="background-color: white;font-size:40px;border-radius: 50px;" onclick="search()" >Submit</button>
    </div>

    <script>
      function search(){
        let a = document.getElementById("roll_num").value;
        document.location.href = "/search/"+a+"";
      }
      </script>
  </body>
</html>
