<!DOCTYPE html>
<html lang="en">
<?php
$username = $photo = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        form {
            display: flex;
            flex-direction: column;
            width: 500px;
            margin: auto;
        }

        form input:last-child {
            all: unset;
            padding: .5em;
            width: fit-content;
            margin: 10px 0;
            background-color: #c1c1c1;
            color: #000;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form action="#">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="photo">Photo</label>
        <input type="file" name="" id="photo" accept="image/png, image/gif, image/jpeg">
        <input type="submit" value="submit">
    </form>
</body>

</html>