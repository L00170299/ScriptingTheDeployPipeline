<html>
 <style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }
 </style>
 <head>
  <title>Read from mysql</title>
 </head>
 <body>
    <h2>Records in DB</h2>

    <table>
    <tr>
        <th>RowId</th>
        <th>LNumber</th>
        <th>Course Name</th>
    </tr>
    <?php
            $servername = "localhost";
            $username = "lyit_user";
            $password = "lyit_pass";
            $dbname = "lyit_db";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT row_id, lnumber, course_nm FROM LYITTable";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    // echo "<br> RowId: ". $row["row_id"]. " - LNumber: ". $row["lnumber"]. " - Course Name " . $row["course_nm"] . "<br>";

                    echo "<tr>
                            <td>". $row["row_id"]. "</td>
                            <td>". $row["lnumber"]. "</td>
                            <td>". $row["course_nm"]. "</td>
                        </tr>";
            }
            } else {
                echo "<tr>
                        <td colspan='3'>0 Records</td>
                    </tr>";
            }

            $conn->close();
    ?>
    </table>
    
 </body>
</html>