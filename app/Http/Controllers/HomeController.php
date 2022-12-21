<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\Section;
use App\Services\CommonService;
use Illuminate\Http\Request;
use Illuminate\View\View;

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
        $productService = new CommonService();
        $productService->set_model(new Product());

        $about = $sectionService->get('about', 'name');

        return view('index', compact('banners', 'about', 'productCategories', 'productService'));
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
}
