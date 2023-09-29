@extends('layouts.govofficialusernavbar')

@section('content')

<form method="POST" action="{{ route('storeOpInitiative') }}">
    {{csrf_field()}}
<section data-aos="fade-down" style="height: 750px;">
    <div style="margin-top: 70px;text-align:center;margin-bottom: 30px;"><span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br>Self Assessment - Digital Government (Operational Staff)<br><br></span></div>
    <div class="container align-content-center align-self-center" style="width: 1358px;height: 600px;margin-top: 10px;">
        <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
            <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #703074;margin-top: -48px;border-radius: 5px;"><br>Competency Area: Execute Digital Government Initiatives (ඩිජිටල් රාජ්‍ය මුල පිරීම් ක්‍රියාත්මක කිරීම)<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br><br>Carry out activities in digital government initiatives (ඩිජිටල් රාජ්‍ය මුල පිරීම්වල ක්‍රියාකාරකම් සිදු කිරීම)<br><br><br></span></div>
        </div>
        <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>

        <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 3040px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">18) What are the correct steps to follow when you log in to your email account from a public device? (ඔබ පොදු උපාංගයකින් ඔබගේ විද්‍යුත් තැපැල් ගිණුමට ලොග් වූ විට අනුගමනය කළ යුතු නිවැරදි පියවර මොනවාද?)</span></div>
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
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict18_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"> </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict18_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="2"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) Deleting the internet history and saved passwords after using the device (උපාංගය භාවිතා කිරීමෙන් පසු අන්තර්ජාල ඉතිහාසය සහ සුරකින ලද මුරපද මකා දැමීම)</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict18_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="2"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict18_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">c) Changing the password after using it if you feel unsafe (ඔබට අනාරක්ෂිත බවක් හැඟේ නම් එය භාවිතා කිරීමෙන් පසු මුරපදය වෙනස් කිරීම)</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict18_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="2"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict18_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top: -10px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>19) What are the outcomes of effective digital service delivery? (ඵලදායී ඩිජිටල් සේවා සැපයීමේ ප්‍රතිඵල මොනවාද?)</span></div>
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
                                                <div class="col"><input name="dg20" id="dg20_1" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg20_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Increase transparency (විනිවිදභාවය වැඩි කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg20" id="dg20_2" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg20_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Increased efficiency (කාර්යක්ෂමතාව වැඩි කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg20" id="dg20_3" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg20_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Increased accountability (වගවීම වැඩි කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg20" id="dg20_4" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="6"><label class="form-label" for="dg20_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above (ඉහත සියල්ල)</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: -10px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>21) As per your understanding what is the role of a Chief Digital Information Officer (CDIO) in a government organization? (ඔබගේ අවබෝධයට අනුව රජයේ ආයතනයක ප්‍රධාන ඩිජිටල් තොරතුරු නිලධාරියෙකුගේ (CDIO) කාර්යභාරය කුමක්ද?)</span></div>
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
                                                <div class="col"><input name="dg21" id="dg21_1" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg21_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 20px;width: 1100px;">a) CDIO will lead the Digital government transformation strategy within their organization (CDIO ඔවුන්ගේ&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ආයතනය තුළ ඩිජිටල් රාජ්‍ය පරිවර්තන උපාය මාර්ගයට නායකත්වය දෙනු ඇත)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg21" id="dg21_2" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg21_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp;  b) A new and important leadership role that will help to put the Sri Lankan government at the forefront of global&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; digital governments (ගෝලීය ඩිජිටල් ආණ්ඩු අතර ශ්‍රී ලංකා රජය ඉදිරියෙන් තැබීමට උපකාරී වන නව සහ වැදගත් නායකත්ව භූමිකාවක්)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg21" id="dg21_3" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg21_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp;  c) They will transform the understanding and use of technology to meet organizational goals (ඔවුන් ආයතනික ඉලක්ක&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;සපුරා ගැනීම සඳහා තාක්ෂණය පිළිබඳ අවබෝධය සහ භාවිතය,සංවර්තනය( transform) කරනු ඇත)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg21" id="dg21_4" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="6"><label class="form-label" for="dg21_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above (ඉහත සියල්ල)</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                                            {{--  <input class="form-control" type="hidden" id="totOpChangeManagement" name="totOpChangeManagement" value="{{$totOpChangeManagement}}" readonly>
                                            <input class="form-control" type="hidden" id="totOpCollaboaration" name="totOpCollaboaration" value="{{$totOpCollaboaration}}" readonly>
                                            <input class="form-control" type="hidden" id="totOpOrientation" name="totOpOrientation" value="{{$totOpOrientation}}" readonly>
                                            <input class="form-control" type="hidden" id="totOpQualityManagement" name="totOpQualityManagement" value="{{$totOpQualityManagement}}" readonly>  --}}
                                            {{--  <input class="form-control" type="" id="totOpInitiative" name="totOpInitiative" readonly>  --}}
            </div>
        </div>
    </div>

</section>

<div class="row" style="margin-right: 0px;margin-top: 2750px;margin-left: 850px;margin-bottom:50px">
    <div class="col" style="margin-top: 0px;"><a class="btn btn-primary" type="button" href="/operationallayer" style="font-family: Poppins, sans-serif;color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
        <a class="btn btn-primary" type="submit" href="{{ route('topDigitalGovernmentPage06') }}" style="font-family: Poppins, sans-serif;width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</a></div>
</div>
</form>


@endsection
