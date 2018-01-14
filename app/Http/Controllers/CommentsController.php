<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate(
            $request, [
            'content' => 'required|min:4'],
            $messages = [
                'required' => 'Заполните поле',
                'min' => 'Слишком короткий комментарий'
            ]);
        $comment = new Comment();
        $comment->name = Auth::user()->name;
        $comment->post_id = $request->id;
        $comment->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        Comment::deleted($id);
        return redirect()->back();
    }
}

