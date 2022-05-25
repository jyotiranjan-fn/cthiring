<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('client_id')->nullable();
            $table->integer('position_id')->nullable();
            $table->string('resume_file', 255)->nullable();
            $table->string('created_by', 255)->nullable();
            $table->string('position_name', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('mobile', 100)->nullable();
            $table->string('dob', 255)->nullable();
            $table->string('current_designation', 255)->nullable();
            $table->string('year_experience', 255)->nullable();
            $table->string('month_experience', 255)->nullable();
            $table->string('ctc_min', 255)->nullable();
            $table->string('ctc_max', 255)->nullable();
            $table->string('notice_period', 255)->nullable();
            $table->string('gender', 255)->nullable();
            $table->string('marital_status', 255)->nullable();
            $table->string('family_dependent', 255)->nullable();
            $table->string('present_location', 255)->nullable();
            $table->string('native_location', 255)->nullable();
            $table->string('re_qualification_id', 255)->nullable();
            $table->string('re_degree_id', 255)->nullable();
            $table->string('re_specialization_id', 255)->nullable();
            $table->string('college_name', 255)->nullable();
            $table->string('mark', 255)->nullable();
            $table->string('course_type', 255)->nullable();
            $table->string('yr_passing', 255)->nullable();
            $table->string('university', 255)->nullable();
            $table->string('companyname', 255)->nullable();
            $table->string('designation', 255)->nullable();
            $table->string('emp_period_form', 255)->nullable();
            $table->string('emp_period_to', 255)->nullable();
            $table->string('specialization', 255)->nullable();
            $table->string('certification', 255)->nullable();
            $table->string('location', 255)->nullable();
            $table->string('vital_info', 255)->nullable();
            $table->string('reporting', 255)->nullable();
            $table->string('technical_rating', 255)->nullable();
            $table->string('technical_star_rating', 255)->nullable();
            $table->string('behavioural_star_rating', 255)->nullable();
            $table->string('behavioural_rating', 255)->nullable();
            $table->string('assessment', 255)->nullable();
            $table->string('other_inputs', 255)->nullable();
            $table->string('interview_availability', 255)->nullable();
            $table->string('created_at', 100)->nullable();
            $table->string('updated_at', 100)->nullable();
            $table->enum('is_deleted', ['Y', 'N'])->nullable()->default('N');
            $table->timestamp('cv_send_date')->nullable();
            $table->string('resume_code', 255)->nullable();
            $table->string('rand_password_pdf', 255)->nullable();
            $table->integer('cv_status')->nullable()->default(0)->comment('0= Not send
1= send+fa
2= shortlisted + ISA
3= Rejected
4=IS
5=1st Reshceduled
6=1 selected + 2ISA
7= 1st rejected
8=2IS
9= 2nd Reshceduled
10= 2nd selected +3ISA
11= 2nd rejected
12= 3IS
13=3Reshceduled
14=3rd selected+4ISA
15=3rd rejected
16=4IS
17=4 Reshceduled
18=4 selcted+FISA
19=4trejected
20= final IS
21= final Reshceduled
22= Final selcted +OP
23= Final rejeted
24= Offer accepted + JA
25= Offer rejected
26= Jointed + BP
27= Not joined
28= Defered
29= Billed');
            $table->integer('crm_status')->nullable()->default(0)->comment('0=Not Approved
1= Approved
2= Rejected');
            $table->string('cv_approve_remarks', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resume');
    }
}
