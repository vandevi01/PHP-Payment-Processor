<?php

namespace App\Http\Controllers;


use App\Order;
use App\Payment;
use Illuminate\Support\Facades\Input;

class PaymentController extends Controller {

  function __construct() {
    // setting some random value in session

    /**
     * I have prepared just a sample code wrt. given code so in PaymentController's constructor .
     * I am adding $15 as cart value in session and setting UserID 1.
     **/
    session(['orderAmount' => 15]);
    session(['user_id' => 1]);
  }

  function index() {
    return view('checkout');
  }

  function saveCheckout() {
    $order = new Order();
    $order->user_id = session('user_id'); // It must use Auth::user()->id; but as of now we don't have Auth here in demo se taking user_id from session values
    $order->amount = session('orderAmount');
    $order->status = 'in-progress';
    $order->payment_id = 0;
    $order->submitted_at = date('Y-m-d H:i:s');
    $order->save();
    session(['order_id' => $order->id]);

    $payment = new Payment();
    $payment->name = Input::get('fname') .' '.Input::get('lname');
    $payment->company = Input::get('company');
    $payment->address_line_one = Input::get('addy1');
    $payment->address_line_two = Input::get('addy2');
    $payment->city = Input::get('city');
    $payment->state = Input::get('state');
    $payment->zip = Input::get('zip');
    $payment->card_number = Input::get('cardNo');
    $payment->expiry_month = Input::get('exMo');
    $payment->expiry_year = Input::get('exYr');
    $payment->time_created = date('Y-m-d H:i:s');
    $payment->save();

    session(['payment_id' => $payment->id]);

    $order->payment_id = $payment->id;
    $order->save();

    $this->webHookForPaymentStatus();
  }

  /* This is just a dummy webhook in realtime case it must be called using our payment getway webhook only
  */
  private function webHookForPaymentStatus() {

    $payment = Payment::find(session('payment_id'));
    $payment->status = 'paid';
    $payment->save();

    $order = Order::find(session('order_id'));
    $order->status = 'paid';
    $order->save();

    //in case failure
    if(false) {
      $this->failure();
    }
    // in this demo there is no payment gateway call so after payment details page you will be always go to default order complete page.
    return redirect('complete');
  }

  function complete() {
    return view('complete');
  }

  function failure() {
    return view('failure');
  }

}