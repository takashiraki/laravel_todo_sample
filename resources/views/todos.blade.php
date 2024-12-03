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
    <div class="mt-4 w-full px-4">
        todo 一覧
        <a href="/todo/create">
            <button class="ml-4 rounded-md border-2 border-solid border-slate-500 px-4">登録する</button>
        </a>
        <div class="mt-4">
            <form action="/todos" method="get">
                <input type="text" name="title"
                    class="rounded-md border-2 border-solid border-slate-500">
                <button type="submit" class="ml-4 rounded-md border-2 border-solid border-slate-500 px-4">検索</button>
            </form>
        </div>
        <div class="mt-4">
            <ul class="grid gap-y-4">
                @foreach ($todos as $value)
                    <li class="flex w-1/3 justify-between">
                        <p>{{ $value->todo_title }}</p>
                        <form method="post" action="#">
                            <input type="hidden" value="{{ $value->todo_id }}">
                            <button type="submit"
                                class="ml-4 rounded-md border-2 border-solid border-slate-500 px-4">完了にする</button>
                        </form>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</body>

</html>
