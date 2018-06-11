<?phpnamespace App\Http\Controllers;use Illuminate\Http\Request;use Illuminate\Support\Facades\Auth;class AuthController extends Controller{    public function login(Request $request)    {        $email = $request['email'];        $password = $request['password'];        if (Auth::attempt(['email' => $email, 'password' => $password])) {            return response()->json([                'success' => true            ]);        } else {            return response()->json([                'success' => false            ]);        }    }    public function logout()    {        Auth::logout();        return redirect()->intended('sml_login');    }    public function checklogin(){        if(Auth::check()){            return view('backend.admin.dashboard.index');        }else{            return view('backend.login.login1');        }    }}