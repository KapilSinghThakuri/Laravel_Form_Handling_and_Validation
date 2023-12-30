<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electronic extends Model
{
    use HasFactory;

    protected $table = "electronics"; // mentioning the table name.

    protected $fillable = [
        'name',
        'electronic_category',
        'description',
        'is_available',
        'price',
    ];

    // protected $primaryKey = 'id';

    protected $casts =[
        'is_available' => 'boolean', //whenever you insert data it checks a boolean value and inserts that boolean value.
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected $appends = [
        'name_price'
    ]; // for this we use Accessor

    public function getNamePriceAttribute()
    {
        return $this->name . ' - ' . $this->price;
    }

    //Accessors & Mutators
    // it is nothing but get and set attributes.
    //Eg. Accessors
    public function getNameAttribute()
    {
        return lcfirst($this->attributes['name']);
    }
    // Eg. Mutators
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }
}
