<?php

namespace App\Models;

use App\Models\User;
use App\Models\Govorganizationname;
use App\Models\Govorganizationdetail;
use App\Models\Operational;
use App\Models\OpChangeManagement;
use App\Models\OpCollaboration;
use App\Models\OpOrientation;
use App\Models\OpQualityManagement;
use App\Models\OpInitiative;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Govofficial extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function govorganizationdetail()
    {
        return $this->belongsTo(Govorganizationdetail::class);
    }

    public function govorganizationname(){
        return $this->belongsTo(Govorganizationname::class);
    }

    public function operational(){
        return $this->hasOne(Operational::class);
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
