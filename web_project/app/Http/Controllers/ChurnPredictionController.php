<?php

namespace App\Http\Controllers;

use App\Models\ChurnPrediction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChurnPredictionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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
        $http = new \GuzzleHttp\Client;
        $response = $http->post('http://127.0.0.1:5000/predict', [
            'form_params' => [
                'credit_score' => $request->input('credit_score'),
            'country' => $request->input('country'),
            'gender' => $request->input('gender'),
            'age' =>$request->input('age'), 
            'tenure' =>$request->input('tenure'),
            'balance' =>$request->input('balance'),
            'products_number' => $request->input('products_number'),
            'credit_card' => $request->input('credit_card'),
            'active_member' => $request->input('active_member'),
            'estimated_salary' =>$request->input('estimated_salary'),
            ]
        ]);
        

        $content = json_decode($response->getBody()->getContents());

        $msg = "";
        foreach($content as $result){
            $msg =  $result; 
        }
        
        
        return view('admin.BankCustomerPrediction')->with('successMsg',$msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChurnPrediction  $churnPrediction
     * @return \Illuminate\Http\Response
     */
    public function show(ChurnPrediction $churnPrediction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChurnPrediction  $churnPrediction
     * @return \Illuminate\Http\Response
     */
    public function edit(ChurnPrediction $churnPrediction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChurnPrediction  $churnPrediction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChurnPrediction $churnPrediction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChurnPrediction  $churnPrediction
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChurnPrediction $churnPrediction)
    {
        //
    }
}
