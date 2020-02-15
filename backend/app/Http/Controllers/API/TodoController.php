<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\TodoItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Monolog\Logger;

class TodoController extends Controller
{
    public function get($id)
    {
        $todo_item = TodoItem::find($id)->first();
        return response()->json(['user' => $todo_item], 200);
    }

    public function create(Request $request)
    {
        $input = $request->all();
        if (!isset($input['user_id'])) {
            $input['user_id'] = User::find(Auth::id())->id;
        }
        $todo_item = new TodoItem($input);
        $todo_item->save();
        return response()->json(['todo' => $todo_item], 200);
    }
}
