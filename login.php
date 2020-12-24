<?php

session_start();
require('database/connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="">
</head>
<style>
    @font-face {
        font-family: 'Carrois Gothic Regular';
        src: url('../css/CarroisGothic-Regular.ttf');
    }

    body {
        font-family: 'Carrois Gothic Regular';
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .form {
        height: 100vh;
        width: 100vw;
    }

    input {
        background-color: #f3f3f3;

    }
</style>

<body>
    <div class="form flex flex-col justify-center items-center">
        <h2 class="mb-10 text-2xl">ADMIN LOGIN</h2>
        <form action="" method="post" class="flex flex-col w-64">
            <input class="bg-gray-100 rounded py-1 border-2  pl-2" placeholder="Username" type="text" name="adminUsername" />
            <input class="bg-gray-100 rounded py-1 border-2  pl-2 mt-4" type="password" name="adminPassword" placeholder="Password" id="">
            <input class="bg-gray-600 rounded hover:bg-gray-700 py-1 pl-4 mt-4 text-center text-white" type="submit" value="Submit" name="adminLoginSubmit">
        </form>
    </div>

</body>

</html>

<?php

if (isset($_POST['adminLoginSubmit'])) {

    $sql_admin = 'SELECT * FROM admin';
    $sql_admin_res = $connection->query($sql_admin);

    if ($sql_admin_res->num_rows > 0) {

        while ($admin = $sql_admin_res->fetch_assoc()) {

            if ($_POST['adminUsername'] == $admin['Username'] && $_POST['adminPassword'] == $admin['Password']) {

                $_SESSION['username'] = $_POST['adminUsername'];
                $_SESSION['password'] = $_POST['adminPassword'];
                $_SESSION['status'] = "Login Successfully";
                header('Location: admin.php');
            }
        }
    }
}
?>