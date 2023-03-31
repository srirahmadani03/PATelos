<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
 
class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index():
    {
        return view('dashboard.blade.php', [
            'dashboard' => User::findOrFail($id)
        ]);
    }
}