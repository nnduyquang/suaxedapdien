<style>
    div.sxdd-titl-nav p{
        padding-bottom: 10px;
        display: inline-block;
        position: relative;
        font-size: 22px;
        font-weight: 600;
        border-bottom: 2px solid #5b5e61;
    }

    div.sxdd-titl-nav p:before{
        position: absolute;
        bottom: -2px;
        left: 50%;
        content: '';
        width: 68px;
        height: 2px;
        background-color: red;
        transform: translate(-50%);
    }
</style>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 text-center sxdd-titl-nav">
                <p>DỊCH VỤ SỬA CHỮA XE ĐIỆN TẬN NHÀ</p>
            </div>
            <div class="col-md-12 mt-3 mb-5">
               {!! $data['service']->content !!}
                @include('frontend.home.fe_h_mainservices')
            </div>

        </div>
    </div>
</div>
