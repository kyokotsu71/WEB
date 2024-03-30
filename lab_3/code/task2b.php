<?php
session_start();

if ('POST' === $_SERVER['REQUEST_METHOD']) {
    if (isset($_POST['surname'])) {
        $_SESSION['surname'] = $_POST['surname'];
    }
    if (isset($_POST['name'])) {
        $_SESSION['name'] = $_POST['name'];
    }
    if (isset($_POST['age'])) {
        $_SESSION['age'] = $_POST['age'];
    }
}

if (isset($_SESSION['surname'], $_SESSION['name'], $_SESSION['age'])) {
    echo 'surname ' . $_SESSION['surname'] . '<br />';
    echo 'name ' . $_SESSION['name'] . '<br />';
    echo 'age ' . $_SESSION['age'] . '<br />';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task 2b</title>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post">
        surname:
        <input type="text" name="surname"><br />

        name:
        <input type="text" name="name"><br />

        age:
        <input type="number" name="age"><br />
        <input type="submit" value="submit">
    </form>
</body>
</html>