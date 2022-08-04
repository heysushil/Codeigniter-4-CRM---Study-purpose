<?php

    // $data['css'] = [
    //     '/public/crm_assets/css/vendors/font-awesome.css',
    //     '/public/crm_assets/css/vendors/icofont.css',
    //     '/public/crm_assets/css/vendors/themify.css',
    //     '/public/crm_assets/css/vendors/flag-icon.css',
    //     '/public/crm_assets/css/vendors/feather-icon.css',
    //     '/public/crm_assets/css/vendors/scrollbar.css',
    //     '/public/crm_assets/css/vendors/animate.css',
    //     '/public/crm_assets/css/vendors/date-picker.css',
    //     '/public/crm_assets/css/vendors/photoswipe.css',
    //     '/public/crm_assets/css/vendors/bootstrap.css',
    //     '/public/crm_assets/css/style.css',
    //     '/public/crm_assets/css/color-1.css',
    //     '/public/crm_assets/css/responsive.css',
    // ];
    if($page === 'login'){
        // print_r($data['css']);
        echo view('crm/'.$page);
    }elseif($page === 'sign_up'){
        echo view('crm/'.$page);
    }else{
        // print_r($data['css']);
        echo view('crm/template/header')
            . view('crm/'.$page)
            . view('crm/template/footer');
    }