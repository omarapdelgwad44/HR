<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Models\Admin;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'company_name' => 'Admin',
            'company_email' => 'admin@admin.com',
            'company_phone' => '123456',
            'company_address' => 'Admin',
            'system_status' => true,
            'company_code' => '123456',
            'after_min_calc_delay' => 10,
            'after_min_calc_early_departure' => 10,
            'after_min_quarter_day' => 10,
            'after_min_half_daycut' => 10,
            'after_min_full_daycut' => 10,
            'monthly_vecation_balance' => 10,
            'after_days_begin_vacation' => 10,
            'first_balance_begin_vacation' => 10,
            'sanction_value_first_absence' => 10,
            'sanction_value_second_absence' => 10,
            'sanction_value_third_absence' => 10,
            'sanction_value_fourth_absence' => 10,
            'created_by' => Admin::first()->id,
            'updated_by' => Admin::first()->id,
        ]);
    }
}
