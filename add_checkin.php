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
                $sql = "SELECT guest_id FROM tbl_guest";

                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value=". $row["guest_id"]. "></option>";
                }

            ?>
        </select>
    </form>
</body>
</html>