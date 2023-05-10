@extends('homepage_heading')
<html lang="en">
          <head>
            <meta charset="utf-8">
          
            <title>Html Generated</title>
            <meta name="description" content="Figma htmlGenerator">
            <meta name="author" content="htmlGenerator">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="{{ asset('css/providerprofilepage_style.css') }}">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
            
            <style>
              /*
                Figma Background for illustrative/preview purposes only.
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
<a href="{{ route('providerprofileeditpage') }}" class="edit_profile_232_6">Edit Profile</a>

    <span  class="profile_overview_101_164">Profile Overview</span><span  class="terms_and_conditions_232_9">Terms and Conditions</span>

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <span class="log_out_232_8" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</span>
</form>

    <span  class="settings_232_7">Settings</span>
  </div>
  <div class=group_23_150_138>
    <div class="rectangle_34_101_165"></div>
    <div class="rectangle_39_177_108"></div>
    <span  class="google_map_address__177_5">Google Map Address:</span>
    <span  class="email_address__101_168">Email address:</span>
    <span  class="description__101_169">Description:</span>
    <span  class="service_provider__101_173">Service Provider:</span>
    <span  class="contact_number__101_174">Contact Number:</span>
    <div class=group_27_178_4>
      <span  class="edit_profile_photo_177_113">Edit Profile Photo</span>
      <div class="ellipse_4_177_109"></div>
      <div class=account_177_110>
        <div class="vector_177_111"></div>
        <div class="vector_177_112"></div>
      </div>
    </div>
    <span  class="sample_text_248_5">{{ auth()->user()->services }}</span>
    <span  class="sample_text_248_6">{{ auth()->user()->address }}</span>
    <span  class="sample_text_248_7">{{ auth()->user()->contactnumber }}</span>
    <span  class="sample_text_248_8">{{ auth()->user()->email }}</span>
  </div>
  <span  class="sample_text_248_4">{{ auth()->user()->companyname }}</span>
  <span  class="owner_248_9">Owner</span>
  <span  class="sample_text_248_10">{{ auth()->user()->owner }}</span>
</div>
          </body>
          </html>
