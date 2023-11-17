@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeOpWorkplaceManagement') }}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Management (Operational Staff)</h2>
        </div>
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Workplace Management (නිපුණතා අංශය: සන්නිවේදනය)<br></h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Building a holistic and open environment that promotes collaboration and productivity towards achieving digital government transformation. (ඩිජිටල් රාජ්‍ය පරිවර්තනයක් සාක්ෂාත් කර ගැනීම සඳහා සහයෝගීතාවය සහ ඵලදායිතාව ප්‍රවර්ධනය කරන පරිපූර්ණ සහ විවෘත පරිසරයක් ගොඩනැගීම.)<br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">5)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Which of the following is not recommended to overcome Digital Government Service Delivery failures? (ඩිජිටල් රාජ්‍ය සේවා බෙදා හැරීමේ අසාර්ථක වීම් මඟහරවා ගැනීම සඳහා පහත සඳහන් දේවලින් නිර්දේශ නොකරන්නේ කුමක්ද?)</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt5" id="mgt5_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt5_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Preventive actions by educating the users in advance (පරිශීලකයින් කල්තියා දැනුවත් කිරීමෙන් වැළැක්වීමේ ක්‍රියාමාර්ග ගැනීම )</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt5" id="mgt5_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt5_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Assistive actions to act fast to overcome the situation when it occurs ( තත්ත්වය ඇති වූ විට එය ජය ගැනීම සඳහා වේගයෙන් ක්‍රියා කිරීමට උපකාරක ක්‍රියාමාර්ග ගැනීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt5" id="mgt5_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt5_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Taking actions after the incident/ damage(සිද්ධිය/හානියෙන් පසු පියවර ගැනීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt5" id="mgt5_4" value="6">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt5_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Ignore the service failure (සේවා අසාර්ථකත්වය නොසලකා හැරීම)</h5></label>
                </div>
            </div>
        </div>
    </div>
<!-- <section data-aos="fade-down" style="height: 750px;">
    <div class="container" style="margin-top: 50px;text-align:center;margin-bottom:70px">
        <span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br><strong>Self Assessment -&nbsp;</strong>Management (Operational Staff)&nbsp;</span>
    </div>
    <div class="container align-content-center align-self-center" style="width: 1358px;height: 600px;margin-top: 10px;">
        <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
            <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #027673;margin-top: -48px;border-radius: 5px;"><br>Competency Area: Workplace Management<br><br>නිපුණතා <br><br>අංශය: සන්නිවේදනය)<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br><br>Building a holistic and open environment that promotes collaboration and productivity towards achieving digital government <br>transformation. (ඩිජිටල් රාජ්‍ය පරිවර්තනයක් සාක්ෂාත් කර ගැනීම සඳහා සහයෝගීතාවය සහ ඵලදායිතාව ප්‍රවර්ධනය කරන පරිපූර්ණ සහ විවෘත පරිසරයක් ගොඩනැගීම.)<br><br><br><br><br></span></div>
        </div>
        <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 900px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
            
            <div class="row" style="margin-top: -20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>6) Which of the following is the best way to promote benefits to citizens among your team? (ඔබේ කණ්ඩායම අතර පුරවැසියන්ට ප්‍රතිලාභ ප්‍රවර්ධනය කිරීමට පහත සඳහන් දේවලින් හොඳම ක්‍රමය කුමක්ද?)</span></div>
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
                                                <div class="col"><input type="radio" name="mgt6" id="mgt6_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="6"><label class="form-label" for="mgt6_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 20px;width: 1100px;">a) Set yourself as an example to others by being a Pioneer in practicing the organization offers (ප්‍රගුණ කිරීමේ පුරෝගාමියෙකු වීමෙන් ඔබ අන් අයට ආදර්ශයක් වීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="mgt6" id="mgt6_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt6_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) I follow when my supervisor orders me (මගේ අධීක්ෂක මට නියෝග කරන විට මම අනුගමනය කරමි)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="mgt6" id="mgt6_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt6_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) I always like the old ways of doing it (මම හැම විටම එය කිරීමට පැරණි ක්‍රම&nbsp;වලට කැමතියි)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="mgt6" id="mgt6_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt6_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Neither interested nor objection to digital service offerings (ඩිජිටල් සේවා පිරිනැමීම් සඳහා උනන්දුවක් හෝ <br>විරුද්ධත්වයක් නැත)</label></div>
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
        </div>
    </div>
</section>
<div class="row" style="font-family: Poppins, sans-serif;margin-right: 0px;margin-top: 650px;margin-left: 850px;margin-bottom:50px">
    <div class="col"><a class="btn btn-primary" href="{{ route('operationallayer') }}" type="button" style="font-family: Poppins, sans-serif;color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
        <button class="btn btn-primary" type="submit" style="width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</button></div>
</div> -->
</form>

@endsection
