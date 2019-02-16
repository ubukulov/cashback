<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableShop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('shop_id');
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('status')->nullable();
            $table->float('rating')->nullable();
            $table->text('description')->nullable();
            $table->text('raw_description')->nullable();
            $table->string('site_url')->nullable();
            $table->boolean('exclusive')->default(false);
            $table->string('currency', 20)->nullable();
            $table->float('cr')->nullable();
            $table->float('cr_trend')->nullable();
            $table->float('ecpc')->nullable();
            $table->float('ecpc_trend')->nullable();
            $table->float('epc')->nullable();
            $table->float('epc_trend')->nullable();
            $table->unsignedInteger('rate_of_approve')->nullable();
            $table->string('more_rules')->nullable();
            $table->boolean('geotargeting')->default(false);
            $table->boolean('coupon_iframe_denied')->default(false);
            $table->timestamp('activation_date')->nullable();
            $table->timestamp('modified_date')->nullable();
            $table->string('connected')->nullable();
            $table->unsignedInteger('avg_hold_time')->nullable();
            $table->unsignedInteger('avg_money_transfer_time')->nullable();
            $table->boolean('denynewwms')->default(false);
            $table->unsignedInteger('goto_cookie_lifetime')->nullable();
            $table->boolean('retag')->default(false);
            $table->boolean('show_products_links')->default(false);
            $table->string('landing_code')->nullable();
            $table->string('landing_title')->nullable();
            $table->string('action_type')->nullable();
            $table->string('individual_terms')->nullable();
            $table->boolean('allow_deeplink')->default(false);
            $table->boolean('allow_actions_all_countries')->default(false);
            $table->unsignedInteger('action_testing_limit')->nullable();
            $table->string('mobile_os_type')->nullable();
            $table->string('mobile_os')->nullable();
            $table->string('mobile_device_type')->nullable();
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
        Schema::dropIfExists('shops');
    }
}
