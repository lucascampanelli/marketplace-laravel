<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{   
    protected $fillable = [
        'nome', 'descricao', 'telefone', 'celular', 'slug' 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
