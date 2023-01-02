<?php

$query = "SELECT * FROM users_conference";
$result = filterTable($query);

function filterTable($query){
    $connect = mysqli_connect('localhost', 'root', '', 'Reg_conference');
    $filter = mysqli_query($connect, $query);
    return $filter;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">
    <title>Участники конференции</title>
</head>
<body>
    <form>
        <table>
            <tr>
                <th>Id</th>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Отчество</th>
                <th>Телефон</th>
                <th>Email</th>
                <th>Секция</th>
                <th>доклад</th>
            </tr>
            <?php while($row = mysqli_fetch_array($result)):?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['S_name']?></td>
                <td><?php echo $row['F_name']?></td>
                <td><?php echo $row['Ot_name']?></td>
                <td><?php echo $row['tel']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['section']?></td>
                <td><?php echo $row['report']?></td>
            </tr>
            <?php endwhile;?>
        </table>
    </form>
</body>
</html>