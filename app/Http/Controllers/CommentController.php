<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Comment;
use \App\Models\Publication;


class CommentController extends Controller
{
	protected $defatultStatus = 'APROBADO' ;


    public function store (Request $request, $id) {
		$comment = Comment::create([
	        'content' => $request->content,
	        'publication_id' => Publication::find($id)->id,
	        'user_id' => auth()->user()->id,
	        'status' => $this->defatultStatus,
	    ]);
	    return redirect()->route('publication.show', $id);
    }
}
