<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style_settings.css" />

    <title>Config page</title>
</head>
<body>
    <div class="config-box">
        <h1>Settings</h1>
        <form action="" method="post">
            <label for="nombre">Name:</label>
            <input type="text" name="nombre" id="nombre" disabled>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <label for="pwd">Password:</label>
            <input type="password" name="pwd" id="pwd">
            <input type="submit" value="change" name="change">
        </form>
    </div>
</body>
</html>