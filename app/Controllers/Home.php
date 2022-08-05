<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
    function __construct()
    {
        $this->userModel = new UserModel();   
    }

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

    function db()
    {
        $query = 'CREATE TABLE IF NOT EXISTS user(
            id int(11) not null auto_increment primary key,
            firstName varchar(100),
            lastName varchar(100),
            email varchar(100),
            password varchar(300)
        )';
        $result = db_connect()->query($query);
        if($result == true){
            echo 'tablel created';
        }else{
            echo 'table not created';
        }
        // echo 'table created successfully.';
    }
}
