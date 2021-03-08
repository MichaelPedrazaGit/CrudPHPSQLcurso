<?php
if (!isset($_SESSION)) {
    session_start();
}
(isset($_SESSION['user'])) ? true :  header('Location: login.php?notLoggedIn=true');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
    <form action="./database.php" method="post">
        <header>
            <div class="navbar navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand d-flex align-items-center">
                        <img src="img/task.svg" alt="Login icon" width="100" height="50">
                        <strong><?php echo  "Welcome " . $_SESSION['user']; ?></strong>
                    </a>
                    <button type="submit" value="Logout" name="logout" class="navbar-toggler">Log Out</button>
                </div>
            </div>
        </header>
    </form>

    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">YOUR TASKS</h1>
                    <form action="./database.php" method="post">
                        <label for="newTask">New Task </label>
                        <input type="text" class="form-control text-center" name="newTask" placeholder="New Task" required />
                        <div style="color:#FF0000">
                            <?php if (isset($_GET['createTask'])) {
                                echo "Task created";
                                header("refresh: 5; url=index.php");
                                echo  '<div class="card" style="width: 18rem;">
                                      .<img class="card-img-top" src="..." alt="Card image cap">
                                      .<div class="card-body">
                                      .<h5 class="card-title">Card title</h5>
                                      .<p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                                      .<a href="#" class="btn btn-primary">Go somewhere</a>
                                     .</div>
                                     .</div>';
                            }
                            //  
                            ?>
                        </div>

                        <p></p>

                        <button type="submit" value="Create" name="create" class="form-control btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">

                        <div class="card shadow-sm">

                            <a class="navbar-brand d-flex align-items-center">
                                <img src="img/toDo.svg" alt="toDo icon" width="100" height="50">

                                <strong><?php echo  "Welcome " . $_SESSION['user']; ?></strong>
                            </a>

                            <div class="card-body">
                                <p class="card-text"></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Update</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                                    </div>
                                    <small class="text-muted"></small>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="container  row align-items-center justify-content-center ">
        <div class=" col-md-4 offset-md-3 text-center ">
            <p>Template of <a href="https://getbootstrap.com/docs/5.0/examples/album/" target="_blank">Bootstrap Examples Album</a> </p>
            <p>&copy; 2021-2023 </p>
            <p> Icon made by <a href="https://www.freepik.com/" target="_blank">freepik</a> from <a href="https://www.flaticon.com/" target="_blank">www.flaticon.com </a> </p>
        </div>
    </footer>
    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>