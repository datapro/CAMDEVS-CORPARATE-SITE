<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;
use App\Models\Farmer;

class FeedingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
          // Fetch the post by its ID
         $feeds = Feed::all();
         $searchTerm = $request->input('query');
         $feeds = Feed::where('code', 'LIKE', '%' . $searchTerm )->get();
    
         // Pass users to the view
         return view('admin.feeding', compact('feeds','searchTerm'))->with('success','Record found');
       
       
    }
//  for agro report
    public function agro(Request $request){
          // Fetch the post by its ID
         $agros = Farmer::all();
         $searchTerm = $request->input('query');
         $agros = Farmer::where('code', 'LIKE', '%' . $searchTerm )->get();
    
         // Pass users to the view
         return view('admin.agro', compact('agros','searchTerm'))->with('success','Record found');
      
    }
   
    public function edits(string $id)
    {
        //
          // Fetch the post by its ID
          $agro = Farmer::findOrFail($id);

          // Return the edit view with the post data
          return view('edit.agrof', compact('agro'));
    }

    public function updatef(Request $request, string $id)
    {
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
        $agro = Farmer::findOrFail($id);

        // Update the post with new data
        $agro->code = $request->input('code');
        $agro->fname = $request->input('fname');
        $agro->sname = $request->input('sname');
        $agro->age = $request->input('age');
        $agro->university = $request->input('university');
        $agro->nin = $request->input('nin');
        $agro->school = $request->input('school');
        $agro->phone = $request->input('phone');
        $agro->membership = $request->input('membership');
        $agro->address = $request->input('address');
        $agro->lga = $request->input('lga');
        $agro->state = $request->input('state');
        $agro->stater= $request->input('stater');
        $agro->lgar= $request->input('lgar');
        $agro->email = $request->input('email');
   
       

        // Save the changes to the database
        $agro->save();

        // Redirect back with a success message
        return redirect('agro')->with('success', 'Post updated successfully.');
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
         $feed = Feed::findOrFail($id);

         // Return the edit view with the post data
         return view('edit.feed', compact('feed'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
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
        $feed = Feed::findOrFail($id);

        // Update the post with new data
        $feed->code = $request->input('code');
        $feed->fname = $request->input('fname');
        $feed->sname = $request->input('sname');
        $feed->age = $request->input('age');
        $feed->university = $request->input('university');
        $feed->nin = $request->input('nin');
        $feed->school = $request->input('school');
        $feed->phone = $request->input('phone');
        $feed->membership = $request->input('membership');
        $feed->address = $request->input('address');
        $feed->lga = $request->input('lga');
        $feed->state = $request->input('state');
        $feed->stater= $request->input('stater');
        $feed->lgar= $request->input('lgar');
        $feed->email = $request->input('email');
   
       

        // Save the changes to the database
        $feed->save();

        // Redirect back with a success message
        return redirect('feeding')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
         // Find the user by ID
         $feed= Feed::findOrFail($id);

         // Delete the feed
         $feed->delete();
 
         // Redirect to the user list with a success message
         return redirect('feeding')->with('success','Record deleted successfully');
    }
}
