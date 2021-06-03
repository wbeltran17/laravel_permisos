<?php

namespace App\Http\Controllers;

use App\Models\BookController;
use Illuminate\Http\Request;

class BookControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookList = BookController::all();
        return view('book.list', compact('bookList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookController  $bookController
     * @return \Illuminate\Http\Response
     */
    public function show(BookController $bookController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookController  $bookController
     * @return \Illuminate\Http\Response
     */
    public function edit(BookController $bookController)
    {

        return view('book.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookController  $bookController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookController $bookController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookController  $bookController
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookController $bookController)
    {
        //
    }
}
