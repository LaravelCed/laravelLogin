<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>{{Auth::user()->user_name}}</p>
    <p>{{Auth::user()->user_type}}</p>
    <a href="/logout"><button>Logut</button></a>
</body>
</html>