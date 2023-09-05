<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class AdminUsers extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function render()
    {
        $data = UserModel::all();
        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";
        // exit;
        return view('admin.users', ['users'=>$data]);
    }

    // Delete user function
    public function deleteUser($id)
    {
        try {
            // Find the user record by ID and delete it if exists.
            UserModel::findOrFail($id)->delete();
            session()->flash('flashMessage', 'Ο χρήστης διαγράφηκε επιτυχώς.');
        } catch (\Exception $e) {
            session()->flash('flashMessageDanger', 'Κάτι πήγε στραβά... Παρακαλώ προσπαθήστε πάλι.');
        }
        
        return redirect()->route('admin.users'); // Redirect back tou admin edit user page.
    }

    public function insertUser()
    {
        
    }
}
