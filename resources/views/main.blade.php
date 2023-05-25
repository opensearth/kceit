<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    
    <link rel="stylesheet" href="/mobile/css/global.css" />
    <link rel="stylesheet" href="/mobile/css/main_page.css" />
    
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
    />
  </head>
  <body bgcolor="black" onload="load()">
    <div class="android-large-1">
      <img class="black-1-icon" alt="" src="./public/black-1@2x.png" />

      <img
        class="background-1-icon"
        alt=""
        src=""
      />

      <a href="/" style="text-decoration: none;color:white">
      <div class="android-large-1-child"></div>
      <div class="aryan"></div>
      <div class="rectangle-parent">
        <div class="group-child"></div>
        <b class="opens">OpenS</b>
      </div>
</a>

      <a href="branch">
      <div class="time-table">
        <div class="time-table-child"></div>
        <b class="mst-result">Time Table</b>
      </div>
</a>

      <a href="professor_details" >
      <div class="teacher-staff">
        <div class="time-table-child"></div>
        <b class="teacher-staff1">Faculty</b>
      </div>
</a>

      <a href="team">
      <div class="team">
        <div class="time-table-child"></div>
        <b class="teacher-staff1">Developer Team</b>
      </div>
</a>

<a href="complaint">
      <div class="complaint">
        <div class="time-table-child"></div>
        <b class="teacher-staff1">Complaint</b>
      </div>
</a>

      
      <div class="attdance">
        <div class="time-table-child"></div>
        <b class="mst-result1">Attendance</b>
      </div>
      
      <div class="mst-result2">
        <div class="time-table-child"></div>
        <a href="/mst_query" style="text-decoration: none;color:black"><b class="mst-result3">MST Result</b></a>
      </div>
      

      <div class="intro-page">
        <div class="intro-page-parent">
          <div class="intro-page-parent">
            <div class="intro-page2"></div>
            <b class="welcome-in-opens-container">
              <p class="welcome">Welcome</p>
              <p class="in">in</p>
              <p class="in"></p>
              <p class="opens1">OpenS</p>
              <p class="kciet">
                <span class="span"> </span>
                <span>KCIET</span>
              </p>
            </b>
          </div>
          <div class="search-button">
            <div class="search-button-child"></div>
            <button class="search" onclick="search()" style="width:100%;height:100%;margin-left:-60px;font-size:47px;margin-top:-5px;background-color:white;border-radius:50px;">Search</button>
      
          </div>
        </div>
        
        <input id="roll_num" type="text" class="text-box" placeholder="Roll or Name.."></input
      </div>
      <b class="select-options">Select Options</b>
      <div class="developed">
        <div class="developed-child"></div>
        <b class="developed-by-illuminati-container">
          <span>Developed By </span>
          <span class="illuminati-team">Illuminati Team</span>
        </b>
      </div>
      <img class="logo-1-icon" alt="" src="./public/logo-1@2x.png" />
    </div>


     <!-- script for run -->
     <script>
      function load(){
      let a  = document.getElementsByClassName("background-1-icon")
  
      let rand = Math.floor(Math.random()*6) + 1;
      a[0].src = "images/bg_"+rand+".png"
      }
      </script>
  
  <script>
        function search(){
          let a = document.getElementById("roll_num").value;
          document.location.href = "/search/"+a+"";
        }
        </script>
  </body>
</html>
