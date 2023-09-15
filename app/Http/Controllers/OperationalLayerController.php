<?php

namespace App\Http\Controllers;

use App\Models\OpIct;
use App\Models\Govofficial;
use App\Models\OpInitiative;
use Illuminate\Http\Request;
use App\Models\OpOrientation;
use App\Models\OpCollaboration;
use App\Models\OpIctInWorkplace;
use App\Models\OpChangeManagement;
use Illuminate\Support\Facades\DB;
use App\Models\OpDigitalGovernment;
use App\Models\OpQualityManagement;
use App\Models\OpDigitalCitizenship;
use Illuminate\Support\Facades\Auth;
use App\Models\OpInformationManagements;

class OperationalLayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function operational()
    {
        $opChangeManagementDataExists = Auth::user()->govofficial->opChangeManagement;
        $opCollaborationDataExists = Auth::user()->govofficial->opCollaboration;
        $opOrientationDataExists = Auth::user()->govofficial->opOrientation;
        $opQualityManagementDataExists = Auth::user()->govofficial->opQualityManagement;
        $digitalGovDataExists = Auth::user()->govofficial->opInitiative;
        $ictDataExists = Auth::user()->govofficial->opIct;
        return view('govOfficials.Operational.main',compact('digitalGovDataExists','opChangeManagementDataExists','opCollaborationDataExists','opOrientationDataExists','opQualityManagementDataExists','ictDataExists'));
    }

    public function digitalGovernmentPage01()
    {
        return view('govOfficials.Operational.DigitalGovernment.page01');
    }

    public function digitalGovernmentPage02()
    {
        return view('govOfficials.Operational.DigitalGovernment.page02');
    }

    public function digitalGovernmentPage03()
    {
        return view('govOfficials.Operational.DigitalGovernment.page03');
    }

    public function digitalGovernmentPage04()
    {
        return view('govOfficials.Operational.DigitalGovernment.page04');
    }

    public function digitalGovernmentPage05()
    {
        $dg1=Auth::user()->govofficial->opChangeManagement->dg1;
        $dg2=Auth::user()->govofficial->opChangeManagement->dg2;

        $totOpChangeManagement=$dg1+$dg2;

        $dg3=Auth::user()->govofficial->opCollaboration->dg3;
        $dg4=Auth::user()->govofficial->opCollaboration->dg4;

        $totOpCollaboaration=$dg3+$dg4;

        $dg5=Auth::user()->govofficial->opOrientation->dg5;
        $dg6=Auth::user()->govofficial->opOrientation->dg6;

        $totOpOrientation=$dg5+$dg6;

        $dg7=Auth::user()->govofficial->opQualityManagement->dg7;
        $dg8=Auth::user()->govofficial->opQualityManagement->dg8;
        $dg9=Auth::user()->govofficial->opQualityManagement->dg9;

        $totOpQualityManagement=$dg7+$dg8+$dg9;

        return view('govOfficials.Operational.DigitalGovernment.page05',compact('totOpChangeManagement','totOpCollaboaration','totOpOrientation','totOpQualityManagement'));
    }

    public function storeOpChangeManagement(Request $request){
        request()->validate([
            'govofficial_id'=> 'required|string',
            'dg1'=>'required|string',
            'dg2'=>'required|string',
        ]);

        $opChangeManagement = new OpChangeManagement;

        $opChangeManagement->dg1=$request->dg1;
        $opChangeManagement->dg2=$request->dg2;
        $opChangeManagement->govofficial_id=$request->govofficial_id;

        $opChangeManagement->save();

        return redirect()->route('operationalDigitalGovernmentPage02');
    }

    public function storeOpCollaboration(Request $request){
        request()->validate([
            'govofficial_id'=> 'required|string',
            'dg3'=>'required|string',
            'dg4'=>'required|string',
        ]);

        $opCollaboration = new OpCollaboration;

        $opCollaboration->dg3=$request->dg3;
        $opCollaboration->dg4=$request->dg4;
        $opCollaboration->govofficial_id=$request->govofficial_id;

        $opCollaboration->save();

        return redirect()->route('operationalDigitalGovernmentPage03');
    }

    public function storeOpOrientation(Request $request){
        request()->validate([
            'govofficial_id'=> 'required|string',
            'dg5'=>'required|string',
            'dg6'=>'required|string',
        ]);

        $opOrientation = new OpOrientation;

        $opOrientation->dg5=$request->dg5;
        $opOrientation->dg6=$request->dg6;
        $opOrientation->govofficial_id=$request->govofficial_id;

        $opOrientation->save();

        return redirect()->route('operationalDigitalGovernmentPage04');
    }

    public function storeOpQualityManagement(Request $request){
        request()->validate([
            'govofficial_id'=> 'required|string',
            'dg7'=>'required|string',
            'dg8'=>'required|string',
            'dg9'=>'required|string',
        ]);

        $opQualityManagement = new OpQualityManagement;

        $opQualityManagement->dg7=$request->dg7;
        $opQualityManagement->dg8=$request->dg8;
        $opQualityManagement->dg9=$request->dg9;
        $opQualityManagement->govofficial_id=$request->govofficial_id;

        $opQualityManagement->save();

        return redirect()->route('operationalDigitalGovernmentPage05');
    }

    public function storeOpInitiative(Request $request)
    {//dd($request);
        request()->validate([
            'govofficial_id'=> 'required|string',
            'dg10'=>'required|string',
            'dg11'=>'required|string',
            'dg12'=>'required|string',
            'dg13'=>'required|string',
            'dg14_1'=>'required|string',
            'dg14_2'=>'required|string',
            'dg15'=>'required|string',
            'dg16'=>'required|string',
            'dg17'=>'required|string',
            'totOpChangeManagement'=>'required|string',
            'totOpCollaboaration'=>'required|string',
            'totOpOrientation'=>'required|string',
            'totOpQualityManagement'=>'required|string',
        ]);

        $opInitiative = new OpInitiative;

        $opInitiative->dg10=$request->dg10;
        $opInitiative->dg11=$request->dg11;
        $opInitiative->dg12=$request->dg12;
        $opInitiative->dg13=$request->dg13;
        $opInitiative->dg14_1=$request->dg14_1;
        $opInitiative->dg14_2=$request->dg14_2;
        $opInitiative->dg15=$request->dg15;
        $opInitiative->dg16=$request->dg16;
        $opInitiative->dg17=$request->dg17;
        $opInitiative->govofficial_id=$request->govofficial_id;

        $opInitiative->save();

        $d10=$request->dg10;
        $d11=$request->dg11;
        $d12=$request->dg12;
        $d13=$request->dg13;
        $d14_1=$request->dg14_1;
        $d14_2=$request->dg14_2;
        $d15=$request->dg15;
        $d16=$request->dg16;
        $d17=$request->dg17;
        $totOpInitiative=$d10 + $d11 + $d12 + $d13 + $d14_1 + $d14_2 + $d15 + $d16 + $d17;

        $marksOpDigitalGovernment=$request->totOpChangeManagement + $request->totOpCollaboaration + $request->totOpOrientation + $request->totOpQualityManagement + $totOpInitiative;

        $opDigitalGovernment=new OpDigitalGovernment;

        $opDigitalGovernment->op_change_management=$request->totOpChangeManagement;
        $opDigitalGovernment->op_collaboration=$request->totOpCollaboaration;
        $opDigitalGovernment->op_orientation=$request->totOpOrientation;
        $opDigitalGovernment->op_quality_management=$request->totOpQualityManagement;
        $opDigitalGovernment->op_initiative=$totOpInitiative;
        $opDigitalGovernment->marks_op_digital_government=$marksOpDigitalGovernment;
        $opDigitalGovernment->govofficial_id=$request->govofficial_id;

        $opDigitalGovernment->save();

        return redirect()->route('operationalDigitalgovernmentResults');
    }

    public function results(){
        $opDigitalGov = Auth::user()->govofficial->opDigitalGovernment;

        $opChangeManagement=$opDigitalGov->op_change_management;
        $a=$opChangeManagement/11;
        $avgOpChangeManagement=round($a*100);

        $opCollaboration=$opDigitalGov->op_collaboration;
        $b=$opCollaboration/11;
        $avgOpCollaboration=round($b*100);

        $opOrientatiion=$opDigitalGov->op_orientation;
        $c=$opOrientatiion/12;
        $avgOpOrientatiion=round($c*100);

        $opQualityManagement=$opDigitalGov->op_quality_management;
        $d=$opQualityManagement/18;
        $avgOpQualityManagement=round($d*100);

        $opInitiative=$opDigitalGov->op_initiative;
        $e=$opInitiative/46;
        $avgOpInitiative=round($e*100);

    $result = [
        ['Category', 'Value'],
        ['Change Management', (int) $avgOpChangeManagement],
        ['Collaboration and Partnership', (int) $avgOpCollaboration],
        ['Results Orientation', (int) $avgOpOrientatiion],
        ['Quality Management', (int) $avgOpQualityManagement],
        ['Execute Digital Government Initiatives', (int) $avgOpInitiative],
    ];

    $govOfficial=Auth::user()->govofficial;

    $opChangeManagement2=$govOfficial->opChangeManagement;
    $opCollaboration2=$govOfficial->opCollaboration;
    $opOrientation2=$govOfficial->opOrientation;
    $opQualityManagement2=$govOfficial->opQualityManagement;
    $opInitiative2=$govOfficial->opInitiative;

        return view('govOfficials.Operational.DigitalGovernment.results',compact('result','avgOpChangeManagement','avgOpCollaboration','avgOpOrientatiion','avgOpQualityManagement','avgOpInitiative','opChangeManagement2','opCollaboration2','opOrientation2','opQualityManagement2','opInitiative2'));
    }

    public function digitalGovernmentReport(){
        $govOfficial=Auth::user()->govofficial;
        $opDigitalGov = Auth::user()->govofficial->opDigitalGovernment;

        $opChangeManagement=$opDigitalGov->op_change_management;
        $a=$opChangeManagement/11;
        $avgOpChangeManagement=round($a*100);

        $opCollaboration=$opDigitalGov->op_collaboration;
        $b=$opCollaboration/11;
        $avgOpCollaboration=round($b*100);

        $opOrientatiion=$opDigitalGov->op_orientation;
        $c=$opOrientatiion/12;
        $avgOpOrientatiion=round($c*100);

        $opQualityManagement=$opDigitalGov->op_quality_management;
        $d=$opQualityManagement/18;
        $avgOpQualityManagement=round($d*100);

        $opInitiative=$opDigitalGov->op_initiative;
        $e=$opInitiative/46;
        $avgOpInitiative=round($e*100);

    $result = [
        ['Category', 'Value'],
        ['Change Management', (int) $avgOpChangeManagement],
        ['Collaboration and Partnership', (int) $avgOpCollaboration],
        ['Results Orientation', (int) $avgOpOrientatiion],
        ['Quality Management', (int) $avgOpQualityManagement],
        ['Execute Digital Government Initiatives', (int) $avgOpInitiative],
    ];

    $govOfficial=Auth::user()->govofficial;

    $opChangeManagement2=$govOfficial->opChangeManagement;
    $opCollaboration2=$govOfficial->opCollaboration;
    $opOrientation2=$govOfficial->opOrientation;
    $opQualityManagement2=$govOfficial->opQualityManagement;
    $opInitiative2=$govOfficial->opInitiative;
        return view('govOfficials.Operational.DigitalGovernment.report',compact('result','govOfficial','avgOpChangeManagement','avgOpCollaboration','avgOpOrientatiion','avgOpQualityManagement','avgOpInitiative','opChangeManagement2','opCollaboration2','opOrientation2','opQualityManagement2','opInitiative2'));
    }

    public function ictPage01(){
        return view('govOfficials.Operational.ICT.page01');
    }

    public function ictPage02(){
        return view('govOfficials.Operational.ICT.page02');
    }

    public function ictPage03(){
        $ict1_1=Auth::user()->govofficial->opIctInWorkPlace->ict1_1;
        $ict1_2=Auth::user()->govofficial->opIctInWorkPlace->ict1_2;
        $ict1_3=Auth::user()->govofficial->opIctInWorkPlace->ict1_3;
        $ict2=Auth::user()->govofficial->opIctInWorkPlace->ict2;
        $ict3_1=Auth::user()->govofficial->opIctInWorkPlace->ict3_1;
        $ict3_2=Auth::user()->govofficial->opIctInWorkPlace->ict3_2;
        $ict3_3=Auth::user()->govofficial->opIctInWorkPlace->ict3_3;
        $ict4=Auth::user()->govofficial->opIctInWorkPlace->ict4;
        $ict5=Auth::user()->govofficial->opIctInWorkPlace->ict5;
        $ict6=Auth::user()->govofficial->opIctInWorkPlace->ict6;
        $ict7=Auth::user()->govofficial->opIctInWorkPlace->ict7;
        $ict8=Auth::user()->govofficial->opIctInWorkPlace->ict8;
        $ict9=Auth::user()->govofficial->opIctInWorkPlace->ict9;

        $totOpIctInWorPlace=$ict1_1+$ict1_2+$ict1_3+$ict2+$ict3_1+$ict3_2+$ict3_3+$ict4+$ict5+$ict6+$ict7+$ict8+$ict9;

        $ict10_1=Auth::user()->govofficial->opInformationManagement->ict10_1;
        $ict10_2=Auth::user()->govofficial->opInformationManagement->ict10_2;
        $ict10_3=Auth::user()->govofficial->opInformationManagement->ict10_3;
        $ict11=Auth::user()->govofficial->opInformationManagement->ict11;
        $ict12=Auth::user()->govofficial->opInformationManagement->ict12;
        $ict13_1=Auth::user()->govofficial->opInformationManagement->ict13_1;
        $ict13_2=Auth::user()->govofficial->opInformationManagement->ict13_2;
        $ict13_3=Auth::user()->govofficial->opInformationManagement->ict13_3;
        $ict14=Auth::user()->govofficial->opInformationManagement->ict14;

        $totOpInformationManagement=$ict10_1+$ict10_2+$ict10_3+$ict11+$ict12+$ict13_1+$ict13_2+$ict13_3+$ict14;

        return view('govOfficials.Operational.ICT.page03',compact('totOpIctInWorPlace','totOpInformationManagement'));
    }

    public function storeOpIctInWorkPlace(Request $request)
    {//dd($request);
        request()->validate([
            'ict1_1'=>'required|string',
            'ict1_2'=>'required|string',
            'ict1_3'=>'required|string',
            'ict2'=>'required|string',
            'ict3_1'=>'required|string',
            'ict3_2'=>'required|string',
            'ict3_3'=>'required|string',
            'ict4'=>'required|string',
            'ict5'=>'required|string',
            'ict6'=>'required|string',
            'ict7'=>'required|string',
            'ict8'=>'required|string',
            'ict9'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $opIctInWorkPlace = new OpIctInWorkplace;

        $opIctInWorkPlace->ict1_1=$request->ict1_1;
        $opIctInWorkPlace->ict1_2=$request->ict1_2;
        $opIctInWorkPlace->ict1_3=$request->ict1_3;
        $opIctInWorkPlace->ict2=$request->ict2;
        $opIctInWorkPlace->ict3_1=$request->ict3_1;
        $opIctInWorkPlace->ict3_2=$request->ict3_2;
        $opIctInWorkPlace->ict3_3=$request->ict3_3;
        $opIctInWorkPlace->ict4=$request->ict4;
        $opIctInWorkPlace->ict5=$request->ict5;
        $opIctInWorkPlace->ict6=$request->ict6;
        $opIctInWorkPlace->ict7=$request->ict7;
        $opIctInWorkPlace->ict8=$request->ict8;
        $opIctInWorkPlace->ict9=$request->ict9;
        $opIctInWorkPlace->govofficial_id=$request->govofficial_id;

        $opIctInWorkPlace->save();

        return redirect()->route('operationalIctPage02');

    }

    public function storeOpInformationManagement(Request $request){
        request()->validate([
            'ict10_1'=>'required|string',
            'ict10_2'=>'required|string',
            'ict10_3'=>'required|string',
            'ict11'=>'required|string',
            'ict12'=>'required|string',
            'ict13_1'=>'required|string',
            'ict13_2'=>'required|string',
            'ict13_3'=>'required|string',
            'ict14'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $opInformationManagement = new OpInformationManagements;

        $opInformationManagement->ict10_1=$request->ict10_1;
        $opInformationManagement->ict10_2=$request->ict10_2;
        $opInformationManagement->ict10_3=$request->ict10_3;
        $opInformationManagement->ict11=$request->ict11;
        $opInformationManagement->ict12=$request->ict12;
        $opInformationManagement->ict13_1=$request->ict13_1;
        $opInformationManagement->ict13_2=$request->ict13_2;
        $opInformationManagement->ict13_3=$request->ict13_3;
        $opInformationManagement->ict14=$request->ict14;
        $opInformationManagement->govofficial_id=$request->govofficial_id;

        $opInformationManagement->save();

        return redirect()->route('operationalIctPage03');
    }

    public function storeOpDigitalCitizenship(Request $request){
        request()->validate([
            'ict15'=>'required|string',
            'ict16'=>'required|string',
            'ict17'=>'required|string',
            'ict18'=>'required|string',
            'ict19'=>'required|string',
            'ict20_1'=>'required|string',
            'ict20_2'=>'required|string',
            'ict20_3'=>'required|string',
            'ict21'=>'required|string',
            'ict22'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $storeOpDigitalCitizenship = new OpDigitalCitizenship;

        $storeOpDigitalCitizenship->ict15=$request->ict15;
        $storeOpDigitalCitizenship->ict16=$request->ict16;
        $storeOpDigitalCitizenship->ict17=$request->ict17;
        $storeOpDigitalCitizenship->ict18=$request->ict18;
        $storeOpDigitalCitizenship->ict19=$request->ict19;
        $storeOpDigitalCitizenship->ict20_1=$request->ict20_1;
        $storeOpDigitalCitizenship->ict20_2=$request->ict20_2;
        $storeOpDigitalCitizenship->ict20_3=$request->ict20_3;
        $storeOpDigitalCitizenship->ict21=$request->ict21;
        $storeOpDigitalCitizenship->ict22=$request->ict22;
        $storeOpDigitalCitizenship->govofficial_id=$request->govofficial_id;

        $storeOpDigitalCitizenship->save();

        $marksOpDigitalCitizenship=$request->ict15+$request->ict16+$request->ict17+$request->ict18+$request->ict19+$request->ict20_1+$request->ict20_2+$request->ict20_3+$request->ict21+$request->ict22;
        $marks_op_ict=$request->totOpIctInWorkplace+$request->totOpInformationManagement+$marksOpDigitalCitizenship;

        $opIct = new OpIct;

        $opIct->op_ict_in_workplace=$request->totOpIctInWorkplace;
        $opIct->op_information_management=$request->totOpInformationManagement;
        $opIct->op_digital_citizenship=$marksOpDigitalCitizenship;
        $opIct->marks_op_ict=$marks_op_ict;
        $opIct->govofficial_id=$request->govofficial_id;

        $opIct->save();

        return redirect()->route('operationalIctResults');
    }

    public function opIctResults(){
        $opDigitalGov = Auth::user()->govofficial->opIct;

        $opIctInWorkplace=$opDigitalGov->op_ict_in_workplace;
        $a=$opIctInWorkplace/40;
        $avgOpIctInWorkplace=round($a*100);

        $opInformationManagement=$opDigitalGov->op_information_management;
        $b=$opInformationManagement/24;
        $avgOpInformationManagement=round($b*100);

        $opDigitalCitizenship=$opDigitalGov->op_digital_citizenship;
        $c=$opDigitalCitizenship/36;
        $avgOpDigitalCitizenship=round($c*100);



    $result = [
        ['Category', 'Value'],
        ['ICT in Workplace', (int) $avgOpIctInWorkplace],
        ['Information Management', (int) $avgOpInformationManagement],
        ['Digital Citizenship', (int) $avgOpDigitalCitizenship],
    ];

    $govOfficial=Auth::user()->govofficial;

    $opIctInWorkplace2=$govOfficial->opIctInWorkplace;
    $opInformationManagement2=$govOfficial->opInformationManagement;
    $opDigitalCitizenship2=$govOfficial->opDigitalCitizenship;

        return view('govOfficials.Operational.ICT.results',compact('result','opIctInWorkplace2','opInformationManagement2','opDigitalCitizenship2','avgOpIctInWorkplace','avgOpInformationManagement','avgOpDigitalCitizenship'));
    }

    public function opIctReport(){
        $opDigitalGov = Auth::user()->govofficial->opIct;

        $opIctInWorkplace=$opDigitalGov->op_ict_in_workplace;
        $a=$opIctInWorkplace/40;
        $avgOpIctInWorkplace=round($a*100);

        $opInformationManagement=$opDigitalGov->op_information_management;
        $b=$opInformationManagement/24;
        $avgOpInformationManagement=round($b*100);

        $opDigitalCitizenship=$opDigitalGov->op_digital_citizenship;
        $c=$opDigitalCitizenship/36;
        $avgOpDigitalCitizenship=round($c*100);



    $result = [
        ['Category', 'Value'],
        ['ICT in Workplace', (int) $avgOpIctInWorkplace],
        ['Information Management', (int) $avgOpInformationManagement],
        ['Digital Citizenship', (int) $avgOpDigitalCitizenship],
    ];

    $govOfficial=Auth::user()->govofficial;

    $opIctInWorkplace2=$govOfficial->opIctInWorkplace;
    $opInformationManagement2=$govOfficial->opInformationManagement;
    $opDigitalCitizenship2=$govOfficial->opDigitalCitizenship;

        return view('govOfficials.Operational.ICT.report',compact('result','opIctInWorkplace2','opInformationManagement2','opDigitalCitizenship2','avgOpIctInWorkplace','avgOpInformationManagement','avgOpDigitalCitizenship','govOfficial'));
    }

    public function opManagementPage01()
    {
        return view('govOfficials.Operational.Management.page01');
    }

}
