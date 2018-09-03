<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Admin;
use App\Model\Shop;
use App\Model\Goods;
use App\Model\Member;
use App\Model\Order;
use App\Model\Post;
use Carbon\Carbon;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;
use Illuminate\Support\Facades\DB;
class UserController extends BaseController
{
	public function index()
	{






 return UserResource::collection(Post::all());
// 
// return new UserCollection(Post::all());

// 		$phone = Shop::find(21)->phoness;
// // var_dump($phone);

// 		$phone = Admin::find(63)->user;
// // var_dump($phone);


// 	$phone = Shop::find(23)->goods;
// // var_dump($phone);

// 	$phone = Goods::find(41901)->shop;
// 	// var_dump($phone);

// // $phone = Shop::find(21)->member;
// 	// var_dump($phone);


// 	$phone = Member::find(191)->shop;
	// var_dump($phone);

// $phone = Admin::find(84)->lists;
// 	var_dump($phone);

 // $phone = Shop::find(23)->shop;
 // $phone = Goods::find(22)->goods_id;
	// dd($phone);
 // $post = Post::find(2)->tags;
// var_dump($post);


// $user = Post::find(1);
//访问器
// Post::setFirstNameAttribute('qin');
// var_dump();
	// //修改器
	// $user = Post::find(1);
	// var_dump($user);
	// $user->name = 'qin';
	// var_dump($user->attributes);
	
	// //日期修改器
	// $user = Post::find(1);
 //    // $user->disabled_at-> getTimestamp();
	// // var_dump($a );
	// $user->created_at = Carbon::now();
	// $user->save();

//序列化为数组
	

	// $user = Post::find(1);
	// $a= $user->toArray();
	// $a= $user->toJson(JSON_PRETTY_PRINT);
	// $a= (string) Post::find(1);
	// var_dump($user);
	// $a= $user->append('is_admin')->toArray();
	// $a= $user->setAppends(['is_admin2'])->toArray();
	// $a= Post::find(1);
	// var_dump($a);































 }

}
