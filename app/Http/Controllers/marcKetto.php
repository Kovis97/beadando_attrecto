<?php

namespace App\Http\Controllers;

use App\Models\marcKetto as ModelsMarcKetto;
use Illuminate\Http\Request;

class marcKetto extends Controller
{
    private $technikak = [
        [
            'id' => 1,
            'name' => 'PHP',
            'description' => 'backend'
        ],
        [
            'id' => 2,
            'name' => 'Angular',
            'description' => 'frontend'
        ],
        [
            'id' => 3,
            'name' => 'React',
            'description' => 'frontend'
        ]
        ];
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        return $this->technikak;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ModelsMarcKetto::all();
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
