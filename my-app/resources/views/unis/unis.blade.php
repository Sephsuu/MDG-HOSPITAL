<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .x{
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 30px;
            padding: 20px;
        }
        .y{
            border: 1px solid gray;
            padding: 30px;
            background: #fff;
        }

    </style>
</head>
<body>
<div class="x">
    @foreach ($unis as $u)
    <div class="y">
        <a href="{{ route('weUnis.member', $u['id']) }}" style="cursor:pointer;text-decoration:underline;"><h1>{{ $u['name'] }}</h1></a>
    </div>
    @endforeach
 </div>
</body>
</html>