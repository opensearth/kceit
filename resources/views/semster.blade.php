<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="/mobile/css/global.css" />
    <link rel="stylesheet" href="/mobile/css/semster.css" />
    
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
      <b class="choose-your-semester-container">
        <p class="choose-your">Choose Your</p>
        <p class="choose-your">Semester</p>
      </b>
      <div>
        <style>
           .semester-button {
      background: linear-gradient(to bottom, #4a148c, #880e4f);
      color: white;
      width:80vw;
      
      padding: 10px 20px;
      border: none;
      border-radius: 50px;
      font-size: 30px;
      margin-top:10px;
      
      margin-bottom: 10px;
      position: relative;
      top:250px;
    }
        </style>
      <?php
      echo '<a href="/time_table/'.$branch.'/1">';
      ?>
      <button class="semester-button">1st SEM</button></a><br>
      <?php
      echo '<a href="/time_table/'.$branch.'/2">';
      ?>
      <button class="semester-button">2nd Sem</button></a><br>
    
    <?php
      echo '<a href="/time_table/'.$branch.'/3">';
      ?>
    <button class="semester-button">3rd SEM</button></a><br>
    <?php
      echo '<a href="/time_table/'.$branch.'/4">';
      ?>
    <button class="semester-button">4th SEM</button></a><br>
    <?php
      echo '<a href="/time_table/'.$branch.'/5">';
      ?>
    <button class="semester-button">5th SEM</button></a><br>
    <?php
      echo '<a href="/time_table/'.$branch.'/6">';
      ?>
    <button class="semester-button">6th SEM</button></a><br>
    <?php
      echo '<a href="/time_table/'.$branch.'/7">';
      ?>
    <button class="semester-button">7th SEM</button></a><br>
    <?php
      echo '<a href="/time_table/'.$branch.'/8">';
      ?>
    <button class="semester-button">8th SEM</button></a><br>
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
  </body>
</html>
