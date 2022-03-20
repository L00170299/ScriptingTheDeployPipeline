<html>
 <head>
  <title>Read from mysql</title>
 </head>
 <body>
 <?php
        $servername = "localhost";
        $username = "medium_post";
        $password = "medium_post";
        $dbname = "medium_db";

      	$conn = mysqli_connect($servername, $username, $password, $dbname);

        echo '<p>Hello User, below are the records from your configured DB</p>';

        if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT idnew_table, lnumber, course_nm FROM newtable";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<br> RecordId: ". $row["idnew_table"]. " - Name: ". $row["lnumber"]. " " . $row["course_nm"] . "<br>";
        }
        } else {
            echo "0 results";
        }

        $conn->close();
 ?>
 </body>
</html>