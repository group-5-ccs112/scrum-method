<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Check-in/Check-out</title>
    <style>
        h1{
            text-align: center;
            color: #333333;
        }

            button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: lightblue;
        }
        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        .container{
            text-align: center;
        }

        main {
            display:flex;
            align-items: center;
            justify-content:center;
            margin:0;
        }
        table {
            border: 1px blue solid;
            padding: 20px;
            margin:10px;
            border-radius:40px;
        }
    </style>
</head>
<body>
    <form action="add_checkin.php" method="POST" autocomplete="off">
        <main>
        <table>
            <tr>
                <td>
                    <label>Guest Name</label>
                </td>
                <td>
                    <select name="guest">
                        <?php
                            include_once("config.php");

                            $sql = "SELECT * FROM tbl_guest";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option value=". $row["guest_id"]. ">". $row["first_name"]. " ". $row["last_name"]."</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Room Name</label>
                </td>
                <td>
                    <select name="room">
                        <?php
                            include_once("config.php");

                            $sql = "SELECT * FROM tbl_room";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                if ($row["availability"] = "true") {
                                    echo "<option value=". $row["room_id"]. ">". $row["room_type"]. " ". $row["price"]."</option>";
                                }
                            }
                        ?>
                    </select>        
                </td>
            </tr>
            <tr>
                <td>
                    <label> Check-in Date</label>
                </td>
                <td>
                    <input type="date" name="date_checkin">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="CHECK IN">
                </td>
            </tr>
        </table>
        </main>
</form>
</body>
</html>