<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#Models
use App\Models\{CentroCusto,User};

class Lancamento extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'lancamentos';
    protected $primarykey = 'id_lancamento';
    protected $dates = ['created_at','updated_at','dt_faturamento','deleted_at'];
    protected $fillable  = ['id_tipo', 'centro_custo', 'descricao','observacoes'];


    public function usuario()
    {
        return $this->belongsTo(User::class,'id_user','id_user');
    }

    public function centroCusto()
    {
        return $this->belongsTo(CentroCusto::class,'id_centro_custo','id_centro_custo');
    }
    
}

// Relacionamentos 
// https://laravel.com/docs/9.x/eloquent-relationships


