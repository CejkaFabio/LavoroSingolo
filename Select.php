<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="sqlbartolinicejka";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM registro";

echo "<table class=\"table table-striped\" id=\"tabella\">
        <thead>
        <tr>
            <th>ID</th>
            <th><button onclick=\"Ordinamento('nome');\">Nome</button></th>
            <th><button onclick=\"Ordinamento('cognome');\">Cognome</button></th>
            <th><button onclick=\"Ordinamento('email');\">Email</button></th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>";
$result=$conn->query($sql);
    while($row=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['Id']."</td>";
        echo "<td name='nome'>".$row['Nome']."</td>";
        echo "<td name='cognome'>".$row['Cognome']."</td>";
        echo "<td name='email'>".$row['Email']."</td>";
        $riga = $row['Id'];
        echo "<td><button type=\"submit\"  id ='up' class=\"btn btn-primary btn-block\" onclick='Update($riga);'>Update</button></form></td>";
        echo "<td><button id='del' type=\"submit\" class=\"btn btn-danger btn-block\" onclick='Delete($riga);'>Delete</button></td>";
        echo "</tr>";
    }
echo "</table>";
echo"</div>";

$conn->close();
?>