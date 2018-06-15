@extends('frontend.master')
@section('title')
    SỬA XE ĐẠP ĐIỆN
@stop
@section('description')
    Dịch vụ sửa xe đạp điện tận nhà, giá tốt phải chăng, chúng tôi cam kết sao khi sữa đảm bảo linh kiện đúng chất lượng
    giá tốt nhất. dịch vụ tận tình. Liên hệ : 0903 123 123
@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
@stop

@section('container')

    @include('frontend.home.fe_h_slider')
    @include('frontend.home.fe_h_slogan')
    @include('frontend.home.fe_h_dichvuchungtoi')
    @include('frontend.home.fe_h_mainservices')
    @include('frontend.home.fe_h_bottombgscroll')
    @include('frontend.home.fe_h_quickcontact')


@stop