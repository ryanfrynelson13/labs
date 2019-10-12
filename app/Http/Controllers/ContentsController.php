<?php




namespace App\Http\Controllers;

use App\Content;
use App\Media;

use Illuminate\Http\Request;

class ContentsController extends Controller
{
    public function nav(){
          
        $nav1=Content::find(1);
        $nav2=Content::find(2);
        $nav3=Content::find(3);
        $nav4=Content::find(4);
        $logo=Media::find(2);                
        return view('templates.admin.nav',compact('nav1','nav2','nav3','nav4','logo'));
    }
    public function navUpdate(Request $request, Content $content)
    {    
       
        $content->content = request()->input('content');          
        $content->save();
        return redirect()->route('nav');
    }
}
