<?php

namespace App\Http\Controllers\User;

use App\Model\user\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(post $postslug)
    {
        return view('user.contact', compact('postslug'));
    }
}
