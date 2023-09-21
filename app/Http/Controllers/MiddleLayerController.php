<?php

namespace App\Http\Controllers;

use App\Models\MidIct;
use Illuminate\Http\Request;
use App\Models\MidIctInWorkplace;
use Illuminate\Support\Facades\Auth;
use App\Models\MidDigitalCitizenship;
use App\Models\MidInformationManagement;

class MiddleLayerController extends Controller
{
    public function middle(){
        $midIctInWorkplace=Auth::user()->govofficial->midIctInWorkplace;
        $midInformationManagement=Auth::user()->govofficial->midInformationManagement;
        $midDigtalCitizenship=Auth::user()->govofficial->midDigitalCitizenship;

        return view ('govOfficials.Middle&Junior.main',compact('midInformationManagement','midIctInWorkplace','midDigtalCitizenship',));
    }

    public function midIctPage01(){
        return view('govOfficials.Middle&Junior.ICT.page01');
    }

    public function midIctPage02(){
        return view('govOfficials.Middle&Junior.ICT.page02');
    }

    public function midIctPage03(){
        $midIctInWorkplace=Auth::user()->govofficial->midIctInWorkplace;
        $midInformationManagement=Auth::user()->govofficial->midInformationManagement;
        $midDigtalCitizenship=Auth::user()->govofficial->midDigitalCitizenship;

        $totMidIctInWorkplace=$midIctInWorkplace->ict1+$midIctInWorkplace->ict2+$midIctInWorkplace->ict3+$midIctInWorkplace->ict4+$midIctInWorkplace->ict5_1+$midIctInWorkplace->ict5_2+$midIctInWorkplace->ict6_1+$midIctInWorkplace->ict6_2;
        $totMidInformationManagement=$midInformationManagement->ict7+$midInformationManagement->ict8;
        // dd($totMidIctInWorkplace);
        return view('govOfficials.Middle&Junior.ICT.page03',compact('totMidIctInWorkplace','totMidInformationManagement'));
    }

    public function storeMidIctInWorkplace(Request $request){
        request()->validate([
            'ict1'=>'required|string',
            'ict2'=>'required|string',
            'ict3'=>'required|string',
            'ict4'=>'required|string',
            'ict5_1'=>'required|string',
            'ict5_2'=>'required|string',
            'ict6_1'=>'required|string',
            'ict6_2'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $midIctInWorplace = new MidIctInWorkplace;

        $midIctInWorplace->ict1=$request->ict1;
        $midIctInWorplace->ict2=$request->ict2;
        $midIctInWorplace->ict3=$request->ict3;
        $midIctInWorplace->ict4=$request->ict4;
        $midIctInWorplace->ict5_1=$request->ict5_1;
        $midIctInWorplace->ict5_2=$request->ict5_2;
        $midIctInWorplace->ict6_1=$request->ict6_1;
        $midIctInWorplace->ict6_2=$request->ict6_2;
        $midIctInWorplace->govofficial_id=$request->govofficial_id;

        $midIctInWorplace->save();

        return redirect()->route('middleIctPage02');

    }

    public function storeMidInformationManagement(Request $request){
        request()->validate([
            'ict7'=>'required|string',
            'ict8'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $midInformationManagement = new MidInformationManagement;

        $midInformationManagement->ict7=$request->ict7;
        $midInformationManagement->ict8=$request->ict8;
        $midInformationManagement->govofficial_id=$request->govofficial_id;

        $midInformationManagement->save();

        return redirect()->route('middleIctPage03');

    }

    public function storeMidDigitalCitizenship(Request $request){
        // dd($request);
        request()->validate([
            'ict9_1'=>'required|string',
            'ict9_2'=>'required|string',
            'ict9_3'=>'required|string',
            'ict10_1'=>'required|string',
            'ict10_2'=>'required|string',
            'ict10_3'=>'required|string',
            'ict11'=>'required|string',
            'ict12'=>'required|string',
            'ict13'=>'required|string',
            'ict14'=>'required|string',
            'ict15_1'=>'required|string',
            'ict15_2'=>'required|string',
            'ict15_3'=>'required|string',
            'ict16'=>'required|string',
            'totMidIctInWorkplace'=>'required|string',
            'totMidInformationManagement'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);
        // dd('hi');
        $midDigitalCitizenship=new MidDigitalCitizenship;

        $midDigitalCitizenship->ict9_1=$request->ict9_1;
        $midDigitalCitizenship->ict9_2=$request->ict9_2;
        $midDigitalCitizenship->ict9_3=$request->ict9_3;
        $midDigitalCitizenship->ict10_1=$request->ict10_1;
        $midDigitalCitizenship->ict10_2=$request->ict10_2;
        $midDigitalCitizenship->ict10_3=$request->ict10_3;
        $midDigitalCitizenship->ict11=$request->ict11;
        $midDigitalCitizenship->ict12=$request->ict12;
        $midDigitalCitizenship->ict13=$request->ict13;
        $midDigitalCitizenship->ict14=$request->ict14;
        $midDigitalCitizenship->ict15_1=$request->ict15_1;
        $midDigitalCitizenship->ict15_2=$request->ict15_2;
        $midDigitalCitizenship->ict15_3=$request->ict15_3;
        $midDigitalCitizenship->ict16=$request->ict16;
        $midDigitalCitizenship->govofficial_id=$request->govofficial_id;

        $midDigitalCitizenship->save();

        $totMidDigitalCitizenship=$request->ict9+$request->ict10_1+$request->ict10_2+$request->ict10_3+$request->ict11_1+$request->ict11_2+$request->ict11_3+$request->ict12+$request->ict13+$request->ict14+$request->ict15+$request->ict16_1+$request->ict16_2+$request->ict17+$request->ict18+$request->ict19+$request->ict20+$request->ict21;
        $totIct=$request->totMidIctInWorkplace+$request->totMidInformationManagement+$totMidDigitalCitizenship;

        $midIct=new MidIct;

        $midIct->ict_in_workplace=$request->totMidIctInWorkplace;
        $midIct->information_management=$request->totMidInformationManagement;
        $midIct->digital_citizenship=$totMidDigitalCitizenship;
        $midIct->overall_mid_ict=$totIct;
        $midIct->govofficial_id=$request->govofficial_id;

        $midIct->save();

        return redirect()->route('middleIctResult');

    }

    public function midIctResult(){
        $midIct = Auth::user()->govofficial->midIct;

        $midIctInWorkplace=$midIct->ict_in_workplace;
        // dd($midIctInWorkplace);
        $a=$midIctInWorkplace/32;
        $avgMidIctInWorkplace=round($a*100);

        $midInformationManagement=$midIct->information_management;
        $b=$midInformationManagement/10;
        $avgMidInformationManagement=round($b*100);

        $midDigitalCitizenship=$midIct->digital_citizenship;
        $c=$midDigitalCitizenship/58;
        $avgMidDigitalCitizenship=round($c*100);

        $result = [
            ['Category', 'Value'],
            ['ICT in Workplace', (int) $avgMidIctInWorkplace],
            ['Information Management', (int) $avgMidInformationManagement],
            ['Digital Citizenship', (int) $avgMidDigitalCitizenship],
        ];

        $govOfficial=Auth::user()->govofficial;

        $midIctInWorkplace2=$govOfficial->midIctInWorkplace;
        $midInformationManagement2=$govOfficial->midInformationManagement;
        $midDigitalCitizenship2=$govOfficial->midDigitalCitizenship;

        return view('govOfficials.Middle&Junior.ICT.results',compact('midDigitalCitizenship2','midInformationManagement2','midIctInWorkplace2','avgMidDigitalCitizenship','avgMidInformationManagement','avgMidIctInWorkplace','result'));
    }

    public function midIctReport(){
        $midIct = Auth::user()->govofficial->midIct;

        $midIctInWorkplace=$midIct->ict_in_workplace;
        // dd($midIctInWorkplace);
        $a=$midIctInWorkplace/32;
        $avgMidIctInWorkplace=round($a*100);

        $midInformationManagement=$midIct->information_management;
        $b=$midInformationManagement/10;
        $avgMidInformationManagement=round($b*100);

        $midDigitalCitizenship=$midIct->digital_citizenship;
        $c=$midDigitalCitizenship/58;
        $avgMidDigitalCitizenship=round($c*100);

        $result = [
            ['Category', 'Value'],
            ['ICT in Workplace', (int) $avgMidIctInWorkplace],
            ['Information Management', (int) $avgMidInformationManagement],
            ['Digital Citizenship', (int) $avgMidDigitalCitizenship],
        ];

        $govOfficial=Auth::user()->govofficial;

        $midIctInWorkplace2=$govOfficial->midIctInWorkplace;
        $midInformationManagement2=$govOfficial->midInformationManagement;
        $midDigitalCitizenship2=$govOfficial->midDigitalCitizenship;

        return view('govOfficials.Middle&Junior.ICT.report',compact('govOfficial','midDigitalCitizenship2','midInformationManagement2','midIctInWorkplace2','avgMidDigitalCitizenship','avgMidInformationManagement','avgMidIctInWorkplace','result'));
    }
}
