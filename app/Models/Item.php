<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\Photo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{

    protected $fillable = ['name', 'price'];
    use HasFactory;

    public function image()
    {
        return $this->morphOne(Photo::class, 'imageable');
    }
}
