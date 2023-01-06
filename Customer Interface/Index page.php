<?php
$connection = mysqli_connect("localhost","root","","CEBCUSTOMERDATABASE");

?>

<html>

<form action="customerdetails.php" method ="post">
    <fieldset>
        <div class="form group">
            <label>Your Account Number :</label>
            <br><br><input type ="number" name="youraccountnumber" id="youraccountnumber" class="form control"><br><br>
            <form action="customerdetails.php">    
    <input type="submit" value="Submit" class="submit"/><br><br>

            
        </div><br></fieldset>
</form>



    </html>