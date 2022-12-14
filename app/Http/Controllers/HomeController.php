<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Models\Apartment;
use App\Models\ApartmentCategory;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\Section;
use App\Services\CommonService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Throwable;

class HomeController extends Controller
{
    /**
     * The index page
     * @return Illuminate\View\View
     */
    public function index() : View
    {
        $bannerService = new CommonService();
        $bannerService->set_model(new Banner());
        $banners = $bannerService->getAll();

        $sectionService = new CommonService();
        $sectionService->set_model(new Section());

        $categoryService = new CommonService();
        $categoryService->set_model(new Category());
        $productCategories = $categoryService->getAll();

        $apartmentCategoryService = new CommonService();
        $apartmentCategoryService->set_model(new ApartmentCategory());
        $apartmentCategories = $apartmentCategoryService->getAll();

        $productService = new CommonService();
        $productService->set_model(new Product());

        $apartmentService = new CommonService();
        $apartmentService->set_model(new Apartment());

        $about = $sectionService->get('about', 'name');
        $facts = $sectionService->get('facts', 'name');

        return view('index', compact('banners', 'about', 'productCategories', 'productService', 'facts', 'apartmentService', 'apartmentCategories'));
    }

    public function placeholderImage($size = null)
    {
        $imgWidth = explode('x',$size)[0];
        $imgHeight = explode('x',$size)[1];
        $text = $imgWidth . '×' . $imgHeight;
        $fontFile = public_path('font/RobotoMono-Regular.ttf');
        $fontSize = round(($imgWidth - 50) / 8);
        if ($fontSize <= 9) {
            $fontSize = 9;
        }
        if($imgHeight < 100 && $fontSize > 30){
            $fontSize = 30;
        }

        $image     = imagecreatetruecolor($imgWidth, $imgHeight);
        $colorFill = imagecolorallocate($image, 100, 100, 100);
        $bgFill    = imagecolorallocate($image, 175, 175, 175);
        imagefill($image, 0, 0, $bgFill);
        $textBox = imagettfbbox($fontSize, 0, $fontFile, $text);
        $textWidth  = abs($textBox[4] - $textBox[0]);
        $textHeight = abs($textBox[5] - $textBox[1]);
        $textX      = ($imgWidth - $textWidth) / 2;
        $textY      = ($imgHeight + $textHeight) / 2;
        header('Content-Type: image/jpeg');
        imagettftext($image, $fontSize, 0, $textX, $textY, $colorFill, $fontFile, $text);
        imagejpeg($image);
        imagedestroy($image);
    }

    public function contact()
    {
        $pageTitle = 'Contact Us';

        return view('contact', compact('pageTitle'));
    }

    public function contactUs(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = (object) [
            'from' => $validate['email'],
            'message' => $validate['message'],
        ];

        try {
            Mail::to(setting('admin-mail'))->send(new Contact($data));
        }
        catch(Throwable $e){
            report($e);
            return back()->withErrors(['email' => 'An internal error occured']);
        }

        return redirect()->route('contact')->with('notify', ['Message sent successfully']);
    }
}
