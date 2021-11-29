<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Rinvex\Subscriptions\Models\PlanFeature;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plan = app('rinvex.subscriptions.plan')->create([
            'name' => 'Standard',
            'description' => 'Standard Plan',
            'price' => 10000,
            'signup_fee' => 0,
            'invoice_period' => 1,
            'invoice_interval' => 'month',
            'trial_period' => 30,
            'trial_interval' => 'day',
            'sort_order' => 1,
            'currency' => 'DZD',
        ]);

        $plan->features()->saveMany([
            new PlanFeature(['name' => 'Categories', 'value' => 10, 'sort_order' => 1]),
            new PlanFeature(['name' => 'Modeles', 'value' => 20, 'sort_order' => 5])]);
    }
}
