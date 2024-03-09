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
    </style>
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "scrum_db";

$conn = mysqli_connect($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);
}
$sql = "SELECT * FROM `tbl_feedback`";
    $result = $conn->query($sql);
     if ($result->num_rows > 0) {
     
     while ($row = $result->fetch_assoc()) {
        echo "
        </head>
<body>
        <h1>Feedback List</h1>
        <br>
</body>
        <table>
            <thead>
                <tr>
                    <th>Guest ID</th>
                    <th>Feedbacks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>" .$row["guest_id"]. "</td>
                    <td>" .$row["feedback"]. "</td>
                </tr>
            </tbody>
        </table>";
     }
    }
?>
</head>
<body>
        <br>
        <button a class="btn" onclick="guest_table">BACK</button>
        <br>
    </div>
    <script>
        function guest_table(){
            window.location.href = 'guest_table.php';
        }
    </script>
</body>
</html>