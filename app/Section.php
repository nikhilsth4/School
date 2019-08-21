<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function class_id(){
        $this->belongsTo('\App\Models\Section');
    }
    protected $fillable = [
        'sec_name'
    ];
}
