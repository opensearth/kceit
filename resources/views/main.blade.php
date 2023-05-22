<!DOCTYPE html>
<html>
  <head>
    <title>KCEIT Portal: Your All-in-One Solution for KC Group Students - Check Results, Attendance, Timetable, and More!</title>
    <meta name="description" content="Discover the KCEIT Portal, an innovative platform exclusively crafted for students at KC Group of Professional Institute. Accessible and user-friendly, KCEIT offers a multitude of features designed to streamline your academic journey. Stay informed about your MST results, track attendance, manage your timetable, explore the faculty directory, and even connect with our talented developer team.

Keep up with your academic progress effortlessly by checking your MST results on the KCEIT Portal. Stay on top of your performance, gain valuable insights, and identify areas where you can excel.

Stay organized and accountable with KCEIT's attendance tracking system. Easily monitor your attendance records, ensuring you never miss an important class or deadline.

Plan your study schedule effectively with the convenience of KCEIT's up-to-date timetable. Stay updated on class timings, venues, and faculty details, allowing you to manage your time efficiently.

Connect with the esteemed faculty members through the comprehensive faculty directory on KCEIT. Find contact information, office hours, and areas of expertise, fostering effective communication and collaboration for academic success.

Behind the scenes, our dedicated developer team continuously enhances the KCEIT experience. Reach out to them with any technical queries or suggestions, ensuring a seamless user experience tailored to your needs.

Explore the power of KCEIT, the ultimate companion for KC Group students. Experience hassle-free access to results, attendance, timetable, faculty information, and connect with our developer team. Join KCEIT today and unlock your full academic potential!




" itemprop="description">

<meta name="keywords" content="KCEIT , OpenS KCEIT , HPTU , hptu , kceit , opens, kceit portal , mst result , attendance , Faculty Direcotry , Developer Team">

<meta property="og:image" content="/public/images/logo.png">

<meta property="og:site_name" content="kceit.web3o.cloud">

<meta property="og:title" content="KCEIT Portal: Results, Attendance, Timetable, Faculty Directory, and More!">


    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="mobile/css/global.css" />
    <link rel="stylesheet" href="mobile/css/main_page.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
    />
  </head>
  <body onload="load()">
    <div class="android-large-1">
      <img class="back-ground-2-icon" alt="" src="./public/back-ground-2.svg" />

      <div class="android-large-1-child"></div>
      <img
        class="background-1-icon"
        alt=""
        src=""
      />

      <div class="android-large-1-item"></div>
      <div class="android-large-1-inner"></div>
      <div class="aryan"></div>
      <img class="image-1-icon" alt="" src="./public/image-1@2x.png" />

      <b class="opens">OpenS</b>
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
      <a href="branch">
      <div class="time-table">
        <div class="time-table-child"></div>
        <b class="mst-result1">Time Table</b>
      </div>
</a>
      <div class="attdance">
        <div class="time-table-child"></div>
        <b class="mst-result1">Attendance</b>
      </div>


      <a href="professor_details" >
      <div class="professor">
        <div class="time-table-child"></div>
        <b class="mst-result1" style="margin-top: 10px;font-size: 25px;font-weight: bold;"><center>Faculty Directory</center></b>
      </div>
</a>

<a href="team" >
      <div class="team">
        <div class="time-table-child"></div>
        <b class="mst-result1" style="margin-top: 10px;font-size: 25px;font-weight: bold;"><center>Developer Team</center></b>
      </div>
</a>


      <div class="mst-result2">
        <div class="time-table-child"></div>
        <a href="/mst_query" style="text-decoration: none;color:white"><b class="mst-result3">MST Result</b></a>
      </div>

      <div class="search-button">
        <div class="time-table-child"></div>
        <!--<b class="search">Search</b>-->
        <button class="search" onclick="search()" style="width:100%;margin-left:-60px;font-size:47px;margin-top:-5px;background-color:white;border-radius:50px;">Search</button>
      
      </div>
      <div class="text-box">
        <input id="roll_num" type="text" style="border-radius:55px;width:98%;height:100%;font-size:35px;" placeholder="Roll or Name"></div>
      <b class="select-options">Select Options</b>
      <div class="rectangle-div"></div>
      <b class="developed-by-illuminati-container">
        <span>Developed By </span>
        <span class="illuminati-team">illuminati Team</span>
      </b>
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
