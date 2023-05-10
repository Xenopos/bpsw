@extends('homepage_heading')
<html lang="en">
          <head>
            <meta charset="utf-8">
          
            <title>Html Generated</title>
            <meta name="description" content="Figma htmlGenerator">
            <meta name="author" content="htmlGenerator">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="{{ asset('css/normaluserprofileedit_page_style.css') }}">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
            
            <style>
              /*
                Figma Background for illustrative/preview purposes only.
                You can remove this style tag with no consequence
                value="{{ $user->contactnumber ?? '' }}" 
              */
              body {background: #E5E5E5; }
              html{ overflow:hidden;}
            </style>
          
          </head>
          
<body>
<div class=userr_edit_profile_view_page_182_15>
  <div class="rectangle_30_252_20"></div>
  <div class="rectangle_28_252_21"></div>
  <div class=group_23_182_19>
    <div class="rectangle_34_182_20"></div>
    <div class="rectangle_39_182_21"></div>

<form action="{{ route('normaluserprofileedit.post') }}" method="POST">
      @csrf
    <textarea class="rectangle_45_182_24" name="bio" value="{{ $user->bio ?? '' }}"></textarea>

    <span  class="bio__182_26">Bio:</span>
    <span  class="username__182_27">Username:</span>
    <span  class="full_name__252_26">Full name:</span>
    <span  class="contact_number__182_28">Contact Number:</span>

    <input type="text" class="rectangle_47_182_30" name="contactnumber" value="{{ $user->contactnumber ?? '' }}" >
    <div class=group_27_182_32>
      <span  class="edit_profile_photo_182_33">Edit Profile Photo</span>
      <div class="ellipse_4_182_34"></div>
      <div class=account_182_35>
        <div class="vector_182_36"></div>
        <div class="vector_182_37"></div>
      </div>
    </div>
   <div class=group_33_252_22>
                <input type="submit" value=" " class="rectangle_70_252_23">
      <span  class="save_252_24">Save</span>
    </div>
  </div>

    <input type="text" class="rectangle_47_252_27" name="username" value="{{ $user->username ?? '' }}" >
    <input type="text" class="rectangle_48_252_28" name="full_name" value="{{ $user->full_name ?? '' }}" >
</form>
  <div class=group_34_252_29>
    <div class="rectangle_36_252_30"></div>
    <span  class="edit_profile_252_31">Edit Profile</span>
    <span  class="profile_overview_252_32">Profile Overview</span>
    <span  class="terms_and_conditions_252_33">Terms and Conditions</span>

    <form action="{{ route('logout') }}" method="POST">
    @csrf
    <span class="log_out_252_34" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</span>
</form>


    <span  class="settings_252_35">Settings</span>
  </div>
</div>
          </body>
          </html>
