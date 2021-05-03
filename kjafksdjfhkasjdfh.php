<DOCTYPE html>
  <html>
  <head>
    </head>
    <body>
    
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">rate</th>
      <th scope="col">comment</th>
        <th scope="col">date</th>
    </tr>
  </thead>
  <tbody>
      <?php
$servername = "sql11.freemysqlhosting.net";
$username = "sql11410054";
$password = "KPGQtFH5vS";
$dbname = "sql11410054";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     <tr>
      <th scope="row">$row["id"]</th>
      <td>$row["name"]</td>
      <td>$row["email"]</td>
      <td>$row["rate"]</td>
      <td>$row["message"]</td>
      <td>$row["date"]</td>
    </tr>
  }
} else {
  echo "0 results";
}
$conn->close();
?>
   
   
  </tbody>
</table>
    </body>
  </html>
