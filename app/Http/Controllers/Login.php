<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
 
class UserController extends Controller
{
   
    public function index():
    {
        return view('login.blade.php', [
            'login' => User::findOrFail($id)
        ]);
    }
}