<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Yo soy un tio de <?php echo rand(1,10)?></h1>
    <?php
    $numero1 = rand(1,100);
    if ($numero1 === 15)
    {
        $numero1 = "BINGO";
    }
    $numero2 = rand(1,100); 
    if ($numero1 === 15)
    {
        $numero2 = "BINGO";
    }
    $numero3 = rand(1,100); 
    if ($numero3 === 15)
    {
        $numero3 = "BINGO";
    }
    $numero4 = rand(1,100); 
    if ($numero4 === 15)
    {
        $numero4 = "BINGO";
    }
    $numero5 = rand(1,100); 
    if ($numero5 === 15)
    {
        $numero5 = "BINGO";
    }
    $numero6 = rand(1,100); 
    if ($numero6 === 15)
    {
        $numero6 = "BINGO";
    }
    $numero7 = rand(1,100); 
    if ($numero7 === 15)
    {
        $numero7 = "BINGO";
    }
    $numero8 = rand(1,100); 
    if ($numero8 === 15)
    {
        $numero8 = "BINGO";
    }
    $numero9 = rand(1,100); 
    if ($numero9 === 15)
    {
        $numero9 = "BINGO";
    }
    $letra1 = "didi";
    
    ?>
    
    <table border="1px">
        <tr>
            <td><?php echo $numero1?></td>
            <td><?php echo $numero2?></td>
            <td><?php echo $numero3?></td>
        </tr>
        <tr>
            <td><?php echo $numero4?></td>
            <td><?php echo $numero5?></td>
            <td><?php echo $numero6?></td>
        </tr>
        <tr>
            <td><?php echo $numero7?></td>
            <td><?php echo $numero8?></td>
            <td><?php echo $numero9?></td>
        </tr>
    </table>
</body>
</html>