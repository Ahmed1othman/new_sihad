<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class news extends Model
{
    use HasFactory;
    use SoftDeletes;


    use HasTranslations;

    public $translatable = ['title','content','tags'];

    protected $fillable = [
        'title',
        'content',
        'tags',
        'photo',
        'active',
    ];

    public $appends=['image'];


    public function getImageAttribute()
    {
        return $this->attributes['photo'] != null ? asset('storage/news/'.$this->attributes['photo'] ) : null;

    }
}
