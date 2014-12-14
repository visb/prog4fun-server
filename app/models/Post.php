<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Post extends BaseModel {

  use SoftDeletingTrait;

  protected static $rules = [
    'content' => 'required'
  ];

}
