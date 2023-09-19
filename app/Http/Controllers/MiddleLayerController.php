<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MidIctInWorkplace;
use App\Models\MidInformationManagement;

class MiddleLayerController extends Controller
{
    public function middle(){
        return view ('govOfficials.Middle&Junior.main');
    }

    public function midIctPage01(){
        return view('govOfficials.Middle&Junior.ICT.page01');
    }

    public function midIctPage02(){
        return view('govOfficials.Middle&Junior.ICT.page02');
    }

    public function midIctPage03(){
        return view('govOfficials.Middle&Junior.ICT.page03');
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
}
