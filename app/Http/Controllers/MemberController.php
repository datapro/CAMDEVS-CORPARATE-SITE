<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Join;
use App\Models\Skill;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
          // Fetch all users from the database
          $joins = Join::all();
          $searchTerm = $request->input('query');
          $joins = join::where('nin', 'LIKE', '%' . $searchTerm )->get();
          // Fetch all users from the database
         return view('admin.member', compact('joins','searchTerm'))->with('success','Record found');
       
    
    }


// for skill report
    public function skill(Request $request){
         // Fetch all users from the database
         $skills = Skill::all();
         $searchTerm = $request->input('query');
         $skills = Skill::where('code', 'LIKE', '%' . $searchTerm )->get();
         // Fetch all users from the database
        return view('admin.skill', compact('skills','searchTerm'))->with('success','Record found');
    }
    public function destsk(string $id)
    {
        //
         // Find the user by ID
         $skill = Skill::findOrFail($id);

         // Delete the join
         $skill->delete();
 
         // Redirect to the user list with a success message
         return redirect('skill')->with('error','Record deleted successfully');
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
         // Fetch the post by its ID
         $skill = Skill::findOrFail($id);

         // Return the edit view with the post data
         return view('edit.skill', compact('skill'));
    }
    
    public function updateskill(Request $request, string $id)
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
        $skill = Skill::findOrFail($id);

        // Update the post with new data
        $skill->code = $request->input('code');
        $skill->fname = $request->input('fname');
        $skill->sname = $request->input('sname');
        $skill->age = $request->input('age');
        $skill->university = $request->input('university');
        $skill->nin = $request->input('nin');
        $skill->school = $request->input('school');
        $skill->phone = $request->input('phone');
        $skill->membership = $request->input('membership');
        $skill->address = $request->input('address');
        $skill->lga = $request->input('lga');
        $skill->state = $request->input('state');
        $skill->stater= $request->input('stater');
        $skill->lgar= $request->input('lgar');
        $skill->email = $request->input('email');
   
       

        // Save the changes to the database
        $skill->save();

        // Redirect back with a success message
        return redirect('skill')->with('success', 'Post updated successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
         // Fetch the post by its ID
         $join = Join::findOrFail($id);

         // Return the edit view with the post data
         return view('edit.member', compact('join'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
         // Validate the form data
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
            'email' => 'required|string|max:255',
             ]);

        // Fetch the post by its ID
        $join = Join::findOrFail($id);

        // Update the post with new data
        $join->fname = $request->input('fname');
        $join->sname = $request->input('sname');
        $join->age = $request->input('age');
        $join->university = $request->input('university');
        $join->nin = $request->input('nin');
        $join->school = $request->input('school');
        $join->phone = $request->input('phone');
        $join->membership = $request->input('membership');
        $join->address = $request->input('address');
        $join->lga = $request->input('lga');
        $join->state = $request->input('state');
        $join->stater= $request->input('stater');
        $join->lgar= $request->input('lgar');
        $join->email = $request->input('email');
   
       

        // Save the changes to the database
        $join->save();

        // Redirect back with a success message
        return redirect('member')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
         // Find the user by ID
         $join = Join::findOrFail($id);

         // Delete the join
         $join->delete();
 
         // Redirect to the user list with a success message
         return redirect('member');
    }
}
