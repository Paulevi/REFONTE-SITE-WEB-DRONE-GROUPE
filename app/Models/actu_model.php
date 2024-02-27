<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actu_model extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_actu';
   
    protected $table = 'actus';

    public function paragraphe()
    {
        return $this->hasMany(paragraphe::class, 'id_actus');
    }
    
    
}
