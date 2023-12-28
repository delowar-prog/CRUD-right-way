<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price',
        'author_id',
        'status',
    ];
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    public function locations(){
        return $this->belongsToMany(Location::class);
    }
}
