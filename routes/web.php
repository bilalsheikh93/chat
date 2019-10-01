<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contacts', 'ContactsController@get');
Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
Route::post('/conversation/send', 'ContactsController@send');
Route::get('/get_contacts_without_conversation', 'ContactsController@get_contacts_without_conversation');



Route::get('/signup', 'RegisterController@registration');
Route::post('/add_new_user','RegisterController@add_new_user');
Route::post('/add_new_user_payment','RegisterController@add_new_user_payment');
Route::get('/verify_new_user/{post}','RegisterController@verify_new_user');
Route::get('/verify_forgotpassword/{post}','RegisterController@verify_forgotpassword');
Route::post('/save_forgotpassword','RegisterController@save_forgotpassword');
Route::get('/forgotpassword', 'RegisterController@forgotpassword');
Route::post('/email_send','RegisterController@email_send');
// Route::get('/login', 'RegisterController@index');
Route::post('/submit_login', 'RegisterController@login');

Route::group(['middleware' => ['checkAuth']], function () {

    Route::group(['middleware' => ['companyAdmin']], function () {

    Route::get('/logout', 'RegisterController@get_logout');
    Route::get('/changePassword','DashboardController@changepassword');
    Route::post('/send_pass_var','DashboardController@sendPasswordVar');

    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/initiate_valuation', 'DashboardController@initiate_valuation');
    Route::get('/step_1', 'DashboardController@step_1');
    Route::get('/step_2/{id}', 'DashboardController@step_2');
    Route::get('/step_3/{id}', 'DashboardController@step_3');
    Route::get('/step_4/{id}', 'DashboardController@step_4');
    Route::get('/step_5/{id}', 'DashboardController@step_5');
    Route::get('/step_6/{id}', 'DashboardController@step_6');
    Route::get('/step_7/{id}', 'DashboardController@step_7');
    Route::get('/step_8/{id}', 'DashboardController@step_8');
    Route::get('/step_9/{id}', 'DashboardController@step_9');
    Route::get('/step_10/{id}', 'DashboardController@step_10');

    Route::get('/team', 'DashboardController@team');
    Route::post('/update_team', 'DashboardController@update_team');
    Route::get('/delete_team/{id}', 'DashboardController@delete_team');
    Route::get('/company_new_user', 'DashboardController@company_new_user');
    Route::get('/approve_user/{id}', 'DashboardController@approve_user');


    Route::get('/my_assignment', 'DashboardController@my_assignment');




    Route::get('/saved', 'DashboardController@saved');
    Route::get('/message', 'DashboardController@message');
    Route::get('/revenue_rate', 'DashboardController@revenue_rate');
    Route::get('/cost_of_gold_sold', 'DashboardController@cost_of_gold_sold');
    Route::get('/taxes', 'DashboardController@taxes');
    Route::get('/amortization', 'DashboardController@amortization');
    Route::get('/depreciation', 'DashboardController@depreciation');
    Route::get('/sales', 'DashboardController@sales');
    Route::get('/interest_expense', 'DashboardController@interest_expense');
    Route::get('/capital_expenditures', 'DashboardController@capital_expenditures');
    Route::get('/working_capital', 'DashboardController@working_capital');
    Route::get('/investments', 'DashboardController@investments');
    Route::get('/transaction_execution_costs', 'DashboardController@transaction_execution_costs');
    Route::get('/debt_pay_off_schedule', 'DashboardController@debt_pay_off_schedule');
    Route::get('/assets', 'DashboardController@assets');



    Route::post('/add_step_1','DashboardController@add_step_1');
    Route::post('/add_step_2','DashboardController@add_step_2');
    Route::post('/add_step_3','DashboardController@add_step_3');
    Route::post('/add_step_4','DashboardController@add_step_4');
    Route::post('/add_step_5','DashboardController@add_step_5');
    Route::post('/add_step_6','DashboardController@add_step_6');
    Route::post('/add_step_7','DashboardController@add_step_7');


    Route::post('/send_invite_participant','DashboardController@send_invite_participant');


    Route::get('/profile','DashboardController@profile');
    Route::post('/update_profile','DashboardController@update_profile');

    Route::get('/get_assignments', 'DashboardController@get_assignments');
    Route::get('/get_sectors/{id}', 'DashboardController@get_sectors');
    Route::post('/delete_assignment_user', 'DashboardController@delete_assignment_user');
    Route::post('/next_step_3', 'DashboardController@next_step_3');


    Route::get('/change_credit_card_info', 'DashboardController@change_credit_card_info');
    Route::post('/update_card_info', 'DashboardController@update_card_info');

    Route::get('/change_plan', 'DashboardController@change_plan');
    Route::post('/update_plan', 'DashboardController@update_plan');


    Route::post('/send_message', 'DashboardController@send_message');
    Route::get('/chat/{id}', 'DashboardController@chat');
    Route::get('/chat_user_ajax_load', 'DashboardController@chat_user_ajax_load');
    Route::get('/notifications_ajax_load/{id}', 'DashboardController@notifications_ajax_load');


    Route::get('/methodology_inner', 'DashboardController@methodology_inner');
    Route::get('/legend_inner', 'DashboardController@legend_inner');
    Route::get('/scenarios_inner_one', 'DashboardController@scenarios_inner_one');
    Route::get('/scenarios_inner_two', 'DashboardController@scenarios_inner_two');



    });
});



Route::get('/super_admin/login', 'RegisterController@index');
Route::post('/super_admin/submit_login', 'RegisterController@superAdminLogin');

Route::group(['middleware' => ['superAdmin']], function () {

    Route::get('/super_admin/dashboard', 'SuperAdminDashboardController@index');
    Route::get('/super_admin/logout', 'RegisterController@get_logout');
    Route::get('/super_admin/changePassword','SuperAdminDashboardController@changepassword');
    Route::post('/super_admin/send_pass_var','SuperAdminDashboardController@sendPasswordVar');
    Route::get('/super_admin/profile','SuperAdminDashboardController@profile');
    Route::post('/super_admin/update_profile','SuperAdminDashboardController@update_profile');


    Route::get('/super_admin/user', 'SuperAdminDashboardController@user');
    Route::get('/super_admin/company', 'SuperAdminDashboardController@company');
    Route::get('/super_admin/transaction', 'SuperAdminDashboardController@transaction');
    Route::get('/super_admin/license', 'SuperAdminDashboardController@license');
    Route::get('/super_admin/revenue', 'SuperAdminDashboardController@revenue');


});
