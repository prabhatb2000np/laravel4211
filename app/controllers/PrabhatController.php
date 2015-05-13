<?php
 
class PrabhatController extends BaseController {
 
    public function index()
    {
		  // BCrypt. Do I have this in PHP?
        $password = Hash::make('password');
    
        $data = array(
            'heading' => 'Hello Laravel (from Home)',
            'body' => 'This is awesome, from the HomeController',
            'password' => $password
        );
    
        return View::make('prabhat',$data);
       
    }
}
