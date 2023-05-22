<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="/mobile/css/global.css" />
    <link rel="stylesheet" href="/mobile/css/mst.css" />
    
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"
    />
  </head>
  <body>
    <div class="android-large-1">
      <div class="logo">
        <div class="logo-child"></div>
        <img class="image-1-icon" alt="" src="/public/image-1@2x.png" />

        <b class="opens">OpenS</b>
      </div>
      <div class="android-large-1-child"></div>
      <img class="android-large-1-item" alt="" src="<?php echo $results[0]->img ?>" />

      <div class="info-person">
        <b class="aryan-jaswal"><?php echo $results[0]->name ?></b>
        <b class="b" style="font-size:30px;"><?php echo $results[0]->roll_no ?></b>
        <b class="btech-cse" style="font-size:15px;"><?php echo $results[0]->branch ?></b>
        <b class="b1"><?php echo $results[0]->starting_year. "-".$results[0]->grad_year ?></b>
        <b class="year"><?php echo $results[0]->course ?></b>
        <b class="sem" style="font-size:25px;"><?php echo $results[0]->sem ?> Sem</b>
        <style>
          td {
            border: 1px solid;
        border-image: linear-gradient(to right, #ff0000, #00ff00);
        border-image-slice: 1;

    }

    th {
      border: 1px solid;
        border-image: linear-gradient(to right, #ff0000, #00ff00);
        border-image-slice: 1;
    }
        </style>
        <div class="mst_1" style="position:relative;top:300px;">
          <center>
            MST-1 Result <br>(April 2023) 
          </center>
          
          <br>
          <div class="mst_1_res" style="position:relative;left:-25px;">
          <table style="color:white;font-size: 15px; border: 2px solid;border-image: linear-gradient(to right, #ff0000, #00ff00);border-image-slice: 1;border-collapse: separate;">
            <tr>
              <th>Subject</th>
              <th>Course Code</th>
              <th>Obtain Marks</th>
              <th>Total Marks</th>
              <th>Status</th>
            <th>Rank</th>  
            </tr>

            

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
                <td>30</td>
                <td>".$pass_status."</td>
                <th>-</th>
              </tr>";
            }
            ?>

            
          </table>
          </div>
          </div>
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
