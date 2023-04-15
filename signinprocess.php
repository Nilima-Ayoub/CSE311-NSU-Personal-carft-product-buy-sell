<?php
include_once('config.php');
include_once('connection.php');

// Checks if there is a login cookie
if (isset($_COOKIE[$cookie_username])) {
    $username = $_COOKIE[$cookie_username];
    $pass = $_COOKIE[$cookie_password];
    $role = $_COOKIE[$cookie_role];

    if ($role == 'admin') {
        header('location: admin.php');
    } else {
        header('location: index.php');
    }
}



if (isset($_POST['submit'])) {
    $errors = array();

    $check = mysqli_query(
        $mysqli_connection,
        "SELECT * FROM user_info WHERE username = '" . $_POST['username'] . "'"
    ) or die();

    //Gives error if user dosen't exist
    $check2 = mysqli_num_rows($check);
    if ($check2 == 0) {
        header('location: signin.php?error=User Not Found');
    }

    while ($info = mysqli_fetch_array($check)) {
        //gives error if the password is wrong
        if ($_POST['pass'] != $info['password']) {
            header('location: signin.php?error=Wrong Password');
        } else {
            // Set Cookie
            $hour = time() + 3600;
            setcookie($cookie_username, $_POST['username'], $hour);
            setcookie($cookie_password, $_POST['pass'], $hour);
            setcookie($cookie_role, $info['role'], $hour);

            // Redirect To Admin Panel
            if ($info['role'] == 'admin') {
                header('location: admin.php');
            } else {
                header('location: index.php');
            }
        }
    }
}

for ($i = 0; $i < count($errors); $i++) {
    echo $errors[$i];
}
