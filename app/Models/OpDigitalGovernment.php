<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Operational;
use App\Models\OpChangeManagement;
use App\Models\OpCollaboration;
use App\Models\OpOrientation;
use App\Models\OpQualityManagement;
use App\Models\OpInitiative;

class OpDigitalGovernment extends Model
{
    use HasFactory;

    public function operational(){
        return $this->belongsTo(Operational::class);
    }

    public function opChangeManagement(){
        return $this->hasOne(OpChangeManagement::class);
    }

    public function opCollaboration(){
        return $this->hasOne(OpCollaboration::class);
    }

    public function opOrientation(){
        return $this->hasOne(OpOrientation::class);
    }

    public function opQualityManagement(){
        return $this->hasOne(OpQualityManagement::class);
    }

    public function opInitiative(){
        return $this->hasOne(OpInitiative::class);
    }
}
