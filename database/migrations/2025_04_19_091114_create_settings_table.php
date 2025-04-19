<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_logo')->nullable();
            $table->string('company_phone');
            $table->string('company_email');
            $table->string('company_address');
            $table->boolean('system_status');
            $table->foreignId('created_by')->constrained('admins');
            $table->foreignId('updated_by')->constrained('admins');
            $table->string('company_code');
            $table->decimal('after_min_calc_delay', 10, 2);
            $table->decimal('after_min_calc_early_departure', 10, 2);
            $table->decimal('after_min_quarter_day', 10, 2);
            $table->decimal('after_min_half_daycut', 10, 2);
            $table->decimal('after_min_full_daycut', 10, 2);
            $table->decimal('monthly_vecation_balance', 10, 2);
            $table->decimal('after_days_begin_vacation', 10, 2);
            $table->decimal('first_balance_begin_vacation', 10, 2);
            $table->decimal('sanction_value_first_absence', 10, 2);
            $table->decimal('sanction_value_second_absence', 10, 2);
            $table->decimal('sanction_value_third_absence', 10, 2);
            $table->decimal('sanction_value_fourth_absence', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
