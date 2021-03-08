<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script>
        function enable(value) {
            var maximumSize = 100;
            if (value != "") {
                // Enable Register
                document.getElementById("register").disabled = false;
            } else if (value == "") {
                // To disable Register   
                document.getElementById("register").disabled = true;
            }
        }
    </script>
</head>

<body class="bg-light">
    <div class="container  row align-items-center justify-content-center ">
        <div class="col-md-6 offset-md-2 text-center">
            <img src="img/register.svg" alt="Register icon" width="100" height="50">
            <form class="form-group text-center" action="database.php" method="post">
                <div class="row text-left">
                    <h3>Register</h3>
                    <label for="name">Name</label><br>
                    <input type="text" class="form-control text-center" name="name" id="name" placeholder="Name" value="" maxlength="100" onchange="enable(this.value);" required />
                </div>
                <div class="row">
                    <label for="username">Username</label><br>
                    <input type="text" class="form-control text-center" name="username" id="username" placeholder="Username" value="" maxlength="100" onchange="enable(this.value);" required />
                </div>
                <div class="row">
                    <label for="email">Email</label><br>
                    <input type="email" class="form-control text-center" name="email" id="email" placeholder="Email" value="" maxlength="150" onchange="enable(this.value);" required />
                </div>
                <div class="row">
                    <label for="password">Password</label><br>
                    <input type="password" class="form-control text-center" name="password" id="password" placeholder="password" value="" maxlength="150" onchange="enable(this.value);" required />
                </div>
                <div style="color:#FF0000">
                    <?php 
                    $llave = key($_GET);
                    if (isset($llave)) {
                        switch ($llave) {
                            case 'valueNulls':
                                echo "Data cannot be empty";
                                break;
                            case 'nameSizeError':
                                echo "Name Size Error minimum=1 maximum=100";
                                break;
                            case 'usernameSizeError':
                                echo "Username Size Error 'minimum=1 maximum=100 character'";
                                break;
                            case 'emailSizeError':
                                echo "Email Size Error 'minimum=1 maximum=150 character'";
                                break;
                            case 'passwordSizeError':
                                echo "Password Size Error 'minimum=1 maximum=150 character'";
                                break;
                            case 'emailInvalidError':
                                echo "Data cannot be empty";
                                break;
                            case 'nameError':
                                echo "Username <b>$_GET[nameError]</b> already  exists";  
                                break;
                            case 'emailError':
                                echo "Email <b>$_GET[emailError]</b> address already exists";  
                                break;
                            case 'createUser':
                                echo "The User <b>$_GET[createUser]</b> could not be created, please try again later";  
                                break;
                            default:
                                echo "Error creating user try later";
                                break;
                        }
                    }
                    ?>
                </div>
                <div class="row">
                    <abbr title="Fill in all the fields">
                        <button type="submit" value="Register" name="register" id="register" class="form-control btn btn-primary" disabled>Register</button>
                    </abbr>
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