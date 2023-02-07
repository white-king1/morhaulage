<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\InvestmentController;
use Illuminate\Support\Facades\Route;

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

// pleases add 'verify' => true
Auth::routes([]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'MainController@index')->name('welcome');

// ADMIN MIDDLEWARE AUTHENTIFICATION ACCESS ROUTE
Route::middleware(['auth'])->prefix('admin')->group(function (){

    // FOR THE ADMIN DASHBOARD
Route::get('/dashboard', 'HomeController@redirect')->name('redirect');
Route::get('/admin-dashboard', 'AdminDashboardController@admin')->name('admin');

// ADMIN->USERS NAV-BAR
Route::get('/all_users', 'AllusersController@allUsers')->name('all.users');
// TO DELETE A USER FROM THE USER TABLE
Route::get('/delete_users/{id}', 'AllusersController@deleteUsers')->name('delete.users');

Route::get('/all_deposits', 'AlldepositsController@allDeposits')->name('all.deposits');
// TO CHANGE THE STATUS TO PAID ON THE TRANSACTION TABLE
Route::get('/paid_deposits/{id}', 'AlldepositsController@paidDeposits')->name('paid.deposits');

Route::get('/all_withdrawals', 'AllwithdrawalsController@allWithdrawals')->name('all.withdrawals');
// TO CHANGE THE STATUS TO PAID ON THE WITHDRAW TABLE
Route::get('/paid_withdrawals/{id}', 'AllwithdrawalsController@paidWithdrawals')->name('paid.withdrawals');


// ADMIN TRANSFERS OF FUNDS
Route::get('/transfer', 'TransferController@newTransafer')->name('new.transfer');
Route::post('/transfer_details', 'TransferController@transferDetails')->name('transfer.details');
Route::get('/transfer_successful', 'TransferController@transferSuccessful')->name('transfer.successful');
// THE ADMIN DASHBOARD ENDS HERE
});


// USERS MIDDLEWARE AUTHENTICATION ACCESS ROUTE note:please add ,'verified'
Route::middleware(['auth'])->prefix('user')->group(function () {

    Route::get('/', 'DashboardController@index')->name('user.dashboard');

// REPORT VIEW ROUTE
Route::post('/depv_form', 'DepvreportController@depvForm')->name('depv.form');
Route::get('/depv_report', 'DepvreportController@depvReport')->name('depv.report');

Route::get('/investp_repoRt', 'DepvreportController@investpReport')->name('investp.report');

// INVESTMENT ROUTE
Route::get('/investment', 'InvestmentController@investment')->name('investments');

// PLANS  INVESTMENT
Route::get('/make_payment', 'InvestmentController@makePayment')->name('make.payment');
Route::get('/proplan_investment', 'InvestmentController@proPlan')->name('pro.plan');
Route::get('/deluxeplan_investment', 'InvestmentController@deluxePlan')->name('deluxe.plan');
Route::get('/goldplan_investment', 'InvestmentController@goldPlan')->name('gold.plan');
Route::get('/businessplan_investment', 'InvestmentController@businessPlan')->name('business.plan');
Route::get('/carhouseplan_investment', 'InvestmentController@carHouse')->name('carhouse.plan');

// DEPOSIT ROUTE
Route::get('/deposit', 'DepositController@deposit')->name('deposit.now');
// BTC DEPOSIT ROUTE
Route::get('/depositbtc_details', 'DepositController@depositDetails')->name('depositbtc.details');
Route::post('/postbtc_payment', 'DepositController@postbtcPay')->name('postbtc.payment');
Route::get('/makebtc_payment/{trans}', 'DepositController@makebtcPay')->name('makebtc.payment');


// ETH DEPOSIT ROUTE
Route::get('/depositeth_details', 'DepositController@depositEth')->name('depositeth.details');
Route::post('/posteth_payment', 'DepositController@postethPay')->name('posteth.payment');
Route::get('/makeeth_payment/{trans}', 'DepositController@makeethPay')->name('makeeth.payment');


// USDT DEPOSIT ROUTE
Route::get('/depositusdt_details', 'DepositController@depositUsdt')->name('depositusdt.details');
Route::post('/postusdt_payment', 'DepositController@postusdtPay')->name('postusdt.payment');
Route::get('/makeusdt_payment/{trans}', 'DepositController@makeusdtPay')->name('makeusdt.payment');


// SUCCESSFUL PAYMENT ROUTE
Route::post('/congrats_payment/{trans}', 'DepositController@congratsPay')->name('congrats.pay');
Route::get('chart_us', 'DepositController@chartUs')->name('chart.us');

// WITHDRAWAL ROUTE
Route::get('/withdraw', 'WithdrawController@withdraw')->name('withdraw.now');
// BTC WITHDRAWAL ROUTE
Route::get('/withdrawbtc_details', 'WithdrawController@withdrawbtcDetails')->name('withdrawbtc.details');
Route::post('/postbtc_withdraw', 'WithdrawController@postbtcWithdraw')->name('postbtc.withdraw');
Route::get('/makebtc_withdraw/{withdraw}', 'WithdrawController@makebtcWithdraw')->name('makebtc.withdraw');


// ETH WITHDRAWAL ROUTE
Route::get('/withdraweth_details', 'WithdrawController@withdrawEth')->name('withdraweth.details');
Route::post('/posteth_withdraw', 'WithdrawController@postethWithdraw')->name('posteth.withdraw');
Route::get('/makeeth_withdraw/{withdraw}', 'WithdrawController@makeethWithdraw')->name('makeeth.withdraw');


// USDT WITHDRAWAL ROUTE
Route::get('/withdrawusdt_details', 'WithdrawController@withdrawUsdt')->name('withdrawusdt.details');
Route::post('/postusdt_withdraw', 'WithdrawController@postusdtWithdraw')->name('postusdt.withdraw');
Route::get('/makeusdt_withdraw/{withdraw}', 'WithdrawController@makeusdtWithdraw')->name('makeusdt.withdraw');


// SUCCESSFUL WITHDRAWAL ROUTE
Route::post('/congrats_withdraw/{withdraw}', 'WithdrawController@congratsWithdraw')->name('congrats.withdraw');
Route::get('insufficient_funds', 'WithdrawController@insufficientFunds')->name('insufficient.funds');

// CHANGE PASSWORD ROUTE
Route::get('/change_password', 'ChangepController@changePassword')->name('change.password');


});

