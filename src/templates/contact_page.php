<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BeMo</title>
  <link rel="stylesheet" href="../styles/main.css">
  <link rel="stylesheet" href="../styles/contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
 <?php
    $cur_dir = getcwd(); 
    $path_root = explode("\src", $cur_dir); 
    $inc_path = $path_root[0]."\src";
    set_include_path($inc_path);
   ?>

<?php include 'templates/fixed/header.php';?>
    <div>
        <img src="https://cdainterview.com/resources/contact-us.png" alt="Snow" style="width:100%;">
      </div>
   <div class="bemo_contact">
    <h3>BeMo Academic Consulting Inc.</h3>
    <p><span style="text-decoration: underline;font-weight: bold;">Toll Free: </span> 1-855-900-BeMo (2366)</p>
    <p><span style="text-decoration: underline;font-weight: bold;">Email: </span>info@bemoacademicconsulting.com</p>
   </div>
   <div>
    <form action="../back-end/request_help.php" method="post">
        <label for="name" class ="contact_label">NAME: *</label><br>
        <input type="text" id="name" name="name" required ><br>
        <label for="mail" class ="contact_label">EMAIL ADDRESS: *</label><br>
        <input type="email" id="mail" name="mail" required><br>
        <label for="help" class ="contact_label">HOW CAN WE HELP YOU? *</label><br>
        <textarea  id="help" name="help"></textarea><br><br>
        <input type="reset" value="Reset" id = "reset">
        <input type="submit" value="Submit" id = "submit">
    </form>
    <p id="note_tag"><span style="text-decoration: underline;font-weight: bold;">Note: </span> If you are having difficulties with our contact us form above, send us an email to info@bemoacademicconsulting.com (copy & paste the email address)</p>
   </div>   
   <a href="#top"><i href="#top" class="fa fa-long-arrow-up" id ="arrow"></i></a>
    <?php include 'templates/fixed/footer.php';?>
</body>
</html>
