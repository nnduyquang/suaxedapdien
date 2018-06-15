<?php

namespace App\Repositories\Frontend;

interface FrontendRepositoryInterface
{
    public function getFrontend();

    public function getFrontEndInfo();

    public function getServiceDetail($path);
}