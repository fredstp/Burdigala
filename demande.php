

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
require_once('controller.php');
require_once('connec.php');
$pdo = new \PDO(DSN, USER, PASS);


$query = "SELECT * FROM users";
$statement = $pdo->query($query);
$users = $statement->fetchAll();

?>
<body>
    <table>
        <thead>
            <tr>
                <th>Demandes clients</th>
            </tr>
        </thead>
        <tbody>
            <div>
            <?php foreach($users as $user) : ?>
            <tr>
                <td><?= $user['name']?></td>
            </tr>
            <tr>
                <td><?= $user['firstname']?></td>
            </tr>
            <tr>
                <td><?= $user['phone']?></td>
            </tr>
            <tr>
                <td><?= $user['email']?></td>
            </tr>
            <tr>
                <td><?= $user['message']?></td>
            </tr>
            <?php endforeach; ?>
            </div>
        </tbody>
    </table>
</body>
</html>
