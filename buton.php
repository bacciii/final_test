<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <h1>ENI's PAGE</h1>
    <h2>Careful it may contains bugs!</h2>

    <form method="post" action="">
    <input placeholder="id" type="id" name="id" value = "<?php echo $_SESSION["id"]?>" hidden>
    <button type="submit" name="submit" >Show info</button>
                 
    </form>
    

</body>
<?php


if (isset($_POST["submit"])) {
    require("1.dbConnection.php");

    $condition1 = "info_id = $_POST[id]";

    $sql1 = "SELECT * FROM enitest.info WHERE $condition1 ";
    $retval1 = mysqli_query($con, $sql1);
    
    if (!$retval1) {
        echo "Error in SQL query";
    }
    $row = mysqli_fetch_assoc($retval1);
    echo "<br><br><br><br>";
    echo "Info personale shume sensitive";
    echo '<table border="2" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Emri</font> </td> 
          <td> <font face="Arial">Mbiemri</font> </td> 
          <td> <font face="Arial">Data e lindjes</font> </td> 
          <td> <font face="Arial">Vendi</font> </td> 
          <td> <font face="Arial">Email</font> </td> 

      </tr>
      <tr> 
      <td> <font face="Arial">'.$row["name"].'</font> </td> 
      <td> <font face="Arial">'.$row["surname"].'</font> </td> 
      <td> <font face="Arial">'.$row["dateofbirth"].'</font> </td> 
      <td> <font face="Arial">'.$row["location"].'</font> </td> 
      <td> <font face="Arial">'.$row["email"].'</font> </td> 

  </tr>';

}?>


</html>
