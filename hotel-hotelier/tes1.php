<?php

if (isset($_GET['kirim'])) {

    $username = $_GET['username'];
    $password = $_GET['password'];
    header('location: tes2.php?username=' . $username . '&password=' . $password);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" required>
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </li>
            <li>
                <button name="kirim" type="submit">YA</button>
            </li>
        </ul>


    </form>
</body>

</html>