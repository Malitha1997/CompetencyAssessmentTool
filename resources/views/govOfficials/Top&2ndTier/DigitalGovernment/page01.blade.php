@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{route('storeTopProjectManagement')}}">
    {{csrf_field()}}
<section data-aos="fade-down" style="height: 1000px;">
    <div style="margin-top: 50px;text-align:center;margin-bottom: 50px;">
        <span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br><strong>Self Assessment -&nbsp;</strong>Digital Government (Operational Staff)&nbsp;</span></div>
    <div class="container align-content-center align-self-center" style="width: 1358px;height: 600px;margin-top: 10px;">
        <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
            <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #703074;margin-top: -48px;border-radius: 5px;"><br>Competency Area: Change Management (නිපුණතා අංශය: කළමනාකරණය වෙනස් කිරීම)<br><br>&nbsp;<br><br>නිපුණතා <br><br>අංශය: සන්නිවේදනය)<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br><br><br>Managing change in Digital Government setting (ඩිජිටල් රාජ්‍ය සැකසීමේ වෙනස්වීම් කළමනාකරණය කිරීම)<br><br><br><br><br></span></div>
        </div>
        <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 1900px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">1) What are the correct steps to follow when you log in to your email account from a public device? (ඔබ පොදු උපාංගයකින් ඔබගේ විද්‍යුත් තැපැල් ගිණුමට ලොග් වූ විට අනුගමනය කළ යුතු නිවැරදි පියවර මොනවාද?)</span></div>
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
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg1_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"> </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg1_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="2"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) Deleting the internet history and saved passwords after using the device (උපාංගය භාවිතා කිරීමෙන් පසු අන්තර්ජාල ඉතිහාසය සහ සුරකින ලද මුරපද මකා දැමීම)</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg1_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="2"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg1_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top: -20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>2) Which of the below is not an effective way to improve the use of technology among citizens? (පුරවැසියන් අතර තාක්ෂණය භාවිතය වැඩි දියුණු කිරීම සඳහා ඵලදායී ක්‍රමයක් නොවන්නේ පහත කවරක් ද?)</span></div>
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
                                                <div class="col"><input name="dg2" id="dg2_1" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="5"><label for="dg2_1" class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 20px;width: 1100px;"> a) Making the online services compulsory for all citizens overnight (එක රැයකින් සියලුම පුරවැසියන් සඳහා මාර්ගගත&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;සේවාවන් අනිවාර්ය කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg2" id="dg2_2" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label for="dg2_2" class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp; b) Creating awareness about the effective use of technology among citizens (පුරවැසියන් අතර තාක්ෂණය ඵලදායී ලෙස&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;භාවිතා කිරීම පිළිබඳව දැනුවත් කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg2" id="dg2_3" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label for="dg2_3" class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp;  c) Training the citizens on how to use technology platforms to get services (සේවා ලබා ගැනීම සඳහා තාක්ෂණික වේදිකා&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;භාවිතා කරන්නේ කෙසේද යන්න පිළිබඳව පුරවැසියන් පුහුණු කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg2" id="dg2_4" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label for="dg2_4" class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp; d) Empowering the enablers to push technology adoption among citizens (පුරවැසියන් අතර තාක්ෂණය යොදා ගැනීම&nbsp;දිරි&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ගැන්වීමට&nbsp;හැකියාව ලබා දෙන්නන් සවිබල ගැන්වීම)</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>3) Which of the below is not an effective way to improve the use of technology among citizens? (පුරවැසියන් අතර තාක්ෂණය භාවිතය වැඩි දියුණු කිරීම සඳහා ඵලදායී ක්‍රමයක් නොවන්නේ පහත කවරක් ද?)</span></div>
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
                                                <div class="col"><input name="dg3" id="dg3_1" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="5"><label for="dg3_1" class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 20px;width: 1100px;"> a) Making the online services compulsory for all citizens overnight (එක රැයකින් සියලුම පුරවැසියන් සඳහා මාර්ගගත&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;සේවාවන් අනිවාර්ය කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg3" id="dg3_2" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label for="dg3_2" class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp; b) Creating awareness about the effective use of technology among citizens (පුරවැසියන් අතර තාක්ෂණය ඵලදායී ලෙස&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;භාවිතා කිරීම පිළිබඳව දැනුවත් කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg3" id="dg3_3" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="5"><label for="dg3_3" class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 20px;width: 1100px;"> a) Making the online services compulsory for all citizens overnight (එක රැයකින් සියලුම පුරවැසියන් සඳහා මාර්ගගත&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;සේවාවන් අනිවාර්ය කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg3" id="dg3_4" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label for="dg3_4" class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp; b) Creating awareness about the effective use of technology among citizens (පුරවැසියන් අතර තාක්ෂණය ඵලදායී ලෙස&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;භාවිතා කිරීම පිළිබඳව දැනුවත් කිරීම)</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>4) Which of the below is not an effective way to improve the use of technology among citizens? (පුරවැසියන් අතර තාක්ෂණය භාවිතය වැඩි දියුණු කිරීම සඳහා ඵලදායී ක්‍රමයක් නොවන්නේ පහත කවරක් ද?)</span></div>
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
                                                <div class="col"><input name="dg4" id="dg4_1" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="5"><label for="dg4_1" class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 20px;width: 1100px;"> a) Making the online services compulsory for all citizens overnight (එක රැයකින් සියලුම පුරවැසියන් සඳහා මාර්ගගත&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;සේවාවන් අනිවාර්ය කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg4" id="dg4_2" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label for="dg4_2" class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp; b) Creating awareness about the effective use of technology among citizens (පුරවැසියන් අතර තාක්ෂණය ඵලදායී ලෙස&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;භාවිතා කිරීම පිළිබඳව දැනුවත් කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg4" id="dg4_3" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label for="dg4_3" class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp;  c) Training the citizens on how to use technology platforms to get services (සේවා ලබා ගැනීම සඳහා තාක්ෂණික වේදිකා&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;භාවිතා කරන්නේ කෙසේද යන්න පිළිබඳව පුරවැසියන් පුහුණු කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input name="dg4" id="dg4_4" type="radio" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"><label for="dg4_4" class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp; d) Empowering the enablers to push technology adoption among citizens (පුරවැසියන් අතර තාක්ෂණය යොදා ගැනීම&nbsp;දිරි&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ගැන්වීමට&nbsp;හැකියාව ලබා දෙන්නන් සවිබල ගැන්වීම)</label></div>
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
<div class="row" style="margin: 1199px 0px 0px 966px;margin-right: 0px;margin-top: 1400px;margin-left: 850px;margin-bottom: 50px">
    <div class="col"><a class="btn btn-primary" href="/toplayer" type="button" style="font-family: Poppins, sans-serif;color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
        <button class="btn btn-primary" type="submit" style="font-family: Poppins, sans-serif;width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</button></div>
</div>
</form>
@endsection
