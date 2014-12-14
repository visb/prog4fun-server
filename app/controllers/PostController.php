<?php

class PostController extends BaseController {

  /**
   * @http_verb get
   * @return Illuminate\Pagination\Paginator
   */
  public function index()
  {
    $count = Input::get('count', 10);

    $posts = Post::paginate($count);

    return Response::json($posts->toArray());
  }

  /**
   * @http_verb get
   * @return Object single post
   */
  public function show($id = 0)
  {
    if ($id) {
      $post = Post::findOrFail($id);
    } else {
      $post = Post::orderByRaw('rand()')->first();
    }

    return Response::json($post->toArray());
  }

  /**
   * @http_verb post
   * @return Object single post
   */
  public function store()
  {
    if (!Post::validate(Input::all())) {
      return Response::json(Post::messages());
    }

    $post = Post::create(Input::all())->toArray();

    return Response::json($post);
  }

  /**
   * @http_verb post
   * @return Object new like number
   */
  public function like($id)
  {
    // @todo: associate to logged user id to dont repeat
    $post = Post::findOrFail($id);
    $post->count_likes += 1;
    $post->save();
    return Response::json(['count_likes' => $post->count_likes]);
  }

  /**
   * @http_verb post
   * @return Object new unlike number
   */
  public function unlike($id)
  {
    // @todo: associate to logged user id to dont repeat
    $post = Post::findOrFail($id);
    $post->count_unlikes += 1;
    $post->save();
    return Response::json(['count_unlikes' => $post->count_unlikes]);
  }

  /**
   * @http_verb get
   * @return Object next post or 404
   */
  public function next($id)
  {
    $post = Post::next($id)->firstOrFail();
    return Response::json($post->toArray());
  }

  /**
   * @http_verb get
   * @return Object prev post or 404
   */
  public function prev($id)
  {
    $post = Post::prev($id)->firstOrFail();
    return Response::json($post->toArray());
  }

}
