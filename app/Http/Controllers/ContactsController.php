<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }
}
