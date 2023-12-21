<?php

namespace App\Http\Controllers;

use App\Models\CdioIct;
use Illuminate\Http\Request;
use App\Models\CdioOrientation;
use App\Models\CdioCollaboration;
use App\Models\CdioIctInWorkplace;
use App\Models\CdioManagingQuality;
use App\Models\CdioChangeManagement;
use App\Models\CdioDriveTheAdoption;
use Illuminate\Support\Facades\Auth;
use App\Models\CdioDigitalGovernment;
use App\Models\CdioDigitalInitiative;
use App\Models\CdioDigitalCitizenship;
use App\Models\CdioInformationManagement;
use App\Models\CdioProjectAndProgrammeManagement;
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
        $ictInWorkplaceExists=$govofficial->cdioIctInWorkplace;
        $informationManagementExists=$govofficial->cdioInformationManagement;
        $managingTechnologicalInterventionExists=$govofficial->cdioManagingTechnologicalIntervention;
        $digitalCitizenshipExists=$govofficial->cdioDigitalCitizenship;
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

    public function storeCdioProjectAndProgrammeManagement(Request $request){
        request()->validate([
            'dg1'=>'required|string',
            'dg2'=>'required|string',
            'dg3'=>'required|string',
            'dg4'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioProjectAndProgrammeManagement=new CdioProjectAndProgrammeManagement;

        $cdioProjectAndProgrammeManagement->dg1=$request->dg1;
        $cdioProjectAndProgrammeManagement->dg2=$request->dg2;
        $cdioProjectAndProgrammeManagement->dg3=$request->dg3;
        $cdioProjectAndProgrammeManagement->dg4=$request->dg4;
        $cdioProjectAndProgrammeManagement->govofficial_id=$request->govofficial_id;

        $cdioProjectAndProgrammeManagement->save();

        return redirect()->route('cdioDigitalGovernmentPage02');
    }

    public function storeCdioChangeManagement(Request $request){
        request()->validate([
            'dg5'=>'required|string',
            'dg6'=>'required|string',
            'dg7'=>'required|string',
            'dg8'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioChangeManagement = new CdioChangeManagement;

        $cdioChangeManagement->dg5=$request->dg5;
        $cdioChangeManagement->dg6=$request->dg6;
        $cdioChangeManagement->dg7=$request->dg7;
        $cdioChangeManagement->dg8=$request->dg8;
        $cdioChangeManagement->govofficial_id=$request->govofficial_id;

        $cdioChangeManagement->save();

        return redirect()->route('cdioDigitalGovernmentPage03');

    }

    public function storeCdioCollaboration(Request $request){
        request()->validate([
            'dg9'=>'required|string',
            'dg10'=>'required|string',
            'dg11'=>'required|string',
            'dg12'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioCollaboration = new CdioCollaboration;

        $cdioCollaboration->dg9=$request->dg9;
        $cdioCollaboration->dg10=$request->dg10;
        $cdioCollaboration->dg11=$request->dg11;
        $cdioCollaboration->dg12=$request->dg12;
        $cdioCollaboration->govofficial_id=$request->govofficial_id;

        $cdioCollaboration->save();

        return redirect()->route('cdioDigitalGovernmentPage04');

    }

    public function storeCdioOrientation(Request $request){
        request()->validate([
            'dg13'=>'required|string',
            'dg14'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioOrientation = new CdioOrientation;

        $cdioOrientation->dg13=$request->dg13;
        $cdioOrientation->dg14=$request->dg14;
        $cdioOrientation->govofficial_id=$request->govofficial_id;

        $cdioOrientation->save();

        return redirect()->route('cdioDigitalGovernmentPage05');

    }

    public function storeCdioManagingQuality(Request $request){
        request()->validate([
            'dg15'=>'required|string',
            'dg16'=>'required|string',
            'dg17'=>'required|string',
            'dg18'=>'required|string',
            'dg19'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioManagingQuality = new CdioManagingQuality;

        $cdioManagingQuality->dg15=$request->dg15;
        $cdioManagingQuality->dg16=$request->dg16;
        $cdioManagingQuality->dg17=$request->dg17;
        $cdioManagingQuality->dg18=$request->dg18;
        $cdioManagingQuality->dg19=$request->dg19;
        $cdioManagingQuality->govofficial_id=$request->govofficial_id;

        $cdioManagingQuality->save();

        return redirect()->route('cdioDigitalGovernmentPage06');

    }

    public function storeCdioDriveTheAdoption(Request $request){
        request()->validate([
            'dg20'=>'required|string',
            'dg21'=>'required|string',
            'dg22'=>'required|string',
            'dg23'=>'required|string',
            'dg24'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioDriveTheAdoption = new CdioDriveTheAdoption;

        $cdioDriveTheAdoption->dg20=$request->dg20;
        $cdioDriveTheAdoption->dg21=$request->dg21;
        $cdioDriveTheAdoption->dg22=$request->dg22;
        $cdioDriveTheAdoption->dg23=$request->dg23;
        $cdioDriveTheAdoption->dg24=$request->dg24;
        $cdioDriveTheAdoption->govofficial_id=$request->govofficial_id;

        $cdioDriveTheAdoption->save();


        return redirect()->route('cdioDigitalGovernmentPage07');

    }

    public function storeCdioDigitalInitiative(Request $request){
        request()->validate([
            'dg26'=>'required|string',
            'dg27'=>'required|string',
            'dg28'=>'required|string',
            'dg29'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioDigitalInitiative = new CdioDigitalInitiative;

        $cdioDigitalInitiative->dg26=$request->dg26;
        $cdioDigitalInitiative->dg27=$request->dg27;
        $cdioDigitalInitiative->dg28=$request->dg28;
        $cdioDigitalInitiative->dg29=$request->dg29;
        $cdioDigitalInitiative->govofficial_id=$request->govofficial_id;

        $cdioDigitalInitiative->save();

        return redirect()->route('cdioAssessments');

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

    public function cdioManagementPage04(){
        return view('cdio.assessments.Management.page04');
    }

    public function cdioManagementPage05(){
        return view('cdio.assessments.Management.page05');
    }

    public function cdioManagementPage06(){
        return view('cdio.assessments.Management.page06');
    }

    public function cdioManagementPage07(){
        return view('cdio.assessments.Management.page07');
    }

    public function cdioManagementPage08(){
        return view('cdio.assessments.Management.page08');
    }
}
