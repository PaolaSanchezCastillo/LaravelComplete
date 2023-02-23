<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; 

class PostController extends Controller
{
  
    public function index()
    {
        return 'Its working!';
    }

 
    public function create()
    {
        return 'This method works created a new Database element'; 
    }

  
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)

    {
        return view('showData')->with('dato', $id); 
      //  return 'This id is from show ' . $id;
        //
    }

 
    public function edit($id)
    {

        return 'This id is from edit ' .$id; 
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }


    public function contact(){
        return view('contact');
    }

    public function showData(){
        //
    }
}
