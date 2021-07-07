<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());

        //    dd($request->get('title'));

        // if ($request->has('title')) {

        //     echo 'Tem título: '.$request->title;
        // }

        // dd($request->only(['title','slug']));

        // dd($request->except(['title','slug']));

        // dd($request->input('title','Título vazio.'));

        // return response('Resposta ok.');

        // return response('Resposta ok.', 200)->cookie('Autorizado', 'ok',6);

        // return redirect('/');

        // return redirect()->route('principal');

        // return redirect()->route('post.create');

        // return back();


        /* $post = new Post();

        $post->title = "Título1";
        $post->description = "Descrição";
        $post->content = "Conteúdo";
        $post->slug = "slug";
        $post->is_active = true;
        $post->user_id = 2;

        $post->save();

        return back()->withInput(); */


       // $post = new Post();

         $post = $request->all();
        $post['is_active'] = true;
        $post['user_id'] = 2;

        dd(Post::create($post));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        dd($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        /* $data = $request->all();
        $post = Post::findOrFail($id);

        dd($post->update($data)); */

        dd ($post->update($request->all()));
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

      return redirect()->route('post.index');
    }
}
