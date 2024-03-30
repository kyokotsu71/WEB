<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avito Tyagi</title>
</head>
<body>
<form action="save.php" method="post">
    <label for="email">email</label>
    <input type="email" name="email" required>

    <label for="category">category</label>
    <select name="category" required> <?php
        $categories = array_filter(glob("./categories/*"), 'is_dir');
        foreach ($categories as $cat) {
            $name = basename($cat);
            echo "<option value=\"$name\">$name</option>";
        } ?>
    </select>
    <label for="title">title</label>
    <input type="text" name="title" required>

    <label for="description">description</label>
    <textarea rows="4" name="description"></textarea>

    <input type="submit" value="save">
</form>
</body>
</html>
