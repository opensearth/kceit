<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="/mobile/css/global.css" />
    <link rel="stylesheet" href="/mobile/css/branch.css" />
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LRKZ5P2WP3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LRKZ5P2WP3');
</script>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
    />
  </head>
  <body>
    <div class="android-large-1">
    <a href="/" style="text-decoration: none;color:white">
      <div class="android-large-1-child"></div>
      <div class="opens">OpenS</div>
      <img class="image-12x-1-icon" alt="" src="/public/image-1@2x.png" />
</a>
      <div class="android-large-1-item"></div>
      <b class="choose-your-branch-container">
        <p class="choose-your">Time Table</p>
        <p class="choose-your"><?php
echo $results[0]->Title;
?>
</p>
      </b>
      <div class="android-large-1-inner">
      <iframe style="margin-left:20px;height:450px;margin-left:-30px;" src="<?php echo $results[0]->link?>" width="100%" height="100%"></iframe>

    </div>
    </div>
  </body>
</html>
