<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PostsModel;
use App\CategoriesModel;
class HomeController extends Controller
{
    public function index(){
    	$PostModel = new PostsModel();
    	$CategoriesModel = new CategoriesModel();
    	$DataPost = $PostModel->paginate(5);
    	$DataCategories = $CategoriesModel->all();
        return view('site/site', ['DataPost' => $DataPost,'DataCategories' => $DataCategories]);
    }

    public function detail($id){
        $CategoriesModel = new CategoriesModel();
        $DataCategories = $CategoriesModel->all();
        return view('site/detail', ['DataCategories' => $DataCategories]);
    }

}
