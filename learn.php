<?php
/*
//concatenation:
$list = "<ul style=\"color:red ; padding:0\">";
$list .= "<li>1</li>";
$list .= "<li>2</li>";
$list .= "<li>3</li>";
$list .= "<li>4</li>";
$list .= "<li>5</li>";
$list .="</ul>";

*************************************************

//DATATYPE:
$string = "string";
$intger = 123;
$bool = true,false;
$float = 12.2;
$array = array(
    "1" => "one",
    "2" => "two",
    "3" => "three",
);
$object = new object();
$resource = for databases;
use the gettype($name)

*************************************************

//IF STATEMENT
if (condation) {
    #CODE IS HERE
}elseif (condation) {
    #CODE IS HERE
}else {
    #CODE IS HERE
}

*************************************************

//LOOPS
foreach($grades as $hours => $value){
    #CODE IS HERE...
}
for($grades = 0; $grades < 20; $grades++){
    #CODE IS HERE...
}
while ($a <= 10) {
    # CODE IS HERE...
    # $a++;
}
do{
    # CODE IS HERE...
} while ($a <= 10)

*************************************************

//ARRAYS
1. Array Associative:
$nameAray = array(
    "germany" => "panana",
    "usa" => "apple",
    "japan" =>"subaro",
    "uk" => "orange",
);

2. Array Index:
$nameArray = array("ahmae","waleed",...);

3.Array Multidimensional:
$nameArray = array(
    "germany" => array(
        "merseades" => array("class","j class"),
        "pmw" => array("car","motors")
        ),
    "usa" => array(
        "kadelak","general motors"
        ),
    "japan" => array(
        "merseades"
        ),
    "uk" => array(
        "pently","leep"
        )
);
# HOW TO PRINT VALUE IN SOME OF ARRAYS.
    echo $nameArray ["germany"]["merseades"][0];

#METHOD Especially for ARRAY
in_array(input,nameArray)   /will search in array about value [return:T,F]
array_search(input,nameArray)   /will search in array about index value [return:index]
array_key_exists(key,nameArray)  /will search in array if the key is exist or not [return:F,T]
array_push(nameArray,value1,value2,value3...)  /will add element in last array [return:array]
array_unshift(nameArray,value1,value2,value3...)  /will add element in first array [return:array]
array_pop(nameArray)   /will remove last item in array and we can use it as variable [return:last item]
array_shift(nameArray,value1,value2,value3...)  /will remove first element in array
sort(nameArray)  /will ranking the elements in index array from small to big [return:array]
rsort(nameArray)  /will ranking the elements in index array from big to small [return:array]
asort(nameArray)  /will ranking the values in associative array from small to big [return:array]
arsort(nameArray)  /will ranking the values in associative array from big to small [return:array]
ksort(nameArray)  /will ranking the keys in associative array from small to big [return:array]
krsort(nameArray)  /will ranking the keys in associative array from big to small [return:array]
array_reverse(nameArray)   /will ranking the values from last to first [return:array]
array_fill(start key,count of values,value)  /will creat array have values i did inputed [return:array]
array_sum(nameArray)  /will some the values in index assoiative array [return:array]
array_random(nameArray,number of values)  /will return number of values i selected it [return:random[0]]
array_unique(nameArray)  /will remove Duplicate items from array [return:array]

*************************************************
//FUNCTIONS:
functions nameFunction($){
    # CODE IS HERE...
}



//////ASSIGNMENT
$cars = array("IT" => array(
            "name of dean" => "khaled",
            "highest averages" => "92.5%",
            "lowest averages" => "77%"),
            "ENG" => array(
            "name of dean" => "rami",
            "highest averages" => "90%",
            "lowest averages" => "70%"),
            "SCIENCES" => array(
            "name of dean" => "waheed",
            "highest averages" => "88.7%",
            "lowest averages" => "80.3%"),
);
$count = 0;
for(reset($cars); $k = key($cars); next($cars)){
echo "<h1 style='color:red;font-family:arial'>the information about <span style='color:black'> $k </span></h1><br>";
foreach($cars[$k] as $ke => $val){
    $count++;
    echo "<p style='font-family:arial;margin:0'> $count . $ke : <B><span style='color:blue'>$val</span></B></p><br>";

}
$count =0;
echo "<hr>";
}

//////////////
$cars = array("IT" => array(
"name of dean" => "khaled",
"highest averages" => "92.5%",
"lowest averages" => "77%"),
"ENG" => array(
"name of dean" => "rami",
"highest averages" => "90%",
"lowest averages" => "70%"),
"SCIENCES" => array(
"name of dean" => "waheed",
"highest averages" => "88.7%",
"lowest averages" => "80.3%"),
);
reset($cars);
echo "<table border><tr>";
while ($k = key($cars)) {
echo "<th><h1 style='color:red;font-family:arial'>the information about <span style='color:black'> $k </span></h1></th>";
foreach($cars[$k] as  $ke => $v){
    echo "<td><p style='font-family:arial;margin:0'> $ke : <B><span style='color:blue'> $v </span></B></p></td>";
}
echo "</tr>";
next($cars);
}
echo "</table>"
//////////////////////////
$cars = array("SKODA" => array("make" => "GERMNY",
                           "colors" => "RED,BLUE,BLACK",
                           "models" => "cars,jeeps,bases",
                           "engine_cc" => 2600,
                           "highest price" => "50,000 $",
                           "lowest price" => "20,000 $"),

);
$count = 0;
foreach($cars as $ke => $va){
echo "<h1 style='color:red;font-family:arial'>THE INFORMATION OF <span style='color:black'> $ke </span> IS:</h1><br>";
echo "<ol>";
foreach($cars[$ke] as $k => $v){

    echo "<li><p style='font-family:arial;margin:0'> $k : <B><span style='color:blue'>$v</span></B></p><br></li></ul>";
}
}

***************************  1
extract($_POST);
function cal($cnt){
    for($i = 0 ;$i<=$cnt ;$i++){
        echo "<h1>$i</h1>";
    }
}
cal($o);

***************************  2
declare(strict_types=1);
extract($_POST);
function powe($num1,$num2){
    return $num2**$num1;declare(strict_types=1);
extract($_POST);
function powe($num1,$num2){
    return $num2**$num1;
}
$value1 = intval($v1);
$value2 = intval($v2);
echo powe($value1,$value2);
}
$value1 = intval($v1);
$value2 = intval($v2);
echo powe($value1,$value2);

***************************  3
extract($_POST);
function calculate($v1 ,$v2, $ope){
    if ($ope == "+"){
        return $v1+$v2;
    } elseif ($ope == "-"){
        return $v1-$v2;
    } elseif ($ope == "*"){
        return $v1*$v2;
    } elseif ($ope == "/"){
        return $v1/$v2;
    } elseif ($ope == "**"){
        return $v1**$v2;
    }
}
echo calculate($v1,$v2,$oper);

**********************************  table
 extract($_POST);
echo "<table border><tr>";
echo "<th>FIRST NAME</th>";
echo "<th>LAST NAME</th>";
echo "<th>DEPARTMENT</th>";
echo "<th>ADVISOR</th>";
echo "<th>SKILLS</th></tr>";
echo "<td>$FN</td>";
echo "<td>$LN</td>";
echo "<td>$ADV</td>";
echo "<td>$DEP</td>";
$sum = "";
$cnt = 0;
foreach ($SK as $v){
    $cnt++;
    $sum .= $cnt.".".$v."<br>";
}
echo "<td>$sum</td>";

********************************* ass3 q1
<html>
<table border>
    <tr>
        <th>NAME</th>
        <th>AGE</th>
        <th>ID</th>
    </tr>
<?php
class Person {
    private $name;
    private $age;
    private $id;
    function setName($na){ $this->name = $na;}
    function setAge($ag) {$this->age = $ag;}
    function setId($i) {$this->id = $i;}

    function getName(){ return $this->name;}
    function getAge(){ return $this->age;}
    function getId(){ return $this->id;}

    function printPerson(){
        ?>
        <tr>
            <td><?php echo $this->getName() ?></td>
            <td><?php echo $this->getAge() ?></td>
            <td><?php echo $this->getId() ?></td>
        </tr>
    <?php
        }
}
$newPerson1 = new Person;
$newPerson1->setName("Ahmed");
$newPerson1->setAge(25);
$newPerson1->setId("2568485");

$newPerson2 = new Person;
$newPerson2->setName("waleed");
$newPerson2->setAge(34);
$newPerson2->setId("4582468");

$newPerson3 = new Person;
$newPerson3->setName("mohammed");
$newPerson3->setAge(27);
$newPerson3->setId("9571248");

$newPerson1->printPerson();
$newPerson2->printPerson();
$newPerson3->printPerson();
?>
</table>
</html>


************************************************   DATABASE   ****************************************************
//CONECTION TO DATABASE
// to creat store data in DS:

$dataObject = new mysqli ("localhost", "root", "", "person");
$dataInset = "INSERT INTO INFO (id,Fname,Mname,Lname) VALUES ('1234','khaled','ahmed','waheed')";
$result = $dataObject->query($dataInset);
if ($dataObject === false){
    echo mysqli_error($dataObject);
}else{
    echo "done";
}
mysqli_close($dataObject);

************************************************
to select data from DS:

$dataObject = new mysqli ("localhost", "root", "", "person");
$dataInset = "SELECT * FROM INFO";
$result = $dataObject->query($dataInset);
if ($dataObject === false){
    echo mysqli_error($dataObject);
}else{
    while ($row = $result->fetch_assoc()){
        echo $row['id']."<br>";
        echo $row['Fname']."<br>";
        echo $row['Mname']."<br>";
        echo $row['Lname']."<br>**************<br>";
    }
}
mysqli_close($dataObject);

//////////////////////////////////////
fetch_assoc() //will convert the object to assocetive array [return : assoc array]
fetch_row() //will convert the object to index array [return : index array]

/////////////////////////////////////

//TO GET DATA FROM DS WITH CONDETION:
<form action="learn.php" method="post">
    <select name="choose">
        <option>id</option>
        <option>fname</option>
    </select><br>
        <input name="ky" type="text"><br><br>
    <input name="submit" type="submit" value="return"><br><br>
</form>

<?PHP
$dataObject = new mysqli ("localhost", "root", "", "person");
extract($_POST);
if (strcmp($choose,'id') == 0){
    $dataInset = "SELECT * FROM INFO WHERE id = '". $ky ."'";
}else{
    $dataInset = "SELECT * FROM INFO WHERE Fname = '". $ky ."'";
}
$result = $dataObject->query($dataInset);
print_r($result->fetch_row());
?>


************************************************************* search and add if the user is not exist
$dataObject = new mysqli ("localhost", "root", "", "person");
extract($_POST);
$dataInset = "SELECT * FROM logins WHERE user1 = '". $n ."'";
$result = $dataObject->query($dataInset);
$row = $result->fetch_assoc();
if (strcmp($row['user1'],$n)){
    $insert = "INSERT INTO logins (user1, pass1) VALUES ('".$n."','".$p."')";
    $added = $dataObject->query($insert);
    if ($result === false){
        echo"sssssss";

*/



?>
    <form method="post">
        FIRST NAME : <input name="name" type="text"><br><br>
        PASSWORD : <input name="pass" type="text"><br><br>
    <input name="submit" type="submit" value="submit"><br><br>
</form>

<?PHP
$dataObject = new mysqli ("localhost", "root", "", "person");
extract($_POST);
$selectinfo = "SELECT * FROM admin";
$result = $dataObject->query($selectinfo);
$row = $result->fetch_assoc();
if (strcmp($name,$row['name1']) == 0 and strcmp($pass,$row['pass1']) == 0){
    ?>
        <form action="admin.php" method="post">
            <h4>CHOOSE : </h4>
            <select name="choose">
                <option>id</option>
                <option>fname</option>
            </select><br><br>
                INPUT: <input name="ky" type="text"><br><br>
            <input name="submit" type="submit" value="display"><br><br>
        </form>

<?php
}else{
    echo "error";
}
?>