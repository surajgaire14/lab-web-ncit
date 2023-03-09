<?php
include './connect.php';

if (isset($_POST['submit'])) {
    $username = $email = $password = $phoneno = '';
    $error = [];

    // checking existence of username
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $username = $_POST['username'];
    } else {
        $error['username'] = "enter a valid username";
    }

    // checking existence of email
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $error['email'] = "enter a valid email";
    }

    // checking existence of password
    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $error['password'] = "enter a valid password";
    }

    // checking existence of phoneno
    if (isset($_POST['phoneno']) && !empty($_POST['phoneno'])) {
        $phoneno = $_POST['phoneno'];
    } else {
        $error['phoneno'] = "enter a valid phoneno";
    }

    // if the field is not empty then inserting into the database
    $insert = "insert into `crud`(username,email,password,phone_no) values('$username','$email','$password','$phoneno') ";

    if (count($error) === 0  && mysqli_query($conn, $insert)) {
        // echo 'Data inserted successfully';
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD operations</title>
    <style>
        *,
        ::before,
        ::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 700px;
            margin: 10px auto;

        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input {
            padding: 10px;
        }

        input:last-child {
            all: unset;
            text-align: center;
            padding: 10px;
            border: 1px solid;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <label for="phone_no">Phone No</label>
            <input type="text" name="phoneno" id="phone_no">
            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>

</html>