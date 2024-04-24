<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Headphone extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'headphones';
    protected $guarded = [];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function tags() {
        return $this->belongsToMany(Tag::class, 'headphone_tags', 'headphone_id', 'tag_id');
    }
}
