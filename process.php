<?php
    $Date = $_POST['date'];
    $Transaction_type = $_POST['Transaction'];
    $Category = $_POST['Category'];
    $Amount = $_POST['amt'];
    $Status = $_POST['Status'];
    $Description = $_POST['Description'];

    $connect = new mysqli('localhost', 'root', '', 'finance');
if ($connect->connect_error){
    die('connection failed :' .$connect->connect_error);
}
else{
    $stmt = $connect->prepare("INSERT INTO data__ (Date_, Transaction_Type, Category, Amount, Status_, Description_)
    VALUES(?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssdss", $Date, $Transaction_type, $Category, $Amount, $Status, $Description);
    $stmt->execute();
    echo "submitted successfully...";
    $stmt->close();
    $connect->close();
}
?>
<form method="GET" action="http://localhost:3000/input.html">
    <input type="submit" name="back" placeholder="Go Back" value="Go Back">
</form>
<?php
    
?>