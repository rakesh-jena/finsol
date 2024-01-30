<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class PaymentDetail extends Authenticatable
{
    use Notifiable;

    protected $table = 'instamojo_payment_report';

}
