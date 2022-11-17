<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div   id="top">
        <form action="Send.php" method="Post">
 <div class="text-center ">
        Name: <input type="text" name="name" value="<?php echo $name;?>">

        Link: <input type="text" name="link" value="<?php echo $link;?>">
        
        Message: <input type="text" name="message" value="<?php echo $message;?>">
    </div>
<input type="submit">
      
</form>
    </div>
    <div id="bottom">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Link</th>
              <th scope="col">Message</th>
              
            </tr>
          </thead>
          <tbody>    
            <?php
        include '/home/alexbren/ResumeDB.php';
         $sql = "SELECT * FROM Guestbook";
         $result = mysqli_query($cnxn, $sql);
        
          while ($row = mysqli_fetch_assoc($result))
        {
        $Name = $row['Name'];
        $Description = $row['Text'];
        $Url = $row['Link'];
        
        echo"<tr><td>$Name</td> <td><a href=$Url target=_blank>Project link</a></td> <td>$Description</td></tr>";
        }
        ?>
          </tbody>
        </table>
    </div>


</body>
</html>