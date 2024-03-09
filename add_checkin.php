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
                $sql = "SELECT * FROM tbl_checkin";

                $result = mysqli_query($sql);

                while ($row = $row) {
                    echo "<option value=". $row["guest_id"]. "></option>";
                }

            ?>
        </select>
    </form>
</body>
</html>