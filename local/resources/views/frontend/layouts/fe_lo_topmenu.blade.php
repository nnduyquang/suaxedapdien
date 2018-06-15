<style>

</style>

<div class="container-fluid" id="fe_lo_info">
    <div class="container position-relative">

        <div class="row pt-1 pb-1">

            <div class="col-md-12 float-right align-items-center d-flex justify-content-end top-zalo">
                {{ Html::image('images/icon/zalo.png','',array('style'=>'width: 20px;height: 20px;margin-right: 5px')) }}
                <p> A.PHAN : 0904 9678 20</p>
            </div>


        </div>
    </div>
</div>

<div class="container-fluid shadow-sm" id="fe_lo_menu">
    <div class="container">
        <div class="row">
            <div class="col-md-2" id="logo">
                {{ Html::image('images/logo/logo-suaxedapdien2.png','',array('class'=>'')) }}
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


