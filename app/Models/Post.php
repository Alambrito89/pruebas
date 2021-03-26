<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_post',
        'titulo',
        'descripcion',
        'id_categoria',
    ];

    public function categorias()
    {
        return $this->belongsTo('App\Models\Categoria', 'id_categoria');
    }

}
