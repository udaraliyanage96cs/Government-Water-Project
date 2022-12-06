<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_permissions', function (Blueprint $table) {
            $table->id();
            $table->string('new_project')->nullable();
            $table->string('view_Connection_or_consumar')->nullable();
            $table->string('view_all_report')->nullable();
            $table->string('view_assigned_report')->nullable();
            $table->string('meter_reading')->nullable();
            $table->string('logging_a_complaint')->nullable();
            $table->string('taking_action_on_complaints')->nullable();
            $table->string('Closing_a_complaint')->nullable();
            $table->string('main_mony_account')->nullable();

            $table->string('permisson_un01')->nullable();
            $table->string('permisson_un02')->nullable();
            $table->string('permisson_un03')->nullable();
            $table->string('permisson_un04')->nullable();

            $table->string('Transaction_Password_Chnage')->nullable();
            $table->string('Transaction_Password_Reset')->nullable();

            $table->string('Own_Password_Change')->nullable();
            $table->string('Other_users_password_Chnage')->nullable();
            $table->string('Other_users_password_Reset')->nullable();

     

            $table->string('Permission_to_Settings_menu')->nullable();
            $table->string('Add_receipt_Bulk')->nullable();
            $table->string('Add_product_Bulk')->nullable();

            $table->string('Add_customer_Bulk')->nullable();
            $table->string('Add_or_Edit_Connection_category')->nullable();
            $table->string('Adjust_bill_printing_margins')->nullable();
            $table->string('Revers_own_transactions')->nullable();
            $table->string('Revers_Utility_Bill')->nullable();

            $table->string('Add_Deactivate_Search_User')->nullable();
            $table->string('Add_Ledger_Account')->nullable();
            $table->string('Deactivate_Ledger_Account')->nullable();
            $table->string('user_roll_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_permissions');
    }
}
