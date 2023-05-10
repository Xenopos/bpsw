@extends('homepage_heading')
<html lang="en">
          <head>
            <meta charset="utf-8">
          
            <title>Html Generated</title>
            <meta name="description" content="Figma htmlGenerator">
            <meta name="author" content="htmlGenerator">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="{{ asset('css/normaluserpage_style.css') }}">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
            
            <style>
              /*
                Figma Background for illustrative/preview purposes only.
                You can remove this style tag with no consequence
                value="{{ $user->contactnumber ?? '' }}" 
              */
              body {background: #E5E5E5; }
            </style>
          
          </head>
          
<body>
<div class=userr_edit_profile_view_page_256_39>
  <div class="rectangle_30_256_40"></div>
  <div class="rectangle_28_256_41"></div>
  <div class=group_23_256_42>
    <div class="rectangle_34_256_43"></div>
    <div class="rectangle_39_256_44"></div><span  class="bio__256_46">Bio:</span><span  class="username__256_47">Username:</span><span  class="full_name__256_48">Full name:</span><span  class="contact_number__256_49">Contact Number:</span>
    <div class=group_27_256_51><span  class="edit_profile_photo_256_52">Edit Profile Photo</span>
      <div class="ellipse_4_256_53"></div>
      <div class=account_256_54>
        <div class="vector_256_55"></div>
        <div class="vector_256_56"></div>
      </div>
    </div>
    <span  class="sampletext_257_71">{{ auth()->user()->bio }}</span>
  </div>
  <div class=group_34_256_62>
    <div class="rectangle_36_256_63"></div>

<a href="{{ route('normaluserprofileedit') }}" class="edit_profile_256_64">Edit Profile</a>

    <span  class="profile_overview_256_65">Profile Overview</span>
    <span  class="terms_and_conditions_256_66">Terms and Conditions</span>

    <form action="{{ route('logout') }}" method="POST">
    @csrf
    <span class="log_out_256_67" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</span>
</form>


    <span  class="settings_256_68">Settings</span>
  </div>
  <span  class="sampletext_257_69">{{ auth()->user()->username }}</span>
  <span  class="sampletext_257_70">{{ auth()->user()->full_name }}</span> 
   <span  class="sampletext_257_72">{{ auth()->user()->contactnumber }}</span>
</div>
</div>
          </body>
          </html>
