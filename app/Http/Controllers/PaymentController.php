<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
namespace App\Http\Controllers;

use App\Models\PaymentOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|string',
            'nomor_kartu' => 'sometimes|required_if:payment_method,kartu-kredit|nullable|string',
            'nama_kartu' => 'sometimes|required_if:payment_method,kartu-kredit|nullable|string',
            'tanggal_kadaluarsa' => 'sometimes|required_if:payment_method,kartu-kredit|nullable|date',
            'cvv' => 'sometimes|required_if:payment_method,kartu-kredit|nullable|string',
            'email_paypal' => 'sometimes|required_if:payment_method,paypal|nullable|email',
            'jenis_bank' => 'sometimes|required_if:payment_method,transfer-bank|nullable|string',
            'nomor_rekening' => 'sometimes|required_if:payment_method,transfer-bank|nullable|string',
        ]);

        $paymentOption = PaymentOption::create([
            'user_id' => Auth::id(),
            'order_id' => $request->input('order_id'),
            'payment_method' => $request->input('payment_method'),
            'nomor_kartu' => $request->input('nomor_kartu'),
            'nama_kartu' => $request->input('nama_kartu'),
            'tanggal_kadaluarsa' => $request->input('tanggal_kadaluarsa'),
            'cvv' => $request->input('cvv'),
            'email_paypal' => $request->input('email_paypal'),
            'jenis_bank' => $request->input('jenis_bank'),
            'nomor_rekening' => $request->input('nomor_rekening'),
        ]);

        return redirect()->route('profile.show')->with('status', 'Payment option saved successfully');
    }
}
