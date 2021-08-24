<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = User::find(1);

        if (!$user) {
            return;
        }

        $categories = [
            ['name' => 'Food & Beverage'],
            ['name' => 'Transportation'],
            ['name' => 'Rentals'],
            ['name' => 'Water Bill'],
            ['name' => 'Phone Bill'],
            ['name' => 'Electricity Bill'],
            ['name' => 'Gas Bill'],
            ['name' => 'Television Bill'],
            ['name' => 'Internet Bill'],
            ['name' => 'Other Utility Bill'],
            ['name' => 'Home Maintenance'],
            ['name' => 'Vehicle Maintenance'],
            ['name' => 'Medical Check-up'],
            ['name' => 'Insurances'],
            ['name' => 'Education'],
            ['name' => 'Houseware'],
            ['name' => 'Personal Items'],
            ['name' => 'Pets'],
            ['name' => 'Home Services'],
            ['name' => 'Other Expense'],
            ['name' => 'Fitness'],
            ['name' => 'Makeup'],
            ['name' => 'Gifts & Donations'],
            ['name' => 'Streaming Service'],
            ['name' => 'Fun Money'],
            ['name' => 'Investment'],
            ['name' => 'Debt Collection'],
            ['name' => 'Debt'],
            ['name' => 'Loan'],
            ['name' => 'Repayment'],
            ['name' => 'Pay Interest'],
            ['name' => 'Collect Interest'],
            ['name' => 'Salary'],
            ['name' => 'Other Income'],
            ['name' => 'Outgoing Transfer'],
            ['name' => 'Incoming Transfer'],
            ['name' => 'Travel'],
        ];

        $user->categories()->createMany($categories);
    }
}
