<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Photo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProdUser extends Model
{
    use HasFactory;

    public function image()
    {
        return $this->morphOne(Photo::class, 'imageable');
    }
}
