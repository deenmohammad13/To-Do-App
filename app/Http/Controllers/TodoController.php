<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Attribute;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::latest()->get();
        return view(view: 'home', data: compact(var_name: 'todos'));

    }

    public function postTodo(Request $request): RedirectResponse
    {
        $image = null;
        if(isset($request->picture)){
            $image = time().'_'.$request->picture->getClientOriginalName().'.'.$request->picture->extension();
            $request->picture->move(public_path(path: 'pictures'), $image);
        };
        Todo:: create([
            'name' => $request->name,
            'price' => $request->price,
            'picture' => $image
        ]);
        return redirect(to: '/');
    }

    public function updateStatus($id): RedirectResponse
    {
        $todo = Todo::findOrFail(id: $id);
        $todo->update(['complete' => !$todo->complete]);
        return redirect(to: '/');
    }

    public function updateTodo(Request $request, $id):RedirectResponse
    {
        $todo = Todo::findOrFail(id: $id);
        $image = $todo->picture;
        if(isset($request->picture)){
            if($todo->picture){
                unlink(filename :'picture/'.$image);
            }
            $image = time().'_'.$request->picture->getClientOriginalName().'.'.$request->picture->extension();
            $request->picture->move(public_path(path: 'images'), $image);
        };
        $todo->update([
            'name' => $request->name,
            'price' => $request->price,
            'picture' => $image
        ]);
        $todo->save();
        return redirect(to: '/');
    }

    public function edit($id)
    {
        $todo = Todo::findOrFail(id: $id);
        return view(view: 'update', data: compact(var_name: 'todo'));
    }

    public function deleteTodo($id): RedirectResponse
    {
        $todo = Todo::findOrFail(id: $id);
        if($todo->picture){
            unlink(filename :'picture/'.$todo->picture);
        }
        $todo->delete();
        return redirect(to: '/');
    }
}
