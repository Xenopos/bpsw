@extends('homepage_heading')
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Html Generated</title>
    <meta name="description" content="Figma htmlGenerator">
    <meta name="author" content="htmlGenerator">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/providerprofileoverview_style.css') }}">
    <style>
      /*
        Figma Background for illustrative/preview purposes only.
        You can remove this style tag with no consequence
      */
      body {background: #E5E5E5; }
    </style>
  </head>
          
  <div class="provider_page_overview_101_175">
    <div class="rectangle_28_261_11"></div>
    <div class="rectangle_30_261_10"></div>
    <div class="group_21_148_43">
      <div class="rectangle_38_101_188"></div>
      <div class="rectangle_39_101_189"></div>
      <span class="companyname_261_9">{{ $user->companyname }}</span>
      <span class="contacctnum_261_7">{{ $user->contactnumber }}</span>
      <span class="emailadd_261_8">{{ $user->email }}</span>
      <span class="email_address__101_190">Email Address: </span>
      <span class="description_101_191">Description</span>
      <span class="contact_number__101_192">Contact Number: </span>
      <span class="owner_name_101_193">{{ $user->owner }}</span>
      <div class="ellipse_4_101_194"></div>
      <div class="account_101_195">
        <div class="vector_101_196"></div>
        <div class="vector_101_197"></div>
      </div>
      <span class="services_101_198">Services</span>
      <div class="rectangle_40_101_199"></div>
      <span class="ratings___comments_101_200">Ratings & Comments</span>
      <span class="insert_google_map_location_101_201">{{ $user->address }}</span>
      <div class="rectangle_43_101_202"></div>
      <div class="rectangle_47_261_5"></div>
      <div class="rectangle_45_101_203"></div>
      <div class="rectangle_46_101_204"></div>
      <div class="group_14_101_205">
        <div class="rectangle_42_101_206"></div>
        <span class="chat_101_207">Chat</span>
      </div>
      <span class="text_169_4">{{ $user->services }}</span>
      <span class="text_261_4">{{ $user->companydescription }}</span>
    </div>
  </div>
</html>
