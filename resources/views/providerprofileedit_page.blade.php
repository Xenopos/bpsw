


 
@extends('homepage_heading')
<html lang="en">
          <head>
            <meta charset="utf-8">
          
            <title>Bicol Car Service Providers</title>
            <meta name="description" content="Figma htmlGenerator">
            <meta name="author" content="htmlGenerator">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="{{ asset('css/providerprofileedit_page_style.css') }}">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
            
            <style>
              /*
                Figma Background for illustrative/prqeview purposes only.
                You can remove this style tag with no consequence
              */
              body {background: #E5E5E5; }
            </style>
          
          </head>
          
<body>
<div class=provider_edit_profile_view_page_101_162>
  <div class="rectangle_30_232_4"></div>
  <div class="rectangle_28_232_5"></div>
  <div class=group_22_150_137>
    <div class="rectangle_36_101_163"></div>
    <span  class="edit_profile_232_6">Edit Profile</span>
    <span  class="profile_overview_101_164">Profile Overview</span>
    <span  class="terms_and_conditions_232_9">Terms and Conditions</span>

    <form action="{{ route('logout') }}" method="POST">
    @csrf
    <span class="log_out_232_8" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</span>
</form>

    <span  class="settings_232_7">Settings</span>
  </div>
  <div class=group_23_150_138>
    <div class="rectangle_34_101_165"></div>
    <div class="rectangle_39_177_108"></div>

<form action="{{ route('providerprofileeditpage.post') }}" method="POST">
@csrf 
    <input type="text" class="rectangle_51_249_14" name="address" value="{{ $user->address ?? '' }}" >
    <input type="text" class="rectangle_52_249_15" name="contactnumber" value="{{ $user->contactnumber ?? '' }}" >

    <span  class="owner__249_11">Owner:</span>
    <span  class="google_map_address__177_5">Google Map Address:</span>
    <span  class="description__101_169">Description:</span>
    <span  class="service_provider__101_173">Service Provider:</span>
    <span  class="contact_number__101_174">Contact Number:</span>

        <input type="text" class="rectangle_48_177_7" name="owner" value="{{ $user->owner ?? '' }}">

    <textarea class="rectangle_50_249_13" name="companydescription" value="{{ $user->companydescription ?? '' }}"></textarea>

        <input type="text" class="rectangle_49_249_12" name="companyname" value="{{ $user->companyname ?? '' }}">
    <div class=group_33_251_19>
     <input type="submit" value="Save" class="rectangle_70_251_17">
  </div>
</form>
    <div class=group_27_178_4>
      <span  class="edit_profile_photo_177_113">Profile Photo</span>
      <div class="ellipse_4_177_109"></div>
      <div class=account_177_110>
        <div class="vector_177_111"></div>
        <div class="vector_177_112"></div>
      </div>
    </div>
  </div>
</div>
          </body>
          </html>

