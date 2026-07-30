<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        // Write the logic to get all  the stores and return it as json in the response
        
    }

    public function store(Request $request)
    {
        // Write the logic to validate the request which should contain the name of the store as a string
        // Create a new store using the validated data
        // Return the store as json with a 201 status code
       
    }

    public function show(Store $store)
    {
        // Write the logic to get the store with the given id
        // Return the store as json

    }

    public function update(Request $request, Store $store)
    {
        // Write the logic to validate the request which should contain the name of the store as a string
        // Update the store using the validated data
        // Return the store as json
       
    }

    public function destroy(Store $store)
    {
        // Write the logic to delete the store with the given id
        // Return a json response with a message saying "Store deleted successfully"
      
    }
}
