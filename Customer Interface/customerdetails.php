<?php
$connection = mysqli_connect("localhost","root","","CEBCUSTOMERDATABASE");
?>

<html>
<style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
th{text-align:middle;
}
</style>

<table width=90%>
    <th>Account Number</th>
    <th>Units</th>
    <th>Last Reading Date</th>
    <th>Previous Reading Date</th>
    <th>Fixed Charged Amount</th>
    <th>First Range Billed Amount</th>
    <th>Second Range Billed Amount</th>
    <th>Third Range Billed Amount</th>
    <th>Total Billed Amount</th>

    <?php
                    $sql ="SELECT AccountNumber, Units, LastReadingDate, PreviousReadingDate, DATEDIFF(LastReadingDate,PreviousReadingDate)*Units<500 AS FixedChargeAmount, DATEDIFF(LastReadingDate,PreviousReadingDate)*Units+500 AS FirstRangeBilledAmount FROM CustomerDetails ";
                    $result = mysqli_query($connection,$sql);
                    while ($row =mysqli_fetch_assoc($result)) {

                    echo '<tr>
                    <td>'.$row['AccountNumber'].'</td>
                    <td>'.$row['Units'].'</td>
                    <td>'.$row['LastReadingDate'].'</td>
                    <td>'.$row['PreviousReadingDate'].'</td>
                    <td>'.$row['FixedChargeAmount'].'</td>
                    <td>'.$row['FirstRangeBilledAmount'].'</td>
            </tr>';
                    }
                ?>


</table>

    </html>

