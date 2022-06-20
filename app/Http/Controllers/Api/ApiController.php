<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->validate([
            'email'    => 'required',
            'password' => 'required'
        ]);

        //begin attempt
        if (Auth::attempt($data)) {
            if (auth()->user()->role == 'user') {
                $token = auth()->user()->createToken('api')->accessToken;
                return response()->json([
                    'token' => $token,
                    'admin' => Auth::user(),
                    'error' => false,
                    'message_en' => '',
                    'message_ar' => ''
                ], 200);
            } else {
                return response()->json([
                    'error'     => true,
                    'message_en'   => 'Unauthorised ,Sorry, you do not have access to this page ',
                    'message_ar'   => 'عفوا ، ليس لديك صلاحيات الوصول إلى هذه الصفحة',
                ], 200);
            }
        } else {
            return response()->json([
                'error'     => true,
                'message_en'   => 'Sorry, there is an error in your phone or password',
                'message_ar'   => 'عفوا ، هناك خطأ في البريد الالكتروني  أو كلمة المرور الخاصة بك',
            ], 200);
        }
    }


    public function register(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users|email',
                'password' => 'required',
                'family_type' => 'required',
            ]
        );
        $data['password']       = Hash::make($request->password);
        $data['role']           = 'user';
        $user = User::create($data);

        //
        $token = $user->createToken('NewUser')->accessToken;

        return response()->json([
            'newUser' => $user,
            'error' => false,
            'message_en' => '',
            'message_ar' => ''
        ], 200);
    }

    public function products()
    {
        $products = Product::where('family_type', Auth::user()->family_type)->get();
        // $token = $user->createToken('NewUser')->accessToken;

        return response()->json([
            'products' => $products,
            'error' => false,
            'message_en' => '',
            'message_ar' => ''
        ], 200);
    }


    public function add_order(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'product_id' => 'required|exists:products,id',
            ]
        );
        // == check data ==
        if ($validator->fails()) {
            return response()->json([
                'error' => false,
                'message' => $validator->errors()->all(),
            ], 422);
        } elseif (Product::find($request->product_id)->family_type != Auth::user()->family_type) {
            return response()->json([
                'error' => false,
                'message' => 'هذا العنصر غير متاح لك ',
            ], 422);
        }

        // == add new reservations  ==
        $order = new Order();
        $order->product_id = $request->product_id;
        $order->user_id = Auth::user()->id;
        $order->save();

        return response()->json([
            'order' => $order,
            'error' => false,
            'message_en' => '',
            'message_ar' => ''
        ], 200);
    }


    public function get_order()
    {
        $orders = Order::with('product')->where('user_id', Auth::user()->id)->get();
        // $token = $user->createToken('NewUser')->accessToken;

        return response()->json([
            'orders' => $orders,
            'error' => false,
            'message_en' => '',
            'message_ar' => ''
        ], 200);
    }

    public function offers()
    {
        $offers = Offer::all();
        // $token = $user->createToken('NewUser')->accessToken;

        return response()->json([
            'offers' => $offers,
            'error' => false,
            'message_en' => '',
            'message_ar' => ''
        ], 200);
    }
}