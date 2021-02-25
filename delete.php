<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE</title>
</head>

<body>

    <form action="./database.php" id="LoginForm" method="post">
        <label for="task" required>Task</label>
        <select name="task" id="task">
        <?php 
        include_once('database.php');
        $datos = bringValuesName();
        foreach ($datos as $key => $value) {?>
            <option value="<?php echo $value;?>"><?php echo $value;?> </option>
        <?php } ?>
        </select>
        <br>
        <button type="submit" value="Delete" name="delete" class="btn">Delete</button>
    </form>
</body>

</html>