<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cookie;
use App\Models\ContactUs;
use App\Models\Faq;
use App\Models\Blog;
use App\Models\Tutorial;
use Artesaos\SEOTools\Facades\SEOTools;
use App\Models\Asset;

class PagesController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Home');
        SEOTools::setDescription('Amen Capital Fund I, LP (“Amen Capital”) invests in cryptocurrencies that are related to blockchain technologies, projects, or platforms with a robust utility and development schedule. The Fund employs a proactive investing strategy that combines both technical and fundamental analysis. The primary aim concentrates the portfolio in cryptocurrencies related to blockchain technologies, projects, or platforms that provide advanced solutions to various industry and economic problems. The portfolio comprises both established and emerging cryptocurrencies that address various industry and economic needs. The Fund may invest in both Bitcoin and alternative cryptocurrencies also known as “alt coins” ranging in market capitalization.Through the analysis of white papers published by the cryptocurrency developers, Amen Capital will focus on cryptocurrencies and other blockchain-related digital assets developed by reputable teams that exhibit clear practical applications and have a well-established development schedule, i.e., road map. Amen Capital will also analyze technical trends seeking to invest in cryptocurrencies with a bullish outlook. This approach limits the risk of bearish/downward or uncertain trends while maximizing profitability during extended upward trends. ');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('');
        SEOTools::jsonLd()->addImage(asset("logo/logo.png"));
        return view("pages.index");
    }

    public function about()
    {
        SEOTools::setTitle('About Us');
        SEOTools::setDescription('Amen Capital Fund I, LP (“Amen Capital”) invests in cryptocurrencies that are related to blockchain technologies, projects, or platforms with a robust utility and development schedule. The Fund employs a proactive investing strategy that combines both technical and fundamental analysis. The primary aim concentrates the portfolio in cryptocurrencies related to blockchain technologies, projects, or platforms that provide advanced solutions to various industry and economic problems. The portfolio comprises both established and emerging cryptocurrencies that address various industry and economic needs. The Fund may invest in both Bitcoin and alternative cryptocurrencies also known as “alt coins” ranging in market capitalization.Through the analysis of white papers published by the cryptocurrency developers, Amen Capital will focus on cryptocurrencies and other blockchain-related digital assets developed by reputable teams that exhibit clear practical applications and have a well-established development schedule, i.e., road map. Amen Capital will also analyze technical trends seeking to invest in cryptocurrencies with a bullish outlook. This approach limits the risk of bearish/downward or uncertain trends while maximizing profitability during extended upward trends. ');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('');
        SEOTools::jsonLd()->addImage(asset("logo/logo.png"));
        return view("pages.about");
    }   


    public function contact()
    {
        SEOTools::setTitle('Contact Us');
        SEOTools::setDescription('Feel free to contact us if you have any question ?');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('');
        SEOTools::jsonLd()->addImage(asset("logo/logo.png"));
        return view("pages.contact");
    }

    public function ContactStore(Request $request)
    {
        if ($request->ajax()) {
            if(Cookie::get("contact") !== null)
            {
                return abort(404);
            }
            $validation = Validator::make($request->all(),[
                "first_name"=>"required",
                "last_name"=>"required",
                "email"=>"required|email|unique:contact_us,email",
                "phone_number"=>"required",
                "message"=>"required"
            ]);
            if ($validation->passes()) { 
                $contact = ContactUs::create($request->except(["_token","_method"]));
                $minutes = 7 * 1440;
                return response()->json(["status"=>200])->cookie("contact",$contact->id,$minutes);
            }
            else
            {
                return response()->json(["status"=>422,"errors"=>$validation->errors()->all()]);
            }
        }
        else
        {
            return abort(404);
        }
    }

    public function faqs()
    {
        SEOTools::setTitle('FAQs');
        SEOTools::setDescription('Take a look at our response to some of the most frequantly asked question.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('');
        SEOTools::jsonLd()->addImage(asset("logo/logo.png"));
        
        $faqs = Faq::all();
        return view("pages.faqs",compact("faqs"));
    }

    public function coming()
    {
        SEOTools::setTitle('Coming Soon');
        SEOTools::setDescription('We are launching soon. We are working hard. We are almost ready to launch. Something awesome is coming soon.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('');
        SEOTools::jsonLd()->addImage(asset("logo/logo.png"));
        return view("soon");
    }

    public function blogs()
    {
        $blogs = Blog::orderBy("created_at","DESC")->get();
        SEOTools::setTitle('Blogs');
        SEOTools::setDescription('Take a look at our latest blogs and analytics and news on our website.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('');
        SEOTools::jsonLd()->addImage(asset("logo/logo.png"));

        $blogs_side = Blog::orderBy("created_at","DESC")->take(3)->Get();
        $tutorials = Tutorial::orderBy("created_at","DESC")->take(3)->Get();
        return view("pages.blogs.blogs",compact("blogs","tutorials","blogs_side"));
    }
    
    public function tutorials()
    {
        $tutorials = Tutorial::orderBy("created_at","DESC")->get();
        SEOTools::setTitle('Tutorials');
        SEOTools::setDescription('If you are a begginer in crypto, here is the best place to learn about crypto and how it works and how you can make money.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('');
        SEOTools::jsonLd()->addImage(asset("logo/logo.png"));
        $blogs = Blog::orderBy("created_at","DESC")->take(3)->Get();
        $tutorials_side = Tutorial::orderBy("created_at","DESC")->take(3)->Get();
        return view("pages.tutorials.tutorials",compact("tutorials","blogs","tutorials_side"));
    }

    public function blog($id,$title)
    {
        $blog = Blog::findorfail($id);
        SEOTools::setTitle($blog->title);
        SEOTools::setDescription($blog->short_des);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('');
        SEOTools::jsonLd()->addImage($blog->cover());

        $blogs = Blog::orderBy("created_at","DESC")->take(3)->Get();
        $tutorials = Tutorial::orderBy("created_at","DESC")->take(3)->Get();

        return view("pages.blogs.blog",compact("blog","blogs","tutorials"));
    }

    public function tutorial($id,$name)
    {
        $tutorial = Tutorial::findorfail($id);

        SEOTools::setTitle($tutorial->name);
        SEOTools::setDescription($tutorial->short_des);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('');
        SEOTools::jsonLd()->addImage($tutorial->cover());

        $blogs = Blog::orderBy("created_at","DESC")->take(3)->Get();
        $tutorials = Tutorial::orderBy("created_at","DESC")->take(3)->Get();

        return view("pages.tutorials.tutorial",compact("blogs","tutorials","tutorial"));
    }

}
