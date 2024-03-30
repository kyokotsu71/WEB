<?php
if (isset($_POST['submit'])) {
$text = $_POST['text'];
$wordCount = str_word_count($text);
$charCount = strlen($text);
echo "количество слов: $wordCount<br />";
echo "количество символов: $charCount<br />";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task 2a</title>
    <meta charset="UTF-8">
</head>
<body>
<form method="post">
    <textarea name="text"></textarea><br />
    <input type="submit" name="submit" value="отправить">
</form>
</body>
</html>