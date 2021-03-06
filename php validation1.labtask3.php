<!DOCTYPE html>
<html>

<?php

<form method="post" action="" name="signin-form">
  <div class="form-element">
    <label>Username</label>
    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
  </div>
  <div class="form-element">
    <label>Password</label>
    <input type="password" name="password" required />
  </div>
  <button type="submit" name="login" value="login">Log In</button>
</form>


meta charset="UTF-8">

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
?>