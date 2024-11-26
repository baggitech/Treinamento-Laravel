<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Estanciando a classe
        // $post = new Post();
        // $posts = $post->all();

        // Chamando o método estático 'all()'
        // mesma coisa do código acima, mais simples
        $posts = Post::all();

        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Forma mais convencional  de criar um registro no banco.
        // $new_post = [
        //     'title' => 'Meu Primeiro Post',
        //     'content' => 'Conteúdo Qualquer',
        //     'author' => 'Lázaro Baggi'
        // ];
        // $post = new Post($new_post);
        // $post->save();

        // Forma mais simples
        $post = new post();
        $post->title = 'Meu Primeiro Post';
        $post->content = 'Conteúdo Qualquer';
        $post->author = 'Lázaro Baggi';
        $post->save();

        dd($post);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // No futuro, receberá um post com um novo recurso.
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Lendo todos os posts do banco
        // $post = new Post();
        // $posts = $post->all();
        // dd($posts);

        $post = new Post();
        $post = $post->find($id);
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // No futuro irá mostrar o form para edição

        // Atualizando um post
        // $post = Post::find(1);
        // $post->title = 'Meu post atualizado';
        // $post->save();
        // return $post;

        // Atualizando mais de 1 post
        $posts = Post::find($id)->update([
            'author' => 'Desconhecido',
            'title'  => 'Alterado'
        ]);

        return $posts;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Sera a responsável por fazer a edição
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Deletando um post individualmente
        // $post = Post::find(1);
        // return $post->delete();

        // Deletando post em massa
        $post = Post::find($id)->delete();
        return $post;
    }
}
