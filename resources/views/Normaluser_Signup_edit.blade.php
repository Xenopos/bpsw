<html lang="en">
          <head>
            <meta charset="utf-8">
          
            <title>Bicol Car Service Providers</title>
            <meta name="description" content="Figma htmlGenerator">
            <meta name="author" content="htmlGenerator">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/Normaluser_Signup_edit_style.css') }}">
            
            <style>
              /*
                Figma Background for illustrative/preview purposes otnly.
                You can remove this style tag with no consequence
                              /*<input type="file" name="logo" class="rectangle_60_151_72">*/
              */
            body {background: #E5E5E5; }

            html {overflow: hidden; }

            </style>
          
          </head>
          
          <body>
            <div class=sign_up_edit_for_normal_user_page_149_116>
              <div  class="rectangle_50_150_167"></div>
              <div  class="rectangle_68_151_48"></div>
              <div  class="rectangle_30_151_49"></div>
              <div  class="rectangle_61_151_50"></div>
              <div  class="rectangle_54_151_51"></div>
              <div class="group_25_165_6">

<form action="{{ route('normalusersignup.post') }}" method="POST">
@csrf

<button class="rectangle_67_165_7" type="submit"><span  class="all_set__165_8">All Set!</span></div></button>

              <input type="text" class="rectangle_62_151_54" name="username" placeholder="Username" required>
              <input type="text" class="rectangle_63_151_55" name="full_name" placeholder="Full Name"required>
              <input type="date" class="rectangle_64_151_562" name="birthdate" required>
              <input type="tel" class="rectangle_65_151_57" name="contactnumber" placeholder="Contact Number"required>
              <span  class="upload_profile_picture_151_58">Upload Profile picture</span>
              <span  class="username__151_59">Username:</span>
              <div class="rectangle_69_182_9" >
              <textarea style="width: 359px; height: 161px;" name="bio" required></textarea>
              </div>
              <span  class="bio_182_10">Bio</span>
              <span  class="contact_number__151_60">Contact Number:</span>
              <span  class="age__151_63">Birth Date:</span>
              <div  class="rectangle_28_151_70"></div>
              <div  class="rectangle_59_151_71"></div>
              <div  class="rectangle_60_151_72"></div>


</form>
              <span  class="almost_there__151_73">Almost there!</span>
              <span  class="full_name__151_74">Full Name:</span>
              <div class=group_24_165_15>
              <div  class="rectangle_55_165_16"></div>
              <div  class="rectangle_56_165_17"></div>
              <div  class="rectangle_57_165_18"></div>
              <div  class="rectangle_58_165_19"></div>
              <span  class="edit_your_profile_165_20">Edit your profile</span></div></div>
          </body>
          </html>