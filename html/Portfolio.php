<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../CSS/agreement.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title></title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">URL</th>
      <th scope="col">Description</th>
      <th scope="col">Languages</th>
    </tr>
  </thead>
  <tbody>    
    <?php
require '/home/alexbren/ResumeDB.php';
 $sql = "SELECT * FROM projects";
 $result = mysqli_query($cnxn, $sql);

  while ($row = mysqli_fetch_assoc($result))
{
$Name = $row['Name'];
$Url = $row['Url'];
$Description = $row['Description'];
$Languages = $row['Languages'];
echo"
<tr>
      <td>$Name</td>
      <td><a href=$Url target=_blank>Project link</a></td>
      <td>$Description</td>
      <td>$Languages</td>
</tr>";
//echo "<p>$Name - $Url $Description, $Languages hi</p>";
}
   



?>
  </tbody>
</table>

</body>
</html>

