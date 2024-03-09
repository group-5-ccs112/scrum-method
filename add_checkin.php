<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Check-in/Check-out</title>
</head>
<body>
    <form action="add_checkin.php" method="POST" autocomplete="off">
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
        <select name="room">
            <?php
                include_once("config.php");

                $sql = "SELECT * FROM tbl_room";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    if ($row["availability"] = "true") {
                        echo "<option value=". $row["room_id"]. ">". $row["room_type"]. " ". $row["last_name"]."</option>";
                    }
                }
            ?>
        </select>        
        <input type="date" name="date_checkin">
        <input type="submit" name="submit" value="CHECK IN">
    </form>
</body>
</html>