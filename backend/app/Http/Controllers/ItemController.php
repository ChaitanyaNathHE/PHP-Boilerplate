<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        // Write the logic to get all  the items and return it as json in the response
        
    }

    public function store(Request $request)
    {
        // Write the logic to validate the request which should contain the name of the item as a string
        // Create a new item using the validated data
        // Return the item as json with a 201 status code
        
    }

    public function show(Item $item)
    {
        // Write the logic to get the item with the given id
        // Return the item as json

    }

    public function update(Request $request, Item $item)
    {
        // Write the logic to validate the request which should contain the name of the item as a string
        // Update the item using the validated data
        // Return the item as json
        
    }

    public function destroy(Item $item)
    {
        // Write the logic to delete the item with the given id
        // Return a json response with a success message
       
    }

    public function addStore(Item $item, Store $store)
    {
        // Write the logic to add the store with the given id to the item with the given id
        // Return a json response with a success message

    }

    public function removeStore(Item $item, Store $store)
    {
        // Write the logic to remove the store with the given id from the item with the given id
        // Return a json response with a success message
        
    }
}
