<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\BrazilState;
use App\Models\Country;
use App\Models\MaritalStatus;
use App\Models\Occupation;
use App\Models\ServiceType;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceTypes = ServiceType::orderBy('name')->get();
        $brazilStates = BrazilState::orderBy('name')->get();
        $countries = Country::orderBy('name')->get();
        $clients = Client::orderBy('updated_at')->paginate(15);

        return view(
            'client.listClients', 
            compact('serviceTypes', 'brazilStates', 'countries', 'clients')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brazilStates = BrazilState::orderBy('name')->get();
        $countries = Country::orderBy('name')->get();
        $maritalStatus = MaritalStatus::orderBy('name')->get();
        $occupations = Occupation::orderBy('name')->get();

        return view(
            'client.newClient', 
            compact('brazilStates', 'countries', 'maritalStatus', 'occupations')
        );
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
