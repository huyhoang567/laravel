<?php
    namespace App\Services;
    use Illuminate\Support\Facades\Session;
    class User{
        public static function extisUser(){
            if (Session::has('user')) {
                return true;
            }
            else
            return false;
        }
        public function getUser(){
            if(Session::has('user')==true){
                return Session::get('user');
            }
            else
            return false;
           // ............//
        }
        public function setUser(){
            
        }
    }

?>