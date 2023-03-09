<!DOCTYPE html>
<html lang="en">
<?php
include './connect.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <style>
        *,
        ::before,
        ::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
        }

        .container {
            width: 1000px;
            margin: 10px auto;
        }

        .container .addUser {
            all: unset;
            padding: 10px;
            background-color: #c2c1c1;
            cursor: pointer;
        }

        .container .addUser a {
            color: #f1f1f1;
        }

        table {
            margin: 10px 0;
        }

        th {
            padding: 10px 80px;
        }
    </style>
</head>

<body>
    <div class="container">
        <button class="addUser"><a href="./users.php">Add user</a> </button>

        <table border="0">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phoneno</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "Select * from crud";
                $result = mysqli_query($conn, $query);
                $totalRows = mysqli_num_rows($result);
                if ($totalRows != 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $username = $row['username'];
                        $email = $row['email'];
                        $password = $row['password'];
                        $phoneno = $row['phone_no'];
                        echo '    <tr>
                <td align="center">' . $id . '</td>
                <td align="center">' . $username . '</td>
                <td align="center">' . $email . '</td>
                <td align="center">' . $password . '</td>
                <td align="center">' . $phoneno . '</td>
                <td align="center"><button><a href="delete.php?id=' . $id . '">Delete</a></button></td>
                <td align="center"><button><a href="update.php?id=' . $id . '">Update</a></button></td>
            </tr>';
                    }
                }

                ?>

            </tbody>
        </table>

    </div>
</body>

</html>