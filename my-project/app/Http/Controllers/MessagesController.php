<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = DB::table('messages')->get();
        return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('messages')->insert([
            "name" => $request->input('nameContact'),
            "email" => $request->input('emailContact'),
            "message" => $request->input('message'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),

        ]);
        return redirect()->route('messages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = DB::table('messages')->where('id', $id)->first();
        return view('messages.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $message = DB::table('messages')->where('id', $id)->first();
        return view('messages.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('messages')->where('id', $id)->update([
            "name" => $request->input('nameContact'),
            "email" => $request->input('emailContact'),
            "message" => $request->input('message'),
            "updated_at" => Carbon::now(),

        ]);
    return redirect()->route('messages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        DB::table('messages')->where('id', $id)->delete();
        return redirect()->route('messages.index');
    }
}
