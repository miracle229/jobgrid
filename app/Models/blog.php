<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image_id',
        'category_id'
    ];

    public function image(){
        return $this->belongsTo(Image::class);
    }


    public function categorie(){
        return $this->belongsTo(Categorie::class, 'category_id');
    }
}
