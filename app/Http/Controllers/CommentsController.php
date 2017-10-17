<?php

namespace App\Http\Controllers;
use Auth;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request){

        $this->validate(
            $request, [
                'content' => 'required|min:4'],
            $messages = [
                'required'    => 'Заполните поле',
                'min'         => 'Слишком короткий комментарий'
            ]);

		$comment = new Comment();
		$comment->conntent = $request->content;
		$comment->name = Auth::user()->name;
		$comment->post_id = $request->id;
		$comment->save();

		return redirect()->back();
    }

    public function destroy($id)
    {
        
        $comment = Comment::find($id);

        $comment->delete();

        return redirect()->back();
    }
}

