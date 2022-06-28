<?php

namespace App\Http\Controllers;

use GeoIP;
use SEO;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use App;

class PagesController extends Controller
{
    //
    public function home(){


        return view('home');

    }








    public function merch(){



        ////////////// SEO
        if(app()->getLocale()=='en'){

          SEO::setTitle('Merch');
          SEOMeta::setKeywords('Meltdown Merch, Meltdown Tienda, Meltdown Denda');

        }elseif(app()->getLocale()=='es'){

          SEO::setTitle('Merch');
          SEOMeta::setKeywords('Meltdown Merch, Meltdown Tienda, Meltdown Denda');

        }else{

          SEO::setTitle('Denda');
          SEOMeta::setKeywords('Meltdown Merch, Meltdown Tienda, Meltdown Denda');

        }


        $products = App\Product::where('active', true)->get();
        return view('merch', compact('products'));

    }








    public function videos(){

        ////////////// SEO
        if(app()->getLocale()=='en'){

          SEO::setTitle('Videos');
          SEOMeta::setKeywords('Meltdown Videos, Meltdown Bideoak');

        }elseif(app()->getLocale()=='es'){

          SEO::setTitle('Videos');
          SEOMeta::setKeywords('Meltdown Videos, Meltdown Bideoak');

        }else{

          SEO::setTitle('Bideoak');
          SEOMeta::setKeywords('Meltdown Videos, Meltdown Bideoak');

        }


        $videos = App\Video::where('active', true)->orderBy('order_number','asc')->get();
        return view('videos', compact('videos'));

    }









    public function music(){


        ////////////// SEO
        if(app()->getLocale()=='en'){

          SEO::setTitle('Music');
          SEOMeta::setKeywords('Meltdown Music, Meltdown Archive, Meltdown Música, Meltdown Musika');

        }elseif(app()->getLocale()=='es'){

          SEO::setTitle('Música');
          SEOMeta::setKeywords('Meltdown Music, Meltdown Archive, Meltdown Música, Meltdown Musika');

        }else{

          SEO::setTitle('Musika');
          SEOMeta::setKeywords('Meltdown Music, Meltdown Archive, Meltdown Música, Meltdown Musika');

        }

        return view('music');

    }









    public function tour(){


        ////////////// SEO
        if(app()->getLocale()=='en'){

          SEO::setTitle('Tour');
          SEOMeta::setKeywords('Meltdown Tour, Meltdown Live, Meltdown Conciertos, Meltdown en Vivo, Meltdown Kontzertuak, Meltdown Zuzenean');

        }elseif(app()->getLocale()=='es'){

          SEO::setTitle('Tour');
          SEOMeta::setKeywords('Meltdown Tour, Meltdown Live, Meltdown Conciertos, Meltdown en Vivo, Meltdown Kontzertuak, Meltdown Zuzenean');

        }else{

          SEO::setTitle('Tour');
          SEOMeta::setKeywords('Meltdown Tour, Meltdown Live, Meltdown Conciertos, Meltdown en Vivo, Meltdown Kontzertuak, Meltdown Zuzenean');

        }



        $shows = App\Show::where('expired', false)->orderBy('date', 'desc')->get();
        return view('tour', compact('shows'));

    }








    public function history(){

        $shows = App\Show::where('expired', true)->orderBy('date', 'desc')->paginate(15);
        return view('history', compact('shows'));

    }









    public function us(){

        ////////////// SEO
        if(app()->getLocale()=='en'){

          SEO::setTitle('Us');
          SEOMeta::setKeywords('Meltdown Us, Meltdown Biography, Meltdown Nosotros, Meltdown Biografía, Meltdown Gu, Meltdown Biografia');

        }elseif(app()->getLocale()=='es'){

          SEO::setTitle('Nosotros');
          SEOMeta::setKeywords('Meltdown Us, Meltdown Biography, Meltdown Nosotros, Meltdown Biografía, Meltdown Gu, Meltdown Biografia');

        }else{

          SEO::setTitle('Gu');
          SEOMeta::setKeywords('Meltdown Us, Meltdown Biography, Meltdown Nosotros, Meltdown Biografía, Meltdown Gu, Meltdown Biografia');

        }


        return view('us');

    }








    public function contact(){

        ////////////// SEO
        if(app()->getLocale()=='en'){

          SEO::setTitle('Contact');
          SEOMeta::setKeywords('Meltdown Contact, Meltdown Contacto, Meltdown Harremana');

        }elseif(app()->getLocale()=='es'){

          SEO::setTitle('Contacto');
          SEOMeta::setKeywords('Meltdown Contact, Meltdown Contacto, Meltdown Harremana');

        }else{

          SEO::setTitle('Harremana');
          SEOMeta::setKeywords('Meltdown Contact, Meltdown Contacto, Meltdown Harremana');

        }

        return view('contact');

    }


    public function media(){

        return view('media');

    }






    public function createSubscription(Request $request){


        $request->validate([

          'name' => 'required',
          'email' => 'required|email'

        ]);

        if (App\Subscription::where('email', '=', $request->email)->count() > 0) {
          
          return back()->with('duplicate','dup');

        }







        $ip = $request->ip();

        if($ip=='127.0.0.1' || $ip=='0.0.0.0'){

          GeoIP::setIp('83.213.0.1');

        }else{

          GeoIP::setIp($ip);

        }







        $newSubscription = new App\Subscription;
        $newSubscription->name = $request->name;
        $newSubscription->email = $request->email;
        $newSubscription->country = GeoIP::getCountry();

        $newSubscription->save();

        return back()->with('success','succ');
    }


}
