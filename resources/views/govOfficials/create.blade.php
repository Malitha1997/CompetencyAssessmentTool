@extends('layouts.govofficialnavbar')

@section('content')
<style>
    /* Popup container - can be anything you want */
    .popup {
      position: relative;
      display:flex;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;

    }

    /* The actual popup */
    .popup .popuptext {
      visibility: hidden;
      width: 160px;
      background-color: #F5F5F5;
      width: 783px;
      text-align: center;
      border-radius: 6px;
      padding: 8px 0 10px;
      position:absolute;
      z-index: 1;
      bottom: 125%;
      left: 50%;
      margin-left: -80px;
    }

    .popup .popuptext .first{
        color: #ff0000
    }

    /* Popup arrow */
    .popup .popuptext::after {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: #555 transparent transparent transparent;
    }

    /* Toggle this class - hide and show the popup */
    .popup .show {
      visibility: visible;
      -webkit-animation: fadeIn 1s;
      animation: fadeIn 1s;
    }

    /* Add animation (fade in the popup) */
    @-webkit-keyframes fadeIn {
      from {opacity: 0;}
      to {opacity: 1;}
    }

    @keyframes fadeIn {
      from {opacity: 0;}
      to {opacity:1 ;}
    }
    </style>

<section style="height: 1250px;">
    <div class="container-fluid d-table float-none" data-aos="fade-down" data-aos-duration="1000" style="margin-top: 200px;background: #5f2b84;width: 1177px;height: 1100px;border-radius: 10px;">
        <h1 style="font-family: Poppins, sans-serif;text-align: center;font-weight: bold;margin-top: 10px;margin-left: 10px;padding-top: 30px;padding-bottom: 10px;">Register Now</h1>
        <form method="POST" action="{{ route('govofficials.store') }}">
            {{csrf_field()}}
        <div class="justify-content-center align-items-center" style="width: 1083px;height: 950px;background: #ffffff;font-family: Poppins, sans-serif;color: rgb(0,0,0);margin-top: 10px;margin-left: 33px;border-radius: 10px;border-width: 3px;border-color: rgb(255,106,42);"><span class="text-center text-lg-start text-xxl-center d-flex flex-row" style="color: #f01f75;margin-top: 8px;margin-left: 10px;padding-top: 30px;padding-left: 5px;margin-bottom: 10px;border-radius: 10px;">General Information</span>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-top: 20px;padding-bottom: 30px;">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;margin-bottom: 0;padding-bottom: 0;">Full Name</span></div>
                    </div>
                    <div class="row">
                        <div class="col"><input class="form-control-lg" id="full_name" name="full_name" type="text" placeholder="Enter Full Name" style="width: 500px;" value="{{ old('full_name')}}"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col"><span>Preferred Name</span></div>
                    </div>
                    <div class="row">
                        <div class="col"><input class="form-control-lg" id="preferred_name" name="preferred_name" type="text" placeholder="Enter Preferred Name" style="width: 500px;" value="{{ old('preferred_name')}}"></div>
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Designation</span></div>
                    </div>
                    <div class="row">
                        <div class="col"><input class="form-control-lg" id="designation" name="designation" type="text" placeholder="Enter Designation" style="width: 500px;" value="{{ old('designation')}}"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col"><span>Organization Name</span></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input class="form-control-lg" name="gov_org_name" type="text" placeholder="Select Organization Name" id="gov_org_name" style="width: 500px;" value="{{ old('gov_org_name')}}">
                            <input type="hidden" name="gov_org_name" id="gov_org_nameid" >
                            @if($errors->has('gov_org_name'))
                            <p class="text-danger">{{ $errors->first('gov_org_name') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Contact Number</span></div>
                    </div>
                    <div class="row">
                        <div class="col"><input class="form-control-lg" id="contact_number" name="contact_number" type="text" placeholder="Enter the contact Number" style="width: 500px;" value="{{ old('contact_number')}}"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col"><span>Email address</span></div>
                    </div>
                    <div class="row">
                        <div class="col"><input class="form-control-lg" id="email" name="email" type="text" placeholder="Enter the email address" style="width: 500px;" value="{{ old('email')}}"></div>
                    </div>
                </div>

            </div>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Employment Layer</span></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="employment_layer" name="employment_layer" style="width: 500px;margin-top:10px" value="{{ old('employment_layer')}}">
                            <option disabled style="font-color: #787474" selected>Select the Employment Layer</option>
                            <option value="top">Top and Second Tier Management</option>
                            <option value="cdio">Chief Digital Information Officer (CDIO)</option>
                            <option value="middle">Middle and Junior Management</option>
                            <option value="operational">Operational Staff</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Date of Birth</span></div>
                    </div>
                    <div class="row">
                        <div class="col"><input class="form-control-lg" id="date_of_birth" name="date_of_birth" type="date" style="width: 500px; color:#000000" value="{{ old('date_of_birth')}}"></div>
                    </div>

                </div>
            </div>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="color: #f01f75;font-family: Poppins, sans-serif">Social Media</span></div>
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;margin-left:20px">Linkedin</span></div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <input class="form-control-lg" name="linkedin" type="text" placeholder="Paste Here" id="gov_org_name" style="width: 845px;" value="{{ old('linkedin')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;margin-left:20px">Facebook</span></div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <input class="form-control-lg" name="facebook" type="text" placeholder="Paste Here" id="gov_org_name" style="width: 845px;" value="{{ old('facebook')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;margin-left:20px">Instagram</span></div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <input class="form-control-lg" name="instagram" type="text" placeholder="Paste Here" id="gov_org_name" style="width: 845px;" value="{{ old('instagram')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 50px;padding-bottom: 0px;padding-left: 750px;">
                <div class="col justify-content-center align-items-end align-content-end me-auto" style="height: 48px;"><button class="btn btn-primary btn-lg" type="reset" style="font-family: Poppins, sans-serif;padding-right: 11px;margin-right: 30px;background: rgb(255,255,255);color: rgb(238,110,17);border-color: rgb(238,110,17);">Cancel</button><button class="btn btn-primary btn-lg" type="submit" style="background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);font-family: Poppins, sans-serif;padding-left: 10px;text-align: center;border-color: rgb(254,80,57);">Submit</button></div>
            </div>
        </div>
    </form>
    </div>
</section>
<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $( "#gov_org_name" ).autocomplete({
        source: function( request, response ) {
          $.ajax({
            url: path,
            type: 'GET',
            dataType: "json",
            data: {
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },

        select: function (event, ui) {
            // Set selection
            var id = event.target.id
            $('#'+id).val(ui.item.label); // display the selected text
            $('#'+id+'id').val(ui.item.value); // save selected id to input
            //console.log(ui.item.value);
            return false;
        }
      });
</script>

@endsection
