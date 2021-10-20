<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use UpdateUserRequest;

use Hash;
use App\User;

use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{

    public function index()
    {
        return view('Register.register');
    }

    public function register(Request $request)
    {
        // $post=new post;

        // $input = $request->all();

        $validatedData = $request->validate([
            'email' => 'required|email|unique:users',
            'name'  => 'required|alpha',
            // 'password' => 'required|unique:posts',
        ],[

            'email.required' => ' The Email is required.',
            'email.unique:users' => ' This email is already exists.',
            'name.required' => ' The  name is required.',
            'name.alpha' => ' The  name should be string only .',


        ]);

        // $input = $request->all();
        // dd($input);
        // $input['password'] = Hash::make($input['psw']);
        // $insert = post::create($input);

        $post = new User();
        $post->name = $request->name;
        $post->email = $request->email;
        $post->password = Hash::make($request->password);
        $post->save();
        if ($post) {
            return redirect('/register')->with('message', 'registered successfully');
        }else{
            return back()->with('error', 'something went wrong');


        }
    }

    public function loginView()
    {
        return view('/login');
    }


    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt([
            'email' => $email,
            'password' => $password
        ])){
            return redirect('/dashboard')->with('message', 'you are logged in');
        }else {
            return redirect('/login')->with('message', 'Please Try Again');
        }
    }
    public function dashboard()
    {
        // $email = $request->email;
        // $password = $request->password;
        // if (Auth::attempt([
        //     'email' => $email,
        //     'password' => $password
        // ])) {
            return view('dashboard')->with('message', 'you are logged in');
        // } else {
        //     return redirect('/login')->with('message', 'Please Try Again');
        // }
    }

    // if(Auth::user()->email == request('email')) {
        
    //     $this->validate(request(), [
    //             'name' => 'required',
    //           //  'email' => 'required|email|unique:users',
    //             'password' => 'required|min:6|confirmed'
    //         ]);
    
    //         $user->name = request('name');
    //        // $user->email = request('email');
    //         $user->password = bcrypt(request('password'));
    
    //         $user->save();
    
    //         return back();
            
    //     }
    //     else{
            
    //     $this->validate(request(), [
    //             'name' => 'required',
    //             'email' => 'required|email|unique:users',
    //             'password' => 'required|min:6|confirmed'
    //         ]);
    
    //         $user->name = request('name');
    //         $user->email = request('email');
    //         $user->password = bcrypt(request('password'));
    
    //         $user->save();
    
    //         return back();  
            
    //     }
   



    // Public function index(){
    //     return view('\welcome');
    // }

    // Public function myfirst(){
    //     // return view('myfirst')->with('name','Nidhi Malik');
    //     return view('myfirst',['name'=>'nidhi malik']);
    //   }

    // Public function create(Request $request){

    //     $validatedData = $request->validate([
    //     'title' => 'required|unique:posts|max:255',
    //     'body' => 'required',
    //     ]);

    //     $post=new post;
    //     $post->title=$request->title;
    //     $post->body=$request->body;
    //     $post->save();
    //     return redirect('/create')->with('message','data inserted!!');
    // }
    

    public function show(){
        $post=User::all();

        return view('view',compact('post'));
    }

    public function display(Request $request){
        $post=User::find($request->id);
        return view('display',compact('post'));
    }

    public function edit(Request $request){
        $post=User::find($request->id);
        // dd($request->all());
        // dd(url('update'));
        return view('edit',compact('post'))->with('message','Data edited!!');
    }
    // /**
    //  * @param $id
    //  * @param UpdateUserRequest $request
    //  * @return mixed
    //  */

    public function update(Request $request , User $user){

        // dd($request->id);

        $request->validate([
            'email' => 'required|email|unique:users,email,'.$request->id,
            // 'email' => 'required|exists:users',
            // 'email.email' => 'required|email|unique:users',
            // 'email'     => ['required', 'email', Rule::unique('users', 'email')->ignore($user->id)],

            
            // 'email' => ['required',Rule::unique('users')->ignore($user->id),],
            'name'  => 'required|string',
        ],[

            'email.unique' => ' This email already exists.',
            // 'email.different:current' => ' This email already exists.',
            // 'email.exists:users' => ' This email already exists.',
            'email.required' => 'The email address is required',
            // 'email.email' => 'Please enter a valid email address',
            // 'email.email' => 'The email ID you entered already exist', 
            'email.exists' => 'The email ID you entered already exist', 
            'name.required' => ' The  name is required.',
            'name.string' => ' The name should be string only.',


        ]);

        // $this->users->update($id, $request);


        // $inputs = $request->all();
        // dd($request->all());
        $post=User::find($request->id);

        $post->name=$request->name;
        $post->email=$request->email;
        $post->save();
        if($post){
            return redirect('/view')->with('message','Your Details Has Been Updated');


        }else{
            return back()->with('error','try again');


        }
        

    }

    // public function delete(Request $request){
    //     $post=post::find($request->id);
    //     $post->delete();
    //     // return view('delete',compact('post'));
    //     return redirect('/view')->with('message','record delete');
    // }








}
