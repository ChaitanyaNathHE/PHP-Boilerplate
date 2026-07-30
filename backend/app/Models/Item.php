<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // the fields 'name', 'description', 'price', 'quantity', 'image' should be fillable

    // Write the logic to implement the many to many relationship between the item and store model
}