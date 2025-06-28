<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border: 1px;
    }
</style>
<body>
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'College') or die ("can not connect db".mysqli_connect_error());

        $sql = "select * from Student";
        $result = mysqli_query($conn, $sql);
    ?>
    <table >
        <caption>Student List</caption>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
        ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['address'] ?></td>
                </tr>
            
        <?php
            }
        ?>
    </table>
</body>
</html>