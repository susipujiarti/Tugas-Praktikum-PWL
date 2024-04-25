<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ktd extends Model
{
    use HasFactory;

    protected $table = 'ktd';

    protected $primaryKey = 'id_ktd';
    public $timestamps = false;
    public function dosen(){
        return $this->belongsTo(Dosen::class);
    }
}
