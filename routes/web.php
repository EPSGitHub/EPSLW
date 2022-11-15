<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('contact-us', [App\Http\Controllers\ContactController::class, 'index'])-> name('frontend.contact');;
Route::post('contact-us', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.us.store');
Route::post('subscribe', [App\Http\Controllers\subscribeController::class, 'subscribe'])->name('subscribe');

Route::get('job-application/{id}', [App\Http\Controllers\jobApplicationController::class, 'index']);
Route::post('job-application', [App\Http\Controllers\jobApplicationController::class, 'store'])->name('job.application.store');


Route::get('corporate-client-registration', [App\Http\Controllers\CorporateRequestController::class, 'index'])-> name('frontend.corporate.registration');;
Route::post('corporate-client-registration', [App\Http\Controllers\CorporateRequestController::class, 'store'])->name('corporate.registration.store');


//Admin Access Control


Route::middleware('Admin')->group(function(){

  // User Management
Route::resource('user','App\Http\Controllers\UserManagement');
// Settings
Route::get('/settings',[App\Http\Controllers\SettingsManagement::class,'settingsView']);
Route::put('/settingsUpdate',[App\Http\Controllers\SettingsManagement::class,'settingsViewUpdate']) ->name('settings.update');

});


//POST Access Control


Route::middleware('postManagement')->group(function(){

    //post Management
Route::resource('postCategory','App\Http\Controllers\postCategoryController');
Route::resource('postTag','App\Http\Controllers\postTagController');
Route::resource('post','App\Http\Controllers\postController');

//Career Controller

});

//EDITOR  Access Control

Route::middleware('editor')->group(function(){

});


Route::resource('careers','App\Http\Controllers\CareerController');
Route::get('careers/statusInactive/{id}','App\Http\Controllers\CareerController@statusCheckedInactive');
Route::get('careers/statusActive/{id}','App\Http\Controllers\CareerController@statusCheckedActive');
Route::resource('careerCategory','App\Http\Controllers\CareerCategoryController');
Route::resource('job-applications','App\Http\Controllers\jobApplicationManageController');
Route::get('application-checked/{id}','App\Http\Controllers\jobApplicationManageController@Checked');
Route::get('shorlist-update/{id}','App\Http\Controllers\jobApplicationManageController@shortlist');
Route::get('application-rejected/{id}','App\Http\Controllers\jobApplicationManageController@ApplicationRejected');
Route::get('job-hired/{id}','App\Http\Controllers\jobApplicationManageController@Applicanthired');





//FrontEnd Management
Route::get('/',[App\Http\Controllers\frontendViewManagement::class,'HomePage']);
Route::get('/contact-us',[App\Http\Controllers\frontendViewManagement::class,'ContactUs']) -> name('frontend.contact');
Route::get('/about-us',[App\Http\Controllers\frontendViewManagement::class,'AboutUs']) -> name('frontend.aboutus');
Route::get('/single-details',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_singleDetails']) -> name('frontend.singledetails');
Route::get('/team',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_Team']) -> name('frontend.team');
Route::get('/terms-and-condition',[App\Http\Controllers\frontendViewManagement::class,'TermsAndCondition']) -> name('frontend.terms');
Route::get('/privacy-policy',[App\Http\Controllers\frontendViewManagement::class,'PrivacyPage']) -> name('frontend.privacy');
Route::get('/cookie',[App\Http\Controllers\frontendViewManagement::class,'CookiePage']) -> name('frontend.cookie');
Route::get('/faq',[App\Http\Controllers\frontendViewManagement::class,'FaqPage']) -> name('frontend.faq');
Route::get('/blog',[App\Http\Controllers\frontendViewManagement::class,'Blog']) -> name('frontend.blog');
Route::get('/blog-single',[App\Http\Controllers\frontendViewManagement::class,'BlogSingle']) -> name('frontend.blogSingle');
Route::get('/career',[App\Http\Controllers\frontendViewManagement::class,'Career']) -> name('frontend.career');
Route::get('/career-details/{id}',[App\Http\Controllers\frontendViewManagement::class,'CareerDetailsPage']);
Route::get('/service',[App\Http\Controllers\frontendViewManagement::class,'Service']) -> name('frontend.service');
Route::get('/service-single',[App\Http\Controllers\frontendViewManagement::class,'ServiceSingle']) -> name('frontend.service_single');
Route::get('/service-single-page',[App\Http\Controllers\frontendViewManagement::class,'ServiceSingleDetails']) -> name('frontend.service_single_details');
Route::get('/event',[App\Http\Controllers\frontendViewManagement::class,'Event']) -> name('frontend.event');
Route::get('/event-details',[App\Http\Controllers\frontendViewManagement::class,'EventDetails']) -> name('frontend.event_details');
Route::get('/press-release',[App\Http\Controllers\frontendViewManagement::class,'PressRelease']) -> name('frontend.press_release');
Route::get('/press-release-single',[App\Http\Controllers\frontendViewManagement::class,'PressReleaseSingle']) -> name('frontend.press_release_single');
Route::get('/offer',[App\Http\Controllers\frontendViewManagement::class,'OfferPage']) -> name('frontend.offer');
Route::get('/offer_single',[App\Http\Controllers\frontendViewManagement::class,'OfferSinglePage']) -> name('frontend.offer_single');
Route::get('/eps-media',[App\Http\Controllers\frontendViewManagement::class,'Media']) -> name('frontend.media');
Route::get('/eps-media-single',[App\Http\Controllers\frontendViewManagement::class,'MediaSingle']) -> name('frontend.media_single');
Route::get('/eps-media-single-details',[App\Http\Controllers\frontendViewManagement::class,'MediaSingleDetails']) -> name('frontend.media_single_details');
Route::get('/eps-partner',[App\Http\Controllers\frontendViewManagement::class,'PartnerDetails']) -> name('frontend.partner');
Route::get('/eps-partner-single',[App\Http\Controllers\frontendViewManagement::class,'PartnerSingleDetails']) -> name('frontend.partner-details');
Route::get('/merchant',[App\Http\Controllers\frontendViewManagement::class,'Merchant']) -> name('frontend.merchant');
Route::get('/merchant-details',[App\Http\Controllers\frontendViewManagement::class,'MerchantDetails']) -> name('frontend.merchant_details');
Route::get('/app-details',[App\Http\Controllers\frontendViewManagement::class,'AppDetails']) -> name('frontend.app_details');
Route::get('/eps-support',[App\Http\Controllers\frontendViewManagement::class,'SupportDetails']) -> name('frontend.support');


//single_details
Route::get('/mr-mohammad-mohsin',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_singleDetails_Mohsin']) -> name('frontend.mohsin');
Route::get('/md-shah-alam',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_singleDetails_shahAlam']) -> name('frontend.shahalam');
Route::get('/nasir-uddin',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_singleDetails_nasirUddin']) -> name('frontend.nasir');
Route::get('/md-faruq-ahmed',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_singleDetails_Faruq']) -> name('frontend.faruq');
Route::get('/mr-nasimul-hasin',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_singleDetails_nasimul']) -> name('frontend.nasimul');

//End Single Details


// Service Pages Start
Route::get('/payment-gateway',[App\Http\Controllers\frontendViewManagement::class,'PaymentGateway']) -> name('frontend.payment');
Route::get('/fund-transfer',[App\Http\Controllers\frontendViewManagement::class,'FundTransfer']) -> name('frontend.fund_transfer');
Route::get('/bill-pay',[App\Http\Controllers\frontendViewManagement::class,'BillPay']) -> name('frontend.billpay');
Route::get('/mobile-recharge',[App\Http\Controllers\frontendViewManagement::class,'MobileRecharge']) -> name('frontend.mobile_recharge');
Route::get('/corporate',[App\Http\Controllers\frontendViewManagement::class,'CorporateService']) -> name('frontend.corporate');
Route::get('/corporate-client-registration',[App\Http\Controllers\frontendViewManagement::class,'CorporateClientReg']) -> name('frontend.corporate-reg');
Route::get('/terrif-calculator',[App\Http\Controllers\frontendViewManagement::class,'TerrifCalculator']) -> name('frontend.terrif');

// Service Page End

// App Download Pages
Route::get('/android-app-download',[App\Http\Controllers\frontendViewManagement::class,'AndroidAppDownload']) -> name('frontend.apk');
Route::get('/ios-app-download',[App\Http\Controllers\frontendViewManagement::class,'IosAppDownload']) -> name('frontend.ios');

// App Download Pages END



//press releasepress-release-business-desk
Route::get('/press-release-business-desk',[App\Http\Controllers\frontendViewManagement::class,'PressRelease1']) -> name('frontend.businessdesk');
Route::get('/press-release-business-standard',[App\Http\Controllers\frontendViewManagement::class,'PressRelease2']) -> name('frontend.business_standard');
Route::get('/press-release-daily-star',[App\Http\Controllers\frontendViewManagement::class,'PressRelease3']) -> name('frontend.daily_star');

Route::get('/press-release-jugantor',[App\Http\Controllers\frontendViewManagement::class,'PressRelease4']) -> name('frontend.jugantor');

//press release end



//blog Section Start

Route::get('/blog/fintech-a-Prominent-Revamp-in-Bangladesh',[App\Http\Controllers\frontendViewManagement::class,'Blogpost1']) -> name('frontend.fintech');
Route::get('/blog/Post-liberation-Economic-Status-of-Bangladesh',[App\Http\Controllers\frontendViewManagement::class,'Blogpost2']) -> name('frontend.postlibaration');
Route::get('/blog/IDTP-First-Step-Towards-a-cashless-society',[App\Http\Controllers\frontendViewManagement::class,'Blogpost3']) -> name('frontend.idtp');
Route::get('/blog/Bangladesh-Electronic-Funds-Transfer-Network',[App\Http\Controllers\frontendViewManagement::class,'Blogpost4']) -> name('frontend.beftn');
Route::get('/blog/National-Payment-Switch-Bangladesh',[App\Http\Controllers\frontendViewManagement::class,'Blogpost5']) -> name('frontend.npsb');
Route::get('/blog/Real-Time-fund-transfer-using-RTGS',[App\Http\Controllers\frontendViewManagement::class,'Blogpost6']) -> name('frontend.rtgs');
Route::get('/blog/What-you-need-to-know-about-SWIFT',[App\Http\Controllers\frontendViewManagement::class,'Blogpost7']) -> name('frontend.swift');
//blog section end





