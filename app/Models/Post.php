<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laracasts\Presenter\PresentableTrait;

class Post extends Model
{
    use HasFactory;
    use PresentableTrait;

    protected $presenter = 'App\Presenters\PostPresenter';
    protected $fillable = [
        'title',
        'slug',
        'body',
        'excerpt',
        'published_at',
    ];

    public function user() : BelongsTo {
        return $this->belongsTo('App\Models\User');
    }
}
