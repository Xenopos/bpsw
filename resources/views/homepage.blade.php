@extends('homepage_heading')

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Bicol Car Service Providers</title>
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


<div class="row align-items-center">
  @foreach($special as $user)
  <div class="group_6_101_32 row-md-4 mb-4">

    <div class="hover-content">
<div class=onhover_profile_188_23 hover-element>
  <div class=group_5_188_48>
    <div class="rectangle_17_188_49"></div>
    <div class="rectangle_19_188_51"></div>
    <span  class="address__188_52">Address: </span>
    <span  class="email_address__188_53">Email Address:</span>
    <div class="rectangle_23_188_54"></div>
    <span  class="service_provider_name_188_55">{{ $user->owner }}</span>
    <div class=account_188_56>
      <div class="vector_188_57"></div>
      <div class="vector_188_58"></div>
    </div>
    <span  class="contact_number__188_59">Contact Number:</span>
  </div>
  <span  class="sampleaddress_269_5">{{ $user->address }}</span>
  <span  class="samplecontact_269_6">{{ $user->address }}</span>
  <span  class="sampleemail_269_7">{{ $user->email }}</span>
  
  <style>

.onhover_profile_188_23 { 
  position: absolute;
}
.group_5_188_48 {
  width: 478px;
  height: 506px;
  position: absolute;
  left: 700px;
  top: 0px;
}
.rectangle_17_188_49 { 
  box-shadow:0px 4px 4px rgba(0, 0, 0, 0.25);
  background-color:rgba(255, 255, 255, 1);
  width:477.99981689453125px;
  height:506px;
  position:absolute;
  left:0px;
  top:0px;
  border-top-left-radius:8px;
  border-top-right-radius:8px;
  border-bottom-left-radius:8px;
  border-bottom-right-radius:8px;
}
.188_49 { 
  border:1px solid rgba(0, 0, 0, 1);
}
.frame_6_188_50 { 
  width:124.41090393066406px;
  height:90.5846176147461px;
  position:absolute;
  left:13.096169471740723px;
  top:14.15386962890625px;
}
.rectangle_19_188_51 { 
  background-color:rgba(148.7499949336052, 148.7499949336052, 148.7499949336052, 1);
  width:432.16424560546875px;
  height:368px;
  position:absolute;
  left:22.450855255126953px;
  top:125.96923828125px;
  border-radius:5px;
}
.address__188_52 { 
  color:rgba(255, 255, 255, 1);
  width:49px;
  height:16px;
  position:absolute;
  left:34px;
  top:331px;
  font-family:Open Sans;
  text-align:left;
  font-size:12px;
  letter-spacing:0;
}
.email_address__188_53 { 
  color:rgba(255, 255, 255, 1);
  width:110px;
  height:21px;
  position:absolute;
  left:33px;
  top:382px;
  font-family:Open Sans;
  text-align:left;
  font-size:12px;
  letter-spacing:0;
}
.rectangle_23_188_54 { 
  background-color:rgba(217.0000022649765, 217.0000022649765, 217.0000022649765, 1);
  width:310.5595703125px;
  height:65.81538391113281px;
  position:absolute;
  left:144.05459594726562px;
  top:21.938446044921875px;
}
.service_provider_name_188_55 { 
  color:rgba(0, 0, 0, 1);
  width:294.822509765625px;
  height:20.842105865478516px;
  position:absolute;
  left:150.5919189453125px;
  top:44px;
  font-family:Inter;
  text-align:left;
  font-size:15px;
  letter-spacing:0;
}
.account_188_56 { 
  width:92px;
  height:83px;
  position:absolute;
  left:32px;
  top:22px;
}
.188_57 { 
  border:1.909999966621399px solid rgba(0, 0, 0, 1);
}
.vector_188_57 { 
  width:43.93000030517578px;
  height:39.63249969482422px;
  position:absolute;
  left:24.03499984741211px;
  top:5.256666660308838px;
}
.188_58 { 
  border:1.909999966621399px solid rgba(0, 0, 0, 1);
}
.vector_188_58 { 
  width:80.50000762939453px;
  height:36.3125px;
  position:absolute;
  left:5.75px;
  top:44.958335876464844px;
}
.contact_number__188_59 { 
  color:rgba(255, 255, 255, 1);
  width:114px;
  height:20px;
  position:absolute;
  left:31px;
  top:355px;
  font-family:Open Sans;
  text-align:left;
  font-size:12px;
  letter-spacing:0;
}
.sampleaddress_269_5 { 
  color:rgba(255, 255, 255, 1);
  width:86px;
  height:16px;
  position:absolute;
  left: 835px;
  top:331px;
  font-family:Open Sans;
  text-align:left;
  font-size:12px;
  letter-spacing:0;
}
.samplecontact_269_6 { 
  color:rgba(255, 255, 255, 1);
  width:82px;
  height:16px;
  position:absolute;
  left: 835px;
  top:352px;
  font-family:Open Sans;
  text-align:left;
  font-size:12px;
  letter-spacing:0;
}
.sampleemail_269_7 {
  color: rgba(255, 255, 255, 1);
  width: 72px;
  height: 16px;
  position: absolute;
  left: 835px;
  top: 382px;
  font-family: Open Sans;
  text-align: left;
  font-size: 12px;
  letter-spacing: 0;
}
.hover-element:hover {
  /* Define the hover effect styles here */
  /* For example, change the background color */
  background-color: #F00;
} 
  </style>
</div>
        </div>
    <a href="{{ route('providerprofileoverview', ['user_id' => $user->id]) }}">
      <div class="rectangle_22_101_33"></div>
      <span class="service_provider_name_101_34">{{ $user->companyname }}</span>
      <div class="rectangle_15_101_35"></div>
      <div class="ellipse_1_101_36"></div>
      <div class="account_101_37"></div>
      <div class="101_38 vector_101_38"></div>
      <div class="101_39 vector_101_39"></div>
      <span class="sample_photo_101_40">Sample Photo</span>
      <div class="ratings_130_88">4.5/5</div>
    </a>
  </div>
  @endforeach
</div>


    </div>


  </div>
</body>

</html>
