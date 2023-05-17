    <html lang="en">
              <head>
                <meta charset="utf-8">
              
                <title>Bicol Car Service Providers</title>
                <meta name="description" content="Figma htmlGenerator">
                <meta name="author" content="htmlGenerator">
                <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="{{ asset('css/Provider_Signup_edit_style.css') }}">




                
                <style>
                  /*s
                    Figma Background for illustrative/preview purposes only.
                     <input type="file" class="upload_phoyo_265_4" name="logo" id="photo" accept="image/*">
                    You can remove this style tag with no consequence
                  */
                  body {background: #E5E5E5; }
                  html {overflow: hidden; }
                </style>
              
              </head>
              
              <body>
                <div class=sign_up_edit_for_provider_page_146_29>
                  <div  class="rectangle_50_150_165"></div>
                  <span  class="upload_image_177_68">Upload Image </span>
                  <div  class="rectangle_67_177_67"></div><div  class="rectangle_30_150_152"></div>
                  <div  class="rectangle_61_150_162"></div><div  class="rectangle_54_150_142"></div>
                  <div class=group_25_165_4>
                  <div  class="rectangle_67_151_16"></div>

      <form action="{{ route('providersignup.post') }}" method="POST">
    @csrf

                  <button type="submit" class="rectangle_67_151_16"></button></div>            
                  <input type="text" class="rectangle_62_151_6" name="companyname" placeholder="Company Name" required>
                  <input type="text" class="rectangle_63_151_9"  name="owner" placeholder="Owner Name" required>
                  <div  class="rectangle_64_151_10"></div>
                  <input type="text" class="rectangle_64_151_10" name="services" placeholder="Services" required>
                  <input type="tel" class="rectangle_65_151_11" name="contactnumber"placeholder="Contact Number"required>
                  <span  class="upload_logo_profile_picture_150_145">Upload Logo/Profile picture</span>


                  <span  class="company_name__148_93">Company name:</span>
                  <span  class="contact_number__149_94">Contact Number:</span>
                      <input type="text" class="rectangle_66_151_13" name="address" id="map-address" placeholder="Enter your address" required>
                  <span  class="google_map_address__151_14">Google Map Address:</span>
                  <span  class="services__149_98">Services:</span>
                  <div class=group_24_150_155>
                    <div  class="rectangle_55_150_148"></div>
                    <div  class="rectangle_56_150_149"></div>
                    <div  class="rectangle_57_150_150"></div>
                    <div  class="rectangle_58_150_151"></div>
                    <span  class="edit_your_profile_150_144">Edit your profile</span></div>
                    <div  class="rectangle_28_150_154"></div>
                    <div  class="rectangle_59_150_158"></div>
                    <div  class="rectangle_60_150_159"></div>
                    <span  class="almost_there__150_160"id="logo-preview">Almost there!</span>
                    <span  class="owner_name__151_8">Owner Name:</span>
                    <div  class="rectangle_68_182_12"></div>
                    <input type="text" class="rectangle_68_182_12" name="companydescription" placeholder="Company Description" required>
                    <span  class="company_description__182_13">Company Description:</span></div>
                  </form>
              </body>
              </html>

