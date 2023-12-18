<?php

namespace App\Http\Controllers;

use App\Models\CdioIct;
use Illuminate\Http\Request;
use App\Models\CdioIctInWorkplace;
use Illuminate\Support\Facades\Auth;
use App\Models\CdioDigitalCitizenship;
use App\Models\CdioInformationManagement;
use App\Models\CdioManagingTechnologicalIntervention;

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
        $govofficial=Auth::user()->govofficial;
        $ictInWorkplaceExists=$govofficial->cdioIctInWorkplace->exists();
        $informationManagementExists=$govofficial->cdioInformationManagement->exists();
        $managingTechnologicalInterventionExists=$govofficial->cdioManagingTechnologicalIntervention->exists();
        $digitalCitizenshipExists=$govofficial->cdioDigitalCitizenship->exists();
        return view('cdio.Assessments.main',compact('ictInWorkplaceExists','informationManagementExists','managingTechnologicalInterventionExists','digitalCitizenshipExists'));
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

    public function cdioIctPage04(){
        $cdioIctInWorkplace=Auth::user()->govofficial->cdioIctInWorkplace;
        $cdioInformationManagement=Auth::user()->govofficial->cdioInformationManagement;
        $cdioManagingTechnologicalIntervention=Auth::user()->govofficial->cdioManagingTechnologicalIntervention;

        $totCdioIctInWorkplace=$cdioIctInWorkplace->ict1+$cdioIctInWorkplace->ict2+$cdioIctInWorkplace->ict3+$cdioIctInWorkplace->ict4+$cdioIctInWorkplace->ict5+$cdioIctInWorkplace->ict6;
        $totCdioInformationManagement=$cdioInformationManagement->ict7;
        $totCdioManagingTechnologicalIntervention=$cdioManagingTechnologicalIntervention->ict8+$cdioManagingTechnologicalIntervention->ict9+$cdioManagingTechnologicalIntervention->ict10+$cdioManagingTechnologicalIntervention->ict11+$cdioManagingTechnologicalIntervention->ict12;
        return view('cdio.assessments.ICT.page04',compact('totCdioIctInWorkplace','totCdioInformationManagement','totCdioManagingTechnologicalIntervention'));
    }

    public function storeCdioIctInWorkplace(Request $request){
        request()->validate([
            'ict1'=>'required|string',
            'ict2'=>'required|string',
            'ict3'=>'required|string',
            'ict4'=>'required|string',
            'ict5'=>'required|string',
            'ict6'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioIctInWorkplace = new CdioIctInWorkplace;

        $cdioIctInWorkplace->ict1=$request->ict1;
        $cdioIctInWorkplace->ict2=$request->ict2;
        $cdioIctInWorkplace->ict3=$request->ict3;
        $cdioIctInWorkplace->ict4=$request->ict4;
        $cdioIctInWorkplace->ict5=$request->ict5;
        $cdioIctInWorkplace->ict6=$request->ict6;
        $cdioIctInWorkplace->govofficial_id=$request->govofficial_id;

        $cdioIctInWorkplace->save();

        return redirect()->route('cdioIctPage02');
    }

    public function storeCdioInformationManagement(Request $request){
        request()->validate([
            'ict7'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioInformationManagement = new CdioInformationManagement;

        $cdioInformationManagement->ict7=$request->ict7;
        $cdioInformationManagement->govofficial_id=$request->govofficial_id;

        $cdioInformationManagement->save();

        return redirect()->route('cdioIctPage03');
    }

    public function storeCdioManagingTechnologicalIntervention(Request $request){
        request()->validate([
            'ict8'=>'required|string',
            'ict9'=>'required|string',
            'ict10'=>'required|string',
            'ict11'=>'required|string',
            'ict12'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioManagingTechnologicalIntervention = new CdioManagingTechnologicalIntervention;

        $cdioManagingTechnologicalIntervention->ict8=$request->ict8;
        $cdioManagingTechnologicalIntervention->ict9=$request->ict9;
        $cdioManagingTechnologicalIntervention->ict10=$request->ict10;
        $cdioManagingTechnologicalIntervention->ict11=$request->ict11;
        $cdioManagingTechnologicalIntervention->ict12=$request->ict12;
        $cdioManagingTechnologicalIntervention->govofficial_id=$request->govofficial_id;

        $cdioManagingTechnologicalIntervention->save();

        return redirect()->route('cdioIctPage04');
    }

    public function storeCdioDigitalCitizenship(Request $request){
        request()->validate([
            'ict13'=>'required|string',
            'ict14'=>'required|string',
            'ict15'=>'required|string',
            'ict16'=>'required|string',
            'ict17'=>'required|string',
            'ict18'=>'required|string',
            'ict19'=>'required|string',
            'ict20'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioDigitalCitizenship = new CdioDigitalCitizenship;

        $cdioDigitalCitizenship->ict13=$request->ict13;
        $cdioDigitalCitizenship->ict14=$request->ict14;
        $cdioDigitalCitizenship->ict15=$request->ict15;
        $cdioDigitalCitizenship->ict16=$request->ict16;
        $cdioDigitalCitizenship->ict17=$request->ict17;
        $cdioDigitalCitizenship->ict18=$request->ict18;
        $cdioDigitalCitizenship->ict19=$request->ict19;
        $cdioDigitalCitizenship->ict20=$request->ict20;
        $cdioDigitalCitizenship->govofficial_id=$request->govofficial_id;

        $cdioDigitalCitizenship->save();

        $totCdioDigitalCitizenship=$request->ict13+$request->ict14+$request->ict15+$request->ict16+$request->ict17+$request->ict18+$request->ict19+$request->ict20;
        $totCdioIct=$request->totCdioIctInWorkplace+$request->totCdioInformationManagement+$request->totCdioManagingTechnologicalIntervention+$totCdioDigitalCitizenship;

        $cdioIct = new CdioIct;
        
        $cdioIct->ict_in_workplace=$request->totCdioIctInWorkplace;
        $cdioIct->information_management=$request->totCdioInformationManagement;
        $cdioIct->managing_technological_intervention=$request->totCdioManagingTechnologicalIntervention;
        $cdioIct->digital_citizenship=$totCdioDigitalCitizenship;
        $cdioIct->overall_cdio_ict=$totCdioIct;
        $cdioIct->govofficial_id=$request->govofficial_id;

        $cdioIct->save();

        return redirect()->route('cdioAssessments');
    }

    public function cdioIctResults(){
        $cdioIct=Auth::user()->govofficial->cdioIct;

        $cdioIctInWorkplace=$cdioIct->ict_in_workplace;
        $a=$cdioIctInWorkplace/30;
        $avgCdioIctInWorkplace=round($a*100);

        $cdioInformationManagement=$cdioIct->information_management;
        $b=$cdioInformationManagement/5;
        $avgCdioInformationManagement=round($b*100);

        $cdioManagingTechnologicalIntervention=$cdioIct->managing_technological_intervention;
        $c=$cdioManagingTechnologicalIntervention/25;
        $avgCdioManagingTechnologicalIntervention=round($c*100);

        $cdioDigitalCitizenship=$cdioIct->digital_citizenship;
        $d=$cdioDigitalCitizenship/35;
        $avgCdioDigitalCitizenship=round($d*100);

        $govofficial=Auth::user()->govofficial;

        $cdioIctInWorkplace2=$govofficial->cdioIctInWorkplace;
        $cdioInformationManagement2=$govofficial->cdioInformationManagement;
        $cdioManagingTechnologicalIntervention2=$govofficial->cdioManagingTechnologicalIntervention;
        $cdioDigitalCitizenship2=$govofficial->cdioDigitalCitizenship;

        $result = [
            ['Category', 'Value'],
            ['ICT In Workplace', (int) $avgCdioIctInWorkplace],
            ['Information Management', (int) $avgCdioInformationManagement],
            ['Managing Technological Interventions', (int) $avgCdioManagingTechnologicalIntervention],
            ['Digital Citizenship', (int) $avgCdioDigitalCitizenship]
        ];

        return view('cdio.assessments.ICT.results',compact('result','cdioDigitalCitizenship2','cdioManagingTechnologicalIntervention2','cdioInformationManagement2','cdioIctInWorkplace2','avgCdioIctInWorkplace','avgCdioInformationManagement','avgCdioManagingTechnologicalIntervention','avgCdioDigitalCitizenship'));
    }

    public function cdioIctReport(){
        $cdioIct=Auth::user()->govofficial->cdioIct;

        $cdioIctInWorkplace=$cdioIct->ict_in_workplace;
        $a=$cdioIctInWorkplace/30;
        $avgCdioIctInWorkplace=round($a*100);

        $cdioInformationManagement=$cdioIct->information_management;
        $b=$cdioInformationManagement/5;
        $avgCdioInformationManagement=round($b*100);

        $cdioManagingTechnologicalIntervention=$cdioIct->managing_technological_intervention;
        $c=$cdioManagingTechnologicalIntervention/25;
        $avgCdioManagingTechnologicalIntervention=round($c*100);

        $cdioDigitalCitizenship=$cdioIct->digital_citizenship;
        $d=$cdioDigitalCitizenship/35;
        $avgCdioDigitalCitizenship=round($d*100);

        $govOfficial=Auth::user()->govofficial;

        $cdioIctInWorkplace2=$govOfficial->cdioIctInWorkplace;
        $cdioInformationManagement2=$govOfficial->cdioInformationManagement;
        $cdioManagingTechnologicalIntervention2=$govOfficial->cdioManagingTechnologicalIntervention;
        $cdioDigitalCitizenship2=$govOfficial->cdioDigitalCitizenship;

        $result = [
            ['Category', 'Value'],
            ['ICT In Workplace', (int) $avgCdioIctInWorkplace],
            ['Information Management', (int) $avgCdioInformationManagement],
            ['Managing Technological Interventions', (int) $avgCdioManagingTechnologicalIntervention],
            ['Digital Citizenship', (int) $avgCdioDigitalCitizenship]
        ];

        return view('cdio.assessments.ICT.report',compact('govOfficial','result','cdioDigitalCitizenship2','cdioManagingTechnologicalIntervention2','cdioInformationManagement2','cdioIctInWorkplace2','avgCdioIctInWorkplace','avgCdioInformationManagement','avgCdioManagingTechnologicalIntervention','avgCdioDigitalCitizenship'));
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
