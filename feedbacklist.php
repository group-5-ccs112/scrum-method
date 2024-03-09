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

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $guest_id = $_POST['guest_id'];
    $feedback = $_POST['feedback'];

    
    $sql = "SELECT TABLE tbl_feedback (guest_id, feedback) VALUES ('guest_id', 'feedback')";

    if (mysqli_query($conn, $sql)) {
        
        header('Location: feedback_list.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
</head>
<body>
    <div class="container my-5">
        <h1>Feedback List</h1>
        </div>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Guest ID</th>
                    <th>Feedbacks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <button a class="btn">BACK</button>
    </div>
</body>
</html>