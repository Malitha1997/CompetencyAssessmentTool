<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CdioController extends Controller
{
    public function main(){
        return view('cdio.main');
    }

    public function technology(){
        return view('cdio.Technology & Data.main');
    }

    public function customer(){
        return view('cdio.Customer.main');
    }

    public function operation(){
        return view('cdio.Operation.main');
    }

    public function strategy(){
        return view('cdio.Strategy.main');
    }

    public function assessments(){
        return view('cdio.Assessments.main');
    }

    public function cdioIctPage01(){
        return view('cdio.assessments.ICT.page01');
    }

    public function cdioIctPage02(){
        return view('cdio.assessments.ICT.page02');
    }

    public function cdioIctPage03(){
        return view('cdio.assessments.ICT.page03');
    }
    public function cdioIctResults(){
        return view('cdio.assessments.ICT.results');
    }

    public function cdioDigitalGovernmentPage01(){
        return view('cdio.assessments.DigitalGovernment.page01');
    }

    public function cdioDigitalGovernmentPage02(){
        return view('cdio.assessments.DigitalGovernment.page02');
    }

    public function cdioDigitalGovernmentPage03(){
        return view('cdio.assessments.DigitalGovernment.page03');
    }

    public function cdioDigitalGovernmentPage04(){
        return view('cdio.assessments.DigitalGovernment.page04');
    }

    public function cdioDigitalGovernmentPage05(){
        return view('cdio.assessments.DigitalGovernment.page05');
    }

    public function cdioDigitalGovernmentPage06(){
        return view('cdio.assessments.DigitalGovernment.page06');
    }

    public function cdioDigitalGovernmentPage07(){
        return view('cdio.assessments.DigitalGovernment.page07');
    }

    public function cdioManagementPage01(){
        return view('cdio.assessments.Management.page01');
    }

    public function cdioManagementPage02(){
        return view('cdio.assessments.Management.page02');
    }

    public function cdioManagementPage03(){
        return view('cdio.assessments.Management.page03');
    }
}
