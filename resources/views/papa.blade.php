<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/papy" method="get" entype ="multipart/form-data">
        {{csrf_field()}}
        <input type="file" name="avatar" id="avatar">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>