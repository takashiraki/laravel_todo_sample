<?php

declare(strict_types=1);

namespace App\Http\Controllers\todo;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CreateTodoController extends Controller
{
    public function handle(
        Request $request
    ) {
        $validation = $request->validate(
            [
                'title' => ['required', 'string', 'max:255'],
            ]
        );

        try {
            Todo::create(
                [
                    'todo_id' => (string)Str::uuid(),
                    'todo_title' => $validation['title'],
                ]
            );
        } catch (Exception $exception) {
            Log::error(report($exception));
        }

        return view('completed');
    }
}
