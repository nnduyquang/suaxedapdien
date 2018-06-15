<style>
    #ser_content .description{
        line-height: 1.8;
        margin-bottom: 20px;
    }
    div.sxdd-titl-nav p {
        padding-bottom: 10px;
        display: inline-block;
        position: relative;
        font-size: 22px;
        font-weight: 600;
        border-bottom: 2px solid #5b5e61;
    }

    div.sxdd-titl-nav p:before {
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
<div id="ser_content">


    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5 text-center sxdd-titl-nav">
                    <p>{{$data['service']->title}}</p>
                </div>
                <div class="col-md-12 mt-3 mb-5">
                    <div class="description">
                        {!! $data['service']->content !!}
                    </div>
                    @include('frontend.home.fe_h_mainservices')
                </div>

            </div>
        </div>
    </div>
</div>
