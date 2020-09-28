<?php

namespace App\Http\Controllers;

use App\Http\Models\ReplyModel;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    protected $model;

    public function reply()
    {
        $this->model = new ReplyModel();

        $this->model->reply($_POST['text'], $_POST['parent_id'], Auth::id(), $_POST['nesting']);
        $array1 = $this->model->result();
        $array[0] = $array1;
        if(!empty($array)&&$_POST['text']!=""){
            return view('reply', compact('array'));

        }

    }
}
