<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Article;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Feature;
use App\Models\Package;
use App\Models\User;
use App\Models\Contact;
use App\Models\Faq;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::where('page','!=','About Us')->get();
        return view('web.home.index',compact('banners'));
    }

    public function about_us()
    {
        $about = Banner::where('page','About Us')->first();
        return view('web.about.about_us', compact('about'));
    }

    public function articles()
    {
        $articles = Article::all();
        return view('web.article.articles', compact('articles'));
    }

    public function faq()
    {
        $faqs = Faq::all();
        return view('web.faq.faq',compact('faqs'));
    }

    public function policy()
    {
        $policy = Banner::where('page','Policy')->first();
        return view('web.policy.policy',compact('policy'));
    }
    public function condition()
    {
        $condtion = Banner::where('page','Term & condtion')->first();
        return view('web.conditions.condtions',compact('condtion'));
    }

    public function long_snappers()
    {
        $long_snappers = User::where('isLongSnapper', 1)->orderBy('rating','DESC')->get();
        return view('web.long_snapper.long_snappers', compact('long_snappers'));
    }

    public function packages()
    {
        // dd('yes');
        $packages = Package::where('title', '!=', 'Trial')->get();
        return view('web.package.packages', compact('packages'));
    }

    public function contact_us()
    {
        return view('web.contact.contact_us');
    }

    public function web_register()
    {
        if(auth()->user()){
            if(auth()->user()->type == 'Admin' || auth()->user()->type == 'User'){
                return redirect()->route('dashboard');
            }
            else{
                return redirect()->route('home');
            }
        }
        $packages = Package::where('title', '!=', 'Trial')->get();
        return view('web.auth.register', compact('packages'));
    }

    public function web_login()
    {
        if(auth()->user()){
            if(auth()->user()->type == 'Admin' || auth()->user()->type == 'User'){
                return redirect()->route('dashboard');
            }
            else{
                return redirect()->route('home');
            }
        }
        return view('web.auth.login');
    }
    public function authenticate(Request $request)
 {
     $credentials = $request->validate([
         'email' => ['required', 'email'],
         'password' => ['required'],
     ]);

     if (Auth::attempt($credentials)) {
         $request->session()->regenerate();

         return redirect('/');
     }

     return [
         'email' => 'The provided credentials do not match our records.',
     ];
 }

    public function my_profile()
    {
        // PAYPAL STUFF
        // $result = get_paypal_access_token();
        // create_paypal_billing_plan($result['access_token']);
        // list_paypal_billing_plans($result['access_token']);
        // activate_paypal_billing_plan($result['access_token']);
        // create_paypal_billing_agreement($result['access_token']);
        // show_paypal_agreement_details($result['access_token']);
        // execute_paypal_agreement($result['access_token']);
        if(!(auth()->user())){
            return redirect()->back();
        }

        $user = User::find(auth()->user()->id);
        // dd($user);
        return view('web.profile.my_profile', compact('user'));
    }

    public function profile(Request $request)
    {
        // dd($request->all());
        if(!($user = User::where('id', $request->id)->where('type', '!=', 'Admin')->where('type', '!=', 'User')->first())){
            return redirect()->back();
        }
        // dd($user);
        return view('web.profile.profile', compact('user'));
    }

    public function search_players(Request $request)
    {
        $query = $request->all();

        $users = User::where('created_at', '!=', NULL)->where('type', '!=', 'Admin')->where('type', '!=', 'User');

        if(isset($query['isKicker'])){
            $users->where('isKicker', 1);
        }

        if(isset($query['isPunter'])){
            $users->where('isPunter', 1);
        }

        if(isset($query['isLongSnapper'])){
            $users->where('isLongSnapper', 1);
        }

        if(isset($query['grad_year'])){
            $users->where('grad_year', $query['grad_year']);
        }

        if(isset($query['state'])){
            $users->where('state', $query['state']);
        }

        if(isset($query['height'])){
            $users->where('height', $query['height']);
        }

        if(isset($query['weight'])){
            $users->where('weight', $query['weight']);
        }

        if(isset($query['gpa'])){
            $users->where('gpa', $query['gpa']);
        }

        if(isset($query['act'])){
            $users->where('act', $query['act']);
        }

        if(isset($query['sat'])){
            $users->where('sat', $query['sat']);
        }

        if(isset($query['ncaa_id'])){
            $users->where('ncaa_id', $query['ncaa_id']);
        }

        if(isset($query['other_sports'])){
            $users->where('other_sports', $query['other_sports']);
        }

        $players = $users->get();

        return view('web.player.players', compact('players'));
    }
    public function paypal_payment(Request $request,$id){

        // $user = ($this->userService->find($id));
        dd($id);
        // 'package_id'=> $request->package_id,
        // $user= User::where()
        // dd($user);
        // dd(Session());
        // return view('web.auth.login');
    }

    public function contact_data(Request $request)
    {
     $user = Contact::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'contact_no' =>$request['contact_no'],
        'message' =>$request['message'],
    ]);

    return redirect()->back()->with('message', 'Your Enquiry Send Successfully To Admin');

    // return redirect()->route('login')->withm(['email' => ['message' => 'Your account is inactive.']]);
     // return redirect()->back();
     // return redirect()->back()->
     //    'message'=>'success',
       // dd($user);
        // code...
       // return view('web.contact.contact_us');
 }
}
