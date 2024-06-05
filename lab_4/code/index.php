<?php
require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setAuthConfig(__DIR__ . '/credentials.json');
$client->addScope(Google_Service_Sheets::SPREADSHEETS);
$service = new Google_Service_Sheets($client);
$spreadsheetId = '1TOqIYC2Pc8TXpoU-rPwnAxs1TQaRseAIRFkc6EYDdGE';
$response = $service->spreadsheets_values->get($spreadsheetId, 'Лист1');
$values = $response->getValues();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formochka</title>
</head>
<body>
<div>
    <form action="saving.php" method="POST">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <label for="category">Category</label>
        <select id="category" name="category" required>
            <option value="salary">Salary</option>
            <option value="hobby">Hobby</option>
            <option value="job">Job</option>
        </select>

        <label for="title">Title</label>
        <input type="text" id="title" name="title" required>

        <label for="description">Description</label>
        <textarea id="description" name="description"></textarea>

        <input type="submit" value="enter">
    </form>
</div>
<div>
    <table>
        <thead>
        <th>Email</th>
        <th>category</th>
        <th>Title</th>
        <th>Description</th>
        </thead>
        <tbody>
        <?php
        if (!empty($values)) {
            foreach ($values as $row) {
                echo "<tr>
                    <td>$row[0]</td><td>$row[1]</td>
                    <td>$row[2]</td><td>$row[3]</td>
                    </tr>";
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>