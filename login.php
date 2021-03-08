<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script>
        function enable(value) {
            var maximumSize = 100;
            if (value != "") {
                // Enable Login
                document.getElementById("login").disabled = false;
            } else if (value == "") {
                // To disable Login   
                document.getElementById("login").disabled = true;
            }
        }
    </script>

</head>

<body class="bg-light">
    <div class="container  row align-items-center justify-content-center ">
        <div class="col-md-6 offset-md-2 text-center">
            <img src="img/perfil-personal.svg" alt="Login icon" width="100" height="50">
            <form class="form-group text-center" action="database.php" method="post">
                <div class="row text-left">
                    <h3>Login</h3>
                    <label for="username">Username Or Email</label><br>
                    <input type="text" class="form-control text-center" name="username" id="username" placeholder="Username Or Email" value="" onchange="enable(this.value);" required />
                </div>

                <div class="row">
                    <label for="password">Password</label><br>
                    <input type="password" class="form-control text-center" name="password" id="password" placeholder="password" value="" onchange="enable(this.value);" required />
                </div>
                <div style="color:#FF0000">
                    <?php if (isset($_GET['valueNulls'])) {
                        echo "Data cannot be empty";
                    } elseif (isset($_GET['notLoggedIn'])) {
                        echo " Login or Register";
                    } elseif (isset($_GET['errorUsernameEmail'])) {
                        echo "User doesn't exist ¡Register!";
                    } elseif (isset($_GET['errorPassword'])) {
                        echo "Incorrect password";
                    }
                    ?>
                </div>
                <div class="row">
                    <abbr title="Fill in all the fields">
                        <button type="submit" value="Login" name="login" id="login" disabled class="form-control btn btn-primary">Login</button>
                    </abbr>
                </div>
            </form>
            <form action="register.php">
                <p> </p>
                <div class="row">
                    <button type="submit" class="form-control btn btn-success">Register</button>
                </div>
            </form>
            <div class="text-secondary ">
                <p>&copy; 2021-2023 </p>
                <p> Icon made by <a href="https://www.freepik.com/">freepik</a> from <a href="https://www.flaticon.com/">www.flaticon.com </a> </p>
            </div>
        </div>
    </div>

    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>