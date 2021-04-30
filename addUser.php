<?php

include "inc/header.php";

?>

 <section>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-3">

		<h1>  Add User in the list</h1>
			<form action="" method="POST">
			<div class="mb-3">
				<label for="names"class="form-label"> Your Name </label>
				<input type="text"class="form-control" id="names"placeholder="Enter name" name="name"/>
			</div>

			<div class="mb-3">
				<label class="form-label"> Your Email </label>
				<input type="email"class="form-control"placeholder="Enter gmail"  name="email"/>
			</div>
			

			<div class="mb-3">
				<label class="form-label"> Your Phone</label>
				<input type="pass"class="form-control"placeholder="Enter phone no"  name="phone"/>
			</div>

		
			  <button type="submit" name="send"class="btn btn-primary" value="submit">Submit</button>

		</form>
        
        <?php
    
         if(isset($_POST['send'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];

            //insert new data into the database

            $query="INSERT into users (name,email,phone) VALUES ('$name','$email','$phone')";

            $addUser=mysqli_query($connection,$query);
            if($addUser){
               header("Location:index.php");
            }
            else{
                die("operation failed." .mysqli_error($connection));
        }
     
    }

        ?>
		</div>
	</div>
</div> 
    </section>
<?php

include "inc/footer.php";

?>







