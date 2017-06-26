<?php
namespace App\Http\Controllers;

use Log;
use App\User;
use App\Article;
use App\Http\Requests;
use Illuminate\Http\Request;

class UserController extends Controller
{

	public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('checkage')->only('shopProfile');
        //$this->middleware('subscribed')->except('show');
    }

    public function index(Request $request){
    	//return view('user.profile', ['article' => '111']);
    	//session(['key2' => 'value999']);
    	//$value = session('key2', 'default');
    	//$request->session()->put('key3', 'value777');
    	//$request->session()->push('user.teams', 'developers');
    	//$value = $request->session()->pull('key', 'default');
        //删除一个
    	//$request->session()->forget('key');
    	//删除所有
    	//$request->session()->flush();
    	//$data = $request->session()->all();
    	//dd($data);
    	//return view('user.profile')->with('article', $data);
        //config(['app.timezone' => 'America/Chicago']);
        //$value = config('app.timezone');
        //$value = $environment = app()->environment();
        //$value = env('APP_DEBUG', false);
        //Log::info('User failed to login.', ['id' => 999]);
        $value = $request->all();
        //dd($value);
    }

    public function test(){
    	return redirect()->route('profile', ['id' => 1]);
    	return redirect()->route('profile', [$user]);
    	return redirect()->action('HomeController@index');
    	return redirect()->action(
    	    'UserController@profile', ['id' => 1]
    	);
    	return redirect('dashboard')->with('status', 'Profile updated!');
    }

    public function showProfile(){
    	$url = route('profile');
    	return 'this is userController Profile funciton!';
    }

    public function getAll(){
    	return 'this is userController getAll funciton!';
    }

    public function show(Request $request,$id)
    {
        return view('user.profile', ['article' => Article::findOrFail($id)]);
    }
}
