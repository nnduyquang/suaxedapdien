<?php

namespace App\Repositories\Frontend;


use App\CategoryItem;
use App\Config;
use App\Post;

class FrontendRepository implements FrontendRepositoryInterface
{
    public function getFrontend()
    {
        $data = '';
        $services = Post::where('category_item_id', 1)->where('isActive', ACTIVE)->take(3)->get();
        foreach ($services as $key => $item) {
            $item->description = loai_bo_html_tag($item->description);
        }
        $data['services'] = $services;
        return $data;
    }

    public function getServiceDetail($path)
    {
        $data = '';
        $service=Post::where('path',$path)->first();
        $data['service'] = $service;
        return $data;
    }

    public function getFrontEndInfo()
    {
        $data = '';
        return $data;
    }


}