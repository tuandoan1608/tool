<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
        <div class="container">
           
           
              <div class="col-md-7">
                <form action="/add" method="post">
                    @csrf
                    <div>
                        <p>Account</p>
                    </div>
                    <div class="mb-3">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/color/48/000000/lock--v1.png"/></span>
                          <input type="text" name="account" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div>
                          <p>Link socical</p>
                      </div>
                    <div class="mb-3">
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/color/48/000000/email-sign.png"/></span>
                        <input type="email" name="email" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                    </div>
                    <div class="mb-3">                  
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"><img src="https://img.icons8.com/color/48/000000/twitter-circled--v1.png"/></span>
                          <input type="text" name="tw" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="mb-3">               
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"><img src="https://img.icons8.com/fluency/48/000000/facebook-new.png"/></span>
                          <input type="text" name="fb" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"><img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png"/></span>
                          <input type="text" name="ins" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/color/48/000000/youtube-play.png"/></span>
                          <input type="text" name="yt" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/ios-filled/50/000000/medium-logo.png"/></span>
                          <input type="text" name="medium" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"><img src="https://img.icons8.com/ios-filled/50/000000/linkedin.png"/></span>
                          <input type="text" name="lk" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"><img src="https://img.icons8.com/ios-filled/50/000000/linkedin.png"/></span>
                          <input type="text" name="red" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                     <div>
                         <p>Username</p>
                     </div>
                     {{-- tw --}}
                     <div class="mb-3">                  
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"><img src="https://img.icons8.com/color/48/000000/twitter-circled--v1.png"/></span>
                          <input type="text" name="nametw" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      {{-- tele --}}
                      <div class="mb-3">                  
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"><img src="https://img.icons8.com/fluency/48/000000/telegram-app.png"/></span>
                          <input type="text" name="nametele" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      {{-- ins --}}
                      <div class="mb-3">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"><img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png"/></span>
                          <input type="text" name="nameins" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      {{-- medium --}}
                      <div class="mb-3">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/ios-filled/50/000000/medium-logo.png"/></span>
                          <input type="text" name="namemd" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/ios-filled/50/000000/medium-logo.png"/></span>
                          <input type="text" name="namediscord" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div>

                          <p>Wallet address</p>
                      </div>
                       {{-- Bep --}}
                       <div class="mb-3">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"> <img width="48" height="48" src="https://cdb.boxhoidap.com/cdbjp/cach-chuyen-coin-tu-binance-sang-vi-trust-wallet--8e297f814c5fb05b36b8012c4e18b1c8.wepb"/></span>
                          <input type="text" name="wlbep" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                       {{-- sol --}}
                       <div class="mb-3">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"> <img width="48" height="48" src="data:image/png;base64,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"/></span>
                          <input type="text" name="wlsol" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                       {{-- terra --}}
                       <div class="mb-3">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1"> <img src="https://img.icons8.com/ios-filled/50/000000/medium-logo.png"/></span>
                          <input type="text" name="wlterra" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>   
                  </form>
                </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
