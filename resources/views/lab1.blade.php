<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Word <?php echo $name; ?></h1>
    <form method="post" action="lab1">
    @csrf

        <input name=" name" type="text" placeholder="enter name" > </input>
        <input name="submit" type="submit"></input>
    </form>
</body>
</html>