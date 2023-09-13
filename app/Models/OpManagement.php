<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Operational;

class OpManagement extends Model
{
    use HasFactory;
    
    public function operational(){
        return $this->belongsTo(Operational::class);
    }
}
