<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\StripeClient;


use Stripe\Charge;
class PaymentController extends Controller
{
    // public function showForm()
    // {
    //     return view('payment-form');
    // }

    public function showForm()
   // public function showForm(Request $request, $id)
    {
        // $price = $request->query('price');  // Obtener el precio desde la URL
        // $amount = $request->query('quantity'); // Obtener la cantidad desde la URL

        return view('payment-form');

    }




    public function processPayment(Request $request)
    {
        try {

            Stripe::setApiKey(env('STRIPE_SECRET'));


            $charge = Charge::create([
                'amount' => $request->input('amount') * 100, // Stripe maneja los montos en centavos
                'currency' => 'usd',
                'source' => $request->input('stripeToken'),
                'description' => $request->input('description'),
            ]);

            return redirect()->back()->with('success', 'Pago realizado con éxito');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

}
