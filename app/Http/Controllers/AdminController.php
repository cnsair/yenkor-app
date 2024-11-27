<?php
namespace App\Http\Controllers;

use App\Models\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Typically, you would return a view here or return a list of admins
        // return view('admin.index', ['admins' => Admin::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.create'); // Add the view for creating an admin
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Implement the logic to store a new admin here
        // Validate and create a new admin instance
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        // return view('admin.show', compact('admin')); // Show details for a specific admin
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        // return view('admin.edit', compact('admin')); // Show form to edit an admin
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        // Implement the logic to update an existing admin's information
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        // Implement the logic to delete an admin here
        // $admin->delete();
        // return redirect()->route('admin.index')->with('success', 'Admin deleted successfully');
    }

    /**
     * Show the form for editing the profile of the logged-in admin.
     */
    public function editProfile()
    {
        // Retrieve the logged-in admin's information
        $admin = Auth::user();  // Assuming you're using the default User model
        return view('admin.edit-profile', compact('admin'));
    }

    /**
     * Update the profile of the logged-in admin.
     */
    public function updateProfile(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Retrieve the authenticated user
        $user = Auth::user(); // If using Admin model, use Auth::guard('admin')->user()

        if ($user) {
            // Update the user's name and email
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            
            // If a new password is provided, hash it and update
            if ($request->filled('password')) {
                $user->password = bcrypt($request->input('password'));
            }

            // Save the updated information
            $user->save();

            // Redirect with success message
            return redirect()->back()->with('success', 'Profile updated successfully.');
        }

        // If user not found, return error message
        return redirect()->back()->with('error', 'User not found.');
    }
}
