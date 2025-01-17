<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index() {
        return Post::all();
    }

    public function store(Request $request) 
    {
        $post = new Post();        
        $path = $request->file('arquivo')->store('imagens', 'public');

        $post->nome      = $request->nome;
        $post->email     = $request->email;
        $post->titulo    = $request->titulo;
        $post->subtitulo = $request->subtitulo;
        $post->mensagem  = $request->mensagem;
        $post->arquivo   = $path;
        $post->likes     = 0;
        if ($post->save()) {
            return response($post, 200);
        }
        return response('Erro ao inseri -lo', 400);
    }

    public function destroy($id) 
    {
        $post = Post::find($id);
        if (isset($post)) {
            Storage::disk('public')->delete($post->arquivo);
            $post->delete();
            return 204;
        }
        return response('Post não localizado', 404);
    }

    public function like($id) 
    {
        $post = Post::find($id);
        if (isset($post)) {
            $post->likes++;
            $post->save();
            return $post;
        }
        return response('ID nãoo encontrado', 404);
    }
}
