<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\Display_lib;
class IndexController extends Controller
{
    public function index()
    {
       
        $data_nav=array();
        $data_content['title']="Industry";
        $path='index_page';
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::index($path,$data,$data_nav,$data_content);
    }
}
