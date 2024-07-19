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
        Schema::create('customers', function (Blueprint $table) {
         $table->id();
           
         $table->unsignedBigInteger('company_id')->nullable();
         $table->unsignedBigInteger('branch_id')->nullable();
         $table->string('name')->nullable();
         $table->string('code')->nullable();
         $table->string('address')->nullable();
         $table->unsignedBigInteger('country_id')->nullable();
         $table->string('country_code')->nullable();
         $table->string('shipper_code')->nullable();
         $table->string('shipper_name')->nullable();
         $table->string('phone')->nullable();
         $table->string('fax')->nullable();
         $table->string('mobile')->nullable();
         $table->string('payment_via')->nullable();
         $table->boolean('has_vat')->default(false);
         $table->string('vat_number')->nullable();
         $table->string('customer_type')->nullable();
         $table->string('has_sms')->default(true);
         $table->string('delivery_hours')->nullable();
         $table->string('allowed_bookings')->nullable();
         $table->boolean('is_online_partner')->default(false);
         $table->string('website')->nullable();
         $table->boolean('has_portal_login')->default(false);
         $table->boolean('has_mobile_login')->default(true);
         $table->boolean('has_email_update')->default(false);
         $table->boolean('can_cod')->default(true);
         $table->boolean('can_qr_pay')->default(true);
         $table->boolean('account_status')->default(true);
         $table->string('customer_group')->nullable();
         $table->boolean('is_global')->default(false);
         $table->boolean('is_consignee')->default(false);
         $table->unsignedBigInteger('location_id')->nullable();
         $table->string('landmark')->nullable();
         $table->string('account_type')->nullable();
         $table->string('account_number')->nullable();
         $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
