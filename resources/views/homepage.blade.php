@extends('homepage_heading')

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Html Generated</title>
  <meta name="description" content="Figma htmlGenerator">
  <meta name="author" content="htmlGenerator">
  <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/homepage_style.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    /*
      Figma Background for illustrative/preview purposes only.
      You can remove this style tag with no consequence
    */
    body {
      background: #E5E5E5;
      overflow-x: hidden;
    }

    .rectangle_30_177_12,
    .rectangle_28_177_13 {
      position: fixed;
    }

  </style>
</head>

<body>
  <div class="homepage_101_23">
    <div class="rectangle_50_150_168"></div>
    <div class="rectangle_30_177_12"></div>
    <div class="rectangle_28_177_13"></div>


@foreach($special as $user)
<a href="{{ route('providerprofileoverview', ['user_id' => $user->id]) }}">
  <div class="group_6_101_32">
    <div class="rectangle_22_101_33"></div>
    <span class="service_provider_name_101_34">{{ $user->companyname }}</span>
    <div class="rectangle_15_101_35"></div>
    <div class="ellipse_1_101_36"></div>
    <div class="account_101_37">
      <div class="vector_101_38"></div>
      <div class="vector_101_39"></div>
    </div>
    <span class="sample_photo_101_40">sample photo</span>
    <span class="ratings_130_88">Ratings </span>
</a>
@endforeach

    </div>

    <span class="0_5_177_66">0/5</span>
  </div>
</body>

</html>
