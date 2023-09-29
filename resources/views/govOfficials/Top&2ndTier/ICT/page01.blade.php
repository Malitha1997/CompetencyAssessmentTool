@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeTopIctInWorplace') }}">
    {{csrf_field()}}
<section data-aos="fade-down" style="height: 250px;">
    <div class="container" style="margin-top: 50px;text-align:center;margin-bottom:20px">
        <span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment - ICT (Operational Staff)</span>
    </div>
    <div class="container align-content-center align-self-center" style="width: 1358px;height: 400px;margin-top: 10px;">
        <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
            <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #E52F72;margin-top: -48px;border-radius: 5px;"><br>Competency Area: ICT in Workplace<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br>Competency Area Description: Productively perform tasks in the workplace by using ICT skills and knowledge in a digital <br>government setting.&nbsp; (නිපුණතා අංශයේ විස්තරය: ඩිජිටල් රාජ්‍ය පසුබිමක් තුළ තොරතුරු හා සන්නිවේදන තාක්ෂණ කුසලතා සහ දැනුම භාවිතා කරමින් රැකියා ස්ථානයේ කාර්ය සාධනය ඇති කිරීම.&nbsp;<br><br><br></span></div>
        </div>
        <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 1450px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">1) What are the expected benefits of using ICT in public service delivery&nbsp;(Mark as True/ False)?<br>&nbsp; &nbsp; රාජ්‍ය සේවා සැපයීමේදී තොරතුරු හා සන්නිවේදන තාක්ෂණ භාවිතා කිරීමෙන් අපේක්ෂා කරන ප්‍රතිලාභ මොනවාද?</span></div>
            </div>
            <div class="row d-flex flex-column" style="text-align: center;">
                <div class="col">
                    <div class="row d-flex flex-column" style="text-align: center;">
                        <div class="col">
                            <div class="row d-flex flex-column" style="text-align: center;">
                                <div class="col">
                                    <div class="row d-flex flex-column" style="text-align: center;">
                                        <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict1" id="ict1_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px" value="0"><label class="form-label" for="ict1_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Stimulating economic growth (ආර්ථික වර්ධනය උත්තේජනය කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict1" id="ict1_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px" value="0"><label class="form-label" for="ict1_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Creating a common ICT infrastructure for everyone&nbsp;(සැමට පොදු ICT යටිතල පහසුකම් නිර්මාණය කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict1" id="ict1_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px" value="0"><label class="form-label" for="ict1_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Enable and deliver change (සබල කිරීම සහ වෙනසක් ලබා දීම</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict1" id="ict1_4" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px" value="4"><label class="form-label" for="ict1_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) None of the above (ඉහත කිසිවක් නොවේ)</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>2) Select the answer with emerging technologies in 2022? <br>&nbsp; &nbsp; (2022 දී නැගී එන තාක්ෂණයන් මොනවද පිළිතුර තෝරන්න?)</span></div>
            </div>
            <div class="row d-flex flex-column" style="text-align: center;">
                <div class="col">
                    <div class="row d-flex flex-column" style="text-align: center;">
                        <div class="col">
                            <div class="row d-flex flex-column" style="text-align: center;">
                                <div class="col">
                                    <div class="row d-flex flex-column" style="text-align: center;">
                                        <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col" style="margin-top: 10px;"><input type="radio" name="ict2" id="ict2_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict2_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Edge Computing, Machine Learning, MS-DOS</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict2" id="ict2_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="4"><label class="form-label" for="ict2_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Blockchain, Artificial Intelligence, Robotics</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict2" id="ict2_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict2_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) IoT, Zoom, Facebook</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict2" id="ict2_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict2_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">3) Mark the following statements as True /False&nbsp;<br>(පහත ප්‍රකාශයන් සත්‍ය / අසත්‍ය ලෙස සලකුණු කරන්න)</span></div>
            </div>
            <div class="row d-flex flex-column" style="text-align: center;">
                <div class="col">
                    <div class="row d-flex flex-column" style="text-align: center;">
                        <div class="col">
                            <div class="row d-flex flex-column" style="text-align: center;">
                                <div class="col">
                                    <div class="row d-flex flex-column" style="text-align: center;">
                                        <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict3" id="ict3_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px" value="0"><label class="form-label" for="ict3_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Stimulating economic growth (ආර්ථික වර්ධනය උත්තේජනය කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict3" id="ict3_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px" value="0"><label class="form-label" for="ict3_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Creating a common ICT infrastructure for everyone&nbsp;(සැමට පොදු ICT යටිතල පහසුකම් නිර්මාණය කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict3" id="ict3_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px" value="0"><label class="form-label" for="ict3_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Enable and deliver change (සබල කිරීම සහ වෙනසක් ලබා දීම</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict3" id="ict3_4" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px" value="4"><label class="form-label" for="ict3_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) None of the above (ඉහත කිසිවක් නොවේ)</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>4) Mark the points which are NOT a direct benefit of digital government transformation? <br>&nbsp; &nbsp; (ඩිජිටල් රාජ්‍ය පරිවර්තනයේ සෘජු ප්‍රතිලාභයක් නොවන කරුණු සලකුණු කරන්න.)</span></div>
            </div>
            <div class="row d-flex flex-column" style="text-align: center;">
                <div class="col">
                    <div class="row d-flex flex-column" style="text-align: center;">
                        <div class="col">
                            <div class="row d-flex flex-column" style="text-align: center;">
                                <div class="col">
                                    <div class="row d-flex flex-column" style="text-align: center;">
                                        <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict4" id="ict4_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px" value="0"><label class="form-label" for="ict4_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Stimulating economic growth (ආර්ථික වර්ධනය උත්තේජනය කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict4" id="ict4_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px" value="0"><label class="form-label" for="ict4_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Creating a common ICT infrastructure for everyone&nbsp;(සැමට පොදු ICT යටිතල පහසුකම් නිර්මාණය කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict4" id="ict4_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px" value="0"><label class="form-label" for="ict4_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Enable and deliver change (සබල කිරීම සහ වෙනසක් ලබා දීම</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict4" id="ict4_4" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px" value="4"><label class="form-label" for="ict4_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) None of the above (ඉහත කිසිවක් නොවේ)</label></div>
                                            </div>
                                            <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</section>
<div class="row" style="margin-bottom:100px;margin-right: 0px;margin-top: 1700px;margin-left: 850px;font-family: Poppins, sans-serif;">
    <div class="col"><a class="btn btn-primary" href="{{ route('toplayer') }}" type="button" style="color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
        <button class="btn btn-primary" type="submit" style="width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</button></div>
</div>
</form>

@endsection