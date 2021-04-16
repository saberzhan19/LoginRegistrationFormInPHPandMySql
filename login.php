
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login in and Login up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <div class="login-box">
        <div class="row">
        <div class="col-md-6 login-left">
            <h2>Login here</h2>
            <form action="validation.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                        <input type="text" name="user" class="form-control"  required>
                        </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password"  class="form-control" required>                        
                        </div>
                        <button class="btn btn-primary" type="submit"> Login </ button>
            </form>
        </div>

            <div class="col-md-6 login-right">
            <h2>Register here</h2>
            <form action="registration.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control"  required>
                    </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password"  class="form-control" required>                        
                    </div>
                    <button class="btn btn-primary" type="submit"> Register </button>
                </form>
            </div>            

        </div>

    </div>

</div>

</body>
</html>