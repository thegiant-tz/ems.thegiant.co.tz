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
        $reasons = ['Petty Cash', 'Contract Approval', 'Payment Approval', 'Expense Reimbursement', 'Travel Expenses'];
        foreach ($reasons as $reason) {
            Reason::updateOrCreate(['type' => $reason]); 
        }
    }
}
