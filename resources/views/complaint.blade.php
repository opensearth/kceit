<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./mobile/css/global.css" />
    <link rel="stylesheet" href="./mobile/css/complaint.css" />



    
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap"
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
  <body bgcolor="#1e1e1e">
    <div class="android-large-1">
    <a href="/" style="text-decoration: none;color:white">
      <div class="title-box">
        <b class="opens">OpenS</b>
        <img class="logo-1-icon" alt="" src="./public/logo-1@2x.png" />
        
      </div>
</a>
      <div class="background-black"></div>
      <b class="anonymous-feedback">Anonymous Complaint</b>
      <div class="box">
        <form action="/complaint" method="post">
          @csrf
        <div class="title"> <input name="title" type="text" placeholder="Title..." class="title"></div>
        <textarea type="text" name="desc" placeholder="Desc..." class="desc"></textarea>
        <button class="box-child">Submit</button>
</button>
      </div>
    </div>
  </body>
</html>
