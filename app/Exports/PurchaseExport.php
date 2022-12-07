<?php

namespace App\Exports;

use App\Models\Pзurchases;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class PurchaseExport implements FromCollection
{
    public function collection()
    {
        return Pзurchases::all();
    }
}
