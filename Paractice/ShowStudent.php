<?php
require_once 'config.php';

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
    die(mysqli_connect_error());

$query = "SELECT * FROM student";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
    echo "<table>
        <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Telephone</th>
        </tr>
        </thead>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>
               <td>".$row['id']."</td>
               <td>".$row['name']."</td>
               <td>".$row['age']."</td>
               <td>".$row['address']."</td>
               <td>".$row['telephone']."</td>
               </tr>";
    }
    echo "</table>";
}
else
    echo "Not Found";

require_once 'themSinhVIen.php';
mysqli_close($conn);
?>
