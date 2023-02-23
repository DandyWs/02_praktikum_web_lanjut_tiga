<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return 'Silahkan Email<br>
        <a href=mailto:dandyws71@gmail.com>Dandyws71@gmail.com</a>';
    }
}
