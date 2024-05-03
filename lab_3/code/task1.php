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
<div id="form">
    <form action="task3/save.php" method="post">
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
</div>
<div id="table">
    <table>
        <thead>
        <th>Email</th>
        <th>category</th>
        <th>Title</th>
        <th>Description</th>
        </thead>
        <tbody>
        <?php
        $files = glob("categories/*/*.txt");
        foreach ($files as $file) {
            $data = file($file);
            $category = basename(dirname($file));
            $title = basename($file, ".txt");
            $email = $data[0];
            $desc = $data[1];
            echo "<tr>
                    <td>$email</td><td>$category</td>
                    <td>$title</td><td>$desc</td>
                    </tr>";
        }?>
        </tbody>
    </table>
</div>
</body>
</html>
