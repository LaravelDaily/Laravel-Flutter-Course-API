<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'transaction_date', 'amount', 'description'];

    protected $dates = ['transaction_date'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
