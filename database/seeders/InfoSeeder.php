<?php

namespace Database\Seeders;

use App\Models\Info;
use App\Models\SliderOption;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('infos')->delete();
        //DB::table('slider_options')->delete();

        Info::truncate();
        //basic info
        $array = [

        ['option' => 'website_name_en','value' => 'مؤسسة الصيهد','type' => 'string'],
        ['option' => 'website_name_ar','value' => 'مؤسسة الصيهد','type' => 'string'],
        ['option' => 'logo_en','value' => 'logo.png','type' => 'image'],
        ['option' => 'logo_ar','value' => 'logo.png','type' => 'image'],
        ['option' => 'show_logo','value' => true,'type' => 'checkbox'],

        //files
        ['option' => 'portfolio_pdf','value' => 'portfolio.pdf','type' => 'pdf'],

        //header data
        ['option' => 'header_first_title_ar','value' => 'اكبر شركة للمقاولات واعمال العزل بالرياض','type' => 'string'],
        ['option' => 'header_first_title_en','value' => 'اكبر شركة للمقاولات واعمال العزل بالرياض','type' => 'string'],
        ['option' => 'header_second_title_ar','value' => 'مؤسسة الصيهد تقدم افضل خدمة مقابل سعر بالمملكة','type' => 'string'],
        ['option' => 'header_second_title_en','value' => 'مؤسسة الصيهد تقدم افضل خدمة مقابل سعر بالمملكة','type' => 'string'],
        ['option' => 'header_pragraph_ar','value' => 'مؤسسة الصيهد هي واحدة من اكبر وافضل الشركات العاملة بالمقاولات واعمال العزل بالمملكة العربية السعودية, نستخدم افضل واحدث الاساليب والامكانيات وبأعلي جودة ممكنة.','type' => 'text'],
        ['option' => 'header_pragraph_en','value' => 'مؤسسة الصيهد هي واحدة من اكبر وافضل الشركات العاملة بالمقاولات واعمال العزل بالمملكة العربية السعودية, نستخدم افضل واحدث الاساليب والامكانيات وبأعلي جودة ممكنة.','type' => 'text'],
        ['option' => 'header_image','value' => 'header.png','type' => 'image'],

        //about us data
        ['option' => 'about_title_ar','value' => 'اكبر شركة للمقاولات واعمال العزل بالرياض','type' => 'string'],
        ['option' => 'about_title_en','value' => 'اكبر شركة للمقاولات واعمال العزل بالرياض','type' => 'string'],
        ['option' => 'about_pragraph_ar','value' => 'مؤسسة الصيهد هي واحدة من اكبر وافضل الشركات العاملة بالمقاولات واعمال العزل بالمملكة العربية السعودية, نستخدم افضل واحدث الاساليب والامكانيات وبأعلي جودة ممكنة.','type' => 'text'],
        ['option' => 'about_pragraph_en','value' => 'مؤسسة الصيهد هي واحدة من اكبر وافضل الشركات العاملة بالمقاولات واعمال العزل بالمملكة العربية السعودية, نستخدم افضل واحدث الاساليب والامكانيات وبأعلي جودة ممكنة.','type' => 'text'],
        ['option' => 'about_image','value' => 'about.png','type' => 'image'],

        //services data
        ['option' => 'service_title_ar','value' => 'اكبر شركة للمقاولات واعمال العزل بالرياض','type' => 'string'],
        ['option' => 'service_title_en','value' => 'اكبر شركة للمقاولات واعمال العزل بالرياض','type' => 'string'],
        ['option' => 'service_pragraph_ar','value' => 'مؤسسة الصيهد هي واحدة من اكبر وافضل الشركات العاملة بالمقاولات واعمال العزل بالمملكة العربية السعودية, نستخدم افضل واحدث الاساليب والامكانيات وبأعلي جودة ممكنة.','type' => 'text'],
        ['option' => 'service_pragraph_en','value' => 'مؤسسة الصيهد هي واحدة من اكبر وافضل الشركات العاملة بالمقاولات واعمال العزل بالمملكة العربية السعودية, نستخدم افضل واحدث الاساليب والامكانيات وبأعلي جودة ممكنة.','type' => 'text'],
        ['option' => 'service_image','value' => 'service.png','type' => 'image'],

        //projects data
        ['option' => 'project_title_ar','value' => 'اكبر شركة للمقاولات واعمال العزل بالرياض','type' => 'string'],
        ['option' => 'project_title_en','value' => 'اكبر شركة للمقاولات واعمال العزل بالرياض','type' => 'string'],
        ['option' => 'project_pragraph_ar','value' => 'مؤسسة الصيهد هي واحدة من اكبر وافضل الشركات العاملة بالمقاولات واعمال العزل بالمملكة العربية السعودية, نستخدم افضل واحدث الاساليب والامكانيات وبأعلي جودة ممكنة.','type' => 'text'],
        ['option' => 'project_pragraph_en','value' => 'مؤسسة الصيهد هي واحدة من اكبر وافضل الشركات العاملة بالمقاولات واعمال العزل بالمملكة العربية السعودية, نستخدم افضل واحدث الاساليب والامكانيات وبأعلي جودة ممكنة.','type' => 'text'],
        ['option' => 'project_image','value' => 'project.png','type' => 'image'],

        //statistics data
        ['option' => 'experiance_years','value' => '10','type' => 'number'],
        ['option' => 'projects_number','value' => '110','type' => 'number'],
        ['option' => 'clients_number','value' => '500','type' => 'number'],
        ['option' => 'employees_number','value' => '100','type' => 'number'],

        //testimonials data
        ['option' => 'testimonial_title_ar','value' => 'اكبر شركة للمقاولات واعمال العزل بالرياض','type' => 'string'],
        ['option' => 'testimonial_title_en','value' => 'اكبر شركة للمقاولات واعمال العزل بالرياض','type' => 'string'],
        ['option' => 'testimonial_pragraph_ar','value' => 'مؤسسة الصيهد هي واحدة من اكبر وافضل الشركات العاملة بالمقاولات واعمال العزل بالمملكة العربية السعودية, نستخدم افضل واحدث الاساليب والامكانيات وبأعلي جودة ممكنة.','type' => 'text'],
        ['option' => 'testimonial_pragraph_en','value' => 'مؤسسة الصيهد هي واحدة من اكبر وافضل الشركات العاملة بالمقاولات واعمال العزل بالمملكة العربية السعودية, نستخدم افضل واحدث الاساليب والامكانيات وبأعلي جودة ممكنة.','type' => 'text'],
        ['option' => 'testimonial_image','value' => 'testimonial.png','type' => 'image'],

        //news and posts data
        ['option' => 'news_posts_title_ar','value' => 'اكبر شركة للمقاولات واعمال العزل بالرياض','type' => 'string'],
        ['option' => 'news_posts_title_en','value' => 'اكبر شركة للمقاولات واعمال العزل بالرياض','type' => 'string'],
        ['option' => 'news_posts_pragraph_ar','value' => 'مؤسسة الصيهد هي واحدة من اكبر وافضل الشركات العاملة بالمقاولات واعمال العزل بالمملكة العربية السعودية, نستخدم افضل واحدث الاساليب والامكانيات وبأعلي جودة ممكنة.','type' => 'text'],
        ['option' => 'news_posts_pragraph_en','value' => 'مؤسسة الصيهد هي واحدة من اكبر وافضل الشركات العاملة بالمقاولات واعمال العزل بالمملكة العربية السعودية, نستخدم افضل واحدث الاساليب والامكانيات وبأعلي جودة ممكنة.','type' => 'text'],

        //subscribe data
        ['option' => 'subscribe_title_ar','value' => 'اشترك الان ليصلك كل عروضنا و جديدنا','type' => 'string'],
        ['option' => 'subscribe_title_ar','value' => 'اشترك الان ليصلك كل عروضنا و جديدنا','type' => 'string'],


        //footer data
        ['option' => 'footer_pragraph_ar','value' => 'مؤسسة الصيهد هي واحدة من اكبر وافضل الشركات العاملة بالمقاولات واعمال العزل بالمملكة العربية السعودية, نستخدم افضل واحدث الاساليب والامكانيات وبأعلي جودة ممكنة.','type' => 'text'],
        ['option' => 'footer_pragraph_en','value' => 'مؤسسة الصيهد هي واحدة من اكبر وافضل الشركات العاملة بالمقاولات واعمال العزل بالمملكة العربية السعودية, نستخدم افضل واحدث الاساليب والامكانيات وبأعلي جودة ممكنة.','type' => 'text'],



        //pages background
        ['option' => 'about_background_image','value' => 'projects.png','type' => 'image'],
        ['option' => 'services_background_image','value' => 'projects.png','type' => 'image'],
        ['option' => 'projects_background_image','value' => 'projects.png','type' => 'image'],
        ['option' => 'news_posts_background_image','value' => 'news_posts.png','type' => 'image'],
        ['option' => 'call_background_image','value' => 'call.png','type' => 'image'],
        ['option' => 'news_background_image','value' => 'news.png','type' => 'image'],
        ['option' => 'footer_background_image','value' => 'footer.png','type' => 'image'],
        ['option' => 'contact_background_image','value' => 'contact.png','type' => 'image'],

        //contacts data
        ['option' => 'email','value' => '','type' => 'string'],
        ['option' => 'notifications_email','value' => 'othmanahmed865@gmail.com','type' => 'string'],
        ['option' => 'phone','value' => '','type' => 'string'],

        //social data
        ['option' => 'whats_up','value' => '','type' => 'string'],
        ['option' => 'address_en','value' => '','type' => 'string'],
        ['option' => 'address_ar','value' => '','type' => 'string'],
        ['option' => 'fb_link','value' => '','type' => 'string'],
        ['option' => 'twitter_link','value' => '','type' => 'string'],
        ['option' => 'linked_link','value' => '','type' => 'string'],
        ['option' => 'instagram_link','value' => '','type' => 'string'],
        ['option' => 'snapchat_link','value' => '','type' => 'string'],
        ['option' => 'youtube_link','value' => '','type' => 'string'],

        //setting data
        ['option' => 'main_color','value' => '#05233a','type' => 'color'],
        ['option' => 'secondary_color','value' => '#16a086','type' => 'color'],
        ['option' => 'main_font_color','value' => '#05233a','type' => 'color'],
        ['option' => 'secondary_font_color','value' => '#16a086','type' => 'color'],
        ['option' => 'font_family','value' => '\'Cairo\', sans-serif','type' => 'string'],
        ['option' => 'font_url','value' => 'https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap','type' => 'string'],
        ];


        foreach($array as $arr)
        {
            if(!Info::where(['option'=>$arr['option']])->exists()){
                Info::Create($arr);
            }
        }

        // SliderOption::create(['image'] => 'slidingoverlayhorizontal','word' => 'x:right',

    }
}
