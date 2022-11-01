<?

include ('bd.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myadmin</title>
</head>

<body>
    <h1>SINF</h1>
    <table border="2" width="350px" height="50px">
        <tr>
            <td>id</td>
            <td>familiya</td>
            <td>kundalik baho</td>
            <td>chorak</td>
        </tr>
        <?php 
            $chaqirish = mysqli_query($bd,"SELECT * FROM  `sinf`");
            $odamtilidachaqirish = mysqli_fetch_assoc($chaqirish);
            do{?>
      
        <tr>
            <td><?=$odamtilidachaqirish['id']?></td>
            <td><?=$odamtilidachaqirish['familiya']?></td>
            <td><?=$odamtilidachaqirish['kundalikbaho']?></td>
            <td><?=$odamtilidachaqirish['chorak']?></td>
        </tr>
        <?}while( $odamtilidachaqirish = mysqli_fetch_assoc($chaqirish));?>
    </table>
</body>

</html>