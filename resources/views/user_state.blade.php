<html lang="en">
  <head>
    <meta charset="utf-8">
  
    <title>Bicol Car Service Providers</title>
    <meta name="description" content="Figma htmlGenerator">
    <meta name="author" content="htmlGenerator">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Outfit&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/user_state_styles.css') }}">
    
    <style>
      html {overflow: hidden; }
      body {background: #E5E5E5; }
    </style>
  
  </head>
  
<form action="{{ route('userstate.post') }}" method="POST">
      @csrf
      <div class=pick_now__195_4>
        <div class=mask_group_195_5>
          <div class=user__195_6>
            <div class="rectangle_28_195_8"></div>
            <div class="rectangle_29_195_9"></div>
            <span class="bicol_car_service_providers_195_10">Bicol Car Service Providers</span>
            <div class="group_18_195_11">
              <div class="group_26_195_12">
                <div class="rectangle_25_195_13"></div>
                <div class="group_29_195_14">
                  <button type="submit" name="user_type" value="normal" class="rectangle_26_195_15 normal_user_195_16">Normal User</button>
                </div>
              </div>
              <span class="are_you_a__195_17">Are you a?</span>
              <div class="group_19_195_18">
                <div class="rectangle_24_195_19"></div>
                <div class="group_29_195_20">
                  <button type="submit" name="user_type" value="special" class="rectangle_26_195_21 service_provider_195_22">Service Provider</button>
                </div>
              </div>
            </div>      
            <span class="offers_you__195_23">Offers you!</span>
            <div class=group_31_196_51>
              <div class="rectangle_69_195_24"></div>
              <div class=group_30_196_33>
                <span class="book_appointments_with_car_service_repair_providers_at_your_convenience__196_32">Book appointments with car service repair providers at your convenience.</span>
                <span class="communicate_with_car_service_repair_providers__ask_questions__and_get_quotes__196_31">Communicate with car service repair providers, ask questions, and get quotes.</span>
                <span class="search_special_car_services_providers_easily__196_30">Search Special Car Services Providers EASILY! </span>
                <span class="find_all_car_service_providers_near_you__195_29">Find  All Car Service Providers NEAR YOU!</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </body>
</html>
