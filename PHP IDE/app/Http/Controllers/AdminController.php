<?php namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Code;


class AdminController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Admin Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin');
	}
    
    public function handle(Request $request){
        //save the code to db
		$code = new Code();
		$code->userId = Auth::user()->id;
		$code->code = $request->input('code');

		$code->save();


        $myfile = fopen("newfile.php", "w") or die("Unable to open file!");
        fwrite($myfile, $request->input('code'));
        fclose($myfile);

		//compile and show output
		return view('output');
    }

}
