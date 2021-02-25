<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <div class="account-page">
        <div class="container center-h center-v">
            <div class="child">
            </div>
            <div class="form-container">
                <div class="form-btn">
                    <form action="./create.php" id="LoginForm" method="post">
                        <button type="submit" class="btn">CREATE</button>
                        <br>
                    </form>
                    <form action="./read.php" id="LoginForm" method="post">
                        <button type="submit" class="btn">READ</button>
                        <br>
                    </form>
                    <form action="./update.php" id="LoginForm" method="post">
                        <button type="submit" class="btn">UPDATE</button>
                        <br>
                    </form>
                    <form action="./delete.php" id="LoginForm" method="post">
                        <button type="submit" class="btn">DELETE</button>
                        <br>
                    </form>

                </div>
            </div>
        </div>
        <!-- centrar datos -->
        <style>
            .container {
                background: #e0e0e0;
                margin: 0 0 1rem;
                height: 10rem;
                display: flex;
                align-items: start;
            }

            .center-h {
                justify-content: center;
            }

            .center-v {
                align-items: center;
            }
        </style>
</body>

</html>