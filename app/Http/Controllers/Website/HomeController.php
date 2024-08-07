<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Mail\RequestNotify;
use App\Models\ContactUs;
use App\Models\Custom;
use App\Models\feature;
use App\Models\news;
use App\Models\OfferPrice;
use App\Models\order;
use App\Models\project;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\SliderOption;
use App\Models\Slider;
use App\Models\Subscription;
use Artesaos\SEOTools\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class HomeController extends Controller
{
    use SEOToolsTrait;
    public $theme;
    public function __construct()
    {
        $this->theme = 'website1';
    }

    public function index()
    {
        $slideroption=SliderOption::first();

        if(!$slideroption){
            $slideroption=['word'=>'x:left','image'=>'slidingoverlayhorizontal'];
            SliderOption::create($slideroption);
            $slideroption=json_encode($slideroption);

        }
        $date = [
            'slideroption' => $slideroption,
            'services' => Service::whereActive(1)->orderByDesc('id')->limit(3)->get(),
            'sliders' => Slider::whereActive(1)->orderByDesc('id')->limit(3)->get(),
            'features' => feature::whereActive(1)->orderByDesc('id')->limit(3)->get(),
            'projects' => project::whereActive(1)->orderByDesc('id')->limit(3)->get(),
            'news' => news::whereActive(1)->orderByDesc('id')->limit(3)->get(),
            'testimonials' => Testimonial::whereActive(1)->orderByDesc('id')->limit(3)->get(),
        ];

        $this->seo()->setTitle('الصفحة الرئيسية');
        //$this->seo()->metatags('keywords', 'Al-Sihad - Al-Sihad - Al-Sihad alwosta - awazel - best - the best - عزل فوم - عزل مائي - كشف تسربات المياه - تنظيف منازل - عزل شينكو - عزل حراري - عزل اسطح - مؤسسة الصيهد للمقاولات واعمال العزل');
        //seo meta tags for home page using seotools package
        $this->seo()->setDescription('مؤسسة الصيهد للمقاولات واعمال العزل, هي واحدة من اهم وافضل الشركات في هذا المجال في الرياض');
        $this->seo()->opengraph()->addImage(asset('images/logo.png'));
        $this->seo()->setCanonical(url('/'));
        $this->seo()->opengraph()->setUrl(url('/'));
        $this->seo()->opengraph()->addProperty('type', 'website');
        $this->seo()->opengraph()->addProperty('locale', 'ar_AR');
        $this->seo()->opengraph()->addProperty('locale:alternate', ['ar_AR', 'en_US']);
        $this->seo()->opengraph()->setTitle('مؤسسة الصيهد - الصفحة الرئيسية');
        $this->seo()->opengraph()->setDescription('مؤسسة الصيهد للمقاولات واعمال العزل, هي واحدة من اهم وافضل الشركات في هذا المجال في الرياض');
        return view($this->theme.'.index', $date);
    }

    public function siteprojects()
    {
        $data['projects'] = project::whereActive(1)->orderByDesc('id')->paginate(8);
        $data['services'] = Service::whereActive(1)->orderByDesc('id')->get();
        return view($this->theme.'.projects', $data);
    }

    public function projectDetails($id)
    {
        $data['services'] = Service::whereActive(1)->orderByDesc('id')->paginate(9);
        $data['row'] = project::find($id);
        $this->seo()->setTitle('المشاريع - '.$data['row']->title);
        $this->seo()->setDescription('مؤسسة الصيهد للمقاولات واعمال العزل, هي واحدة من اهم وافضل الشركات في هذا المجال في الرياض');
        $this->seo()->opengraph()->addImage(asset($data['row']->image));
        $this->seo()->setCanonical(url('/'));
        $this->seo()->opengraph()->setUrl(url('/'));
        $this->seo()->opengraph()->addProperty('type', 'website');
        $this->seo()->opengraph()->addProperty('locale', 'ar_AR');
        $this->seo()->opengraph()->addProperty('locale:alternate', ['ar_AR', 'en_US']);
        $this->seo()->opengraph()->setTitle('المشاريع | '.$data['row']->title);
        $this->seo()->opengraph()->setDescription('مؤسسة الصيهد للمقاولات واعمال العزل, هي واحدة من اهم وافضل الشركات في هذا المجال في الرياض');

        return view($this->theme.'.project-details', $data);
    }

    public function siteservices()
    {
        $data['services'] = Service::whereActive(1)->orderByDesc('id')->paginate(9);
        $this->seo()->setTitle('خدمات مؤسسة الصيهد');
        $this->seo()->metatags()->setKeywords(['مؤسسة الصيهد لعزل الاسطح','عزل مائي','عزل اسطح','فوم','افضل انواع العوازل']);
        //seo meta tags for home page using seotools package
        $this->seo()->setDescription('مؤسسة الصيهد للمقاولات واعمال العزل, هي واحدة من اهم وافضل الشركات في هذا المجال في الرياض');
        $this->seo()->opengraph()->addImage(asset('images/logo.png'));
        $this->seo()->setCanonical(url('/'));
        $this->seo()->opengraph()->setUrl(url('/'));
        $this->seo()->opengraph()->addProperty('type', 'website');
        $this->seo()->opengraph()->addProperty('locale', 'ar_AR');
        $this->seo()->opengraph()->addProperty('locale:alternate', ['ar_AR', 'en_US']);
        $this->seo()->opengraph()->setTitle('مؤسسة الصيهد - الصفحة الرئيسية');
        $this->seo()->opengraph()->setDescription('مؤسسة الصيهد للمقاولات واعمال العزل, هي واحدة من اهم وافضل الشركات في هذا المجال في الرياض');

        return view($this->theme.'.services', $data);
    }

    public function serviceDetails($id)
    {
        $data['services'] = Service::whereActive(1)->orderByDesc('id')->get();
        $data['row'] = service::find($id);
        $this->seo()->setTitle('الخدمات - '.$data['row']->title);
        $this->seo()->setDescription('مؤسسة الصيهد للمقاولات واعمال العزل, هي واحدة من اهم وافضل الشركات في هذا المجال في الرياض');
        $this->seo()->opengraph()->addImage(asset($data['row']->image));
        $this->seo()->setCanonical(url('/'));
        $this->seo()->opengraph()->setUrl(url('/'));
        $this->seo()->opengraph()->addProperty('type', 'website');
        $this->seo()->opengraph()->addProperty('locale', 'ar_AR');
        $this->seo()->opengraph()->addProperty('locale:alternate', ['ar_AR', 'en_US']);
        $this->seo()->opengraph()->setTitle('الخدمات | '.$data['row']->title);
        $this->seo()->opengraph()->setDescription($data['row']->notes);

        return view($this->theme.'.service-details', $data);
    }

    public function customPage($slug)
    {
        $data['services'] = Service::whereActive(1)->orderByDesc('id')->get();
        $data['row'] =Custom::where('name_'.App::getLocale(),$slug)->first();
        if($data['row']){
            return view($this->theme.'.custom-page', $data);
        }
        return redirect('/');

    }

    public function sitenews()
    {
        $data['services'] = Service::whereActive(1)->orderByDesc('id')->get();
        $data['news'] = news::whereActive(1)->orderByDesc('id')->paginate(8);
        return view($this->theme.'.news', $data);
    }

    public function newsDetails($id)
    {
        $data['services'] = Service::whereActive(1)->orderByDesc('id')->get();
        $data['new']  = news::find($id);
        return view($this->theme.'.news-details', $data);
    }

    public function Orders(Request $request)
    {
        try {
            $rules = array(
                'name' => 'required|string|min:2',
                'email' => 'nullable|email',
                'phone' => 'required|string|max:15',
            );
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails())
            {
                return Response::json(array(
                    'code' => 0,
                    'msg' => $validator->getMessageBag()->toArray()

                ), 400);
            }

            $orders = new order();
            $orders->name = $request->name;
            $orders->email = $request->email;
            $orders->phone = $request->phone;
            $data = $orders->save();
            if ($data) {
                $response = ['code' => 1, 'msg' => __('admin/app.your_data_send_successfully')];
                $this->sentNotificationMail($orders,'هذا تنبيه بوجود طلب معاودة اتصال جديد',route('contact-us.show',$orders->id),'طلب طلب معاودة اتصال جديد');
            } else {
                $response = ['code' => 0, 'msg' => __('admin/app.some_thing_error')];
            }
            return json_encode($response);
        } catch (\Exception $e) {
            DB::rollback();
            $response = ['code' => 0, 'msg' => __('admin/app.some_thing_error')];
            return json_encode($response);
        }

    }

    public function contactus(Request $request)
    {
            $orders = new ContactUs();
            $orders->name = $request->name;
            $orders->email = $request->email;
            $orders->phone = $request->phone;
            $orders->msg = $request->msg;
            $data = $orders->save();
            if ($data) {
                $response = ['code' => 1, 'msg' => __('admin/app.your_data_send_successfully')];
                $this->sentNotificationMail($orders,'هذا تنبيه بوجود جهة اتصال جديده تم اضافتها',route('contact-us.show',$orders->id),'جهة اتصال جديده');

            } else {
                $response = ['code' => 0, 'msg' => __('admin/app.some_thing_error')];
            }
            return json_encode($response);
//        } catch (\Exception $e) {
//            DB::rollback();
//            $response = ['code' => 0, 'msg' => __('admin/app.some_thing_error')];
//            return json_encode($response);
//        }

    }

    public function subscription(Request $request)
    {
        try {
            $data['email'] = $request->email;
            $data = Subscription::create($data);
            if ($data) {
                $response = ['code' => 1, 'msg' => __('admin/app.your_email_send_successfully')];
            } else {
                $response = ['code' => 0, 'msg' => __('admin/app.some_thing_error')];
            }
            return json_encode($response);
        } catch (\Exception $e) {
            DB::rollback();
            $response = ['code' => 0, 'msg' => __('admin/app.some_thing_error')];
            return json_encode($response);
        }
    }

    public function openMarketing()
    {
        return view($this->theme.'.open-marketing');
    }

    public function informationbuyansale()
    {
        return view($this->theme.'.informationbuyansale');
    }

    public function balance()
    {
        return view($this->theme.'.balance');
    }

    public function profile()
    {
        return view($this->theme.'.profile');
    }

    public function sentNotificationMail($data,$message,$url,$subject){
        if(websiteInfo_hlp('notifications_email')){
            $email_details = [];
            $email_details['message'] = $message;
            $email_details['data'] = $data;
            $email_details['url'] = $url;
            $email_details['subject'] = $subject;
            Mail::to(websiteInfo_hlp('notifications_email'))->send(new RequestNotify($email_details));
            return 'done';
        }
    }

    public function downloadPdf(){
//        try {
            $pdf = websiteInfo_hlp('portfolio_pdf');
            if ($pdf){
                //return Storage::disk('public')->download('front/'.$pdf,websiteInfo_hlp('website_name_en')."_cv",[],'inline');
                return response()->file(storage_path().'/public/front/'.$pdf);
            }
//            }catch (\Exception $e){
//
//            }

    }

    public function orderOfferPrice(Request $request)
    {

//        try {
            $offerPrice = new OfferPrice();
            $offerPrice->name = $request->name;
            $offerPrice->phone_number = $request->phone_number;
            $offerPrice->required_service = $request->required_service;
            $offerPrice->required_meters = $request->required_meters;
            $offerPrice->required_date = $request->required_date;
            $offerPrice->details = $request->details;
            $data = $offerPrice->save();

            if ($data) {
                $response = ['code' => 1, 'msg' => __('admin/app.your_data_send_successfully')];
//                $this->sentNotificationMail($offerPrice,'هذا تنبيه بوجود طلب عرض سعر جديد',route('offer-price.show',$offerPrice->id),'طلب عرض سعر جديد');

            } else {
                $response = ['code' => 0, 'msg' => __('admin/app.some_thing_error')];
            }
            return json_encode($response);

//        } catch (\Exception $e) {
//            DB::rollback();
//            $response = ['code' => 0, 'msg' => __('admin/app.some_thing_error')];
//            return json_encode($response);
//        }

    }
}
