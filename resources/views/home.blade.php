<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Styles -->

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>


</head>

<body>

  <div class="container">


    <div class="col-lg-4 ">


      <div>
        <p>Account</p>
      </div>
      <div class="mb-3">
        <select class="account" name="acc" class="form-select" aria-label="Default select example">
          @foreach ($account as $key => $item )
          <option value="{{$item->name}}"> {{$key+1}}-{{$item->name}}</option>
          @endforeach

        </select>
      </div>
      <div>
        <p>Link socical</p>
      </div>
      <div class="d-flex flex-row">
        <div class="input-group mb-3">
          <a type="button" id="emails" name="email" value="{{$sosical->link_email}}"> <span class="input-group-text"
              id="basic-addon1"> <img width="30" height="30"
                src="https://img.icons8.com/color/48/000000/email-sign.png" /></span></a>
        </div>
        <div class="input-group mb-3" style="margin-left: -200px">
          <a type="button" id="tw" name="email" value="{{$sosical->link_tw}}"> <span class="input-group-text"
              id="basic-addon1"> <img width="30" height="30"
                src="https://img.icons8.com/color/48/000000/twitter-circled--v1.png" /></span></a>
        </div>

        <div class="input-group mb-3" style="margin-left: -200px">
          <a type="button" id="fb" name="email" value="{{$sosical->link_fb}}"> <span class="input-group-text"
              id="basic-addon1"> <img width="30" height="30"
                src="https://img.icons8.com/fluency/48/000000/facebook-new.png" /></span></a>
        </div>
      </div>

      {{-- dong 2 --}}
      <div class="d-flex flex-row">
        <div class="input-group mb-3">
          <a type="button" id="ins" name="email" value="{{$sosical->link_ins}}"> <span class="input-group-text"
              id="basic-addon1"> <img width="30" height="30"
                src="https://img.icons8.com/color/48/000000/instagram-new--v1.png" /></span></a>
        </div>
        <div class="input-group mb-3" style="margin-left: -200px">
          <a type="button" id="yt" name="email" value="{{$sosical->link_yt}}"> <span class="input-group-text"
              id="basic-addon1"> <img width="30" height="30"
                src="https://img.icons8.com/color/48/000000/youtube-play.png" /></span></a>
        </div>

        <div class="input-group mb-3" style="margin-left: -200px">
          <a type="button" id="md" name="email" value="{{$sosical->link_yt}}"> <span class="input-group-text"
              id="basic-addon1"> <img width="30" height="30"
                src="https://img.icons8.com/ios-filled/50/000000/medium-logo.png" /></span></a>
        </div>
      </div>

      <div>
        <p>Username</p>
      </div>

      <div class="d-flex flex-row">
        <div class="input-group mb-3">
          <a type="button" id="nametw" name="email" value="{{$username->name_tw}}"> <span class="input-group-text"
              id="basic-addon1"> <img width="30" height="30"
                src="https://img.icons8.com/color/48/000000/twitter-circled--v1.png" /></span></a>
        </div>
        <div class="input-group mb-3" style="margin-left: -200px">
          <a type="button" id="nametele" name="email" value="{{$username->name_tele}}"> <span class="input-group-text"
              id="basic-addon1"> <img width="30" height="30"
                src="https://img.icons8.com/fluency/48/000000/telegram-app.png" /></span></a>
        </div>

        <div class="input-group mb-3" style="margin-left: -200px">
          <a type="button" id="nameins" name="email" value="{{$username->name_ins}}"> <span class="input-group-text"
              id="basic-addon1"> <img width="30" height="30"
                src="https://img.icons8.com/color/48/000000/instagram-new--v1.png" /></span></a>
        </div>
      </div>



      <div class="d-flex flex-row">
        <div class="input-group mb-3">
          <a type="button" id="namedis" name="email" value="{{$username->name_discord}}"> <span class="input-group-text"
              id="basic-addon1"> <img width="30" height="30"
                src=" https://cdn.iconscout.com/icon/free/png-256/discord-3691244-3073764.png" /></span></a>
        </div>
        <div class="input-group mb-3" style="margin-left: -280px">
          <a type="button" id="namemd" name="email" value="{{$username->name_medium}}"> <span class="input-group-text"
              id="basic-addon1"> <img width="30" height="30"
                src="https://img.icons8.com/ios-filled/50/000000/medium-logo.png" /></span></a>
        </div>
      </div>


      <div>
        <p>Wallet address</p>
      </div>


      <div class="d-flex flex-row">
        <div class="input-group mb-3">
          <a type="button" id="bep" name="bep" value="{{$wallet->bep20}}"> <span class="input-group-text"
              id="basic-addon1"> <img width="30" height="30"
                src="https://cdb.boxhoidap.com/cdbjp/cach-chuyen-coin-tu-binance-sang-vi-trust-wallet--8e297f814c5fb05b36b8012c4e18b1c8.wepb" /></span></a>
        </div>
        <div class="input-group mb-3" style="margin-left: -200px">
          <a type="button" id="sol" name="sol" value="{{$wallet->sol}}"> <span class="input-group-text"
              id="basic-addon1"> <img width="30" height="30"
                src="data:image/png;base64,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" /></span></a>
        </div>

        <div class="input-group mb-3" style="margin-left: -200px">
          <a type="button" id="email" name="email" value="{{$wallet->terra}}"> <span class="input-group-text"
              id="basic-addon1"> <img width="30" height="30"
                src="https://img.icons8.com/color/48/000000/instagram-new--v1.png" /></span></a>
        </div>
      </div>


    </div>
    <script>
      // sosical link
           $('#emails').click(function(){
             var data=document.getElementById('emails').getAttribute("value");
             navigator.clipboard.writeText(data);
           })
           $('#tw').click(function(){
             var data=document.getElementById('tw').getAttribute("value");
             navigator.clipboard.writeText(data);
           })
           $('#fb').click(function(){
             var data=document.getElementById('fb').getAttribute("value");
             navigator.clipboard.writeText(data);
           })
           $('#yt').click(function(){
             var data=document.getElementById('yt').getAttribute("value");
             navigator.clipboard.writeText(data);
           })
           $('#md').click(function(){
             var data=document.getElementById('md').getAttribute("value");
             navigator.clipboard.writeText(data);
           })
           $('#ins').click(function(){
             var data=document.getElementById('ins').getAttribute("value");
             navigator.clipboard.writeText(data);
           })

           // username
           $('#nametw').click(function(){
             var data=document.getElementById('nametw').getAttribute("value");
             navigator.clipboard.writeText(data);
           })
           $('#nametele').click(function(){
             var data=document.getElementById('nametele').getAttribute("value");
             navigator.clipboard.writeText(data);
           })
           $('#nameins').click(function(){
             var data=document.getElementById('nameins').getAttribute("value");
             navigator.clipboard.writeText(data);
           })
           $('#namedis').click(function(){
             var data=document.getElementById('namedis').getAttribute("value");
             navigator.clipboard.writeText(data);
           })
           $('#namemd').click(function(){
             var data=document.getElementById('namemd').getAttribute("value");
             navigator.clipboard.writeText(data);
           })

           //wallet
           $('#bep').click(function(){
             var data=document.getElementById('bep').getAttribute("value");
             navigator.clipboard.writeText(data);
           })
           $('#sol').click(function(){
             var data=document.getElementById('sol').getAttribute("value");
             navigator.clipboard.writeText(data);
           })
           //select account
           $( ".account" ).change(function() {
               var  data= $('.account').val();
               $.ajax({
                 url:'/home',
                 type:'get',
                 data:{
                   acc_name:data
                 },
                 success:function(res){
                   //sosical
                   $('#emails').attr('value',res.sosical.link_email);
                   $('#tw').attr('value',res.sosical.link_tw);
                   $('#yt').attr('value',res.sosical.link_yt);
                   $('#md').attr('value',res.sosical.link_medium);
                   $('#ins').attr('value',res.sosical.link_ins);
                   $('#fb').attr('value',res.sosical.link_fb);
                   //username
                   $('#nametw').attr('value',res.username.name_tw);
                   $('#nametele').attr('value',res.username.name_tele);
                   $('#namedis').attr('value',res.username.name_discord);
                   $('#nameins').attr('value',res.username.name_ins);
                   $('#namemd').attr('value',res.username.name_medium);
                   //wallet
                   $('#bep').attr('value',res.wallet.bep20);
                   $('#sol').attr('value',res.wallet.sol);
                 
                 }
               })
            });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>