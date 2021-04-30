    <?php

$connection=mysqli_connect("localhost","root","","student-db");
if($connection){
// echo '<div class="alert alert-success">  Database connected  </div>';

}
else{
    echo '<div class="alert alert-danger">  Database is not connected  </div>';

}

?>
