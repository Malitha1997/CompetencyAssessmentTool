@extends('layouts.govofficialusernavbar')

@section('content')
<section data-aos="fade-down" style="height: 750px;">
    <div class="container" style="margin-top: 50px;text-align:center;margin-bottom:20px">
        <span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment - ICT (Operational Staff)</span>
    </div>
    <div class="container align-content-center align-self-center" style="width: 1358px;height: 800px;margin-top: 10px;">
        <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
            <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #E52F72;margin-top: -48px;border-radius: 5px;"><br>Competency Area: ICT in Workplace<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br>Competency Area Description: Productively perform tasks in the workplace by using ICT skills and knowledge in a digital <br>government setting.&nbsp; (නිපුණතා අංශයේ විස්තරය: ඩිජිටල් රාජ්‍ය පසුබිමක් තුළ තොරතුරු හා සන්නිවේදන තාක්ෂණ කුසලතා සහ දැනුම භාවිතා කරමින් රැකියා ස්ථානයේ කාර්ය සාධනය ඇති කිරීම.&nbsp;<br><br><br></span></div>
        </div>
        <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 3480px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">1) What are the expected benefits of using ICT in public service delivery&nbsp;(Mark as True/ False)?<br>&nbsp; &nbsp; රාජ්‍ය සේවා සැපයීමේදී තොරතුරු හා සන්නිවේදන තාක්ෂණ භාවිතා කිරීමෙන් අපේක්ෂා කරන ප්‍රතිලාභ මොනවාද?</span></div>
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
                            <td style="color: rgb(0,0,0);width: 900px;">a) Can reach a larger audience in a short period.&nbsp; <br>&nbsp; &nbsp; &nbsp;(කෙටි කාලයක් තුළ විශාල ප්‍රේක්ෂක පිරිසක් වෙත ළඟා විය හැක.)</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict1_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"> </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict1_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) Reduce the burden of manual documentation and finding manual files <br>&nbsp; &nbsp; &nbsp;(අතින් සිදුකරන ලියකියවිලිවල&nbsp;සහ එම&nbsp;ලිපි ගොනු&nbsp;සොයා ගැනීමේ&nbsp;බර(ගැටලු) අඩු කිරීම)</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict1_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict1_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">c) It reduces efficiency <br>&nbsp; &nbsp; (එය කාර්යක්ෂමතාව අඩු කරයි) </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict1_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict1_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
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
                                                <div class="col" style="margin-top: 10px;"><input type="radio" name="ict2" id="ict2_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict2_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Edge Computing, Machine Learning, MS-DOS</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict2" id="ict2_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict2_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Blockchain, Artificial Intelligence, Robotics</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict2" id="ict2_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict2_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) IoT, Zoom, Facebook</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict2" id="ict2_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="ict2_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>
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
                            <td style="color: rgb(0,0,0);width: 900px;">a) It is effective when government departments work on individual requirements than&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;having an ICT plan. <br>&nbsp; &nbsp; (රජයේ දෙපාර්තමේන්තු තොරතුරු හා සන්නිවේදන තාක්ෂණ සැලැස්මක් තිබීමට වඩා පුද්ගල අවශ්‍යතා මත වැඩ&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; කරන විට එය ඵලදායී වේ)</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict3_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"> </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict3_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) Government departments can end up with inflexible and costly ICT solutions if it&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;operates without a proper ICT plan <br>&nbsp; &nbsp; (රජයේ දෙපාර්තමේන්තු නිසි තොරතුරු හා සන්නිවේදන තාක්ෂණ සැලැස්මක් නොමැතිව ක්‍රියාත්මක වුවහොත්&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;නම්‍යශීලී සහ මිල අධික තොරතුරු හා සන්නිවේදන තාක්ෂණ විසඳුම් සමඟ අවසන් විය හැක)</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict3_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict3_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">c) Effective use of an ICT plan can improve the efficiency of a government organization&nbsp; &nbsp; &nbsp; (ICT සැලැස්මක් ඵලදායී ලෙස භාවිතා කිරීමෙන් රාජ්ය ආයතනයක කාර්යක්ෂමතාව වැඩි දියුණු කළ හැකිය)</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict3_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict3_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
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
                                                <div class="col"><input type="radio" name="ict4" id="ict4_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict4_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Stimulating economic growth (ආර්ථික වර්ධනය උත්තේජනය කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict4" id="ict4_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict4_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Creating a common ICT infrastructure for everyone&nbsp;(සැමට පොදු ICT යටිතල පහසුකම් නිර්මාණය කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict4" id="ict4_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict4_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Enable and deliver change (සබල කිරීම සහ වෙනසක් ලබා දීම</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict4" id="ict4_4" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict4_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) None of the above (ඉහත කිසිවක් නොවේ)</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>5) Identify the services that can be purely internet-based?&nbsp;<br>(සම්පූර්ණයෙන්ම අන්තර්ජාලය පදනම් කර ගත හැකි සේවාවන් හඳුනා ගන්න?)</span></div>
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
                                                <div class="col"><input type="radio" name="ict5" id="ict5_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict5_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Tax compliance system (බදු අනුකූලතා පද්ධතිය)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict5" id="ict5_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict5_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Land management systems</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict5" id="ict5_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict5_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Education and training</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict5" id="ict5_4" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict5_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>6) Mark the incorrect answer ? (වැරදි පිළිතුර ලකුණු කරන්න)&nbsp;<br><br></span></div>
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
                                                <div class="col"><input type="radio" name="ict6" id="ict6_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict6_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Google calendar is used saving documents (Google calendar - ලියකියවිලි&nbsp;සුරක්ෂිත කිරීම සදහා භාවිතා කරන ලදී)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict6" id="ict6_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict6_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Drop Box is used for sharing documents (Drop Box- ලේඛන හුවමාරු කර ගැනීම සඳහා භාවිතා වේ)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict6" id="ict6_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict6_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) WhatsApp is used for networking (WhatsApp - ජාලකරණය සඳහා භාවිතා වේ)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict6" id="ict6_4" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict6_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) OneDrive is used for document saving (OneDrive - ලියකියවිලි&nbsp;සුරක්ෂිත කිරීම සදහා භාවිතා&nbsp;වේ)</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>7) Why it is important to have an Incident Management System? (සිදුවීම් කළමනාකරණ පද්ධතියක් තිබීම වැදගත් වන්නේ ඇයි?)</span></div>
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
                                                <div class="col"><input type="radio" name="ict7" id="ict7_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict7_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Avoid delays (ප්‍රමාදයන් වළක්වා ගැනීමට)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict7" id="ict7_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict7_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Establish a team to handle the incidents (සිදුවීම් හැසිරවීමට කණ්ඩායමක් පිහිටුවීමට)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict7" id="ict7_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict7_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Report incidents (සිදුවීම් වාර්තා කිරීමට)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict7" id="ict7_4" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict7_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above (ඉහත සියල්ල)</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>8) Which one is not a benefit of Digital Government Services? (ඩිජිටල් රාජ්‍ය සේවාවන්හි ප්‍රතිලාභයක් නොවන්නේ කුමක්ද?)</span></div>
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
                                                <div class="col"><input type="radio" name="ict8" id="ict8_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict8_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Better online user convenience for citizens (පුරවැසියන් සඳහා වඩා හොඳ සබැඳි පරිශීලක පහසුව)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict8" id="ict8_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict8_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Increased public participation (මහජන සහභාගීත්වය වැඩි වීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict8" id="ict8_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict8_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Improved internal efficiency and productivity (අභ්‍යන්තර කාර්යක්ෂමතාව සහ ඵලදායිතාව වැඩි දියුණු කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict8" id="ict8_4" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px"><label class="form-label" for="ict8_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Less innovation (අඩු නවෝත්පාදනය)</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>9) How you can maintain your computer systems and software consistently? <br>&nbsp; &nbsp; (ඔබේ පරිගණක පද්ධති සහ මෘදුකාංග අඛණ්ඩව පවත්වාගෙන යා හැක්කේ කෙසේද?)</span></div>
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
                                                <div class="col"><input type="radio" name="ict9" id="ict9_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px;"><label class="form-label" for="ict9_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Updating Software appropriately (සුදුසු පරිදි මෘදුකාංග යාවත්කාලීන කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict9" id="ict9_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px;"><label class="form-label" for="ict9_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;b) Auditing the software requirements and configurations of computers from time to time (පරිගණකවල මෘදුකාංග&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; අවශ්‍යතා සහ වින්‍යාසයන් වරින් වර විගණනය කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict9" id="ict9_3" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px;"><label class="form-label" for="ict9_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;c) Upgrading the software and hardware configuration at least once a year (අවම වශයෙන් වසරකට වරක්වත් මෘදුකාංග සහ&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;දෘඪාංග වින්‍යාසය උත්ශ්‍රේණි(upgrade) කිරීම)</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict9" id="ict9_4" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;margin-left: 50px;"><label class="form-label" for="ict9_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above (ඉහත සියල්ලම)</label></div>
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
<div class="row" style="margin-bottom:100px;margin-right: 0px;margin-top: 3200px;margin-left: 850px;font-family: Poppins, sans-serif;">
    <div class="col"><a class="btn btn-primary" href="{{ route('operationallayer') }}" type="button" style="color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
        <a class="btn btn-primary" type="button" href="{{ route('operationalIctPage02') }}" style="width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</a></div>
</div>


@endsection
