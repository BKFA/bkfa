<section id="home" style="z-index: 2">
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active slides">
                <div class="overlay"></div>
                <div class="slide-1"></div>
                <div class="form-search" style="margin-top: 50px">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8 botCol">
                            <form action="tim-kiem" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="input-group input-group-lg">
                                    <button type="submit" style="border-radius: 50px 0px 0px 50px; background-color: #268ff9; border: 2px solid #FFF; color: #FFF;" class="btn btn-default" id="search-button"><i class="fa fa-search"></i></button>
                                    <input style="border-radius: 0px 50px 50px 0px;" type="search" class="form-control input-search" placeholder="{{ Lang::get('sub.search') }} ..." id="input-search" name="search" autocomplete="off">
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <!--row-->
                </div>
                <div class="hero ">
                    <hgroup class="wow fadeInUp">
                        <h1><span ><a href="" class="typewrite" data-period="2000" data-type='[" BKFA.COM", "{{ Lang::get('sub.docweb') }}"]'><span class="wrap"> </span></a></span> <i class="fa fa-pencil"> </i></h1>
                        <h3>{{ Lang::get('sub.library') }}</h3>
                    </hgroup>
                    <a href="https://www.youtube.com/watch?v=stxlq4tXTaQ" class="btn btn-general btn-green wow fadeInUp" role="button" target="_blank">{{ Lang::get('sub.manual') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>