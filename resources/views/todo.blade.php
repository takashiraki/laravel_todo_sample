<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex h-screen w-screen items-center justify-center">
        <form action="/todo/store" method="post">
            @csrf
            <input type="text" name="title">
            <button type="submit">登録</button>
        </form>
    </div>
</body>

</html>
