<?php

namespace App\Models;

use App\Models\User;
use App\Models\OpIct;
use App\Models\MidIct;
use App\Models\OpTeamwork;
use App\Models\Operational;
use App\Models\OpInitiative;
use App\Models\OpManagement;
use App\Models\OpOrientation;
use App\Models\OpCollaboration;
use App\Models\OpCommunication;
use App\Models\OpIctInWorkPlace;
use App\Models\MidIctInWorkplace;
use App\Models\OpChangeManagement;
use App\Models\Govorganizationname;
use App\Models\OpDigitalGovernment;
use App\Models\OpQualityManagement;
use App\Models\OpDigitalCitizenship;
use App\Models\Govorganizationdetail;
use App\Models\MidDigitalCitizenship;
use App\Models\OpPersonalDevelopment;
use App\Models\OpWorkplaceManagement;
use App\Models\OpStakeholderManagement;
use Illuminate\Database\Eloquent\Model;
use App\Models\MidInformationManagement;
use App\Models\OpInformationManagements;
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

    public function opDigitalGovernment(){
        return $this->hasOne(OpDigitalGovernment::class);
    }

    public function opDigitalCitizenship(){
        return $this->hasOne(OpDigitalCitizenship::class);
    }

    public function opIctInWorkPlace(){
        return $this->hasOne(OpIctInWorkPlace::class);
    }

    public function opInformationManagement(){
        return $this->hasOne(OpInformationManagements::class);
    }

    public function opIct(){
        return $this->hasOne(OpIct::class);
    }

    public function opCommunication(){
        return $this->hasOne(OpCommunication::class);
    }

    public function opPersonalDevelopment(){
        return $this->hasOne(OpPersonalDevelopment::class);
    }

    public function opStakeholderManagement(){
        return $this->hasOne(OpStakeholderManagement::class);
    }

    public function opTeamwork(){
        return $this->hasOne(OpTeamwork::class);
    }

    public function opWorkplaceManagement(){
        return $this->hasOne(OpWorkplaceManagement::class);
    }

    public function opManagement(){
        return $this->hasOne(OpManagement::class);
    }

    public function midIctInWorkplace(){
        return $this->hasOne(MidIctInWorkplace::class);
    }

    public function midInformationManagement(){
        return $this->hasOne(MidInformationManagement::class);
    }

    public function midDigitalCitizenship(){
        return $this->hasOne(MidDigitalCitizenship::class);
    }

    public function midIct(){
        return $this->hasOne(MidIct::class);
    }
}
