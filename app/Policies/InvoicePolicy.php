<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Invoice;
use App\Enums\OrderStatus;

class InvoicePolicy
{
    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Invoice $invoice): bool
    {
        return $invoice->status !== OrderStatus::Delivered;
    }
}
