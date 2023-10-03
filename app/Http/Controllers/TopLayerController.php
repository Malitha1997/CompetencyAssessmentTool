<?php

namespace App\Http\Controllers;

use App\Models\TopIct;
use Illuminate\Http\Request;
use App\Models\TopLeadership;
use App\Models\TopOrientation;
use App\Models\TopCollaboration;
use App\Models\TopIctInWorkplace;
use App\Models\TopChangeManagement;
use App\Models\TopDigitalGovernment;
use App\Models\TopProjectManagement;
use App\Models\TopQualityManagement;
use Illuminate\Support\Facades\Auth;
use App\Models\TopDigitalCitizenship;
use App\Models\TopInformationManagement;

class TopLayerController extends Controller
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

    public function top()
    {
        $topIct=Auth::user()->govofficial->topIct;
        $topDigitalGovernment=Auth::user()->govofficial->topDigitalGovernment;
        return view('govOfficials.Top&2ndTier.main',compact('topIct','topDigitalGovernment'));
    }

    public function topIctPage01(){
        return view('govOfficials.Top&2ndTier.ICT.page01');
    }

    public function topIctPage02(){
        return view('govOfficials.Top&2ndTier.ICT.page02');
    }

    public function topIctPage03(){
        $topIctInWorkplace=Auth::user()->govofficial->topIctInWorkplace;
        $topInformationManagement=Auth::user()->govofficial->topInformationManagement;

        $totTopIctInWorkplace=$topIctInWorkplace->ict1+$topIctInWorkplace->ict2+$topIctInWorkplace->ict3+$topIctInWorkplace->ict4;
        $totTopInformationManagement=$topInformationManagement->ict5;
        return view('govOfficials.Top&2ndTier.ICT.page03',compact('totTopIctInWorkplace','totTopInformationManagement'));
    }

    public function storeTopIctInWorkplace(Request $request){
        // dd($request);
        request()->validate([
            'ict1'=>'required|string',
            'ict2'=>'required|string',
            'ict3'=>'required|string',
            'ict4'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topIctInWorplace = new TopIctInWorkplace;

        $topIctInWorplace->ict1=$request->ict1;
        $topIctInWorplace->ict2=$request->ict2;
        $topIctInWorplace->ict3=$request->ict3;
        $topIctInWorplace->ict4=$request->ict4;
        $topIctInWorplace->govofficial_id=$request->govofficial_id;

        $topIctInWorplace->save();

        return redirect()->route('topIctPage02');

    }

    public function storeTopInformationManagement(Request $request){
        request()->validate([
            'ict5'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topInformationManagement = new TopInformationManagement;

        $topInformationManagement->ict5=$request->ict5;
        $topInformationManagement->govofficial_id=$request->govofficial_id;

        $topInformationManagement->save();

        return redirect()->route('topIctPage03');

    }

    public function storeTopDigitalCitizenship(Request $request){
        // dd($request);
        request()->validate([
            'ict6_1'=>'required|string',
            'ict6_2'=>'required|string',
            'ict6_3'=>'required|string',
            'ict7_1'=>'required|string',
            'ict7_2'=>'required|string',
            'ict7_3'=>'required|string',
            'ict8'=>'required|string',
            'ict9'=>'required|string',
            'ict10'=>'required|string',
            'ict11'=>'required|string',
            'ict12_1'=>'required|string',
            'ict12_2'=>'required|string',
            'ict12_3'=>'required|string',
            'ict13'=>'required|string',
            'totTopIctInWorkplace'=>'required|string',
            'totTopInformationManagement'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);
        // dd('hi');
        $topDigitalCitizenship=new TopDigitalCitizenship;

        $topDigitalCitizenship->ict6_1=$request->ict6_1;
        $topDigitalCitizenship->ict6_2=$request->ict6_2;
        $topDigitalCitizenship->ict6_3=$request->ict6_3;
        $topDigitalCitizenship->ict7_1=$request->ict7_1;
        $topDigitalCitizenship->ict7_2=$request->ict7_2;
        $topDigitalCitizenship->ict7_3=$request->ict7_3;
        $topDigitalCitizenship->ict8=$request->ict8;
        $topDigitalCitizenship->ict9=$request->ict9;
        $topDigitalCitizenship->ict10=$request->ict10;
        $topDigitalCitizenship->ict11=$request->ict11;
        $topDigitalCitizenship->ict12_1=$request->ict12_1;
        $topDigitalCitizenship->ict12_2=$request->ict12_2;
        $topDigitalCitizenship->ict12_3=$request->ict12_3;
        $topDigitalCitizenship->ict13=$request->ict13;
        $topDigitalCitizenship->govofficial_id=$request->govofficial_id;

        $topDigitalCitizenship->save();

        $totTopDigitalCitizenship=$request->ict6_1+$request->ict6_2+$request->ict6_3+$request->ict7_1+$request->ict7_2+$request->ict7_3+$request->ict8+$request->ict11_2+$request->ict9+$request->ict10+$request->ict11+$request->ict14+$request->ict12_1+$request->ict12_2+$request->ict12_3+$request->ict13;
        $totIct=$request->totTopIctInWorkplace+$request->totTopInformationManagement+$totTopDigitalCitizenship;

        $topIct=new TopIct;

        $topIct->ict_in_workplace=$request->totTopIctInWorkplace;
        $topIct->information_management=$request->totTopInformationManagement;
        $topIct->digital_citizenship=$totTopDigitalCitizenship;
        $topIct->overall_top_ict=$totIct;
        $topIct->govofficial_id=$request->govofficial_id;

        $topIct->save();

        return redirect()->route('toplayer');

    }

    public function topIctResult(){
        $topIct = Auth::user()->govofficial->topIct;

        $topIctInWorkplace=$topIct->ict_in_workplace;
        // dd($topIctInWorkplace);
        $a=$topIctInWorkplace/24;
        $avgTopIctInWorkplace=round($a*100);

        $topInformationManagement=$topIct->information_management;
        $b=$topInformationManagement/6;
        $avgTopInformationManagement=round($b*100);

        $topDigitalCitizenship=$topIct->digital_citizenship;
        $c=$topDigitalCitizenship/70;
        $avgTopDigitalCitizenship=round($c*100);

        $result = [
            ['Category', 'Value'],
            ['ICT in Workplace', (int) $avgTopIctInWorkplace],
            ['Information Management', (int) $avgTopInformationManagement],
            ['Digital Citizenship', (int) $avgTopDigitalCitizenship],
        ];

        $govOfficial=Auth::user()->govofficial;

        $topIctInWorkplace2=$govOfficial->topIctInWorkplace;
        $topInformationManagement2=$govOfficial->topInformationManagement;
        $topDigitalCitizenship2=$govOfficial->topDigitalCitizenship;

        return view('govOfficials.Top&2ndTier.ICT.results',compact('topDigitalCitizenship2','topInformationManagement2','topIctInWorkplace2','avgTopDigitalCitizenship','avgTopInformationManagement','avgTopIctInWorkplace','result'));
    }

    public function topIctReport(){
        $topIct = Auth::user()->govofficial->topIct;

        $topIctInWorkplace=$topIct->ict_in_workplace;
        // dd($topIctInWorkplace);
        $a=$topIctInWorkplace/24;
        $avgTopIctInWorkplace=round($a*100);

        $topInformationManagement=$topIct->information_management;
        $b=$topInformationManagement/6;
        $avgTopInformationManagement=round($b*100);

        $topDigitalCitizenship=$topIct->digital_citizenship;
        $c=$topDigitalCitizenship/70;
        $avgTopDigitalCitizenship=round($c*100);

        $result = [
            ['Category', 'Value'],
            ['ICT in Workplace', (int) $avgTopIctInWorkplace],
            ['Information Management', (int) $avgTopInformationManagement],
            ['Digital Citizenship', (int) $avgTopDigitalCitizenship],
        ];

        $govOfficial=Auth::user()->govofficial;

        $topIctInWorkplace2=$govOfficial->topIctInWorkplace;
        $topInformationManagement2=$govOfficial->topInformationManagement;
        $topDigitalCitizenship2=$govOfficial->topDigitalCitizenship;

        return view('govOfficials.Top&2ndTier.ICT.report',compact('govOfficial','topDigitalCitizenship2','topInformationManagement2','topIctInWorkplace2','avgTopDigitalCitizenship','avgTopInformationManagement','avgTopIctInWorkplace','result'));
    }

    public function topDigitalGovernmentPage01(){
        return view('govOfficials.Top&2ndTier.DigitalGovernment.page01');
    }

    public function topDigitalGovernmentPage02(){
        return view('govOfficials.Top&2ndTier.DigitalGovernment.page02');
    }

    public function topDigitalGovernmentPage03(){
        return view('govOfficials.Top&2ndTier.DigitalGovernment.page03');
    }

    public function topDigitalGovernmentPage04(){
        return view('govOfficials.Top&2ndTier.DigitalGovernment.page04');
    }

    public function topDigitalGovernmentPage05(){
        return view('govOfficials.Top&2ndTier.DigitalGovernment.page05');
    }

    public function topDigitalGovernmentPage06(){
        $topProjectManagement=Auth::user()->govofficial->topProjectManagement;
        $tottopProjectManagement=$topProjectManagement->dg1_1+$topProjectManagement->dg1_2+$topProjectManagement->dg2+$topProjectManagement->dg3+$topProjectManagement->dg4;

        $topChangeManagement=Auth::user()->govofficial->topChangeManagement;
        $tottopChangeManagement=$topChangeManagement->dg5+$topChangeManagement->dg6;

        $topCollaboration=Auth::user()->govofficial->topCollaboration;
        $tottopCollaboration=$topCollaboration->dg10+$topCollaboration->dg11_1+$topCollaboration->dg11_2+$topCollaboration->dg11_3+$topCollaboration->dg11_4+$topCollaboration->dg12+$topCollaboration->dg13+$topCollaboration->dg14;

        $topOrientation=Auth::user()->govofficial->topOrientation;
        $tottopOrientation=$topOrientation->dg7+$topOrientation->dg8+$topOrientation->dg9+$topOrientation->dg10;

        $topQualityManagement=Auth::user()->govofficial->topQualityManagement;
        $tottopQualityManagement=$topQualityManagement->dg14+$topQualityManagement->dg15;


        return view('govOfficials.Top&2ndTier.DigitalGovernment.page06',compact('tottopQualityManagement','tottopOrientation','tottopCollaboration','tottopChangeManagement','tottopProjectManagement'));
    }

    public function storeTopProjectManagement(Request $request){
        request()->validate([
            'dg1_1' => 'required|string',
            'dg1_2' => 'required|string',
            'dg2' => 'required|string',
            'dg3' => 'required|string',
            'dg4' => 'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topProjectManagement = new TopProjectManagement;

        $topProjectManagement->dg1_1=$request->dg1_1;
        $topProjectManagement->dg1_2=$request->dg1_2;
        $topProjectManagement->dg2=$request->dg2;
        $topProjectManagement->dg3=$request->dg3;
        $topProjectManagement->dg4=$request->dg4;
        $topProjectManagement->govofficial_id=$request->govofficial_id;

        $topProjectManagement->save();

        return redirect()->route('topDigitalGovernmentPage02');
    }

    public function storeTopChangeManagement(Request $request){
        request()->validate([
            'dg5' => 'required|string',
            'dg6' => 'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topChangeManagement = new TopChangeManagement;

        $topChangeManagement->dg5=$request->dg5;
        $topChangeManagement->dg6=$request->dg6;
        $topChangeManagement->govofficial_id=$request->govofficial_id;

        $topChangeManagement->save();

        return redirect()->route('topDigitalGovernmentPage03');
    }

    public function storeTopCollaboration(Request $request){
        request()->validate([
            'dg7' => 'required|string',
            'dg8' => 'required|string',
            'dg9' => 'required|string',
            'dg10' => 'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topCollaboration = new TopCollaboration;

        $topCollaboration->dg7=$request->dg7;
        $topCollaboration->dg8=$request->dg8;
        $topCollaboration->dg9=$request->dg9;
        $topCollaboration->dg10=$request->dg10;
        $topCollaboration->govofficial_id=$request->govofficial_id;

        $topCollaboration->save();

        return redirect()->route('topDigitalGovernmentPage04');
    }

    public function storeTopOrientation(Request $request){
        request()->validate([
            'dg11' => 'required|string',
            'dg12' => 'required|string',
            'dg13' => 'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topOrientation = new TopOrientation;

        $topOrientation->dg11=$request->dg11;
        $topOrientation->dg12=$request->dg12;
        $topOrientation->dg13=$request->dg13;
        $topOrientation->govofficial_id=$request->govofficial_id;

        $topOrientation->save();

        return redirect()->route('topDigitalGovernmentPage05');
    }

    public function storeTopQualityManagement(Request $request){
        request()->validate([
            'dg14' => 'required|string',
            'dg15' => 'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topQualityManagement = new TopQualityManagement;

        $topQualityManagement->dg14=$request->dg14;
        $topQualityManagement->dg15=$request->dg15;
        $topQualityManagement->govofficial_id=$request->govofficial_id;

        $topQualityManagement->save();

        return redirect()->route('topDigitalGovernmentPage06');
    }

    public function storeTopLeadership(Request $request){
        request()->validate([
            'dg16' => 'required|string',
            'dg17' => 'required|string',
            'dg18' => 'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topLeadership = new TopLeadership;

        $topLeadership->dg16=$request->dg16;
        $topLeadership->dg17=$request->dg17;
        $topLeadership->dg18=$request->dg18;
        $topLeadership->govofficial_id=$request->govofficial_id;

        $topLeadership->save();

        $totLeadership=$request->dg16+$request->dg17+$request->dg18;
        $marksTopDigitalManagement=$request->totTopProjectManagement+$request->totTopChangeManagement+$request->totTopCollaboration+$request->totTopOrientation+$request->totTopQualityManagement;

        $topDigitalGovernment=new TopDigitalGovernment;

        $topDigitalGovernment->project_management=$request->totTopProjectManagement;
        $topDigitalGovernment->change_management=$request->totTopChangeManagement;
        $topDigitalGovernment->collaboration=$request->totTopCollaboration;
        $topDigitalGovernment->orientation=$request->totTopOrientation;
        $topDigitalGovernment->quality_management=$request->totTopQualityManagement;
        $topDigitalGovernment->leadership=$totLeadership;
        $topDigitalGovernment->overall_top_digital_government=$marksTopDigitalManagement;
        $topDigitalGovernment->govofficial_id=$request->govofficial_id;

        $topDigitalGovernment->save();

        return redirect()->route('topDigitalGovernmentResult');
    }

    public function topDigitalGovernmentResult(){
        $topDigitalGov = Auth::user()->govofficial->topDigitalGovernment;

        $topProjectManagement=$topDigitalGov->project_management;
        $a=$topProjectManagement/12;
        $avgtopProjectManagement=round($a*100);

        $topChangeManagement=$topDigitalGov->change_management;
        $b=$topChangeManagement/18;
        $avgtopChangeManagement=round($b*100);

        $topCollaboration=$topDigitalGov->collaboration;
        $c=$topCollaboration/12;
        $avgtopCollaboration=round($c*100);

        $topOrientatiion=$topDigitalGov->orientation;
        $d=$topOrientatiion/14;
        $avgtopOrientatiion=round($d*100);

        $topQualityManagement=$topDigitalGov->quality_management;
        $e=$topQualityManagement/15;
        $avgtopQualityManagement=round($e*100);

        $topLeadership=$topDigitalGov->Leadership;
        $f=$topLeadership/29;
        $avgtopLeadership=round($f*100);

        $result = [
            ['Category', 'Value'],
            ['Project Management', (int) $avgtopProjectManagement],
            ['Change Management', (int) $avgtopChangeManagement],
            ['Collaboration and Partnership', (int) $avgtopCollaboration],
            ['Results Orientation', (int) $avgtopOrientatiion],
            ['Quality Management', (int) $avgtopQualityManagement],
            ['Digital Government Leadership', (int) $avgtopLeadership],
        ];

        $govOfficial=Auth::user()->govofficial;

        $topProjectManagement2=$govOfficial->topProjectManagement;
        $topChangeManagement2=$govOfficial->topChangeManagement;
        $topCollaboration2=$govOfficial->topCollaboration;
        $topOrientation2=$govOfficial->topOrientation;
        $topQualityManagement2=$govOfficial->topQualityManagement;
        $topLeadership2=$govOfficial->topLeadership;
        return view('govOfficials.Top&2ndTier.DigitalGovernment.results',compact('topLeadership2','topProjectManagement2','result','avgtopChangeManagement','avgtopCollaboration','avgtopOrientatiion','avgtopQualityManagement','avgtopLeadership','topChangeManagement2','topCollaboration2','topOrientation2','topQualityManagement2'));
    }

    public function topDigitalGovernmentReport(){
        $topDigitalGov = Auth::user()->govofficial->topDigitalGovernment;

        $topProjectManagement=$topDigitalGov->project_management;
        $a=$topProjectManagement/12;
        $avgtopProjectManagement=round($a*100);

        $topChangeManagement=$topDigitalGov->change_management;
        $b=$topChangeManagement/18;
        $avgtopChangeManagement=round($b*100);

        $topCollaboration=$topDigitalGov->collaboration;
        $c=$topCollaboration/12;
        $avgtopCollaboration=round($c*100);

        $topOrientatiion=$topDigitalGov->orientation;
        $d=$topOrientatiion/14;
        $avgtopOrientatiion=round($d*100);

        $topQualityManagement=$topDigitalGov->quality_management;
        $e=$topQualityManagement/15;
        $avgtopQualityManagement=round($e*100);

        $topLeadership=$topDigitalGov->Leadership;
        $f=$topLeadership/29;
        $avgtopLeadership=round($f*100);

        $result = [
            ['Category', 'Value'],
            ['Project Management', (int) $avgtopProjectManagement],
            ['Change Management', (int) $avgtopChangeManagement],
            ['Collaboration and Partnership', (int) $avgtopCollaboration],
            ['Results Orientation', (int) $avgtopOrientatiion],
            ['Quality Management', (int) $avgtopQualityManagement],
            ['Digital Government Leadership', (int) $avgtopLeadership],
        ];

        $govOfficial=Auth::user()->govofficial;

        $topProjectManagement2=$govOfficial->topProjectManagement;
        $topChangeManagement2=$govOfficial->topChangeManagement;
        $topCollaboration2=$govOfficial->topCollaboration;
        $topOrientation2=$govOfficial->topOrientation;
        $topQualityManagement2=$govOfficial->topQualityManagement;
        $topLeadership2=$govOfficial->topLeadership;
        return view('govOfficials.Top&2ndTier.DigitalGovernment.report',compact('govOfficial','topLeadership2','topProjectManagement2','result','avgtopChangeManagement','avgtopCollaboration','avgtopOrientatiion','avgtopQualityManagement','avgtopLeadership','topChangeManagement2','topCollaboration2','topOrientation2','topQualityManagement2'));
    }

    public function topManagementPage01(){
        return view('govOfficials.Top&2ndTier.Management.page01');
    }

    public function topManagementPage02(){
        return view('govOfficials.Top&2ndTier.Management.page02');
    }

    public function topManagementPage03(){
        return view('govOfficials.Top&2ndTier.Management.page03');
    }

    public function topManagementPage04(){
        return view('govOfficials.Top&2ndTier.Management.page04');
    }

} 
