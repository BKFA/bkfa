<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>{{ Lang::get('sub.login') }} BKFA.com - {{ Lang::get('sub.library') }}</title>
    <base href="{{asset('')}}" >
    <!-- Favicon -->
    <link rel="shortcut icon" href="library/images/logo/favicon.png">

    <!-- plugins css -->
    <link rel="stylesheet" href="library/bower_components/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="library/bower_components/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="library/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- core css -->
    <link href="library/css/ei-icon.css" rel="stylesheet">
    <link href="library/css/themify-icons.css" rel="stylesheet">
    <link href="library/css/font-awesome.min.css" rel="stylesheet">
    <link href="library/css/animate.min.css" rel="stylesheet">
    <link href="library/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="authentication">
            <div class="sign-in">
                <div class="row no-mrg-horizon">
                    <div class="col-md-8 no-pdd-horizon hidden-xs">
                        <div class="full-height bg" style="background-image: url('library/images/others/img-29.jpg')">
                            <div class="img-caption">
                                <h1 class="caption-title">We make spectacular</h1>
                                <p class="caption-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 no-pdd-horizon">
                        <div class="full-height bg-white height-100">
                            <div class="vertical-align full-height pdd-horizon-70">
                                <div class="table-cell">
                                    <div class="pdd-horizon-15">
                                        <h2>{{ Lang::get('sub.login') }}</h2>
                                        @if(count($errors) > 0)
                                        <div class="alert alert-danger">
                                            @foreach($errors->all() as $err)
                                            {{$err}}<br>
                                            @endforeach()
                                        </div>
                                        @endif
                                    
                                        @if(session('thongbao'))
                                        <div class="alert alert-danger">
                                            {{session('thongbao')}}
                                        </div>                        
                                        @endif
                                        
                                        <form role="form" action="dangnhap" method="POST">
                                            <fieldset>
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control" placeholder="User name" autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" class="form-control" placeholder="Password" value=""><br>
                                                    <a href="{{ route('password.request') }}">{{ Lang::get('sub.forgot_password') }}</a>
                                                </div>
                                                <div class="checkbox font-size-12">
                                                    <input id="agreement" name="agreement" type="checkbox">
                                                    <label for="agreement">{{ Lang::get('sub.remember_me') }}</label>
                                                </div>                                           
                                                <button class="btn btn-info">{{ Lang::get('sub.login') }}</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="login-footer">
                                <img class="img-responsive inline-block" src="library/images/logo/logo.png" width="100" alt="">
                                <span class="font-size-13 pull-right pdd-top-10">{{ Lang::get('sub.text4') }}<a href="dangky">{{ Lang::get('sub.register') }}</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="library/js/vendor.js"></script>

    <script src="library/js/app.min.js"></script>

    <!-- page js -->

</body>

</html>