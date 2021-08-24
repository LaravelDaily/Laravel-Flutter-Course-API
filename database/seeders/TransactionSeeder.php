<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
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

        Transaction::factory()
            ->count(100)
            ->state(new Sequence(function ($sequence) {
                return [
                    'category_id' => Category::where('user_id', 1)->get()->random(),
                ];
            }))
            ->for($user)
            ->create();
    }
}
