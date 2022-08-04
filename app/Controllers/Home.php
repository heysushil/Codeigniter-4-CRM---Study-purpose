<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['seo'] = [
            'title' => 'Home',
            'keywords'=>'keywords',
            'description' => 'description',
        ];
        $data['page'] = __FUNCTION__;
        return view('crm/template/page', $data);
    }

    public function sign_up()
    {
        // $data['css'] = '';
        $data['seo'] = [
            'title' => ucfirst(__FUNCTION__),
            'keywords'=>'keywords',
            'description' => 'description',
        ];
        $data['page'] = __FUNCTION__;
        return view('crm/template/page', $data);
    }

    public function sign_up_data()
    {
        // $data['css'] = '';
        $data['seo'] = [
            'title' => ucfirst(__FUNCTION__),
            'keywords'=>'keywords',
            'description' => 'description',
        ];
        $data['page'] = __FUNCTION__;
        return view('crm/template/page', $data);
    }

    public function login()
    {
        // $data['css'] = '';
        $data['seo'] = [
            'title' => ucfirst(__FUNCTION__),
            'keywords'=>'keywords',
            'description' => 'description',
        ];
        $data['page'] = __FUNCTION__;
        return view('crm/template/page', $data);
    }
}
