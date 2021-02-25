<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE</title>
</head>

<body>
    <form action="./database.php" id="LoginForm" method="post">
        <label for="uname">Name </label>
        <input type="text" name="name" id="name" placeholder="Name" required/><br>
        <label for="status" required>Select status</label>
        <select name="status" id="status">
            <option value="toDo">To do</option>
            <option value="doing">Doing</option>
            <option value="finished">finished</option>
        </select>
        <br>
        <button type="submit" value = "Create" name="create" class="btn">Create</button>
    </form>
</body>

</html>