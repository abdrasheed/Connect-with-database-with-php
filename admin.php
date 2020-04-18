<?PHP
$dataObject = new mysqli ("localhost", "root", "", "person");
extract($_POST);
if (strcmp($choose,'id') == 0){
    $dataInset = "SELECT * FROM INFO WHERE id = '". $ky ."'";
}else{
    $dataInset = "SELECT * FROM INFO WHERE Fname = '". $ky ."'";
}
$result = $dataObject->query($dataInset);
$row = $result->fetch_assoc();
echo "<table border='1'><tr>";
echo "<th>ID</th>";
echo "<th>FIRST NAME</th>";
echo "<th>M NAME</th>";
echo "<th>L NAME</th></tr><tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['Fname']."</td>";
echo "<td>".$row['Mname']."</td>";
echo "<td>".$row['Lname']."</td>";
echo "</tr></table>";
?>

