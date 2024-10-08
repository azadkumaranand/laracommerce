<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Porduct;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['image_path', 'product_id'];

    public function porduct(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
