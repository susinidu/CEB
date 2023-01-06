<?php
     if(($_POST['username'] == "001") && ($_POST['pass'] == "bentram37"))
  { 
    echo "login...";
  }
 elseif(($_POST['username'] == "002") && ($_POST['pass'] == "blackroad19"))
 {
    echo "login...";
}
    elseif(($_POST['username'] == "003") && ($_POST['pass'] == "murkypaste20"))
    {
        
        echo "login...";
    }
    else{ ?>

<form name= "login" method="post" accept-charset='UTF-8' action="customerdetails(Reader).php" >
<fieldset>
    <legend>Meter Reader Login</legend>
    <label for="username" >UserName: </label>
    <input type="text" id="username" name="username" required="true" />
    <label for="pass" >Password:</label>
    <input type="password" id="pass" name="pass" required="true"/>
    <input type="submit" name="Submit" value="Submit" />
 </fieldset>
</form>


<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "incorrect";
      }
    }
?>