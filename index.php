<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Site</title>
</head>
<body>
    <form action="Controllers/DailyLog.php" method="post">
        <label for="file">File</label><input type="text" name="file" id=""><br>
        <label for="datetime">Date and Time</label><input type="datetime" name="date" id=""><br>
        <label for="details">Details</label><input type="text" name="details" id=""><br>
        <label for="state">File status</label><input type="text" name="state" id="">
        <input type="submit" value="Save">
    </form>
</body>
</html>