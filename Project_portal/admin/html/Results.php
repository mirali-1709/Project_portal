<?php

include 'conn.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../../assets/css/s.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>

.container{
    position: relative;
    max-width: 80%;
    background: #fff;
	padding:2% ;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    
}

  </style>

</head>
<body>


               
<div class="col-12">
<div class="container">
  <h1>Result</h1>                          
 <form action="result_update.php" method="post">
Event name:
<select name="ename" required class="smalltext">
<?php


$sql = "SELECT * FROM event where status='ongoing'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
 
    while($row = $result->fetch_assoc()) {
		
        echo '<option value="'.$row["event_name"].'">'.$row["event_name"].'</option>';
    }
} else {
    echo "0 results";
}

?>

</select>
<br><br>
  1st prize:                                                                       
<input type="text" name="1st" required class="bigtext"><br><br>
  2nd prize :  
<input type="text" name="2nd" required class="bigtext"><br><br>
  3rd prize :  
<input type="text" name="3rd" required class="bigtext"><br><br>
<input type="submit" value="Submit">
</form>


</div>


</body>
</html>