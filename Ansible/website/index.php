<html>
 <head>
  <title>Read from mysql</title>
 </head>
 <body>
 <?php
        $servername = "localhost";
        $username = "lyit_user";
        $password = "lyit_pass";
        $dbname = "lyit_db";

      	$conn = mysqli_connect($servername, $username, $password, $dbname);

        echo '<p>Hello User, below are the records from your configured DB</p>';

        if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT row_id, lnumber, course_nm FROM LYITTable";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<br> RowId: ". $row["row_id"]. " - LNumber: ". $row["lnumber"]. " - Course Name " . $row["course_nm"] . "<br>";
        }
        } else {
            echo "0 results";
        }

        $conn->close();
 ?>
 </body>
</html>