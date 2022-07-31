<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('inv_id');
            $table->string('serv_prov_nam');
            $table->integer('received_by');
            $table->float('inv_amount');
            $table->string('patient_name');
            //`reg_sysdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
            $table->string('po_num');
            $table->string('inv_type');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('veri_by')->nullable();
            $table->string('batch_number')->nullable();
            $table->date('veri_date')->nullable();
            $table->date('batch_date')->nullable();
            $table->integer('batch_by')->nullable();
            $table->string('resub')->nullable();
            $table->string('comment')->nullable();
            $table->date('check_out_date_l')->nullable();
            $table->date('check_in_date_n')->nullable();
            $table->string('commit_com')->nullable();
            $table->string('aud')->default('No');
            $table->date('stamp_date');
            $table->string('adhoc')->default('No');
            $table->date('audit_rdate')->nullable();
            $table->date('audit_odate')->nullable();
            $table->float('audit_reject_amou')->nullable();
            $table->string('aud_notes')->nullable();
            $table->string('aud_type')->nullable();
            $table->string('aud_engage')->nullable();
            $table->string('aud_sp')->nullable();
            $table->integer('aud_by')->nullable();
            $table->string('sent_by')->nullable();
            $table->string('Centre');
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
        Schema::dropIfExists('invoices');
    }
};
