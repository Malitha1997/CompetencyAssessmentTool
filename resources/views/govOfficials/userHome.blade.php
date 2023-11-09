@extends('layouts.govofficialusernavbar')

@section('content')

<body style="width: auto;border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <section data-aos="fade-up" data-aos-duration="1000" >
        <div class="container container-expand-sm" style="margin-top: 150px;margin-bottom: 20px;border-radius: 0px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col" style="width: auto;margin-top: 20px">
                    <h1 style="font-family: Poppins, sans-serif;color: #1f2471;font-weight: bold;text-align: center;margin-top: 5px;">User Profile</h1>
                    <div class="row" style="margin-top: 30px;margin-bottom: 25px;">
                        <div class="col"><span class="general" data-aos="fade-down" style="color: #f01f75;font-weight: bold;font-family: Poppins, sans-serif;">General Information</span></div>
                    </div>
                    <div class="row" id="row" style="margin-bottom: 25px;">
                        <div class="col">
                            <picture><img id="logo" data-aos="fade-down" src="{{ asset('img/User.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><span class="info" data-aos="fade-down"  style="font-family: Poppins, sans-serif;color: rgb(0,0,0);margin-top: 0px;margin-bottom: 0px;">Full name</span>
                        </div>
                        <div class="col" style="text-align: left"><input class="details" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;" value="{{Auth::user()->govofficial->full_name}}" readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col">
                            <picture><img id="logo" data-aos="fade-down" src="{{ asset('img/Leader.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><span class="info" data-aos="fade-down" style="font-family: Poppins, sans-serif;color: rgb(0,0,0);margin-top: 0px;">Preferred Name</span>
                        </div>
                        <div class="col" style="text-align: left;"><input class="details" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;" value="{{Auth::user()->govofficial->preferred_name}}" readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col">
                            <picture><img id="logo" data-aos="fade-down" src="{{ asset('img/Group.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><span class="info" data-aos="fade-down" style="font-family: Poppins, sans-serif;color: rgb(0,0,0);margin-top: 0px;">Designation</span>
                        </div>
                        <div class="col" style="text-align: left;"><input  class="details" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;" value="{{Auth::user()->govofficial->designation}}"  readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col">
                            <picture><img id="logo" data-aos="fade-down" src="{{ asset('img/Building.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><span class="info" data-aos="fade-down" style="font-family: Poppins, sans-serif;color: rgb(0,0,0);margin-top: 0px;">Organization Name</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="details" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;" value="{{Auth::user()->govofficial->govorganizationname->gov_org_name}}" readonly></div>
                    </div>
                    <div class="row" data-aos="fade-down" style="margin-bottom: 25px;">
                        <div class="col">
                            <picture><img id="logo" data-aos="fade-down" src="{{ asset('img/Viber.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><span class="info" data-aos="fade-down" style="font-family: Poppins, sans-serif;color: rgb(0,0,0);margin-top: 0px;">Contact Number</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="details" type="text" style="border: 0px;font-family: Poppins;text-align: left;" value="{{Auth::user()->govofficial->contact_number}}" readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col">
                            <picture><img id="logo" data-aos="fade-down" src="{{ asset('img/Email.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><span class="info" data-aos="fade-down" style="font-family: Poppins, sans-serif;color: rgb(0,0,0);margin-top: 0px;">E-mail address</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="details" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;" value="{{Auth::user()->govofficial->email}}" readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col">
                            <picture><img id="logo" data-aos="fade-down" src="{{ asset('img/Menu.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><span class="info" data-aos="fade-down" style="font-family: Poppins, sans-serif;color: rgb(0,0,0);margin-top: 0px;">Employment Layer</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="details" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;" value="{{ucfirst(Auth::user()->govofficial->employment_layer)}} Layer" readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col">
                            <picture><img id="logo" data-aos="fade-down" src="{{ asset('img/Calendar.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><span class="info" data-aos="fade-down" style="font-family: Poppins, sans-serif;color: rgb(0,0,0);margin-top: 0px;">Date of Birthday</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="details" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;" value="{{Auth::user()->govofficial->date_of_birth}}" readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col">
                            <picture><img id="logo" data-aos="fade-down" src="{{ asset('img/Email.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><span class="info" data-aos="fade-down" style="font-family: Poppins, sans-serif;color: rgb(0,0,0);margin-top: 0px;">Social Media Links</span>
                        </div>

                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col">
                            <picture><img id="logo" data-aos="fade-down" src="{{ asset('img/Linkedin.png') }}" style="margin-left: 20px;margin-right: 10px;" width="25" height="25"></picture><span class="info" data-aos="fade-down" style="font-family: Poppins, sans-serif;color: rgb(0,0,0);margin-top: 0px;margin-left: 20px;">LinkedIn</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="details" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;" value="{{Auth::user()->govofficial->linkedin}}" readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col">
                            <picture><img id="logo" data-aos="fade-down" src="{{ asset('img/Facebook.png') }}" style="margin-left: 20px;margin-right: 10px;" width="25" height="25"></picture><span class="info" data-aos="fade-down" style="font-family: Poppins, sans-serif;color: rgb(0,0,0);margin-top: 0px;margin-left: 20px;">Facebook</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="details" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;" value="{{Auth::user()->govofficial->facebook}}" readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col">
                            <picture><img id="logo" data-aos="fade-down" src="{{ asset('img/Instagram.png') }}" style="margin-left: 20px;margin-right: 10px;" width="25" height="25"></picture><span class="info" data-aos="fade-down" style="font-family: Poppins, sans-serif;color: rgb(0,0,0);margin-top: 0px;margin-left: 20px;">Instagram</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="details" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;" value="{{Auth::user()->govofficial->instagram}}" readonly></div>
                    </div>

                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col" style="margin-top: 50px;text-align: right;">

                            <a class="btn btn-primary" data-aos="fade-down" type="button" style="font-family: Poppins, sans-serif;color: #ef4323;background: rgb(255,255,255);border-width: 2px;border-color: #ef4323;margin-right: 10px; border-radius: 10px">View Results</a>
                            <a class="btn btn-primary" data-aos="fade-down" type="button" style="font-family: Poppins, sans-serif;border-width: 0px;background: url(&quot;{{ asset('img/Screenshot (561) 7.png') }}&quot;);border-radius: 10pxmargin-right: 80px;">Edit Profile</a></div>
                    </div>
                </div>
                <div class="img" style="width :450.3px;background: url(&quot;{{ asset('img/Screenshot (560) 1(2).png') }}&quot;);">

                    <h1 class="h4" data-aos="fade-down" style="font-family: Poppins, sans-serif;text-align: center;font-size: 24px;margin-top: 500px;">Click on the 'Assessments' button to start the <br>Competency Assessment.&nbsp;</h1>

                    <div class="row" style="margin-top: 90px;">
                        <div class="col" style="text-align: center;">
                        @if($layer=='middle')
                            <a class="btn btn-primary" href="{{route('middlelayer')}}" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;"  >Assessments</a>
                        @elseif($layer=='operational')
                            <a class="btn btn-primary" href="{{route('operationallayer')}}" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;"  >Assessments</a>
                        @elseif($layer=='top')    
                            <a class="btn btn-primary" href="{{route('toplayer')}}" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;"  >Assessments</a>
                        @endif
                        </div>
                    <div class="row" style="margin-top: 50px;">
                        {{--  <div class="col" style="text-align: center;"><button class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;), url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;" disabled>Deep Assessment</button></div>  --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection
