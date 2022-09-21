<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class homeCtrl extends Controller
    {
        public function home(){
            return view('pages.home');
        }
        public function about(){
            return view('pages.about');
        }
        public function services(){
            return view('pages.services');
        }
        public function contactus(){
            return view('pages.contactus');
        }
        public function team(){
            return view('pages.team');
        }
    }

?>
