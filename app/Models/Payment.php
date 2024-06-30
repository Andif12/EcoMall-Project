<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'payment_method',
        'payment_status',
        'payment_date',
        'amount',
        'nomor_kartu',
        'nama_kartu',
        'tanggal_kadaluarsa',
        'cvv',
        'email_paypal',
        'jenis_bank',
        'nomor_rekening',
    ];
}