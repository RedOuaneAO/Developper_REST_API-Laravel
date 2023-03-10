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
        'Category_id',
        'Author_id'
    ];
    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Tags(){
        return $this->belongsToMany(tags::class,'have_tags','id_Article','id_tag');
    }
}
