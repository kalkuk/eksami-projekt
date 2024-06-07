<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Product extends Model implements Sortable {
    use SortableTrait;

    protected $fillable = [
        'name',
        'description',
        'category',
        'price',
        'images',
        'sizes',
        'colors',
        'order',
        'popular',
    ];

    protected $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];

    protected $casts = [
        'images' => 'array',
        'image_urls' => 'array',
        'sizes' => 'array',
        'colors' => 'array',
    ];

}
