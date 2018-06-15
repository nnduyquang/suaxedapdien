<style>

</style>

<div class="container-fluid" id="fe_lo_info">
    <div class="container position-relative">

        <div class="row">
            <div class="col-md-12 position-relative float-right d-flex vertical-align-center justify-content-end">
                {{ Html::image('images/icon/zalo.png','',array('style'=>'width: 20px;height: 20px;margin-right: 5px')) }}
                <p> A.PHAN : 0901 123 123</p>
            </div>


        </div>
    </div>
</div>

<div class="container-fluid shadow-sm" id="fe_lo_menu">
    <div class="container">
        <div class="row">
            <div class="col-md-2" id="logo">
                {{ Html::image('images/logo/logo-suaxedapdien.png','',array('class'=>'')) }}
            </div>
            <div class="col-md-10 d-lg-block d-md-block d-sm-none d-none text-right" id="menu_top">
                <ul>
                    <li><a class="active" href="{{URL::to('/')}}">Trang Chủ</a></li>
                    <li><a href="{{URL::to('gioi-thieu')}}" href="">Giới Thiệu</a></li>
                    @foreach($listMenu['services'] as $key=>$data)
                        <li><a href="{{URL::to('dich-vu/'.$data->path)}}">{{$data->title}}</a></li>
                    @endforeach
                    <li><a href="{{URL::to('lien-he')}}" >Liên Hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


