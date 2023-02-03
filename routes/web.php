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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'MainController@index')->name('welcome');

// USERS DASHBOARD ROUTE BEGIN
Route::middleware(['auth'])->prefix('user')->group(function () {
Route::get('/', 'DashboardController@index')->name('user.dashboard');
});

// Route::post('/user', 'DashboardController@regRef')->name('reg.ref');
// Route::get('/user_/{place}', 'DashboardController@userView')->name('user.view');

// REPORT VIEW ROUTE
Route::get('/depv_repoRt', 'DepvreportController@depvReport')->name('depv.report');
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
Route::get('/deposit','DepositController@deposit')->name('deposit.now');
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
Route::post('/congrats_payment/{trans}','DepositController@congratsPay')->name('congrats.pay');
Route::get('chart_us', 'DepositController@chartUs')->name('chart.us');

// WITHDRAWAL ROUTE
Route::get('/withdraw','WithdrawController@withdraw')->name('withdraw.now');
// BTC WITHDRAWAL ROUTE
Route::get('/withdrawbtc_details', 'WithdrawController@withdrawbtcDetails')->name('withdrawbtc.details');
Route::post('/postbtc_withdraw', 'WithdrawController@postbtcWithdraw')->name('postbtc.withdraw');
Route::get('/makebtc_withdraw/{withdraw}', 'WithdrawController@makebtcWithdraw')->name('makebtc.withdraw');


// ETH WITHDRAWAL ROUTE
Route::get('/withdraweth_details', 'WithdrawController@withdrawEth')->name('withdraweth.details');
Route::post('/posteth_withdraw', 'WithdrawController@postethWithdraw')->name('posteth.withdraw');
Route::get('/makeeth_withdraw/{trans}', 'DepositController@makeethWithdraw')->name('makeeth.withdraw');


// USDT WITHDRAWAL ROUTE
Route::get('/withdrawusdt_details', 'WithdrawController@withdrawUsdt')->name('withdrawusdt.details');
Route::post('/postusdt_withdraw', 'DepositController@postusdtWithdraw')->name('postusdt.withdraw');
Route::get('/makeusdt_withdraw/{trans}', 'DepositController@makeusdtWithdraw')->name('makeusdt.withdraw');


// SUCCESSFUL WITHDRAWAL ROUTE
Route::post('/congrats_payment/{$trans}','DepositController@congratsPay')->name('congrats.pay');
Route::get('chart_us', 'DepositController@chartUs')->name('chart.us');
