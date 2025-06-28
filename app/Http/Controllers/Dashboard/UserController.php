<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends MainController
{
    public function __construct()
    {
        parent::__construct();
        $this->setClass(request('type'));
    }

    public function index()
    {
        $users=User::filter()->paginate($this->perPage);
        return view('admin.users.index', compact('users'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function active(User $user)
    {
        $user->update([
            'active' => ! ($user->active),
        ]);
        return response()->json([
            'success' => true,
            'active' => $user->active,
        ]);
    }
}
