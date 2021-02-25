<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <script>
        function changePlaceholder() {
            var dato = document.getElementById('task').value;
            console.log(dato);
            document.getElementById('name').placeholder = document.getElementById('task').value;
        }

    </script>
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
 
        <br><label for="uname">Name </label>
        <input type="text" name="name" id="name" placeholder="" onchange="changePlaceholder();"  disabled required/><br>
        <label for="status" required>Select status</label>
        <select name="status" id="status">
            <option value="toDo">To do</option>
            <option value="doing">Doing</option>
            <option value="finished">finished</option>
        </select>
        <br>
        <button type="submit" value = "Update" name="update" class="btn">Update</button>
    </form>
</body>

</html>