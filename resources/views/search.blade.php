<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="/mobile/css/global_teacher.css" />
    <link rel="stylesheet" href="/mobile/css/teacher_detail_dir.css" />
    
    <meta name="description" content="Discover the KCEIT Portal, an innovative platform exclusively crafted for students at KC Group of Professional Institute. Accessible and user-friendly, KCEIT offers a multitude of features designed to streamline your academic journey. Stay informed about your MST results, track attendance, manage your timetable, explore the faculty directory, and even connect with our talented developer team.

Keep up with your academic progress effortlessly by checking your MST results on the KCEIT Portal. Stay on top of your performance, gain valuable insights, and identify areas where you can excel.

Stay organized and accountable with KCEIT's attendance tracking system. Easily monitor your attendance records, ensuring you never miss an important class or deadline.

Plan your study schedule effectively with the convenience of KCEIT's up-to-date timetable. Stay updated on class timings, venues, and faculty details, allowing you to manage your time efficiently.

Connect with the esteemed faculty members through the comprehensive faculty directory on KCEIT. Find contact information, office hours, and areas of expertise, fostering effective communication and collaboration for academic success.

Behind the scenes, our dedicated developer team continuously enhances the KCEIT experience. Reach out to them with any technical queries or suggestions, ensuring a seamless user experience tailored to your needs.

Explore the power of KCEIT, the ultimate companion for KC Group students. Experience hassle-free access to results, attendance, timetable, faculty information, and connect with our developer team. Join KCEIT today and unlock your full academic potential!




" itemprop="description">


<title>Select Student</title>
<meta name="keywords" content="KCEIT , Select Student ,Select Branch , Anonymous Complaint ,Direcoroty , Devloper Team , OpenS KCEIT , HPTU , hptu , kceit , opens, kceit portal , mst result , attendance , Faculty Direcotry , Developer Team">

<meta property="og:image" content="https://kceit.web3o.cloud/images/seo/seo.png">

<meta property="og:site_name" content="kceit.web3o.cloud">

<meta property="og:title" content="Select Student">

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
    />
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LRKZ5P2WP3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LRKZ5P2WP3');
</script>
  </head>
  <body style="background-color:#1e1e1e;">
    <div class="android-large-1">
    <a href="/" style="text-decoration: none;color:white">
      <div class="android-large-1-child"></div>
      <div class="opens">OpenS</div>
      <img class="image-12x-1-icon" alt="" src="/public/logo-1@2x.png" />
      
</a>
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
