<?php

namespace App\Http\Controllers;

use App\Models\career;
use App\Models\career_cat;
use Illuminate\Http\Request;

class frontendViewManagement extends Controller
{
    public function HomePage(){
        return view('frontend.index');
    }


    public function ContactUs(){
        return view('frontend.contact');
    }

    public function AboutUs(){
        return view('frontend.about');
    }

    //Blog Section

    public function Blog(){
        return view('frontend.blog');
    }
    public function BlogSingle(){
        return view('frontend.blog_single');
    }


    //Career

    public function Career(){

        $car = career::where('status','1')->latest()->paginate(6);
        $car_cat = career_cat::all();
        return view('frontend.career',[
            'career' => $car,
            'career_cat' => $car_cat,
        ]);
    }

    public function CareerDetailsPage($id){

        $p=career::find($id);
        return view('frontend.career_single',[
            'careers' => $p,
        ]);

    }


    //Service

    public function Service(){
        return view('frontend.service');
    }
    public function ServiceSingle(){
        return view('frontend.service_single');
    }
    public function ServiceSingleDetails(){
        return view('frontend.service_single_details');
    }
    public function FundTransfer(){
        return view('frontend.services.fund_transfer');
    }
    public function PaymentGateway(){
        return view('frontend.services.payment_gateway');
    }
    public function BillPay(){
        return view('frontend.services.bill_pay');
    }
    public function MobileRecharge(){
        return view('frontend.services.mobile_recharge');
    }
    public function CorporateService(){
        return view('frontend.services.corporate');
    }
    public function CorporateClientReg(){
        return view('frontend.services.corporate_reg');
    }
    public function TerrifCalculator(){
        return view('frontend.services.terrif');
    }
    public function SupportDetails(){
        return view('frontend.support');
    }

    //Event

    public function Event(){
        return view('frontend.event');
    }
    public function EventDetails(){
        return view('frontend.event_details');
    }
    //PartnerDetails

    public function PartnerDetails(){
        return view('frontend.partner');
    }
    public function PartnerSingleDetails(){
        return view('frontend.partner_single');
    }



    //PressRelease

    public function PressRelease(){
        return view('frontend.press');
    }
    public function PressReleaseSingle(){
        return view('frontend.press_details');
    }
    public function PressRelease1(){
        return view('frontend.pressrelease.businessdesk');
    }
    public function PressRelease2(){
        return view('frontend.pressrelease.business_standard');
    }
    public function PressRelease3(){
        return view('frontend.pressrelease.dailystar');
    }
    public function PressRelease4(){
        return view('frontend.pressrelease.jugantor');

    }


    //blog post

    public function Blogpost1(){
        return view('frontend.blog.fintech');

    }
    public function Blogpost2(){
        return view('frontend.blog.post_libaration');

    }
    public function Blogpost3(){
        return view('frontend.blog.idtp');

    }
    public function Blogpost4(){
        return view('frontend.blog.beftn');

    }
    public function Blogpost5(){
        return view('frontend.blog.npsb');

    }
    public function Blogpost6(){
        return view('frontend.blog.rtgs');

    }
    public function Blogpost7(){
        return view('frontend.blog.swift');

    }

    //Offerpage

    public function OfferPage(){
        return view('frontend.offer');
    }
    public function OfferSinglePage(){
        return view('frontend.offer_single');
    }

    //Media

    public function Media(){
        return view('frontend.media');
    }
    public function MediaSingle(){
        return view('frontend.media_single');
    }
    public function MediaSingleDetails(){
        return view('frontend.media_single_details');
    }
    //Merchant

    public function Merchant(){
        return view('frontend.merchant');
    }
    public function MerchantDetails(){
        return view('frontend.marchent_single');
    }
    //App Details

    public function AppDetails(){
        return view('frontend.app-details');
    }
    public function AndroidAppDownload(){
        return view('frontend.appPages.apk');
    }
    public function IosAppDownload(){
        return view('frontend.appPages.ios');
    }








    //Single Details
    public function AboutUs_singleDetails(){
        return view('frontend.single_details');
    }
    public function AboutUs_singleDetails_Mohsin(){
        return view('frontend.single_details.mohsin');
    }
    public function AboutUs_singleDetails_shahAlam(){
        return view('frontend.single_details.shahalam');
    }
    public function AboutUs_singleDetails_nasirUddin(){
        return view('frontend.single_details.nasir');
    }
    public function AboutUs_singleDetails_Faruq(){
        return view('frontend.single_details.faruq');
    }
    public function AboutUs_singleDetails_nasimul(){
        return view('frontend.single_details.nasimul');
    }


    //End Single Details
    public function AboutUs_Team(){
        return view('frontend.team');
    }
    public function TermsAndCondition(){
        return view('frontend.terms-condition');
    }
    public function PrivacyPage(){
        return view('frontend.privacy');
    }
    public function CookiePage(){
        return view('frontend.cookie');
    }
    public function FaqPage(){
        return view('frontend.faq');
    }
}
