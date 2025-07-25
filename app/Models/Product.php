<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'purchase_price', 'description', 'image'];
    protected $appends=['image_url'];
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/products/' . $this->image) : null;
    }
}
