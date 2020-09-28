<?php

namespace App\Http\Controllers;

use App\Http\Models\CommentModel;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $model;

    public function comment()
    {
        $this->model = new CommentModel();

        $array = $this->model->firstcomment();
        return view('comment', compact('array'));
    }
}
