<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;

class article extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'image',
        'article',
        'id_Category',
    ];
    public function category(){
        return $this->belongsTo(category::class , 'type');
    }
}
