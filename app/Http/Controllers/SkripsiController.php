<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkripsiController extends Controller
{
    public function index()
    {
        if (strtolower($sort) != "desc") {
            $sort = "asc";
        }
        $type = "FYP";
        $fields = array(
            "Title",
            "Student Name",
            "Supervisor",
            "Submission Year",
            "Abstract"
        );
        $location = "final_year_projects";
        $datas = DB::select('select * from final_year_projects order by title '.strtoupper($sort));
        return view('general.display', compact('datas', 'sort', 'type', 'fields', 'location'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FinalYearProject $finalYearProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FinalYearProject $finalYearProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FinalYearProject $finalYearProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FinalYearProject $finalYearProject)
    {
        //
    }
    
}

