<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Join;
use App\Models\Feed;
use App\Models\Skill;
use App\Models\Scholarship;
use App\Models\Sme;
use App\Models\Farmer;

class PageController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        return view('pages.services');
    }

    public function feed(){
        return view('pages.feed');
    }
    public function feedsave(Request $request){
         // Validate the input
         $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'sname' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'university' => 'required|string|max:255',
            'nin' => 'required|string|max:255',
            'school' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'membership' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'lga' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'stater' => 'required|string|max:255',
            'lgar' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:feeds',
            'code' => 'required|string|max:255|unique:feeds',
         ],
         [
            'email.unique' => 'This email address is already registered. Please use a different email.',
            'code.unique' => 'This Membership code is already used. Please ask admin for the new code.',
            
        ]);
          // create member
          $user = Feed::create([
            'code' => $validatedData['code'],
            'fname' => $validatedData['fname'],
            'sname' => $validatedData['sname'],
            'age' => $validatedData['age'],
            'address' => $validatedData['address'],
            'phone' => $validatedData['phone'],
            'university' => $validatedData['university'],
            'nin' => $validatedData['nin'],
            'school' => $validatedData['school'],
            'membership' => $validatedData['membership'],
            'lga' => $validatedData['lga'],
            'state' => $validatedData['state'],
            'lgar' => $validatedData['lgar'],
            'stater' => $validatedData['stater'],
            'email' => $validatedData['email'],
        
        ]);
          // Redirect to a different page, e.g., dashboard
          return redirect('feed')->with('success', 'Feeding registration successful!');
    }
    public function join(){
        return view('pages.join');
    }
    public function joinsave(Request $request){
         // Validate the input
         $validatedData = $request->validate([
             'sname' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'university' => 'required|string|max:255',
            'nin' => 'required|string|max:255',
            'school' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'membership' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'lga' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'stater' => 'required|string|max:255',
            'lgar' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:joins',
         ],
         [
            'email.unique' => 'This email address is already registered. Please use a different email.',
            
        ]);
          // create member
          $user = Join::create([
            'fname' => $validatedData['sname'],
            'sname' => $validatedData['fname'],
            'age' => $validatedData['age'],
            'address' => $validatedData['address'],
            'phone' => $validatedData['phone'],
            'university' => $validatedData['university'],
            'nin' => $validatedData['nin'],
            'school' => $validatedData['school'],
            'membership' => $validatedData['membership'],
            'lga' => $validatedData['lga'],
            'state' => $validatedData['state'],
            'lgar' => $validatedData['lgar'],
            'stater' => $validatedData['stater'],
            'email' => $validatedData['email'],
        
        ]);
          // Redirect to a different page, e.g., dashboard
          return redirect('join')->with('success', 'Membership registration successful!');

    }
    public function scholars(){
        return view ('pages.scholars');
    }
    public function scholarssave(Request $request){
          // Validate the input
          $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'sname' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'university' => 'required|string|max:255',
            'nin' => 'required|string|max:255',
            'school' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'membership' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'lga' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'stater' => 'required|string|max:255',
            'lgar' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:scholarships',
            'code' => 'required|string|max:255|unique:scholarships',
         ],
         [
            'email.unique' => 'This email address is already registered. Please use a different email.',
            'code.unique' => 'This Membership code is already used. Please ask admin for the new code.',
            
        ]);
          // create member
          $user = Scholarship::create([
            'code' => $validatedData['code'],
            'fname' => $validatedData['fname'],
            'sname' => $validatedData['sname'],
            'age' => $validatedData['age'],
            'address' => $validatedData['address'],
            'phone' => $validatedData['phone'],
            'university' => $validatedData['university'],
            'nin' => $validatedData['nin'],
            'school' => $validatedData['school'],
            'membership' => $validatedData['membership'],
            'lga' => $validatedData['lga'],
            'state' => $validatedData['state'],
            'lgar' => $validatedData['lgar'],
            'stater' => $validatedData['stater'],
            'email' => $validatedData['email'],
        
        ]);
          // Redirect to a different page, e.g., dashboard
          return redirect('scholars')->with('success', 'Scholarship registration successful!');
    }
    public function sme(){
        return view('pages.sme');
    }

    public function smesave(Request $request){
         // Validate the input
         $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'sname' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'university' => 'required|string|max:255',
            'nin' => 'required|string|max:255',
            'school' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'membership' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'lga' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'stater' => 'required|string|max:255',
            'lgar' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:smes',
            'code' => 'required|string|max:255|unique:smes',
         ],
         [
            'email.unique' => 'This email address is already registered. Please use a different email.',
            'code.unique' => 'This Membership code is already used. Please ask admin for the new code.',
            
        ]);
          // create member
          $user = Sme::create([
            'code' => $validatedData['code'],
            'fname' => $validatedData['fname'],
            'sname' => $validatedData['sname'],
            'age' => $validatedData['age'],
            'address' => $validatedData['address'],
            'phone' => $validatedData['phone'],
            'university' => $validatedData['university'],
            'nin' => $validatedData['nin'],
            'school' => $validatedData['school'],
            'membership' => $validatedData['membership'],
            'lga' => $validatedData['lga'],
            'state' => $validatedData['state'],
            'lgar' => $validatedData['lgar'],
            'stater' => $validatedData['stater'],
            'email' => $validatedData['email'],
        
        ]);
          // Redirect to a different page, e.g., dashboard
          return redirect('sme')->with('success', 'Small Medium Enterprise business registration successful!');
    }
    public function training(){
        return view('pages.training');
    }
    public function trainingsave(Request $request){
          // Validate the input
          $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'sname' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'university' => 'required|string|max:255',
            'nin' => 'required|string|max:255',
            'school' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'membership' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'lga' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'stater' => 'required|string|max:255',
            'lgar' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:skills',
            'code' => 'required|string|max:255|unique:skills',
         ],
         [
            'email.unique' => 'This email address is already registered. Please use a different email.',
            'code.unique' => 'This Membership code is already used. Please ask admin for the new code.',
            
        ]);
          // create member
          $user = Skill::create([
            'code' => $validatedData['code'],
            'fname' => $validatedData['fname'],
            'sname' => $validatedData['sname'],
            'age' => $validatedData['age'],
            'address' => $validatedData['address'],
            'phone' => $validatedData['phone'],
            'university' => $validatedData['university'],
            'nin' => $validatedData['nin'],
            'school' => $validatedData['school'],
            'membership' => $validatedData['membership'],
            'lga' => $validatedData['lga'],
            'state' => $validatedData['state'],
            'lgar' => $validatedData['lgar'],
            'stater' => $validatedData['stater'],
            'email' => $validatedData['email'],
        
        ]);
          // Redirect to a different page, e.g., dashboard
          return redirect('training')->with('success', 'Skill Acquisition Training registration successful!');
    }
    public function farmers(){
        return view('pages.farmers');
    }
    public function farmerssave(Request $request){
          // Validate the input
          $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'sname' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'university' => 'required|string|max:255',
            'nin' => 'required|string|max:255',
            'school' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'membership' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'lga' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'stater' => 'required|string|max:255',
            'lgar' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:farmers',
            'code' => 'required|string|max:255|unique:farmers',
         ],
         [
            'email.unique' => 'This email address is already registered. Please use a different email.',
            'code.unique' => 'This Membership code is already used. Please ask admin for the new code.',
            
        ]);
          // create member
          $user = Farmer::create([
            'code' => $validatedData['code'],
            'fname' => $validatedData['fname'],
            'sname' => $validatedData['sname'],
            'age' => $validatedData['age'],
            'address' => $validatedData['address'],
            'phone' => $validatedData['phone'],
            'university' => $validatedData['university'],
            'nin' => $validatedData['nin'],
            'school' => $validatedData['school'],
            'membership' => $validatedData['membership'],
            'lga' => $validatedData['lga'],
            'state' => $validatedData['state'],
            'lgar' => $validatedData['lgar'],
            'stater' => $validatedData['stater'],
            'email' => $validatedData['email'],
        
        ]);
          // Redirect to a different page, e.g., dashboard
          return redirect('farmers')->with('success', 'Farmers Agro Allied  registration successful!');
        
    }
}
