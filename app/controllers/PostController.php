<?php

class PostController extends BaseController {

  /**
   * @method get
   * @return Array list of posts
   */
  public function list()
  {
    // code...
  }

  /**
   * @method get
   * @return Object single post
   */
  public function get()
  {
    // if (route.id)
    //   post = postModel.get(route.id)
    // else
    //   post = postModel.limit(1).order(rand).get()
    //
    // return post
  }

  /**
   * @method post
   * @return Object single post
   */
  public function create()
  {
    // return postModel.create(post_data)
  }

  /**
   * @method post
   * @return Object new like number
   */
  public function like()
  {
    // return [likes => $new_like_num]
  }

  /**
   * @method post
   * @return Object new unlike number
   */
	public function unlike()
	{
    // return [unlikes => $new_unlike_num]
	}

}
