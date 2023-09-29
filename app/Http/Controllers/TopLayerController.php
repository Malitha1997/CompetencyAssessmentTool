<?php

namespace App\Http\Controllers;

use App\Models\TopIct;
use Illuminate\Http\Request;
use App\Models\TopIctInWorkplace;
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
        return view('govOfficials.Top&2ndTier.main',compact('topIct'));
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
        return view('govOfficials.Top&2ndTier.DigitalGovernment.page06');
    }
}
