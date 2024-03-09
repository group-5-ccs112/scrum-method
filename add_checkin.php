<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Check-in/Check-out</title>
    <style>
    </style>
</head>
<body>
    <form action="add_checkin.php" method="POST" autocomplete="off">
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
    </form>
</body>
</html>