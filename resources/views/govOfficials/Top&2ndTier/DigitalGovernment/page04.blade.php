@extends('layouts.govofficialusernavbar')

@section('content')

<form method="POST" action="{{ route('storeTopOrientation') }}">
    {{csrf_field()}}
<section data-aos="fade-down" style="height: 750px;">
    <div style="margin-top: 50px;text-align:center;margin-bottom: 50px;">
        <span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br><strong>Self Assessment -&nbsp;</strong>Digital Government (Operational Staff)&nbsp;</span></div>
    <div class="container align-content-center align-self-center" style="width: 1358px;height: 600px;margin-top: 10px;">
        <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
        <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
            <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #703074;margin-top: -48px;border-radius: 5px;"><br>Competency Area: Quality Management (නිපුණතා අංශය:&nbsp;<br>තත්ත්ව කළමනාකරණය)<br><br>&nbsp;<br><br>තත්ත්ව කළමනාකරණය)<br><br>)<br><br>&nbsp;<br><br>නිපුණතා <br><br>අංශය: සන්නිවේදනය)<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br><br>Delivering and managing quality in Digital Government Services (ඩිජිටල් රාජ්‍ය සේවාවන්හි ගුණාත්මකභාවය ලබා දීම සහ කළමනාකරණය කිරීම)<br><br><br><br><br></span></div>
        </div>
        <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 1350px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>11) What are the benefits of having a customer feedback system in digital government? (ඩිජිටල් රජය තුළ පාරිභෝගික ප්‍රතිපෝෂණ(feedback) පද්ධතියක් තිබීමේ ප්‍රතිලාභ මොනවාද?)</span></div>
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
                                                <div class="col" style="margin-top: 10px;"><input name="dg11" id="dg11_1" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg11_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Helps to identify the areas of improvement (වැඩිදියුණු කළ හැකි අංශ හඳුනා ගැනීමට උපකාරී වේ)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg11" id="dg11_2" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg11_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Helps to measure customer satisfaction (පාරිභෝගික තෘප්තිය මැනීමට උපකාරී වේ)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg11" id="dg11_3" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg11_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp; c) Customer feedback collection explains how the organization treats its customers (පාරිභෝගික ප්‍රතිපෝෂණ&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (feedback) එකතුව මගින් සංවිධානය තම ගනුදෙනුකරුවන්ට සලකන ආකාරය පැහැදිලි කරයි)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg11" id="dg11_4" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="6"><label class="form-label" for="dg11_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above (ඉහත සියල්ල)</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">12) What are the correct steps to follow when you log in to your email account from a public device? (ඔබ පොදු උපාංගයකින් ඔබගේ විද්‍යුත් තැපැල් ගිණුමට ලොග් වූ විට අනුගමනය කළ යුතු නිවැරදි පියවර මොනවාද?)</span></div>
            </div>
            <div class="table-responsive" style="font-family: Poppins, sans-serif;font-size: 20px;margin-left: 80px;">
                <table class="table">
                    <thead>
                        <tr style="margin-top: 10px;">
                            <th></th>
                            <th style="color: #1f2471;text-align: center;">True</th>
                            <th style="color: #1f2471;text-align: center;">False</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="margin-top: 10px;">
                            <td style="color: rgb(0,0,0);width: 900px;">a) Clicking on the "remember password" option ("මුරපදය මතක තබා ගන්න " විකල්පය මත ක්ලික් කිරීම)</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg12" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"> </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg12" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="2"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top: -20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>13) Which is not a effective suggestion to improve the quality of service delivery? (සේවා සැපයීමේ ගුණාත්මකභාවය වැඩි දියුණු කිරීම සඳහා ඵලදායී යෝජනාවක් නොවන්නේ කුමක්ද?)</span></div>
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
                                                <div class="col"><input type="radio" name="dg13" id="dg13_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="6"><label class="form-label" for="dg13_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 20px;width: 1100px;">a) Continue the manual method (අත්පොත ක්‍රමය දිගටම ක්‍රියාත්මක කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="dg13" id="dg13_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg13_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Use a digital tool for service delivery (සේවා සැපයීම සඳහා ඩිජිටල් මෙවලමක් භාවිතා කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="dg13" id="dg13_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg13_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Transform manual system to digital (අත්පොත පද්ධතිය ඩිජිටල් බවට පරිවර්තනය කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="dg13" id="dg13_4" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg13_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Suggest new improvements to the existing digital system (පවතින ඩිජිටල් පද්ධතියට නව වැඩිදියුණු කිරීම් යෝජනා කිරීම)</label></div>
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
<div class="row" style="margin: 1199px 0px 0px 966px;margin-right: 0px;margin-top: 1800px;margin-left: 850px;margin-bottom:50px">
    <div class="col"><a class="btn btn-primary" href="/toplayer" type="button" style="font-family: Poppins, sans-serif;color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
        <button class="btn btn-primary" type="submit" style="font-family: Poppins, sans-serif;width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png')}}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</button></div>
</div>
</form>


@endsection
