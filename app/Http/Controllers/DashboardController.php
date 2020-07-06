<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $pageConfigs = [
            'pageHeader' => false,
            'theme' => 'light',
            'navbarColor' => 'bg-primary',
            'footerType' => 'sticky'
        ];

        return view('/pages/dashboard', [
            'pageConfigs' => $pageConfigs
        ]);
    }
}

