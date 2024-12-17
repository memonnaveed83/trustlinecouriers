<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Price;
use App\Models\Quote;


class QuoteController extends Controller
{



public function getQuote(Request $request)
{
    // Validate the form inputs
    $validatedData = $request->validate([
        'city' => 'required|string',
        'qty' => 'required|integer|min:1',
        'service' => 'required|string'
    ]);

    // Fetch the price for the selected city
    $price = Price::where('city', $validatedData['city'])->value('price');

    if (!$price) {
        return back()->with('error', 'Price not available for the selected city.');
    }

    // Calculate the total amount
    $qty = $validatedData['qty'];
    $totalAmount = $price * $qty;

    // Save the quote to the database
    Quote::create([
        'name' => $request->name ?? 'Guest',
        'email' => $request->email ?? 'guest@example.com',
        'city' => $validatedData['city'],
        'qty' => $qty,
        'price' => $price,
        'totalamount' => $totalAmount,
    ]);

    // Return the quote to the visitor
    return back()->with('success', "The total quote for {$qty} items in {$validatedData['city']} is {$totalAmount}.");
}

}
