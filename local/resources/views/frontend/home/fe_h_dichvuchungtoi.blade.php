<div class="container-fluid mt-5 mb-4">
    <div class="container">
        <div class="row">
            @foreach($data['services'] as $key=>$item)
                <div class="col-md-4 mb-4">
                    <div class="fe-h-dvchungtoi">
                        <a href="{{URL::to('dich-vu/'.$item->path)}}">
                        {{ Html::image($item->image,'',array('class'=>'')) }}
                        <div class="fe-h-dvchungtoi-hover">
                            <div class="d-flex align-items-center justify-content-center pt-3">
                                <i class="fas fa-screwdriver fa-2x"></i> <span>{{$item->title}}</span>
                            </div>
                            <p class="p-4">{{$item->description}}</p>
                            Xem Thêm</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>