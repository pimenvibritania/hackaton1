<?php

namespace App\Http\Controllers\Thread;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->comment =  new Comment;
    }

    public function index()
    {
        $comments = $this->comment->all();
        
        return $comments;
    }

    public function create(Request $req)
    {
        $comment = $this->comment
                    ->create([
                        'id_thread' => $req->thread,
                        'id_user' => $req->user,
                        'comment' => $req->comment,
                    ]);
        if($comment)
        {
            return ['success', "Berhasil menambahkan komentar!"];
        }
        else
        {
            return ['error', "Gagal menambahkan komentar!"];
        }
    }

    public function find($id)
    {
        $comment = $this->comment->find($id);
        
        return $comment;
    }

    public function delete($id)
    {
        $comment = $this->find($id)
                    ->delete();
        if($comment)
        {
            return ['success', "Berhasil menghapus komentar!"];
        }
        else
        {
            return ['error', "Gagal menghapus komentar!"];
        }
    }
}
