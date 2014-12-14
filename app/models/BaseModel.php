<?php

class BaseModel extends Eloquent {

  protected static $rules = [];

  protected static $messages;

  public static function validate($input = [])
  {
    $validator = Validator::make($input, static::$rules);

    if ($validator->fails()) {
      static::$messages = $validator->messages();
      return false;
    }

    return true;
  }

  public static function messages()
  {
    return static::$messages;
  }

  public function scopeNext($query, $id)
  {
    return $query->where('id', '>', $id)->orderBy('id', 'asc');
  }

  public function scopePrev($query, $id)
  {
    return $query->where('id', '<', $id)->orderBy('id', 'desc');
  }

}
