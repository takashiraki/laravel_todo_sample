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
        <a href="/todos">
            <button class="ml-4 rounded-md border-2 border-solid border-slate-500 px-4">一覧へ</button>
        </a>
        <form action="/todo/store" method="post">
            @csrf
            <input type="text" name="title" class="rounded-md border-2 border-solid border-slate-500">
            @error('title')
                <p class="text-rose-600">{{ $message }}</p>
            @enderror
            <button type="submit" class="ml-4 rounded-md border-2 border-solid border-slate-500 px-4">登録</button>
        </form>
    </div>
</body>

</html>
