<html>
<head>
    <title>Admin</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="container">
    <div class="login-box">
    <div class="row">
    <div class="mx-auto">
        <h1>Login Admin</h1>
        <form action="login_check.php" method="POST">
            <div class="form-group">
                <i class="fas fa-user"></i>
                <label for=""> Username</label>
                <input type="text" name="user" class="form-control" require>
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <label for=""> Password</label>
                <input type="password" name="password" class="form-control" require>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
         </form>
            </div>
        </div>
    </div>
</div>
</html>