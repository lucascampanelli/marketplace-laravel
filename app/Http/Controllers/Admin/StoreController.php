<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $stores = \App\Store::paginate(10);

        return view('admin.stores.index', compact('stores'));
    }

    public function create()
    {
        $users = \App\User::all(['id', 'name']);

        return view('admin.stores.create', compact('users'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $user = \App\User::find($data['user']);
        $store = $user->store()->create($data);

        return $store;
    }
}
