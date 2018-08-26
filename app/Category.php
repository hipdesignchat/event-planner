<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function __construct($attributes = []) {
      $this->attributes = $attributes;
    }

    // MN: Visible attributes
    protected $visible = [
      'name', 'description', 'slug'
    ];

    // MN: Mass assignable attributes
    protected $fillable = [
        'name', 'description', 'slug'
    ];

    public function events() {
      return $this->hasMany(Event::class);
    }

    // MN: Inserts a category into the database
    public static function create($request) {
      $category = new Category;
      $category->name = $request['name'];
      $category->description = $request['description'];
      $category->slug = $request['slug'];

      $category->save();

      return $category;
    }
}
