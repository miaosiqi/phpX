<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>This is testView</p>
<form action="../info.php" method="post" enctype="multipart/form-data">
    <input id="name" type="text" name="name">
    <input id="age" type="text" name="age">
    <label for="file">Filename:</label>
    <input type="file" name="file" id="file" />
    <input type="submit" value="submit">
</form>
</body>
</html>