<?php 
// Include the database configuration file  
require_once './admin/html/conn.php'; 
 
// Get image data from database 
$result = $conn->query("SELECT image FROM game_image ORDER BY id DESC"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
           <center> <img style="border: 1px solid black;margin:20px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  height="80%" width="80%" /> </center>
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>