<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Laracasts\Matryoshka\Cacheable;

class Product extends Model implements SluggableInterface
{
    use SluggableTrait, Cacheable;
    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

     protected $casts = [
        'images' => 'array',
        'options' => 'array',
        'dimensions' => 'array',
    ];
}
