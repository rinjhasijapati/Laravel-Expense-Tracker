<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index() {
        //home page ko file view
        return view('welcome');
    }

    public function displayCreateForm() {
        return view('create');
    }

    public function displayEditForm() {
        return view('edit');
    }

    public function store(Request $res) {
        dd($res);
    }
}
