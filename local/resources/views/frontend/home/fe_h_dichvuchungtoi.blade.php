<div class="container-fluid mt-5 mb-4">
    <div class="container">
        <div class="row">
<<<<<<< HEAD
            @foreach($data['services'] as $key=>$item)
                <div class="col-md-4 mb-4">
                    <div class="fe-h-dvchungtoi">
                        {{ Html::image($item->image,'',array('class'=>'')) }}
                        <div class="fe-h-dvchungtoi-hover">
                            <div class="d-flex align-items-center justify-content-center pt-3">
                                <i class="fas fa-screwdriver fa-2x"></i> <span>{{$item->title}}</span>
                            </div>
                            <p class="p-4">{{$item->description}}</p>
                            <a href="{{URL::to('dich-vu/'.$item->path)}}">Xem Thêm</a>
=======
            <div class="col-md-4 mb-4">
                <div class="fe-h-dvchungtoi">
                    <img src="images/uploads/service-5.png" alt="" style="width: 100%;height: auto;">
                    <div class="fe-h-dvchungtoi-hover">
                        <div class="d-flex align-items-center justify-content-center pt-3">
                            <i class="fas fa-screwdriver fa-2x"></i> <span>SỬA CHỬA TẠI NHÀ</span>
>>>>>>> b8a259382b78bbc5f4f6942f0e564d7475ce5208
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>