<?php
namespace Modules\Booking\Events;

use Modules\Booking\Models\Booking;
use Illuminate\Queue\SerializesModels;

class VendorLogPayment
{
    use SerializesModels;
    public $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }
}
