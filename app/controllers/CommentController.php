<?php

class CommentController extends BaseController {

  /**
   * @method post
   * @return Object single comment
   */
  public function create()
  {
    // return commentModel.create(post_data)
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
