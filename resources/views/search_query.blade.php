<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="/mobile/css/global.css" />
    <link rel="stylesheet" href="/mobile/css/select_query.css" />
    
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"
    />
  </head>
  <body>
    <div class="android-large-1">
      <div class="rectangle-parent">
        <div class="group-child"></div>
        <img class="image-1-icon" alt="" src="/public/image-1@2x.png" />

        <b class="opens">OpenS</b>
      </div>
      <div class="android-large-1-child"></div>
      <b class="mst-result">MST Result</b>
      <div class="input-box">
        <input id="roll_num" type="text" style="border-radius:50px;width:98%;height:100%;font-size:35px;" placeholder="Roll or Name"></div>
      <div class="search-button">
        
        <button class="search" onclick="search()" style="background-color:white;width:100%;margin-left:-30px;font-size:25px;border-radius:50px;">Search</button>
      </div>
    </div>
    <div class="rectangle-div">
      <Center>
    <b class="developed-by-illuminati-container">

      <span>Developed By </span>
      <span class="illuminati-team">illuminati Team</span>
    </b>

    </Center>
    </div>

    <script>
      function search(){
        let a = document.getElementById("roll_num").value;
        document.location.href = "/search/"+a+"";
      }
      </script>
  </body>
</html>
