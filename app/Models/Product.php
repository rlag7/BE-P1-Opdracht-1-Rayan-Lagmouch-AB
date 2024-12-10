<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    // Specify the fillable fields
    protected $fillable = [
        'naam',
        'barcode'
    ];


    public function leveranciers()
    {
        return $this->belongsToMany(Leverancier::class, 'product_per_leverancier');
    }

    public function magazijn()
    {
        return $this->hasOne(Magazijn::class);
    }

    public function allergenen()
    {
        return $this->belongsToMany(Allergeen::class, 'product_per_allergeen');
    }
}
