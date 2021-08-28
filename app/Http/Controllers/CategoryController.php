<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // public function home(){
       
    //     return view("category.home");
    // }

    public function index()

    {
        $cat = Category::all();
        return view("category.home",["cat"=>$cat]);
       
        
    }

    
    public function create()
    {
        return view('category.insert');
       
    }

   
    public function store(Request $request)
    {
        
        $filename = time() ."." . $request->image->extension();
        $request->image->move(public_path('image'),$filename);

        $b = new Category();
        $b->c_name = $request->c_name;
        $b->price = $request->price;
        $b->image= $filename;
        $b->save();
        return redirect()->back();


      
    }

    
    public function show(Category $category)
    {
     $category = Category::find($_GET['categories']);
        return view('category.view',["categories"=>$category]);

        
    }

   
    public function edit(Category $category)
    {
      
    }

    
    public function update(Request $request, Category $category)
    {
      
    }

  
    
    public function done(Request $re ,$id){
        $clients = Client::find($id);
        $clients->status=1;
        $clients->save();
        return redirect()->back();
    }
    public function pending(Request $re ,$id){
        $clients = Client::find($id);
        $clients->status=2;
        $clients->save();
        return redirect()->back();
    }
    public function remove(Request $re ,$id){
        $clients = Client::find($id);
        $clients->status=3;
        $clients->save();
        return redirect()->back();
    }
    public function client_manage(){
       $done = Client::all();
       $pending = Client::where('status','=',2)->get();
       $reject= Client::where('status','=',3)->get();
       $clients = Client::where('status','=',0)->get();
        return view("category.manage_client",["clients"=>$clients,"done"=>$done,"pending"=>$pending,'reject'=>$reject]);
    }
    public function bridal()
    {
        return view('category.bridal');
       
    }
    public function offer()
    {
        return view('category.offer');
       
    }
    public function contact()
    {
        return view('category.contact');
       
    }
    public function dashboard()
    {

    $data = Category::all()->count();

    $client= Client::where('status','=','3')->count();
    $at= Client::where('status','=','1')->count();
    $pd= Client::where('status','=','2')->count();

    return view('category.dashboard',["data"=>$data,"client"=>$client,"at"=>$at,"pd"=>$pd]);
    }
    public function time_update($id){
        $data = Client::find($id);
      
        return view("category.time_update",["data"=>$data]);
    }

    public function updates(Request $req){
        $data = Client::find($req->id);
        $data->time = $req->time;
        $data->save();
        return redirect()->back();
    }
    public function register(Request $req){
        if($req->method()== "POST"){
            $u = new User();
            $u->name = $req->name;
            $u->email = $req->email;
            $u->password = Hash::make($req->password);
            $u->save();
            return redirect()->route("login");
        }

        return view("category.register");

    }
  

    public function login(Request $req){
        if($req->method()== "POST"){
            $user = User::where("email",$req->email)->first();
          if(!$user || !Hash::check($req->password,$user->password)){
              return "<script>alert('error:email and password incorrect')</script>";
          }
          else{
              $req->session()->put("login",$req->email);
          }
          return redirect()->route('manage_client');
        }

        return view('category.login');
    }
     public function destroy(Request $req)
       {
      $req->session()->flush();
         return redirect()->route('category.home');
      
     }

    

}

