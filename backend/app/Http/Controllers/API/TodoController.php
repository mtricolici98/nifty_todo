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
        if ($todo_item->user_id != Auth::id()) {
            return response()->json(["message" => "Unauthorized"], 401);
        }
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

    public function getList($count = 0)
    {
        if ($count > 0)
            $todo_items = TodoItem::where("user_id", Auth::id())->limit($count)->get();
        else
            $todo_items = TodoItem::where("user_id", Auth::id())->get();
        return response()->json(['todos' => $todo_items], 200);
    }
}
