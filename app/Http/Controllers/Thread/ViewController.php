<?php

namespace App\Http\Controllers\Thread;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\View;

class ViewController extends Controller
{
    public function __construct()
    {
        $this->view = new View;
    }

    public function index()
    {
        $views = $this->view->all();

        return $views;
    }

    public function find($id)
    {
        $view = $this->view->find($id);

        return $view;
    }

    public function add($id)
    {
        $addview = $this->find($id)->views;
        $addview += 1;
        $this->find($id)->update([
            'views' => $addview 
        ]);

        return $this->find($id);
    }
}
