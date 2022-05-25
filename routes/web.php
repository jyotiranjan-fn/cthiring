<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\ApiKeyController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\ClientDesignationController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\FunctionalAreaController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyplanController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UserDesignationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', [AuthenticatedSessionController::class,'destroy'])->name('user.projects');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->name('admin.')->prefix('')->group(function() {
    Route::get('/',[IndexController::class, 'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/update/{id}', [RoleController::class, 'updated'])->name('roles.updated');
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    
    Route::resource('/permissions', PermissionController::class);
    // Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');
    
    
    
     
     

    // Route::get('/user', [UserController::class, 'userfetch'])->name('users.index');  
    // Route::post('/userinsert', [UserController::class, 'user_insert'])->name('users.create'); 
    
    Route::get('/client_branch', [BranchController::class, 'clientbranch']);
    Route::post('/add_client_branch', [BranchController::class, 'addclientbranch']);
    Route::post('/edit_branch/{id}', [BranchController::class, 'client_branch_updatedit']);
    Route::get('/client_branch_delete/{id}', [BranchController::class, 'client_delete']);

    //test for pdf//

   
    //end
   
   //mailtest 
   
       Route::get('/mail', [BranchController::class, 'sendmail']);

// userbranch
 
    Route::post('/add_branch', [BranchController::class, 'addbranch']);
    Route::post('/edit_user_branch/{id}', [BranchController::class, 'updatedit']);
    Route::get('/user_branch_delete/{id}', [BranchController::class, 'userdelete']);

    //Profile navbar
   
    Route::get('/view_profile/{id}', [HomeController::class, 'view_profile']);
    Route::get('/edit_profile/{id}', [HomeController::class, 'edit_profile']);
    Route::put('/update_profile/{id}', [HomeController::class, 'update_profile']);


//client Designation table
    //Route::get('/client_designation', [ClientDesignationController::class, 'ShowClientDesignation']);
    Route::post('/addclientdesignation', [ClientDesignationController::class, 'add_clientdesignation']);
    Route::get('/client_designation', [ClientDesignationController::class, 'fetch_clientdesignation']);
    Route::get('/edit_client_designation/{id}', [ClientDesignationController::class, 'edit_clientdesignation']);
    Route::get('/client_designation_delete/{id}', [ClientDesignationController::class, 'delete_clientdesignation']);

// qualification
    //Route::get('/qualification', [QualificationController::class, 'showqualification']);
    Route::post('/addqualification', [QualificationController::class, 'add_qualification']);
    Route::get('/qualification', [QualificationController::class, 'fetch_qualification']);
    Route::get('/editqualification/{id}', [QualificationController::class, 'edit_qualificaation']);
    Route::get('/qualificationdelete/{id}', [QualificationController::class, 'delete_qualification']);

    // Degree//uttam

    Route::post('/add_degree', [DegreeController::class, 'add_degree']);
    Route::get('/degree', [DegreeController::class, 'fetch_degree']);
    Route::get('/editdegree/{id}', [DegreeController::class, 'edit_degree']);
    Route::get('/degreedelete/{id}', [DegreeController::class, 'delete_degree']);

// Specialization//uttam

    Route::post('/add_specialization', [SpecializationController::class, 'add_specialization']);
    Route::get('/specialization', [SpecializationController::class, 'fetch_specialization']);
    Route::get('/editspecialization/{id}', [SpecializationController::class, 'edit_specialization']);
    Route::get('/specializationdelete/{id}', [SpecializationController::class, 'delete_specialization']);

// role
    Route::get('/role', [RoleController::class, 'role_branch']);
    Route::post('/role', [RoleController::class, 'add_rolebranch']);
    Route::get('/edit_role/{id}', [RoleController::class, 'edit_rolebranch']);
    Route::get('/role_delete/{id}', [RoleController::class, 'delete_rolebranch']);

// functional_area
    Route::get('functionalarea', [FunctionalAreaController::class, 'fetch_functionalarea']);
    Route::post('/addfunctional', [FunctionalAreaController::class, 'add_functional']);
    Route::put('/edit_functional/{id}', [FunctionalAreaController::class, 'edit_functional']);
    Route::get('/delete_functional/{id}', [FunctionalAreaController::class, 'delete_functional_area']);

//industry page
    Route::get('industry', [IndustryController::class, 'fetch_industry']);
    Route::post('/add_industryfunction', [IndustryController::class, 'add_industry_function']);
    Route::put('/edit_industry/{id}', [IndustryController::class, 'edit_industry_function']);
    Route::get('/delete_industry/{id}', [IndustryController::class, 'delete_industry_function']);

    //user Designation table(uttam)
    Route::post('/adduserdesignation', [UserDesignationController::class, 'add_userdesignation']);
    Route::get('/user_designation', [UserDesignationController::class, 'fetch_userdesignation']);
    Route::get('/edit_user_designation/{id}', [UserDesignationController::class, 'edit_userdesignation']);
    Route::get('/user_designation_delete/{id}', [UserDesignationController::class, 'delete_userdesignation']);

    // user
        // Route::get('/user', [UserController::class, 'usershow']);
        Route::get('/user', [UserController::class, 'userfetch'])->name('users.index');  
        Route::post('/userinsert', [UserController::class, 'user_insert'])->name('users.create'); 
        // Route::post('/userinsert', [UserController::class, 'user_insert']);
        //Route::get('/user', [UserController::class, 'userfetch']);
        Route::put('/edit_user/{id}', [UserController::class, 'edit_user']);
        Route::get('/user_delete/{id}', [UserController::class, 'delete_user']);

    // client blade//
    //client
    Route::get('/client', [clientController::class, 'clientshow']);
    Route::get('/client_contactpage', [clientController::class, 'client_contactshow']);
    Route::post('/clientinsert', [clientController::class, 'client_insert']);
    Route::post('/clientinsert2', [clientController::class, 'client_insertpage2']);
    Route::get('edit_client/{id}', [clientController::class, 'client_edit']);
    Route::post('update_client/{id}', [clientController::class, 'client_update']);

    //viewclient
    Route::get('/viewclient', [clientController::class, 'viewclientshow']);
    Route::get('/view_detail/{id}', [clientController::class, 'viewclientshow_details']);
    Route::get('/approve_details/{id}', [clientController::class, 'approveclient_details']);

    //approval client view
    Route::get('/approveclient', [clientController::class, 'view_approv_client']);
    Route::post('approve_details/approve_dtl', [clientController::class, 'appr_clt'])->name('approve_client');
    Route::post('approve_details/reject_dtl', [clientController::class, 'reject_clt'])->name('reject_client');

    // dist and city for client
    Route::post('/fetchdist', [StateController::class, 'getdistrict']);
    Route::post('/fetchcity', [StateController::class, 'getcity']);

    //dist and city for clientcontact for git hub testing
    Route::post('/fetchdist_contact', [StateController::class, 'getdistrict_clientcontact']);
    Route::post('/fetchcity_contact', [StateController::class, 'getcity_clientcontact']);

    //position blade//
   
    
    Route::get('/position', [PositionController::class, 'positionshow']);
    //Route::post('/positioninsert', [PositionController::class, 'position_insert']);
    // //trupti code
    Route::post('/position_inserts', [PositionController::class, 'position_inserts']);
    Route::post('/updateposition/{position_id}', [PositionController::class, 'updateposition'])->name('position_update');

    //end
    Route::get('/positionview', [PositionController::class, 'position_viewpage']);
    Route::get('/position_view_details/{id}', [PositionController::class, 'position_view_delts']);

    // Route::group(['middleware' => ['can:Accept Position']], function () {
    Route::get('/position_approve', [PositionController::class, 'position_approve_page']);
    Route::get('/position_approve_details/{position_id}', [PositionController::class, 'position_approve_delts']);
// });

    Route::post('/position_approve_remark', [PositionController::class, 'approve_position']);
    Route::post('/position_reject_remark', [PositionController::class, 'reject_position']);
    Route::get('/position_edit/{id}', [PositionController::class, 'editposition']);

  
    // clientname fetch in position blade
    Route::post('/fetchclientconct', [AjaxController::class, 'get_contactperson']);

    // // for my plan page design
    Route::get('/myplan', [AjaxController::class, 'myplandesign']);
    Route::get('/myplan2', [AjaxController::class, 'myplandesign2']);

    //Api Key(uttam)
    Route::get('/apikeys', [ApiKeyController::class, 'api_key']);
    Route::PUT('/update_msg/{id}', [ApiKeyController::class, 'update_msg'])->name('api.msgupdate');
    //view event(uttam)
    Route::get('/approved', [MyplanController::class, 'approved']);

    //view event(uttam)
    Route::get('/todays_plan', [MyplanController::class, 'myplan_todays']);
    Route::post('/myplan_position_client', [AjaxController::class, 'position_recruiter']);
    Route::post('/todays_plan_insert', [MyplanController::class, 'insert_todaysplan']);
    
    
     Route::post('/plan_approve_remark/{id}', [MyplanController::class, 'approve_plan']);
    Route::post('/plan_reject_remark/{id}', [MyplanController::class, 'reject_plan']);
    Route::get('/plan_view', [MyplanController::class, 'plan_viewpage']);
   
   

//resume blade(uttam)

    Route::get('/add/resume', [ResumeController::class, 'showresume']);
    Route::post('/fetch_position', [ResumeController::class, 'fetch_position']);
    Route::post('/resume_submit', [ResumeController::class, 'resume_submit'])->name('resume_submit');
    Route::post('/insert_resume', [ResumeController::class, 'insert_resume'])->name('insert_resume');
    // Route::get('edit-resume/{id}', [ResumeController::class, 'edit_resume'])->name('edit_resume');
    Route::post('/reset_resume', [ResumeController::class, 'reset_resume'])->name('reset_resume');
    Route::get('/resumeview', [ResumeController::class, 'resum_view']);
    Route::get('/resume_viewdetails/{id}', [ResumeController::class, 'resume_view_detail']);
    Route::get('/pdfresume/{id}', [ResumeController::class, 'resume_pdf_candidate']);
    // Route::get('/resume', [ResumeController::class, 'index'])->name('resume.index');
    // Route::get('create-pdf-file', [PDFController::class, 'index']);
    //position details page tab form for resume and interview
    Route::post('send-resume/{id}', [ResumeController::class, 'send_resume_individual'])->name('send.resume_individual');
    Route::post('screening_status/{id}', [ResumeController::class, 'screening_status_shortlist'])->name('screening.status_shortlist');
    Route::post('screening_stat/{id}', [ResumeController::class, 'screening_status_rejected'])->name('screening.status_rejected');
    // for edit
    Route::get('/resume_editview/{id}', [ResumeController::class, 'resume_edit_view']);
    Route::post('/resume_edit/{id}', [ResumeController::class, 'resume_edit_data'])->name('resume.resume_edit');
    
    //resume approve by crm 
    Route::get('approve_cv/{id}',[ResumeController::class,'approve_cv']);
    
    
    //interview Schedule
    Route::post('schedule_interview/{id}',[ResumeController::class,'schedule_interview']);
    Route::post('getaddtess',[ResumeController::class,'getaddtess']);
    Route::post('getspoc',[ResumeController::class,'getspoc']);
    
    // Route::get('client_mail/{created}/{client_name}/{city_id}/{crm_id}',[clientController::class,'mail_send']);

});



Route::get('/otp', [LoginController::class, 'otp']);
Route::get('/otp', [AuthenticatedSessionController::class, 'otp']);
// Route::get('/newpassword', [AuthenticatedSessionController::class, 'store']);
Route::post('/newpassword', [AuthenticatedSessionController::class, 'newpass'])->name('new_password');

Route::post('/otp_verify', [AuthenticatedSessionController::class, 'otp_verify']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'login_submit']);
Route::post('/test', [AjaxController::class, 'position_recruiter'])->name('test');



   
  

// Route::group(['middleware' => ['can:Approve Position']], function () {
//     Route::get('/positionview', function () {
//         return "hi";
//     });
// });

require __DIR__.'/auth.php';
