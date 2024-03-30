<?php
session_start();

if ('POST' === $_SERVER['REQUEST_METHOD']) {
    $name = '';
    $age = 0;
    $salary = 0;
    $song = '';


    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['age'])) {
        $age = $_POST['age'];
    }
    if (isset($_POST['salary'])) {
        $salary = $_POST['salary'];
    }
    if (isset($_POST['song'])) {
        $song = $_POST['song'];
    }

    $data = [
        'name' => $name,
        'age' => $age,
        'salary' => $salary,
        'song' => $song
    ];

    $_SESSION['data'] = $data;
}

if (isset($_SESSION['data'])) {
    echo '<ul>';
    foreach ($_SESSION['data'] as $key => $value) {
        echo "<li>$key: $value</li>";
    }
    echo '</ul>' . '<br />';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task 2c</title>
    <meta charset="UTF-8">
</head>
<body>
<form method="post">
    name:
    <input type="text" name="name"><br/>

    age:
    <input type="number" name="age"><br/>

    salary:
    <input type="number" name="salary"><br/>

    favourite song:
    <input type="text" name="song"><br/>

    <input type="submit" value="submit">
</form>
</body>
</html>