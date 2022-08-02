<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        if (Auth::check()) {
            $listVides = array("News", "Entertainment", "Celebs", "Movie", "Lifestyle", "Sports", "Tech", "Business", "Auto");
            $listEnterTaiment = array(
                "Kangana sad that her ‘Rangoon’ scenes were cut by censorboard",
                "Kajol-Ajay celebrate 18th wedding anniversary in Paris",
                "Shahid wishes he was offered this Aamir Khan’s film last year!",
                "Lipstick Under My Burkha: CBFC defends its move of banning the film",
                "Varun-Alia’s new song ‘Aashiq Surrender Hua’ is out on YouTube",
                "‘Jolly LLB 2’ box-office collection week 2",
                "Casting Ouch! The open dirty secret of showbiz culture in Bollywood",
                "Student arrested for the murder of model turned teacher",
                "Shahid wishes he was offered this Aamir Khan’s film last year!"
            );

            $lstTopStore = array(
                "PM unveils Shiva statue in Coimbatore on Mahashivratri",
                "PM Modi: Kanpur train accident was a conspiracy",
                "‘Sena, BJP have no option but to join hands again’",
                "Thousands bid adieu to martyred jawan in Kashmir",
                "Jayalalithaa’s niece Deepa floats political outfit",
                "‘China made mistake of ignoring India’s talent’",
                "Jayalalithaa’s niece Deepa floats political outfit"
            );

            return view('page.home', compact('listVides', 'listEnterTaiment', 'lstTopStore'));
        }

//        return redirect('/login');
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
