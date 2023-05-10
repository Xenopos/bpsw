<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  
    <title>Bicol Car Service Providers</title>
    <meta name="description" content="Figma htmlGenerator">
    <meta name="author" content="htmlGenerator">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Outfit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/signup_page_style.css') }}">





  </head>
  
  <body>
    <div class="signup_page_122_4">
      <div class="bg1_122_9"></div>

<form action="{{ route('signup.post') }}" method="POST">

@csrf
        <div class="group_17_127_22">
          <div class="mail_122_10">
            <input type="email" name="email" placeholder="Email Address" required>
            <span class="error-message" id="email-error"></span>
          </div>

        <div class="pass_122_11">
          <input type="password" name="password" placeholder="Password" required>
          </div>

          <span class="email_address_122_6">Email Address</span>
          <span class="password_122_7">Password</span>

          <!--  
                  <div class="cnfrmpass_127_28">
            <input type="password" name="confirm_ password" placeholder="Confirm Password" required>
          </div> 
        -->
          <span class="error-message" id="confirm-password-error"></span>



        </div>

        <div class="group_16_127_21">
          <div class="bliu_127_15"></div>
          <button type="submit" class="sign_up_127_18" >Sign-Up</button>
        </div>

      </form>

      <div class="rectangle_11_127_19"></div>
      <span class="sign_up_122_5">Sign-up</span>
      <span class="bicol_car_service_providers_127_20">Bicol Car Service Providers</span>
      <div class="bgg_154_81"></div>
      <span class="providing_you_with_nearest_car_services_auto_shop_near_you___154_82">Providing you with nearest Car Services/Auto shop near you!!</span>
      <div class="image_4_154_83"></div>
      
    </div>

  </body>
</html>
