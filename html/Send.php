

<?php
$name = $_POST['name'];

$link = $_POST['link'];
$to = "alexbrenna1999@gmail.com";
$subject = "HTML email+ resume";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>name</th>
<th>message</th>
<th>link</th>
</tr>
<tr>
<td>$name</td>
<td>$message</td>
<th>$link</th>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <$name.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>
<!-- Final Page that print out all the info from all the previous pages -->
<html>
 <head>
     <meta http-equiv="refresh" content="2;url=https://alexbrenna.greenriverdev.com/RESUME/HTML/Guestbook.php">
  <title>PHP Test</title>
 </head>
 <body>
     <?php

  $message = $_POST['message'];
   include '/home/alexbren/ResumeDB.php';
    $sql = "INSERT INTO Guestbook VALUES ('$name','$message','$link')";
    $result = mysqli_query($cnxn, $sql); 
    //echo $result;
    echo '<p>Email sent and data base updated</p>'
        
?> 
  <?php echo '<p>POST</p>'; ?>
  <?php echo var_dump($_POST); ?>
  <?php echo '<br>'; ?>
  
  <?php echo '<p>GET</p>'; ?> 
  <?php echo var_dump($_GET); ?> 
 </body>
</html>