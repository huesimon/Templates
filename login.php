
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Login page</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body>

<div class="container">

    <form class="form-signin" action="checkLogin.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUser" class="sr-only">Username</label>
        <input name="inputUser" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div> <!-- /container -->
</body>
</html>
