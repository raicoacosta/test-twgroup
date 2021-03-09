<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationController extends Controller
{
    public function show(Publication $publication, $id) {
    	return view('publication', ['value' =>  $publication->find($id)]);
    }
}
