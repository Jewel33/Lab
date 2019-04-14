<?php
require_once "vendor/autoload.php";
use App\classes\Student;

$login = new Student();
$message = '';
if(isset($_POST['btn'])){
    $message = $login->adminLogin($_POST);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
    </head>
    <body>
        <div class="container" style="margin-top: 300px;">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="card">
                        <div class="card-title">
                            <h3 class="text-center">Admin Login</h3>
                        </div>
                        <div class="card-body">
                            <h4><?php echo $message; ?></h4>
                            <form action="" method="POST">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-3 col-md-9">
                                        <input type="submit" name="btn" class="btn btn-primary btn-block" value="Login">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>