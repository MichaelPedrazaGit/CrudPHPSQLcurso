<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ</title>
    <style>
        table,
        th,
        td {
            border: #333333 solid 1px;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php

    ?>
    <form action="./index.php" id="LoginForm" ">
        <h1>TASKS</h1>
        <table>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Status</th>

            </tr>
            <tr>
                <?php
                include_once('database.php');
                $datos = bringValuesRead();
                foreach ($datos as $key => $value) { 
                    echo "<tr>";
                    $valuePrint= '';
                    if (is_array($value)) {
                        foreach ($value as $key => $value) {
                            echo "<td>$value</td>";
                        }
                    } echo "</tr>";?>
                    <?php } ?>
            </tr>
            <br>
        </table>
        <?php include_once('goIndex.php');?>
    </form>
</body>

</html>