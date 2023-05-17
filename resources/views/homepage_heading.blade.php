<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Html Generated</title>
    <meta name="description" content="Figma htmlGenerator">
    <meta name="author" content="htmlGenerator">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/homepage_heading_style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="{{ asset('vendor/musonza-chatify/css/app.css') }}">
<script src="{{ asset('vendor/musonza-chatify/js/app.js') }}"></script>



    <style>
      /*
        Figma Background for illustrative/preview purposes only.
        You can remove this style tag with no consequence
      */
      body {background: #E5E5E5; }
      html{overflow: fixed; }
    </style>
  </head>
  <body>
    <div class=heading_177_53>
      <div class=group_15_177_54>
        <div class=group_5_177_55>
          <div class="rectangle_4_177_56"></div>
          
            @if(Auth::user()->user_type == "special")
             <a href="{{ route('providerprofilepage') }}" ><span class="account_name_177_57"> {{ Auth::user()->companyname }}</span></a>
            @else
            <a href="{{ route('normaluserpage') }}"><span class="account_name_177_57">{{ Auth::user()->username }}</span></a>
            @endif

          <span class="bicol_car_service_providers_177_58">Bicol Car Service Providers</span>
          <a href="{{ route('homepage') }}"><span class="home_177_59">Home</span></a>

<a href="{{ route('chatify') }}">
  <span class="messages_177_60">Messages</span></a>

          <span class="notification_177_61">Notification</span>
        </div>
        <div class="image_1_177_64"></div>
        <div class="logo_bspw_177_63"></div>
      </div>
    </div>
  </body>
</html>
