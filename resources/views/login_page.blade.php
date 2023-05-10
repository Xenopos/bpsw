

<!DOCTYPE html>
<html lang="en">
          <head>

            <meta charset="utf-8">
      
            <title>Bicol Car Service Providers</title>

            <meta name="description" content="Figma htmlGenerator">
            <meta name="author" content="htmlGenerator">
            <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Outfit&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="{{ asset('css/Login_page_Style.css') }}">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

            <style>
            html {overflow: hidden; }
            body {background: #E5E5E5; }
            </style>
          
          </head>
          
          <body>


            <div class=login_page_101_2><div  class="ellipse_7_101_7"></div>
            <div  class="rectangle_50_101_8"></div>
            <span  class="bicol_car_service_providers_101_9">Bicol Car Service Providers</span>
            <div class=login_101_10>
            <div  class="rectangle_8_101_11"></div>
            

<form action="{{ route('login.post') }}" method="POST">
@csrf 
            <input type="email" name="email" id="email-field" class="rectangle_1_101_12">
            <input type="password" name="password" id="password-field" class="rectangle_1_101_13">
            <a href="{{ url('/signup') }}" class="don_t_have_any_account_yet__101_14">Don’t have any account yet?</a>
            <span  class="forgot_password__101_15">Forgot Password?</span>
            <span  class="password_101_16">Password</span>
            <span  class="email_adress_101_17">Email Adress</span><div  class="rectangle_11_101_18"></div>
            <span  class="login_101_19">Login</span>
            <div class=mui_button_101_20>
            <input type="submit" value=" " class="rectangle_i101_20_2_65">
</form>
            <span  class="login_i101_20_2_66">Login</span></div></div>
            <div  class="rectangle_49_101_21"></div>
            <span  class="providing_you_with_nearest_car_services_auto_shop_near_you___101_22">Providing you with nearest Car Services/Auto shop near you!!</span>
            <div  class="image_4_101_233"></div></div>
          </body>
  </html>
