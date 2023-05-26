<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />

    
    <meta name="description" content="Discover the KCEIT Portal, an innovative platform exclusively crafted for students at KC Group of Professional Institute. Accessible and user-friendly, KCEIT offers a multitude of features designed to streamline your academic journey. Stay informed about your MST results, track attendance, manage your timetable, explore the faculty directory, and even connect with our talented developer team.

Keep up with your academic progress effortlessly by checking your MST results on the KCEIT Portal. Stay on top of your performance, gain valuable insights, and identify areas where you can excel.

Stay organized and accountable with KCEIT's attendance tracking system. Easily monitor your attendance records, ensuring you never miss an important class or deadline.

Plan your study schedule effectively with the convenience of KCEIT's up-to-date timetable. Stay updated on class timings, venues, and faculty details, allowing you to manage your time efficiently.

Connect with the esteemed faculty members through the comprehensive faculty directory on KCEIT. Find contact information, office hours, and areas of expertise, fostering effective communication and collaboration for academic success.

Behind the scenes, our dedicated developer team continuously enhances the KCEIT experience. Reach out to them with any technical queries or suggestions, ensuring a seamless user experience tailored to your needs.

Explore the power of KCEIT, the ultimate companion for KC Group students. Experience hassle-free access to results, attendance, timetable, faculty information, and connect with our developer team. Join KCEIT today and unlock your full academic potential!




" itemprop="description">


<title>Faculty Directory</title>
<meta name="keywords" content="KCEIT , Direcoroty , Devloper Team , OpenS KCEIT , HPTU , hptu , kceit , opens, kceit portal , mst result , attendance , Faculty Direcotry , Developer Team">

<meta property="og:image" content="https://kceit.web3o.cloud/images/seo/seo.png">

<meta property="og:site_name" content="kceit.web3o.cloud/professor_details">

<meta property="og:title" content="Professor Details">

    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./mobile/css/global_teacher.css" />
    <link rel="stylesheet" href="./mobile/css/teacher_detail_dir.css" />
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LRKZ5P2WP3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LRKZ5P2WP3');
</script>
    
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
