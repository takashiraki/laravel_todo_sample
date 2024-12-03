<?php

declare(strict_types=1);

namespace App\Http\Controllers\todo;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class SearchTodoController extends Controller
{
    public function index(
        Request $http_request
    ) {
        // Getパラメーターを取得します。
        $name = $http_request->input('title');

        // データ検索します。
        $todos = Todo::where('todo_title', 'LIKE', '%' . $name . '%')->orderBy('created_at', 'DESC')->get();
        return view(
            'todos',
            [
                'todos' => $todos,
            ]
        );
    }
}
