<?php

namespace App\Http\Controllers;

use App\Models\OpInitiative;
use Illuminate\Http\Request;
use App\Models\OpOrientation;
use App\Models\OpCollaboration;
use App\Models\OpChangeManagement;
use Illuminate\Support\Facades\DB;
use App\Models\OpDigitalGovernment;
use App\Models\OpQualityManagement;
use Illuminate\Support\Facades\Auth;

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
        return view('govOfficials.Operational.main',compact('digitalGovDataExists','opChangeManagementDataExists','opCollaborationDataExists','opOrientationDataExists','opQualityManagementDataExists'));
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

}
