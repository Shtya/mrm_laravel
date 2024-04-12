<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{


    function delete ($id){
        $blog = blog::findOrFail($id) ;
        $blog->delete();

        // @dd($blog) ;

        return redirect("dashboard/show") ;
    }



    function showBlog ($id){
            $blog =blog::findorFail($id);
            $comments =blog::findorFail($id)->comments()->get() ;
            return view("pages.blog" , ['blog' => $blog , 'comments' => $comments]) ;
    } 

    function insert_blog (Request $req , $id){
      

        comment::create([
            "name" => $req->name ,
            "email" => $req->email ,
            "message" => $req->message ,
            "website" => $req->website ,
            "blog_id" => $id ,
        ]) ;

        return redirect()->back() ;
        $req->path("#comments") ;
        
    }
  
    public function upload(Request $request)
    {

            if( $request->hasFile("upload")  ){
                
                $originName = $request->file('upload')->getClientOriginalName() ;
                $fileName = pathinfo($originName , PATHINFO_FILENAME ) ;
                $extension = $request->file('upload')-> getClientOriginalExtension() ;

                $fileName = $fileName . '__' . time() . '.' . $extension ;

                $request->file('upload')->move(public_path('media'), $fileName) ;
                $url = asset('media/' . $fileName) ;
                return response()->json(['fileName' => $fileName , 'uploaded'=> 1 , 'url' => $url]) ;
            };

    }

    public function store(Request $request)
    {
        $data = new blog() ;

            $data['title'] = $request->title ;
            $data['_url'] = $request->_url ;
            $data['description'] = $request->description ;
            $data['category'] = $request->category ;
            $data['meta_title'] = $request->meta_title ;
            $data['meta_desc'] = $request->meta_desc ;

            if( $request->file('image')){
            $file = $request->file('image');
            $fileName = date('YmdHi').$file->getClientOriginalName() ;  
            $file->move(public_path('media'), $fileName) ;
            $data['thumbnail'] = 'media/'. $fileName ;
            }
            $data->save() ;

        return redirect("dashboard/show") ;
    }

    public function show(Request $request) { 
        $blogs = blog::orderBy('created_at', 'desc')->get() ;

        return view('dashboard.show' , ['blogs' => $blogs]); 
    }


    function update (Request $req , $id){
        $blog = blog::findorFail($id) ;

            $blog['title'] = $req->title ;
            $blog['_url'] = $req->_url ;
            $blog['description'] = $req->description ;
            $blog['category'] = $req->category ;
            $blog['meta_title'] = $req->meta_title ;
            $blog['meta_desc'] = $req->meta_desc ;

            if( $req->file('image')){
            $file = $req->file('image');
            $fileName = date('YmdHi').$file->getClientOriginalName() ;  
            $file->move(public_path('media'), $fileName) ;
            $blog['thumbnail'] = 'media/'. $fileName ;
            }
            $blog->save() ;

        return redirect('/dashboard/show') ;
    }
}
