<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\User;
class Connect extends Controller
{
    public function home(){
         
        $products = Article::latest()->paginate(30);
                    return view('home', compact('products'))
                         ->with('i', (request()->input('page', 1) - 1 ) *30);
        
    }
    public function drinkIce(){
         
        $products = Article::latest()->paginate(30);
                    return view('drinkIce', compact('products'))
                         ->with('i', (request()->input('page', 1) - 1 ) *30);
        
    }
    
    public function drinkFrappe(){
         
        $products = Article::latest()->paginate(30);
                    return view('drinkFrappe', compact('products'))
                         ->with('i', (request()->input('page', 1) - 1 ) *30);
        
    }

    public function add(request $request){
        $this->validate($request,[
            'title'=>'required',
        ]);
        $products = new Article;
        $products->title = $request->input('title');
        $products->type = $request->input('type');
        $products->pricel = $request->input('pricel');
        $products->priceM = $request->input('priceM');
        $products->priceS = $request->input('priceS');

        $products->description = $request->input('description');
        
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/products/',$filename);
            $products->image=$filename;
        }else{
            return $request;
            $products->image='';
        }

        $products->save();

        return redirect('/home')->with('info', 'Save Successfull');
        
    }

    public function update($id){
        $products = Article::find($id);
        return view('update', ['products'=>$products]);

    }

    public function read($id){
        $products = Article::find($id);
        return view('detail', ['products'=>$products]);

    }

    public function edit(request $request,$id){

        $data= array(
            'title'=>$request->input('title'),
            'type'=>$request->input('type'),
            'pricel'=>$request->input('pricel'),
            'priceM'=>$request->input('priceM'),
            'priceS'=>$request->input('priceS'),
            'description'=>$request->input('description'),
        );

        Article::where('id',$id)
        ->update($data);

        return redirect('/home')->with('info', 'Updated Successfull');
    }

    public function delete($id){

        Article::where('id',$id)
        ->delete();

        return redirect('/home')->with('info', 'deleted Successfull');
    }

    //Menu 
    public function menu(){
         
        $products = Article::latest()->paginate(9);
                    return view('menu', compact('products'))
                         ->with('i', (request()->input('page', 1) - 1 ) *9);
        
    }
    public function ice(){
         
        $products = Article::latest()->paginate(30);
                    return view('ice', compact('products'))
                         ->with('i', (request()->input('page', 1) - 1 ) *30);
        
    }
    public function hot(){
         
        $products = Article::latest()->paginate(30);
                    return view('hot', compact('products'))
                         ->with('i', (request()->input('page', 1) - 1 ) *30);
        
    }
    public function frappe(){
         
        $products = Article::latest()->paginate(30);
                    return view('frappe', compact('products'))
                         ->with('i', (request()->input('page', 1) - 1 ) *30);
        
    }
}
