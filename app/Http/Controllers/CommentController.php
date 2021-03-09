<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Comment;
use \App\Models\Publication;


class CommentController extends Controller
{
	protected $defatultStatus = 'APROBADO' ;


    public function store (Request $request, $id) {
    	$publicacion = Publication::find($id);
		$comment = Comment::create([
	        'content' => $request->content,
	        'publication_id' => $publicacion->id,
	        'user_id' => auth()->user()->id,
	        'status' => $this->defatultStatus,
	    ]);
	    Mail::to($publicacion->user->email)->send(new DemoEmail());
	    return redirect()->route('publication.show', $id);
    }
}
