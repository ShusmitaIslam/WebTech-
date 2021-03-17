
<?php

// Start Session
session_start();

// check user login
if (empty($_SESSION['user_id'])) {
    header('Location: index.php');
}

// Application library ( with DemoLib class )
require __DIR__ . '/lib/library.php';
$app = new DemoClass();

$user = $app->UserDetails($_SESSION['user_id']);

$error_message = '';
$success_message = '';

if (!empty($_POST['btnChangePassword'])) {
    if ($_POST['current_password'] == '') {
        $error_message = 'Current Password field is required!';
    } elseif ($_POST['new_password'] == '') {
        $error_message = 'New Password field is required!';
    } elseif ($_POST['confirm_new_password'] == '') {
        $error_message = 'Please confirm your new password!';
    } elseif ($_POST['new_password'] != $_POST['confirm_new_password']) {
        $error_message = 'Password confirmation does not match with new password!';
    } elseif ($_POST['current_password'] == $_POST['new_password']) {
        $error_message = 'New Password and current password can not be the same!';
    } elseif (!$app->verifyCurrentPassword($_POST['current_password'], $user['password'])) {
        $error_message = 'Invalid current password, please enter valid password!';
    } elseif ($app->verifyCurrentPassword($_POST['current_password'], $user['password'])) {
        // update the current password and ask user to login again
        if ($app->changeCurrentPassword($_SESSION['user_id'], $_POST['new_password'])) {
            $success_message = 'Your password has been successfully change, please logout and login again with new password.';
        } else {
            $error_message = 'SERVER ERROR!!!';
        }
    }
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>
                Account activation process with email verification using PHP, MySQL and Swiftmailer
            </h2>
        </div>
    </div>
    <div class="form-group">
        Note: This is demo version from iTech Empires tutorials.
    </div>

    <div class="row">
        <div class="col-md-6">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="profile.php" class="pull-right">Back to Profile</a>    
                <h4>Change Password</h4></div>
                <div class="panel-body">

                     <?php
                    if ($error_message != '') {
                        echo '<div class="alert alert-danger"><strong>Error: </strong> ' . $error_message . '</div>';
                    }
                    if ($success_message != '') {
                        echo '<div class="alert alert-success"><strong>Success: </strong> ' . $success_message . '</div>';
                    }
                    ?>

                    <form action="change-password.php" method="post">
                        <div class="form-group">
                            <input type="password" name="current_password" class="form-control" placeholder="Current Password">
                        </div>
                        <div class="form-group">
                            <input type="password" name="new_password" class="form-control" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <input type="password" name="confirm_new_password" class="form-control" placeholder="Confirm New Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnChangePassword" class="btn btn-primary" value="Change Password"/>
                        </div>
                    </form>
                </div>
                </div>
        </div>
    </div>
</div>
   
</body>
</html>