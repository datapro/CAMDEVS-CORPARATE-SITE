<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sme;
use App\Models\Scholarship;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
         // Fetch all users from the database
         $smes = Sme::all();
         $searchTerm = $request->input('query');
         $smes = Scholarship::where('code', 'LIKE', '%' . $searchTerm )->get();
        return view('admin.business', compact('smes','searchTerm'))->with('success','Record found');
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // for scholarship
    public function scholarship(Request $request){
           // Fetch all users from the database
           $schs = Scholarship::all();
           $searchTerm = $request->input('query');
           $schs = Scholarship::where('code', 'LIKE', '%' . $searchTerm )->get();
         // Pass users to the view
         return view('admin.scholarship', compact('schs','searchTerm'))->with('success','Record found');
       
     
    }
    public function dest(string $id)
    {
        //
        $sch= Scholarship::findOrFail($id);

         // Delete the feed
         $sch->delete();
 
         // Redirect to the user list with a success message
         return redirect('scholarship')->with('success','Record deleted successfully');
    }

    public function edits(string $id)
    {
        //
          // Fetch the post by its ID
          $sch = Scholarship::findOrFail($id);

          // Return the edit view with the post data
          return view('edit.scholarship', compact('sch'));
    }

    public function updatesh(Request $request, string $id)
    {
        //
         // Validate the form data
         $validatedData = $request->validate([
            'code' => 'required|string|max:255',
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
            'email' => 'required|string|max:255',
             ]);

        // Fetch the post by its ID
        $sch = Scholarship::findOrFail($id);

        // Update the post with new data
        $sch->code = $request->input('code');
        $sch->fname = $request->input('fname');
        $sch->sname = $request->input('sname');
        $sch->age = $request->input('age');
        $sch->university = $request->input('university');
        $sch->nin = $request->input('nin');
        $sch->school = $request->input('school');
        $sch->phone = $request->input('phone');
        $sch->membership = $request->input('membership');
        $sch->address = $request->input('address');
        $sch->lga = $request->input('lga');
        $sch->state = $request->input('state');
        $sch->stater= $request->input('stater');
        $sch->lgar= $request->input('lgar');
        $sch->email = $request->input('email');
   
       

        // Save the changes to the database
        $sch->save();

        // Redirect back with a success message
        return redirect('scholarship')->with('success', 'Post updated successfully.');
    }


   
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
          // Fetch the post by its ID
          $sme = Sme::findOrFail($id);

          // Return the edit view with the post data
          return view('edit.smer', compact('sme'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updates(Request $request, string $id)
    {
        //
         // Validate the form data
         $validatedData = $request->validate([
            'code' => 'required|string|max:255',
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
            'email' => 'required|string|max:255',
             ]);

        // Fetch the post by its ID
        $sme = Sme::findOrFail($id);

        // Update the post with new data
        $sme->code = $request->input('code');
        $sme->fname = $request->input('fname');
        $sme->sname = $request->input('sname');
        $sme->age = $request->input('age');
        $sme->university = $request->input('university');
        $sme->nin = $request->input('nin');
        $sme->school = $request->input('school');
        $sme->phone = $request->input('phone');
        $sme->membership = $request->input('membership');
        $sme->address = $request->input('address');
        $sme->lga = $request->input('lga');
        $sme->state = $request->input('state');
        $sme->stater= $request->input('stater');
        $sme->lgar= $request->input('lgar');
        $sme->email = $request->input('email');
   
       

        // Save the changes to the database
        $sme->save();

        // Redirect back with a success message
        return redirect('business')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $sme= Sme::findOrFail($id);

         // Delete the feed
         $sme->delete();
 
         // Redirect to the user list with a success message
         return redirect('business')->with('success','Record deleted successfully');
    }
}
