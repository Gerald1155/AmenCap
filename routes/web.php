<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\StableCoinController;
use App\Http\Controllers\NonStableCoinController;
use App\Http\Controllers\NonStableCoinStakingEarningsController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\PricesController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PasswordChangeController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\NumbersController;
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

//test
Route::get('/test',[PricesController::class,"test"]);



Route::get("/",[PagesController::class,"index"])->name('index');
Route::get("/about-us",[PagesController::class,"about"])->name('about');
Route::get("/contact-us",[PagesController::class,"contact"])->name('contact');
Route::POST("/contact/store",[PagesController::class,"ContactStore"])->name('contact.store');
Route::get("/faqs",[PagesController::class,"faqs"])->name('faqs');
Route::get("/blogs",[PagesController::class,'blogs'])->name("blogs");
Route::get("/blog/{id}/{title}",[PagesController::class,'blog'])->name("blog");
Route::Get("/coming-soon",[PagesController::class,"coming"])->name("coming");


Route::get("/tutorials",[PagesController::class,'tutorials'])->name("tutorials");
Route::get("/tutorial/{id}/{name}",[PagesController::class,'tutorial'])->name("tutorial");

//investors
Route::get("/our-portfolio",[PortfolioController::class,'index'])->name("portfolio");
// Route::get("/our-portfolio/week",[PortfolioController::class,'portfolio_week'])->name("portfolio.week");
// Route::get("/our-portfolio/month",[PortfolioController::class,'portfolio_month'])->name("portfolio.month");
// Route::get("/our-portfolio/3-month",[PortfolioController::class,'portfolio_3month'])->name("portfolio.3_month");
// Route::get("/our-portfolio/year",[PortfolioController::class,'portfolio_year'])->name("portfolio.year");

Route::get("/sold-assets",[PortfolioController::class,"sold_assets"])->name("sold.assets");

Route::POST("/password/change",[PasswordChangeController::class,"store"])->name("investor.password.change");


//admin

Route::POST("/admin/update/coins",[UpdateController::class,"update"])->name("coins.update");

//numbers
Route::get("/admin/numbers/index",[NumbersController::class,"index"])->name("numbers.index");
Route::get("/admin/numbers/edit/{id}",[NumbersController::class,"edit"])->name("numbers.edit");
Route::PUT("/admin/numbers/update/{id}",[NumbersController::class,"update"])->name("numbers.update");



Route::get("/admin/update",[TestController::class,"index"])->name("update.index");
//month
Route::POST("/admin/profit/update/month",[TestController::class,"update_profit_loss_for_30_days"]);
Route::POST("/admin/profit/update/chart/month",[TestController::class,"balence_of_month"]);

//week
Route::POST("/admin/profit/update/week",[TestController::class,"update_profit_loss_for_7_days"]);
Route::POST("/admin/profit/update/chart/week",[TestController::class,"balence_of_week"]);

//3 month 
Route::POST("/admin/profit/update/90days",[TestController::class,"update_profit_loss_for_90_days"]);
Route::POST("/admin/profit/update/chart/90days",[TestController::class,"balence_of_90_days"]);

//24 hour 
Route::POST("/admin/profit/update/24hour",[PricesController::class,"update_profit_loss_24hour"]);
Route::POST("/admin/profit/update/chart/24hour",[PricesController::class,"balence_of_24_hour"]);

//year
//3 month 
Route::POST("/admin/profit/update/year",[TestController::class,"update_profit_loss_for_year"]);
Route::POST("/admin/profit/update/chart/year",[TestController::class,"balence_of_year"]);



//fee 
Route::get("/admin/fee/create/{id}",[FeeController::class,"create"])->name("fee.create");
Route::get("/admin/fee/create/edit/{id}",[FeeController::class,"create"])->name("fee.edit");

Route::POST("/admin/fee/store",[FeeController::class,"store"])->name("fee.store");
Route::PUT("/admin/fee/update/{id}",[FeeController::class,"update"])->name("fee.update");

//sell list 
Route::get("/admin/sell",[SellController::class,"index"])->name("sell.index");
Route::get("/admin/sell/edit/{id}",[SellController::class,"edit"])->name("sell.edit");
Route::PUT("/admin/sell/update/{id}",[SellController::class,"update"])->name("sell.update");

//investors
Route::resource("/admin/stable",StableCoinController::class);

Route::resource("/admin/nonstable",NonStableCoinController::class);

Route::resource("/admin/staking",NonStableCoinStakingEarningsController::class);



Route::resource("/admin/asset",AssetController::class);

Route::resource("/admin/investor",InvestorController::class);

Route::resource("/admin/blog",BlogController::class);

Route::resource("/admin/tutorial",TutorialController::class);

Route::resource("/admin/faq",FaqController::class);


//images
Route::get("/admin/images/{type}/{id}",[ImageController::class,'add'])->name('image.create');
//Store
Route::POST("/admin/image/store",[ImageController::class,'store']);
//Destroy 
Route::DELETE("/admin/remove/image/{id}",[ImageController::class,'destroy'])->name('image.destroy');

//USDS - USD - Transfer fees - Transactio fees 




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
