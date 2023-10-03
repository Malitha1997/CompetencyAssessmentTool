@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeOpCollaboration') }}">
    {{csrf_field()}}
<section data-aos="fade-down" style="height: 750px;">
    <div style="margin-top: 50px;text-align:center;margin-bottom: 50px;">
        <span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br><strong>Self Assessment -&nbsp;</strong>Digital Government (Operational Staff)&nbsp;</span></div>
    <div class="container align-content-center align-self-center" style="width: 1358px;height: 600px;margin-top: 10px;">
        <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
            <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #703074;margin-top: -48px;border-radius: 5px;"><br><br>Competency Area: Collaboration and Partnership (නිපුණතා අංශය:සහයෝගීතාවය සහ හවුල්කාරිත්වය)<br><br>&nbsp;<br><br>නිපුණතා <br><br>අංශය: සන්නිවේදනය)<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br><br><br>Collaborating and Partnering in enhancing Digital Government capacity (ඩිජිටල් රාජ්‍ය ධාරිතාව ඉහළ නැංවීම සඳහා සහයෝගීතාවය සහ හවුල් වීම)<br><br><br><br></span></div>
        </div>
        <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
        <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 950px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>3) What are the tools and platforms that you can implement within your organization to improve collaborations between <br>inter-departments? (අන්තර් දෙපාර්තමේන්තු අතර සහයෝගිතාව වැඩිදියුණු කිරීම සඳහා ඔබේ සංවිධානය තුළ ක්‍රියාත්මක කළ හැකි මෙවලම් සහ වේදිකා මොනවාද?)</span></div>
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
                                                <div class="col" style="margin-top: 10px;"><input name="dg3" id="dg3_1" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg3_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) WhatsApp/ Facebook Group for group chats (WhatsApp/ Facebook Group - කණ්ඩායම් කතාබස් සඳහා)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg3" id="dg3_2" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg3_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp; b) Google docs, spreadsheets to work on a single document collaboratively (Google docs, spreadsheets -&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; සහයෝගීව තනි ලේඛනයක් මත වැඩ කිරීමට)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg3" id="dg3_3" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg3_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp;c) Shared Event/ meeting calendar to avoid conflicting meetings/ events (Shared Event/ meeting calendar -&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ගැටුම්කාරී රැස්වීම්/සිදුවීම් වළක්වා ගැනීමට)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg3" id="dg3_4" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="5"><label class="form-label" for="dg3_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above (ඉහත සියල්ල)</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: -20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>4) Identify the incorrect statement. (වැරදි ප්‍රකාශය හඳුනාගන්න)</span></div>
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
                                                <div class="col"><input name="dg4" id="dg4_1" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg4_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 20px;width: 1100px;">a) Individual strengths/weaknesses can be shared between team members and go for bigger outcomes (තනි&nbsp; &nbsp; &nbsp; &nbsp;පුද්ගල ශක්තීන්/දුර්වලතා කණ්ඩායම් සාමාජිකයන් අතර බෙදා ගත හැකි අතර එය&nbsp;විශාල ප්‍රතිඵල කරා යා හැක)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg4" id="dg4_2" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="6"><label class="form-label" for="dg4_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp;  b) Talented members can take the lead in every team and others become just followers (දක්ෂ සාමාජිකයින්ට සෑම&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;කණ්ඩායමකම පෙරමුණ ගත හැකි අතර අනෙක් අය හුදෙක් අනුගාමිකයින් බවට පත්වේ)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg4" id="dg4_3" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg4_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp; c) Responsibilities can be shared among team members so that all members can play an important role (සියලුම&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; සාමාජිකයින්ට වැදගත් කාර්යභාරයක් ඉටු කළ හැකි වන පරිදි කණ්ඩායම් සාමාජිකයින් අතර වගකීම් බෙදා ගත හැකිය)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg4" id="dg4_4" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg4_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp; d) Diversity in a team can always lead to a greater success (කණ්ඩායමක විවිධත්වය සෑම විටම වැඩි සාර්ථකත්වයක් කරා ගෙන&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;යා හැකිය)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label></div>
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
    </div>
</section>
<div class="row" style="margin: 990px 0px 0px 926px;margin-right: 0px;margin-top: 700px;margin-left: 850px;margin-bottom:50px">
    <div class="col"><a class="btn btn-primary" href="/operationallayer" type="button" style="color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;font-family: Poppins, sans-serif;">Resume</a>
        <button class="btn btn-primary" type="submit" style="font-family: Poppins, sans-serif;width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</button></div>
</div>
</form>

@endsection
