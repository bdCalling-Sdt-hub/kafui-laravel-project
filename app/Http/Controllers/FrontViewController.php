<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontViewController extends Controller
{
    public function Home()
    {
        return view('Frontend.home');
    }

    public function about()
    {
        return view('Frontend.about');
    }

    public function service()
    {
        return view('Frontend.service');
    }

    public function singelService()
    {
        return view('Frontend.singel_service');
    }

    public function pricing()
    {
        return view('Frontend.pricing');
    }

    public function gallery()
    {
        return view('Frontend.gallery');
    }

    public function contact()
    {
        return view('Frontend.contact');
    }
    public function requestQueat()
    {
        return view('Frontend.rquest_queat');
    }

    public function faq()
    {
        return view('Frontend.faq');
    }
    public function project()
    {
        return view('Frontend.project');
    }

    public function singelProject()
    {
        return view('Frontend.single_project');
    }

    public function task(){
        return view('Frontend.task');
    }


}
