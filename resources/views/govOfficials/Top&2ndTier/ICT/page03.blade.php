@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeTopDigitalCitizenship') }}">
    {{csrf_field()}}
<section data-aos="fade-down" style="height: 750px;">
    <div class="container" style="margin-top: 50px;text-align:center;margin-bottom:50px">
        <span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment - ICT (Operational Staff)</span>
    </div>
    <div class="container align-content-center align-self-center" style="width: 1358px;height: 600px;margin-top: 10px;">
        <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
            <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #E52F72;margin-top: -48px;border-radius: 5px;"><br>Competency Area: Digital Citizenship (නිපුණතා&nbsp;අංශය - ඩිජිටල් පුරවැසිභාවය)<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br>Competency Area Description: Use of digital technology and media in safe responsible and ethical ways.&nbsp; (නිපුණතා අංශයේ විස්තරය: &nbsp;වගකිවයුතු සහ සදාචාරාත්මක ආකාරයෙන් ආරක්ෂිතව&nbsp;ඩිජිටල් තාක්ෂණය සහ&nbsp;මාධ්‍ය භාවිතය.)&nbsp;<br><br><br></span></div>
        </div>
        <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 2980px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">6) What are the correct steps to follow when you log in to your email account from a public device? (ඔබ පොදු උපාංගයකින් ඔබගේ විද්‍යුත් තැපැල් ගිණුමට ලොග් වූ විට අනුගමනය කළ යුතු නිවැරදි පියවර මොනවාද?)</span></div>
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
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict6_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"> </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict6_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="2"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) Deleting the internet history and saved passwords after using the device (උපාංගය භාවිතා කිරීමෙන් පසු අන්තර්ජාල ඉතිහාසය සහ සුරකින ලද මුරපද මකා දැමීම)</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict6_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="2"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict6_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">c) Changing the password after using it if you feel unsafe (ඔබට අනාරක්ෂිත බවක් හැඟේ නම් එය භාවිතා කිරීමෙන් පසු මුරපදය වෙනස් කිරීම)</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict6_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="2"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict6_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">7) What are the correct steps to follow when you log in to your email account from a public device? (ඔබ පොදු උපාංගයකින් ඔබගේ විද්‍යුත් තැපැල් ගිණුමට ලොග් වූ විට අනුගමනය කළ යුතු නිවැරදි පියවර මොනවාද?)</span></div>
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
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict7_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"> </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict7_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="2"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) Deleting the internet history and saved passwords after using the device (උපාංගය භාවිතා කිරීමෙන් පසු අන්තර්ජාල ඉතිහාසය සහ සුරකින ලද මුරපද මකා දැමීම)</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict7_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="2"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict7_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">c) Changing the password after using it if you feel unsafe (ඔබට අනාරක්ෂිත බවක් හැඟේ නම් එය භාවිතා කිරීමෙන් පසු මුරපදය වෙනස් කිරීම)</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict7_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="2"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict7_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top: -20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>8). Why is it important to have a strong password?(ශක්තිමත් මුරපදයක් තිබීම වැදගත් වන්නේ ඇයි?)</span></div>
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
                                                <div class="col" style="margin-top: 10px;"><input type="radio" name="ict8" id="ict8_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict8_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) It will prevent cyber crimes(එය සයිබර් අපරාධ වලක්වනු ඇත)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict8" id="ict8_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict8_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Reduce the risk of hacking (අනවසරයෙන් ඇතුළුවීමේ අවදානම අඩු කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict8" id="ict8_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict8_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) It is not easy to guess (එය අනුමාන කිරීම පහසු නැත)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict8" id="ict8_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="4"><label class="form-label" for="ict8_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above (ඉහත සියල්ල)</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>9). Which of the below is not a precautionary action to be safe on the internet? (අන්තර්ජාලයේ ආරක්ෂිතව සිටීම සඳහා පහත සඳහන් දේවලින් පූර්වාරක්ෂාව නොවන්නේ කුමක්ද?)</span></div>
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
                                                <div class="col" style="margin-top: 10px;"><input type="radio" name="ict9" id="ict9_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label"for="ict9_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Never click on links that come from unknown sources (නොදන්නා මූලාශ්‍රවලින් එන සබැඳි කිසිවිටෙක ක්ලික් නොකිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict9" id="ict9_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label"for="ict9_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Careful when receiving emails from unknown senders (නොදන්නා අයගෙන්&nbsp;ඊමේල් ලැබෙන විට ප්‍රවේශම් වීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict9" id="ict9_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label"for="ict9_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Install a basic security app on the computer (පරිගණකයේ මූලික ආරක්ෂක යෙදුමක් ස්ථාපනය කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict9" id="ict9_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="4"><label class="form-label"for="ict9_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Restart the computer (පරිගණකය නැවත පණ ගැන්වීම)</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>10) What is the correct way to respond when you witness a targeted attack on a person you on social media? (සමාජ මාධ්‍ය තුළ ඔබ පුද්ගලයෙකුට ඉලක්ක කරගත් ප්‍රහාරයක් දුටු විට ප්‍රතිචාර දැක්විය යුතු නිවැරදි ක්‍රමය කුමක්ද?)</span></div>
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
                                                <div class="col" style="margin-top: 10px;"><input type="radio" name="ict10" id="ict10_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict10_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Sharing it enables that person to see it on the internet (එය බෙදාගැනීමෙන් එම පුද්ගලයාට එය අන්තර්ජාලයේ දැකීමට හැකියාව ලැබේ)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict10" id="ict10_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="4"><label class="form-label" for="ict10_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Reporting the content to avoid it being spread further (එය තවදුරටත් පැතිරීම වැළැක්වීම සඳහා අන්තර්ගතය වාර්තා කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict10" id="ict10_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict10_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Ignore it (එය නොසලකා හැරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict10" id="ict10_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict10_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Informing that person over the phone (එම පුද්ගලයාට දුරකථනයෙන් දැනුම් දීම)</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>11) What is the correct way to respond when you witness a targeted attack on a person you on social media? (සමාජ මාධ්‍ය තුළ ඔබ පුද්ගලයෙකුට ඉලක්ක කරගත් ප්‍රහාරයක් දුටු විට ප්‍රතිචාර දැක්විය යුතු නිවැරදි ක්‍රමය කුමක්ද?)</span></div>
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
                                                <div class="col" style="margin-top: 10px;"><input type="radio" name="ict11" id="ict11_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict11_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Sharing it enables that person to see it on the internet (එය බෙදාගැනීමෙන් එම පුද්ගලයාට එය අන්තර්ජාලයේ දැකීමට හැකියාව ලැබේ)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict11" id="ict11_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="4"><label class="form-label" for="ict11_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Reporting the content to avoid it being spread further (එය තවදුරටත් පැතිරීම වැළැක්වීම සඳහා අන්තර්ගතය වාර්තා කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict11" id="ict11_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict11_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Ignore it (එය නොසලකා හැරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict11" id="ict11_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict11_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Informing that person over the phone (එම පුද්ගලයාට දුරකථනයෙන් දැනුම් දීම)</label></div>
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
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict12_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"> </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict12_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="2"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) Deleting the internet history and saved passwords after using the device (උපාංගය භාවිතා කිරීමෙන් පසු අන්තර්ජාල ඉතිහාසය සහ සුරකින ලද මුරපද මකා දැමීම)</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict12_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="2"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict12_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">c) Changing the password after using it if you feel unsafe (ඔබට අනාරක්ෂිත බවක් හැඟේ නම් එය භාවිතා කිරීමෙන් පසු මුරපදය වෙනස් කිරීම)</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict12_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="2"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict12_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>13) _______________deals with the protection of an individual’s information, while using the Internet. (_______________ අන්තර්ජාලය භාවිතා කරන අතරතුර, පුද්ගලයෙකුගේ තොරතුරු ආරක්ෂා කිරීම සම්බන්ධයෙන් කටයුතු කරයි.)</span></div>
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
                                                <div class="col"><input type="radio" name="ict13" id="ict13_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict13_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Digital Literacy (ඩිජිටල් සාක්ෂරතාව)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict13" id="ict13_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="5"><label class="form-label" for="ict13_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Digital privacy (ඩිජිටල් පෞද්ගලිකත්වය)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict13" id="ict13_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict13_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Digital adoption (ඩිජිටල් අනුවර්තනය වීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict13" id="ict13_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict13_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Digital transformation (ඩිජිටල් සංවර්තනය )</label></div>
                                            </div>
                                            <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
                                            <input class="form-control" type="hidden" id="totTopIctInWorkplace" name="totTopIctInWorkplace" value="{{ $totTopIctInWorkplace }}" readonly>
                                            <input class="form-control" type="hidden" id="totTopInformationManagement" name="totTopInformationManagement" value="{{ $totTopInformationManagement }}" readonly>
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
<div class="row" style="margin-right: 0px;margin-top: 2700px;margin-left: 850px;font-family: Poppins, sans-serif;margin-bottom:50px">
    <div class="col"><a class="btn btn-primary" href="{{ route('toplayer') }}" "type="button" style="color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
        <button class="btn btn-primary" type="submit" style="width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</button></div>
</div>
</form>
@endsection
