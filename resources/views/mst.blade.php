<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="/mobile/css/global_mst.css" />
    <link rel="stylesheet" href="/mobile/css/mst.css" />
    <meta name="description" content="MST Result : <?php echo $results[0]->roll_no ?> 


" itemprop="description">


<title>MST Result : <?php echo $results[0]->roll_no ?> </title>
<meta name="keywords" content="KCEIT , MSt , Result ,Anonymous Complaint ,Direcoroty , Devloper Team , OpenS KCEIT , HPTU , hptu , kceit , opens, kceit portal , mst result , attendance , Faculty Direcotry , Developer Team">

<meta property="og:image" content="https://kceit.web3o.cloud/images/seo/seo.png">

<meta property="og:site_name" content="kceit.web3o.cloud">

<meta property="og:title" content="MST Result : <?php echo $results[0]->name; echo $results[0]->roll_no; ?> ">

    
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
  <body>
    <div class="android-large-1">
      <a href="/" style="text-decoration: none;color:white">
      <div class="android-large-1-child"></div>
      <div class="opens">OpenS</div>
      <img class="image-12x-1-icon" alt="" src="/public/logo-1@2x.png" />
</a>
      <div class="android-large-1-item"></div>
      <div class="info">
        
          <img src="<?php echo $results[0]->img ?>" class="info-child"></img>
        
        <b class="aryan-jaswal"><?php echo $results[0]->name ?></b>
        <div class="div"><?php echo $results[0]->roll_no ?></div>
        <b class="computer-science"><?php echo $results[0]->branch ?></b>
        <b class="b"><?php echo $results[0]->starting_year. "-".$results[0]->grad_year ?></b>
        <b class="btech"><?php echo $results[0]->course ?></b>
        <b class="sem-4">SEM : <?php echo $results[0]->sem ?></b>
      </div>
      <b class="mst-record">MST RECORD</b>
      <div class="android-large-1-inner">

        <table style="color:white;font-size: 10px; border: 1px solid;border-image: linear-gradient(to right, #ff0000, #00ff00);border-image-slice: 1;border-collapse: separate;">
          <tr>
            <th>Subject</th>
            <th>Course Code</th>
            <th>Obtain Marks</th>
            <th>Total Marks</th>
            <th>Status</th>
          <th>Rank</th>  
          <?php
            for($i =0;$i<count($results2);$i++){
                $mark = intval($results2[$i]->marks_obt);
                $pass_status = "";
                if($mark >= 12){
                    $pass_status = "Pass";
                }else{
                    $pass_status = "Fail";
                }
                echo "<tr>
                <td>".$results2[$i]->subject."</td>
                <td>".$results2[$i]->sub_code."</td>
                <td>".$results2[$i]->marks_obt."</td>
                <td>".$results2[$i]->total_marks."</td>
                <td>".$pass_status."</td>
                <th>-</th>
              </tr>";
            }
            ?>

            
          </table>
      </div>
    </div>
  </body>
</html>
