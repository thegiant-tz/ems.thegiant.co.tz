<?php

namespace Database\Seeders;

use App\Models\Reason;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reasons = ['Travel Expenses Approval', 'Purchase Approval', 'Reimbursement Approval'];
        foreach ($reasons as $reason) {
            Reason::updateOrCreate(['type' => $reason]);
        }
    }
}
