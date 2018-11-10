<?php

namespace App\Http\Controllers\Thread;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Thread;

class ThreadController extends Controller
{
    public function __construct()
    {
        $this->thread =  new Thread;
    }

    public function index()
    {
        $threads = $this->thread->all();
        
        return $threads;
    }

    public function create(Request $req)
    {
        $thread = $this->find($id)
                    ->create([
                        'title' => $req->title,
                        'description' => $req->description,
                        'attachment' => $req->attachment,
                        'location' => $req->location,
                        'tags' => $req->tags,
                    ]);
        if($thread)
        {
            return "Berhasil membuat thread!";
        }
        else
        {
            return "Gagal membuat thread!";
        }
    }

    public function find($id)
    {
        $thread = $this->thread->find($id);
        
        return $thread;
    }

    public function update(Request $req, $id)
    {
        $thread = $this->find($id)
                    ->update([
                        'title' => $req->title,
                        'description' => $req->description,
                        'attachment' => $req->attachment,
                        'location' => $req->location,
                        'tags' => $req->tags,
                    ]);
        if($thread)
        {
            return "Berhasil update thread!";
        }
        else
        {
            return "Gagal update thread!";
        }
    }

    public function delete($id)
    {
        $thread = $this->find($id)
                    ->delete();
        if($thread)
        {
            return "Berhasil menghapus thread!";
        }
        else
        {
            return "Gagal menghapus thread!";
        }
    }
}
