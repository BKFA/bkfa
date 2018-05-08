@extends('pages.layouts.index')

@section('title')
    {{ Lang::get('sub.home') }}
@endsection

@section('content')

@include('pages.layouts.home')

<!-- latest news -->
<section id="service-h">
    <div class="container-fluid">
        <div class="row">
           {{--  @foreach($tintuc as $tintuc) --}}
           @php
            foreach($newmost as $most){
                @endphp
                <div class="col-md-7">
                    <div class="new_most">
                        <div class="single-news-img">
                            <a href="chi-tiet-tin-tuc/{{ $most->idtintuc }}/{{ $most->tenkhongdau }}.html"><img src="upload/images/tintuc/{{$most->urlanh}}" alt="" class="img-fluid"></a>
                        </div>
                        <br>
                        <div class="">
                            <h4>{{$most->tieude}}</h4>
                            <div class="heading-border-light"></div>
                            <p>{{$most->gioithieu}}</p>
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="fa fa-calendar"></i> {{$most->created_at}}
                                </div>
                                <div class="col-md-3">
                                    <i class="fa fa-user"></i> Admin
                                </div>
                                <div class="col-md-3">
                                    <i class="fa fa-comments-o"></i> 1 comments
                                </div>
                                <div class="col-md-3">
                                    <a href="chi-tiet-tin-tuc/{{ $most->idtintuc }}/{{ $most->tenkhongdau }}.html" class="mb-2" style="text-decoration: none;">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @php
            }
           @endphp
            
            <div class="col-md-5 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-h-desc">
                    <h3>{{ Lang::get('sub.news') }}</h3>
                    <div class="heading-border-light"></div>
                    <div class="service-h-tab">
                        <nav class="nav nav-tabs" id="myTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">{{ Lang::get('sub.latest') }}</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile">{{ Lang::get('sub.mostview') }}</a>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                @php
                                foreach($moinhat as $mn){
                                    @endphp
                                    <div class="news-item">
                                        <a href="chi-tiet-tin-tuc/{{ $mn->idtintuc }}/{{ $mn->tenkhongdau }}.html">
                                            <div class="right-news">
                                                <img src="upload/images/tintuc/{{$mn->urlanh}}" alt="" class="img-fluid" style="width: 120px;height: 80px;float: left;margin-right: 15px;">
                                                <p>{{$mn->tieude}}</p>
                                                <small><fa class="fa-watch">{{$mn->created_at}}</fa></small>
                                            </div>
                                        </a>
                                    </div>
                                    @php
                                }
                                @endphp
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                @php
                                foreach ($xemnhieu as $xn) {
                                    @endphp
                                     <div class="news-item">
                                        <a href="chi-tiet-tin-tuc/{{ $xn->idtintuc }}/{{ $xn->tenkhongdau }}.html">
                                            <div class="right-news">
                                                <img src="upload/images/tintuc/{{$xn->urlanh}}" alt="" class="img-fluid" style="width: 120px;height: 80px;float: left;margin-right: 15px;">
                                                <p>{{$xn->tieude}}</p>
                                                <small><fa class="fa-watch">{{$xn->created_at}}</fa></small>
                                            </div>
                                        </a>
                                    </div>
                                    @php
                                }
                                @endphp
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="news-all" align="left" style="margin-top: -40px; margin-left: 10px;">
                        <a href="danh-sach-tin-tuc" class="btn btn-general btn-green" role="button">{{ Lang::get('sub.seemore') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end -->

<!-- about -->
<div class="overlay-thought"></div>
<section id="thought" class="bg-parallax thought-bg">
  <div class="container">
    <div id="thought-desc" class="row title-bar title-bar-thought owl-carousel owl-theme">
      <div class="col-md-12 ">
        <div class="heading-border bg-white"></div>
        <p class="wow fadeInUp" data-wow-delay="0.4s">"Chỉ cần biết rằng, khi bạn thực sự muốn thành công, bạn sẽ không bao giờ từ bỏ, dù cho mọi thứ có tồi tệ đến đâu đi chăng nữa."</p>
        <h6>BKFA.COM</h6>
      </div>
      <div class="col-md-12 thought-desc">
        <div class="heading-border bg-white"></div>
        <p class="wow fadeInUp" data-wow-delay="0.4s">"Thật khó để chờ đợi một điều gì đó bạn biết có thể chẳng bao giờ xảy ra, nhưng còn khó hơn để từ bỏ khi đó là mọi điều mà bạn muốn."</p>
        <h6>BKFA.COM</h6>
      </div>
    </div>
  </div>         
</section>
<!-- end -->
<!-- documents most view -->
<section>
    <div  id="document" class="container-fluid ">
        <div class="row ">
            @foreach($dethixn as $dtxn)
            <div class="col-md-3 col-sm-6 desc-document wow fadeInUp" data-wow-delay="0.4s">
                <a href="chi-tiet-de-thi/{{ $dtxn->idmon}}/de{{ $dtxn->iddethi }}.html" style="text-decoration: none;">
                    <div class="desc-document-cont">
                        <div class="thumbnail-blogs ">
                            <img src="upload/images/dethi/anh/{{$dtxn->urlanh}} " class="img-fluid " alt="{{$dtxn->gioithieu}} ">
                        </div>
                        <div>
                            <h3>{{cutString($dtxn->gioithieu, 33)." ..."}}</h3>
                            <p class="desc">{{$dtxn->nam}}</p>
                        </div>
                        <div class="document-footer">
                            <i class="fa fa-heart-o"> 1</i>
                            <i class="fa fa-eye"> {{$dtxn->luotxem}}</i>
                            <i class="fa fa-arrow-circle-o-down"> 3</i>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- end -->

<!-- job -->
<section id="course " class="course bg-gray ">
    <div class="container ">
        <div class="row title-bar ">
            <div class="col-md-12 ">
                <h1 class="wow fadeInUp ">{{ Lang::get('sub.text1') }}</h1>
                <div class="heading-border "></div>
                <p class="wow fadeInUp " data-wow-delay="0.4s ">{{ Lang::get('sub.text2') }}</p>
            </div>
        </div>
        <div class="row wow animated fadeInUp " data-wow-duration="1s " data-wow-delay="0.5s ">
            <div class="col-md-3 col-sm-6 service-padding ">
                <div class="service-item ">
                    <div class="service-item-icon "> <i class="fa fa-user fa-3x "></i>
                    </div>
                    <div class="service-item-title ">
                        <h3>User Experience</h3>
                    </div>
                    <div class="service-item-desc ">
                        <p>Material Design and responsive with Bootstrap 4.0.</p>
                        <div class="content-title-underline-light "></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 service-padding ">
                <div class="service-item ">
                    <div class="service-item-icon "> <i class="fa fa-laptop fa-3x "></i>
                    </div>
                    <div class="service-item-title ">
                        <h3>Web Devlopment</h3>
                    </div>
                    <div class="service-item-desc ">
                        <p>Development with Laravel framework 5.6 - WAMP stack</p>
                        <div class="content-title-underline-light "></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 service-padding ">
                <div class="service-item ">
                    <div class="service-item-icon "> <i class="fa fa-facebook fa-3x "></i>
                    </div>
                    <div class="service-item-title ">
                        <h3>Social Network</h3>
                    </div>
                    <div class="service-item-desc ">
                        <p>Connect more and synchorous with Facebook api.</p>
                        <div class="content-title-underline-light "></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 service-padding ">
                <div class="service-item right-bord ">
                    <div class="service-item-icon "> <i class="fa fa-search fa-3x "></i>
                    </div>
                    <div class="service-item-title ">
                        <h3>Search engine</h3>
                    </div>
                    <div class="service-item-desc ">
                        <p>Full text search with Algodia search engine to get best performance.</p>
                        <div class="content-title-underline-light "></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end -->
@endsection