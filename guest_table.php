<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management</title>
    <style>
        body {
            background-color: #add8e6; 
            font-family: Arial, sans-serif;
        }
        h1 {
            background-color: #7393b3;
            color: black;
            padding: 10px;
        }
        table {
            background-color: #add8e6;
            color: black;
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border:1px solid #2c3e50;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #6f8faf;
            color: black;
        }
        .btn {
            background-color: #6f8faf;
            border: none;
            border-radius: 8px;
            padding: 8px 16px;
            color: black;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #6082b6;
        }
        .btn-add {
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h1>Hotel Management</h1>
        <div class="btn-add">
            <button a class="btn" onclick = "addUpdate()">Add Update Guest</button>
            <button a class="btn" onclick = "checkin()">Check In</button>
            <button a class="btn" onclick = "roomtable()">Room Table</button>
            <button a class="btn" onclick = "feedback()">Feed Back</button>
            <button a class="btn" onclick = "feedbacklist()">Feed Back List</button>
        </div>
        <br>
    </div>

        <script>
            function addUpdate(){
                window.location.href = 'add_guest.php';
            }

            function checkin(){
                window.location.href = 'add_checkin.php';
            }

            function feedback(){
                window.location.href = 'add_guest.php';
            }

            function feedbacklist(){
                window.location.href = 'feedbacklist.php';
            }

        </script>



    <?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "scrum_db";

    $conn = mysqli_connect($host, $user, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM tbl_guest";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {


        echo "<form>";
            echo "<table>";
            echo 
                "<tr>
                    <th>Guest Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Contact Number</th>
                </tr>";


       while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["guest_id"] . "</td>
                <td>" . $row["first_name"] . "</td>
                <td>" . $row["last_name"] . "</td>
                <td>" . $row["age"] . "</td>
                <td>" . $row["contact_no"] . "</td>
            </tr>";
       }
       echo "</table>";
       echo "</form>";
    }else {
        echo "<p>No Result Data </p>";
    }

    $conn->close();
    ?>

</body>
</html>