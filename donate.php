
<?php
    
    if(isset($_POST['submit'])){
        include("./dbcon.php");


        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];

        $qry= "INSERT INTO `ngo`(`id`, `name`, `phone`, `email`, `date`) VALUES (' ','$name','$phone','$email',' ')";

        $run= mysqli_query($con,$qry);

        if($run==true){
            ?>

            <script>
                alert("Thank you for donating!");
            </script>

            <?php
        }
        
    }





?>