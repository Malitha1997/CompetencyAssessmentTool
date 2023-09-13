@extends('layouts.govofficialusernavbar')

@section('content')

<section data-aos="fade-down" style="height: 2750px;text-align: center;">
    <div data-aos="zoom-in" data-aos-duration="800" data-aos-delay="50" style="margin-top: 150px;width: 1268px;height: 494px;border: 6px solid #5F2B84;border-radius: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xxl-4"><img src="{{ asset('img/Stand out-amico 1.png') }}" width="490" height="481"></div>
                <div class="col-md-6 col-xxl-7">
                    <div class="row">
                        <div class="col-xxl-12" style="text-align: center;margin-top: 20px;"><span style="color: #1F2471;font-family: poppins;font-size: 32px;font-weight: bold;text-align: center;"><br>Successfully completed Digital Government Assessment<br><br></span></div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-12" style="margin-top: -50px;"><span style="color: var(--bs-emphasis-color);font-size: 20px;font-family: poppins;"><br>You have successfully completed Digital Government Self&nbsp; Assessment.<br><br></span></div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 20px;"><button class="btn btn-primary" type="button" style="width: 203px;height: 55px;font-size: 20px;font-family: poppins;border: 4px solid #EF4323;color: #EF4323;background: var(--bs-btn-disabled-color);border-radius: 10px;">View Results</button><button class="btn btn-primary" type="button" style="width: 203px;height: 55px;margin-left: 40px;font-size: 20px;font-family: Poppins;background: url(&quot;{{ asset('img/Screenshot (561) 6.png') }}&quot;), var(--bs-body-bg);border-style: none;">Download</button></div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col" style="margin-top: 40px;"><a href="{{ route('userHome') }}" style="font-family: poppins;font-size: 20px;color: #5F2B84;">Back To User Profile</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-down" data-aos-duration="800" style="margin-top: 50px;"><span style="color: #1F2471;font-size: 24px;font-family: poppins;font-weight: bold;text-align: center;"><br>Results of the Digital Government Self Assessment<br><br></span>
        <div class="container" style="width: 920px;height: 535px;text-align: center;margin-top: 50px;border-radius: 10px;box-shadow: 0px 0px 7px 4px #5F2B84;border-style: none;border-color: var(--bs-emphasis-color);"><img src="{{ asset('img/Group 2d83.png') }}" style="margin-top: 70px;width: 600px;height: 400px;"></div>
    </div>
    <div class="table-responsive" style="margin-top: 100px;margin-left: 50px;">
        <table class="table">
            <thead style="background: var(--bs-table-border-color);">
                <tr style="background: var(--bs-table-border-color);height: 60px;">
                    <th style="width: 400px;font-size: 20px;font-family: poppins;background: var(--bs-table-border-color);border-left-style: solid;border-left-color: var(--bs-table-striped-color);"><br>Competency Area<br><br></th>
                    <th style="width: 300px;font-size: 20px;font-family: poppins;background: var(--bs-table-border-color);border-left-color: var(--bs-table-striped-color);"><br>Proficiency<br><br></th>
                    <th style="font-size: 20px;font-family: poppins;background: var(--bs-table-border-color);border-left-style: solid;border-left-color: var(--bs-table-color);"><br>Recommendations<br><br></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-family: poppins;"><br><br>Change Management<br><br></td>
                    <td style="width: 300px;font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);">67%</td>
                    <td style="font-family: poppins;text-align: left;">Tools techniques and trends that enables digital transformation on public services Emerging ICT technologies<br><br>Perform tasks according to the ICT plans of the organization<br><br>Digital Government Transformation<br><br>Internet Application programs<br><br></td>
                </tr>
                <tr style="font-family: poppins;">
                    <td style="font-family: poppins;"><br><br>Collaboration and Partnership</td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);">57%</td>
                    <td style="font-family: poppins;text-align: left;box-shadow: 0px 0px;">Information security,&nbsp;Data protection and privacy<br><br>Tools and techniques available to retrieve data<br><br>Storage and maintenance<br><br>Digital media and technologies</td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><br>Results Orientation<br><br></td>
                    <td style="background: var(--bs-warning-bg-subtle);">86%</td>
                    <td style="text-align: left;">Impact of technology use<br><br>Cyber risks<br><br>Cyber-threats<br><br>Digital Empathy<br><br>Digital footprint<br><br>Digital media<br><br>Privacy Management</td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><br><br>Quality Management<br><br></td>
                    <td style="background: var(--bs-warning-bg-subtle);">86%</td>
                    <td style="text-align: left;"><br>Digital footprint<br><br>Digital media<br><br>Privacy Management</td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><br><br><br>Execute Digital Government Initiatives<br><br></td>
                    <td style="background: var(--bs-warning-bg-subtle);">86%</td>
                    <td style="text-align: left;"><br>Incident Management<br><br>Digital transformation and service innovation<br><br>IT configuration management</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

@endsection