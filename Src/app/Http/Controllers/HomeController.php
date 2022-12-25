<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function numberGenerator(Request $request){
        //dd($request->phone_number);
        $request->all();

        $contactsCount = $request->contacts_count;
        $phoneCode = $request->phone_code;
        $phoneNumber = $request->phone_number;
        if(strpos($request->phone_number, '0') === 0){
            $phoneNumber = substr($phoneNumber, 1);
        }
        
        $limit = $phoneNumber+$contactsCount;

        //dd($limit);

        //dd($phoneNumber, $contactsCount, $phoneCode);

        for ($x = $phoneNumber; $x < $limit; $x++) {        
            $nmbrs = array($x); 
            
            foreach ($nmbrs as $number){
                $number = $phoneCode.$number;
                echo "$number<br>";
            }
                   
        }
            
        //return view('home',compact('nmbrs','number'));
    }
}
