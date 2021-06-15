<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class InstagramAuthController extends Controller
{
    public function complete() {
    $was_successful = request('result') === 'success';

    return view('web.instagram-auth-response-page', ['was_successful' => $was_successful]);
    }
}