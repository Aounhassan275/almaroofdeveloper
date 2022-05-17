<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Tuition extends Model
{
    
    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id');
    }  
}
