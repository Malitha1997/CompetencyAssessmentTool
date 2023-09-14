@extends('layouts.govofficialusernavbar')

@section('content')
<section data-aos="fade-down" style="height: 750px;">
    <div class="container" style="margin-top: 50px;text-align:center;margin-bottom:50px">
        <span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment - ICT (Operational Staff)</span>
    </div>
    <div class="container align-content-center align-self-center" style="width: 1358px;height: 600px;margin-top: 10px;">
        <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
            <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #E52F72;margin-top: -48px;border-radius: 5px;"><br>Competency Area: Information Management (නිපුණතා&nbsp;අංශය:&nbsp;තොරතුරු කළමනාකරණය)<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;">Competency Area Description: Ensure data and information are secure and adhere to data protection policies and laws in Digital <br>Government service delivery. (නිපුණතා&nbsp;අංශයේ&nbsp;විස්තරය:&nbsp;&nbsp;ඩිජිටල් රාජ්‍ය සේවා බෙදා හැරීමේදී දත්ත සහ තොරතුරු සුරක්ෂිත බව සහ, දත්ත ආරක්ෂණ ප්‍රතිපත්ති සහ නීතිවලට අනුකූල බව සහතික කිරීම.)<br><br><br></span></div>
        </div>
        <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 1780px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">10) What is the importance of having different levels of system access rights? (පද්ධති ප්‍රවේශ අයිතිවාසිකම්වල විවිධ මට්ටම් තිබීමේ වැදගත්කම කුමක්ද?)</span></div>
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
                            <td style="color: rgb(0,0,0);width: 900px;">a) Because everybody should have equal access to data (සෑම කෙනෙකුටම දත්ත සඳහා සමාන ප්‍රවේශයක් තිබිය යුතු බැවිනි)</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict10_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"> </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict10_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) Because it prevents access to sensitive data by unauthorized personnel (එය අනවසර පුද්ගලයින් විසින් කරනු ලබන සංවේදී දත්ත වෙත ප්‍රවේශ වීම වළක්වන බැවිනි)</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict10_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict10_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">c) Because it reduces the risk of data loss (එය දත්ත නැතිවීමේ අවදානම අඩු කරන බැවිනි)</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict10_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict10_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>&nbsp;11) To protect the computer system against hackers and different kinds of viruses, one must always keep _________ on in the computer system.(හැකර්වරුන්ගෙන් සහ විවිධ වර්ගයේ වෛරස් වලින් පරිගණක පද්ධතිය ආරක්ෂා කිරීම සඳහා, සෑම විටම පරිගණක පද්ධතියේ _________ තබා ගත යුතුය.)</span></div>
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
                                                <div class="col" style="margin-top: 10px;"><input type="radio" name="ict11" id="ict11_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict11_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Ms Office</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict11" id="ict11_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict11_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Antivirus</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict11" id="ict11_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict11_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) VLC player</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict11" id="ict11_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict11_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Script</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br><br>12) Which of below if not an appropriate ICT tool that can be used to collect information from customers? (පාරිභෝගිකයින්ගෙන් තොරතුරු රැස් කිරීමට භාවිතා කළ හැකි යෝග්‍ය ICT මෙවලමක් නොවේ නම් පහත කවරක් ද?)</span></div>
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
                                                <div class="col" style="margin-top: 10px;"><input type="radio" name="ict12" id="ict12_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict12_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Emails</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict12" id="ict12_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict12_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Google sheet</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict12" id="ict12_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict12_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Printed document</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict12" id="ict12_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict12_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Computer application or system</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">13). Mention the most appropriate data storage tools. (වඩාත්ම සුදුසු දත්ත ගබඩා මෙවලම් සඳහන් කරන්න.)</span></div>
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
                            <td style="color: rgb(0,0,0);width: 900px;">a) Hard disk&nbsp;</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict13_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"> </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict13_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) Cloud platforms&nbsp;</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict13_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict13_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">c) RAM</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict13_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict13_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>14). Why is it important to back up data to a removable storage device? (ඉවත් කළ හැකි ගබඩා උපාංගයකට දත්ත උපස්ථ(back up) කිරීම වැදගත් වන්නේ ඇයි?)</span></div>
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
                                                <div class="col"><input type="radio" name="ict14" id="ict14_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict14_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) To protect against loss of data in case of fire or theft (ගින්නක් හෝ සොරකම් වලදී දත්ත අහිමි වීමෙන් ආරක්ෂා වීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict14" id="ict14_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict14_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) To prevent access to sensitive data (සංවේදී දත්ත වලට ප්‍රවේශ වීම වැළැක්වීමට)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict14" id="ict14_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict14_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) To reduce the risk of viruses (වෛරස් අවදානම අවම කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict14" id="ict14_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict14_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of above (ඉහත සියල්ල)</label></div>
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
<div class="row" style="margin-right: 0px;margin-top: 1500px;margin-left: 850px;margin-bottom:50px">
    <div class="col"><a class="btn btn-primary" href="{{ route('operationallayer') }}" type="button" style="font-family: Poppins, sans-serif;color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
        <a class="btn btn-primary" href="{{ route('operationalIctPage03') }}" type="button" style="font-family: Poppins, sans-serif;width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</a></div>
</div>
@endsection
