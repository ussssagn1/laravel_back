<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function headphones() {
        return $this->hasMany(Headphone::class, 'category_id', 'id');
    }
}
