@extends('layouts.govofficialusernavbar')

@section('content')
<!-- <style>
    [class*="col-1"] {
        width: 100%;
    }
</style> -->
<header style="margin-bottom: 300px;margin-top: 150px;">
    <p data-aos="fade-down" data-aos-duration="900" style="color: #1F2471;font-size: 36px;font-weight: bold;font-family: poppins;text-align: center;"><br>Welcome to the Digital Government Competency Framework !<br><br></p>
</header>
<div>
    <div class="container">
        <div class="row" style="margin-top: -280px;text-align: center;margin-left: 40px;">
            <div class="col-md-6">
                <p data-aos="fade-right" data-aos-duration="900" style="color: var(--bs-body-color);font-size: 24px;text-align: justify;margin-top: 20px;font-family: poppins;">This Digital Government Competency Framework is designed to empower government officials to assess their professional status through self-assessment questionnaires.<br>By using these questionnaires, you can evaluate your own competencies and gain valuable insights into your skills, knowledge, and abilities.<br><br></p>
            </div>
            <div class="col-md-6"><img data-aos="fade-left" data-aos-duration="900" src="{{ asset('img/Devices-rafiki(1) 1.png') }}" style="margin-top: -50px;width:100%;"></div>
        </div>
        <p data-aos="fade-down" data-aos-duration="900" style="color: #1F2471;font-size: 36px;font-weight: bold;font-family: poppins;text-align: center;"><br>Operational Staff - Competencies</p>
        <img data-aos="fade-down" data-aos-duration="900" data-aos-delay="100" src="{{ asset('img/Operational Staff-01 1.png') }}" width="100%" height="100%" style="text-align: center;margin-top: 60px;">
    </div>
</div>
<p data-aos="fade-in" data-aos-duration="1000" style="color: #1F2471;font-size: 36px;font-weight: bold;font-family: poppins;text-align: center;margin-top: 30px;"><br>Assessments</p>
<div class="container" style="width:150%">
    <div class="row" style="margin-top: 60px;text-align: center;border-color: var(--bs-body-color);width:100%">
        
        <div class="col-sm-5 left" id="card1" data-aos="fade-right" data-aos-duration="950" style="margin-left:5%;margin-right:2%;border-radius: 10px;box-shadow: 0px 0px 6px 1px #5F2B84;height: 100%;border-style: solid;border-color: #5F2B84;">
          
                <p style="color: #5F2B84;font-size: 24px;font-weight: bold;text-align: center;box-shadow: 0px 0px var(--bs-emphasis-color);margin-top: 2%;font-family: poppins;">ICT Competency Assessment</p><img src="{{ asset('img/10780254_19197640 1.png') }}" style="width: 60%;height: 60%;">
                <div class="card" style="text-align: center;width: 50%;margin-right: 5px;border-width:0px">
                    <div class="card-body" style="background: rgba(244,140,67,0.27);border-radius: 10px;width: 200%;height: 50%;text-align: center;">
                        <p class="card-text" style="text-align: justify;font-family: poppins;">Required knowledge and skills in ICT to enable more efficient, cost-effective, and participatory government, facilitate more convenient government services, allow greater public access to information, and make government more accountable to citizens.<br><br></p>
                        @if($ictDataExists && $digitalGovDataExists && $managementDataExists)
                        <a class="btn btn-primary" href="{{ route('operationalOveral') }}" type="button" style="width: 198px;height: 47px;font-family: Poppins, sans-serif;font-size: 18px;color: #ef4323;background: rgb(255,255,255);border-width: 2px;border-color: #ef4323;margin-right: 10px; border-radius: 10px;margin-top: -20px">View Results</a>
                        @elseif($ictDataExists) 
                        <a class="btn btn-primary" href="{{route('operationalIctResults')}}" type="button" style="width: 198px;height: 47px;font-family: Poppins, sans-serif;font-size: 18px;color: #ef4323;background: rgb(255,255,255);border-width: 2px;border-color: #ef4323;margin-right: 10px; border-radius: 10px;margin-top: -20px">View Results</a>
                        @else
                        <a class="btn btn-primary" href="{{ route('operationalIctPage01') }}" type="button" style="width: 178px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;), var(--bs-btn-disabled-color);font-weight: bold;font-size: 20px;border-style: none;font-family: poppins;margin-top: -20px">Get Started</a>
                        @endif
                    </div>
                </div>
            
        </div>
        <div class="col-sm-5 right" id="card1" data-aos="fade-left" data-aos-duration="950" style="margin-left:5%;border-radius: 10px;box-shadow: 0px 0px 6px 1px #5F2B84;height: 100%;border-style: solid;border-color: #5F2B84;">
         
                <p style="color: #5F2B84;font-size: 24px;font-weight: bold;text-align: center;box-shadow: 0px 0px var(--bs-emphasis-color);margin-top: 2%;font-family: poppins;">Digital Government Assessment</p><img src="{{ asset('img/10782817_19197324 1.png') }}"  style="width: 48%;height: 48%;">
                <div class="card" style="text-align: center;width: 50%;margin-right: 5px;border-width:0px">
                    <div class="card-body" style="background: rgba(244,140,67,0.25);border-radius: 10px;width: 200%;height:70%;text-align: center;">
                        <p class="card-text" style="text-align: justify;font-family: poppins;">Required knowledge and capabilities to drive an ICT-enabled transformation of the public sector. And making it possible to carry out the public sector’s tasks more efficiently and effectively.<br><br></p>
                        @if($ictDataExists && $digitalGovDataExists && $managementDataExists)
                        <a class="btn btn-primary" href="{{ route('operationalOveral') }}" type="button" style="width: 198px;height: 47px;font-family: Poppins, sans-serif;font-size: 18px;color: #ef4323;background: rgb(255,255,255);border-width: 2px;border-color: #ef4323;margin-right: 10px; border-radius: 10px;margin-top: -20px">View Results</a>
                        @elseif($digitalGovDataExists)
                        <a class="btn btn-primary" href="{{route('operationalDigitalgovernmentResults')}}" type="button" style="width: 198px;height: 47px;font-family: Poppins, sans-serif;font-size: 18px;color: #ef4323;background: rgb(255,255,255);border-width: 2px;border-color: #ef4323;margin-right: 10px; border-radius: 10px">View Results</a>
                        @elseif($opChangeManagementDataExists)
                        <a class="btn btn-primary" href="{{route('operationalDigitalGovernmentPage02')}}" type="button" style="width: 178px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;), var(--bs-btn-disabled-color);font-weight: bold;font-size: 20px;border-style: none;font-family: poppins;margin-top: -10px">Get Started</a>
                        @elseif($opCollaborationDataExists)
                        <a class="btn btn-primary" href="{{route('operationalDigitalGovernmentPage03')}}" type="button" style="width: 178px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;), var(--bs-btn-disabled-color);font-weight: bold;font-size: 20px;border-style: none;font-family: poppins;margin-top: -10px">Get Started</a>
                        @elseif($opOrientationDataExists)
                        <a class="btn btn-primary" href="{{route('operationalDigitalGovernmentPage04')}}" type="button" style="width: 178px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;), var(--bs-btn-disabled-color);font-weight: bold;font-size: 20px;border-style: none;font-family: poppins;margin-top: -10px">Get Started</a>
                        @elseif($opQualityManagementDataExists)
                        <a class="btn btn-primary" href="{{route('operationalDigitalGovernmentPage05')}}" type="button" style="width: 178px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;), var(--bs-btn-disabled-color);font-weight: bold;font-size: 20px;border-style: none;font-family: poppins;margin-top: -10px">Get Started</a>
                        @else
                        <a class="btn btn-primary" href="{{route('operationalDigitalGovernmentPage01')}}" type="button" style="width: 178px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;), var(--bs-btn-disabled-color);font-weight: bold;font-size: 20px;border-style: none;font-family: poppins;margin-top: -10px">Get Started</a>
                        @endif
                    </div>
                </div>
            
        </div>
    </div>
</div>
<div class="row" style="margin-top: 100px;margin-bottom:50px">
    <div class="container" data-aos="fade-up" data-aos-duration="950" style="border-radius: 10px;box-shadow: 0px 0px 6px 1px #5F2B84;width: 50%;height: 75%;border-style: solid;border-color: #5F2B84;text-align: center;">
        <div>
            <p style="color: #5F2B84;font-size: 24px;font-weight: bold;text-align: center;box-shadow: 0px 0px var(--bs-emphasis-color);margin-top: 20px;font-family: poppins;">Management Assessment</p><img src="{{ asset('img/12146032_Wavy_Gen-03_Single-07 1.png ')}}" style="width: 50%;height: 50%;">
            <div class="card" id="card3" style="text-align: center;width: 50%;margin-right: 5px;border-width:0px">
                <div class="card-body" style="background: rgba(244,140,67,0.25);border-radius: 10px;width: 200%;height:50%;text-align: center;margin-left: -2%;margin-top: -16px;">
                    <p class="card-text" style="text-align: justify;font-family: poppins;">Are the skills, habits, motives, knowledge, and attitudes necessary to successfully manage people or the knowledge and skills that contribute to workplace productivity<br><br><br></p>
                    @if($ictDataExists && $digitalGovDataExists && $managementDataExists)
                    <a class="btn btn-primary" href="{{ route('operationalOveral') }}" type="button" style="width: 198px;height: 47px;font-family: Poppins, sans-serif;font-size: 18px;color: #ef4323;background: rgb(255,255,255);border-width: 2px;border-color: #ef4323;margin-right: 10px; border-radius: 10px;margin-top: -20px">View Results</a>
                    @elseif($managementDataExists)
                    <a class="btn btn-primary" href="{{route('operationalManagementResults')}}" type="button" style="width: 198px;height: 47px;font-family: Poppins, sans-serif;font-size: 18px;color: #ef4323;background: rgb(255,255,255);border-width: 2px;border-color: #ef4323;margin-right: 10px; border-radius: 10px;margin-top: -20px">View Results</a>
                    @elseif($opCommunicationDataExists)
                    <a class="btn btn-primary" href="{{route ('operationalManagementPage02') }}" type="button" style="width: 178px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;), var(--bs-btn-disabled-color);font-weight: bold;font-size: 20px;border-style: none;font-family: poppins;">Get Started</a>
                    @elseif($opWorkplaceManagementDataExists )
                    <a class="btn btn-primary" href="{{route ('operationalManagementPage03') }}" type="button" style="width: 178px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;), var(--bs-btn-disabled-color);font-weight: bold;font-size: 20px;border-style: none;font-family: poppins;">Get Started</a>
                    @elseif($opStakeholderManagementDataExists )
                    <a class="btn btn-primary" href="{{route ('operationalManagementPage04') }}" type="button" style="width: 178px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;), var(--bs-btn-disabled-color);font-weight: bold;font-size: 20px;border-style: none;font-family: poppins;">Get Started</a>
                    @elseif($opTeamworkDataExists )
                    <a class="btn btn-primary" href="{{route ('operationalManagementPage05') }}" type="button" style="width: 178px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;), var(--bs-btn-disabled-color);font-weight: bold;font-size: 20px;border-style: none;font-family: poppins;">Get Started</a>
                    @else
                    <a class="btn btn-primary" href="{{route ('operationalManagementPage01') }}" type="button" style="width: 178px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;), var(--bs-btn-disabled-color);font-weight: bold;font-size: 20px;border-style: none;font-family: poppins;">Get Started</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
