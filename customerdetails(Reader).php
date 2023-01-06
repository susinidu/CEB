<?php
 $connection = mysqli_connect("localhost","root","","CEBCUSTOMERDATABASE");

?>

<html>
    

<h2>Customer details</h2>

    <form action="customerdetails(Reader).php" method ="post">
        <fieldset>
        <div class="form group">
            <label>Customer Account Number :</label>
            <dd><input type ="number" name="AccountNumber" id="AccountNumber" class="form control"></dd>
        </div><br>
        <div class="form group">
            <label>Customer Name :</label>
            <dd><input type ="text" name="Name" id="Name" class="form control"></dd>
        </div><br>
        <div class="form group">
            <label>Units :</label>
            <dd><input type ="number" name="Units" id="Units" class="form control"></dd>
        </div><br>
        <div class="form group">
            <label>Last Reading Date :</label>
            <dd><input type ="date" name="LastReadingDate" id="LastReadingDate" class="form control"></dd>    
        </div><br>
        <div class="form group">
            <label>Previous Reading Date :</label>
            <dd><input type ="date" name="PreviousReadingDate" id="PreviousReadingDate" class="form control"></dd>
        </div><br>
        <input type="submit" class="Submit">
        </fieldset>
    </form> 

    </html>

    <?php

//Database Connection.
$connection = mysqli_connect('localhost', 'root', '', 'CEBCUSTOMERDATABASE');

   $AccountNumber = $_POST['AccountNumber'];
   $Name  = $_POST['Name'];
   $Units = $_POST['Units'];
   $LastReadingDate = $_POST['LastReadingDate'];
   $PreviousReadingDate = $_POST['PreviousReadingDate'];
  

       $query = "INSERT INTO `CustomerDetails`(`AccountNumber`, `Name`, `Units`, `LastReadingDate`, `PreviousReadingDate`) VALUES ('$AccountNumber','$Name','$Units','$LastReadingDate','$PreviousReadingDate')";
               $insert = mysqli_query($connection, $query);
   if ($insert){
       echo "<b><i>Details Added...</i></b>";
   } else {
       echo "There is some problem...";
   }

?>