advance question laravel ::

Laravel Lifecycle 
Dependency Injection
Service Container
Service Provider
Service Container Binding
Facades in Laravel
Make Your Own Commands
Tinker
Laravel Collections
Laravel Contracts 
Send Mail via 4 Different Method
Queue & Jobs
Event & Listener 
Notifications
Cron Job & Task Scheduling
Macro & Macroable Trait 



question.How to disable CSRF Token in Laravel and why we have to disable it?
app/Http/Middleware/VerifyCsrfToken.php

new learn
1.what is access.
isme hum modal ke attribute ko yaani ki table ke data ko jab aap access karte hai ussi wat aap transform kar sakte hai.yaani ki kisi ke first character ko capital me badalne ke lia.
iska code hum modal me likhte hai.
//accessor
public function getNameAttribute($value){
     //return ucFirst($value);
     return 'shree' $value;
}

1.what is Mutator.
isme hum user ko na dikha kar database m data ko transform karte hai.matlab jo bhi data hai usse hum database m save kara dege.
//mutarator modal
public function setCityAttribute($value){
      $this->attribute['city'] = $value. 'india';
}
//mutarator controller
public function add_student(){
$student = new Student();
$student->name = 'rohit';
$student->city= 'punjab';
$student->save ();
}





Day-001

what is composer

Composer एक tool है जिसका इस्तेमाल करके PHP programming language में बने हुए project के dependencies को manage करने का कार्य करते हैं जैसे की third-party libraries को install या update करना|

how to install composer
why we need install
shoulb be use composer or not
===================================

Day-002
what is laravel

Php framework
For developing web app and api.
Free of cost
Modern framework and easy to use.
The most used framework in php.

History and version

First Realease June 2011
Current version 8.0
Developer Name taylor otwell
written in php

Why use laravel

Strong command line support
large community
regular update
fast simple
=======================

Day-003
How to install Project

1.Laravel installer
composer global require laravel/installer
laravel-v
laravel new blog

2.Composer create-project
composer create-project --prefer-dist laravel/laravel blog

interview quesion-001
what is composer.
=====================
Day-004
File and Folder structure
where we write html
                Model
                Controller
                Routing
                File Store
                Config
                Dependency File

console ->kernal.php
isme hum custom command likhne k lia use karte hai.
Exception handling->
isme hum code ki expeption likte hai.
http->
isme 2 folder hote hai controller and middleware.
controller hamara central unit hota hai.jisme hum model or view ko control karta hai.yani ki database or view k beech middle ware hota hai.

middleware->
yani ki hum wo hi user is page m aa sakte hai jo ki login hai.isko ek baar lagene ke baad baar-2 use kar sakte hai.

kernal->kernal hamare middleeware ko registration k kaam aata hai.
model->database se connection ke lia file use karte hai.like table
providers->service provide base jo bhi cheej use karte hai hum isme likte hai.
bootstrap->app.js->application ko load karne lia use kkarte hai.
catche->
config->
database->
public->
index.php->ye sabse pehle load hoti hai.
resource->iske ander uncompiled file hoti hai.
routers->api ke route or sabhi ke route hoti hai.
vendor-> dependency file
package.json->iska use vue and react ke sath aaiga.
webpack.min.js->iska bhi hum tabhi use karte hai jab hum koi library use karte hai.like angular react etc.



interview quesion-002
How to upgrade and dowloadgrade version in laravel.how to use any command yes .why?

=====================
Day-005
create first file

make first change in file

goto resource->change html designe->welcome.blade.php

<h1>hello page </h1>
create first file
test.blade.php
<h1>hello page test</h1>
go to web.php change
Route::get('/',function(){
    return view('test');
});
interview quesion-003
kya hum view folder ke bahar file ko rakh kar use kar sakte hai.
=====================
Day-006
Routing
What is routing.
ek project ke ander ek new url banana routing kahte hai.

how to make routing.
isme ek url or page hota hai.
Route::get('/test',function(){
    return view('test');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view('contact');
});

how to small url
Route::view('/contact','/contact');
});

Route::get('/{name}',function($name){
    return view('welcome,'[name->$name]);
});

go to welcome page
{{$name}}
anchor tag
<a href="/about"> about</a>
redirect
Route::get('/',function(){
    return redirect('about');
});


interview quest=004
How to use api.php.
========================
Day-007
Controller

what is controller.
make controller.
make function in controller.
call controller from routing.


this is main central.central unit.
//create controller
php artisan make:controller usercontroller.
//app>http>controller
create a function
function show(){
    return'hello';
}

//how to call
//go to web.php
use app\http\controllers\usercontroller;
Route::get('user',[usercontroller::class,'show']); 

pass params wit url.
function show($id){
    return $id;
}

interview quesion=005
how to use manual create in controller possible/not possible.
=====================
Day-008

laravel view

what is view
make view
call view
pass data in view.

iske ander html rakhte hai.view ko controller or routing dono se call kar sakte hai.
byusing route->
Route::view('user','users'); 

Route::get('/user',function(){
    return view('users');
});

pass value
Route::get('/user/{name}',function($name){
    return view('users',["name"=>$name]);
});

byusing controller=>
php artisan make:controller usercontroller
function loadview($user){
    return view('users',["name"=>$user]);
}
go to congig
use app\http\controllers\userscontroller;
Route::get('users/{user}',[usercontroller::class,'loadview']);

blade.php
hello {user}

interview question=006
how to find view exit.
how to create view using command line possible/not possible.
=====================
Day-009
Laravel Component

what is component.
peace of code or reasuse.matlab baar-2 use hona.
aignup ka button 3 jagah use karna uski jagah ek hi component banana isse ek sath color change karte hai.

make component.
php artisan make:component header
ye do jagah create hoga.view designer and view development/dynamic. 

create view->users.blade.php
//how to use header
<x-header/>
<H1>User page</h1>

header.blade.php
<div>
    <h1>hiii i am header</h1>
</div>

call->route->web.php->
Route::view('users','/users');
use component
pass data in component

create view->users.blade.php
//how to use header
<x-header ComponentName="Users"/>
<H1>User page</h1>

use dynamic view->
public title="";
public function__construct($componentName)
{
    $this->title=$componentName;
}
header.blade.php
<div>
    <h1>{{$title}} i am header</h1>
</div>

cfreate new pae->about.blage.php
<x-header ComponentName="About"/>
<H1>about page</h1>
Route::view('about',"about");
interview question=007
kya hum header ko route m use kar sakte hai ya nahi.
=====================
Day-010

Laravel blade paart-2

include view in view

inner.blade.php
<H3>inner page for users </h3>
users.blade.php
<H1>about page</h1>
@include('inner')

php in js
function viewload(){
    $data=['a','b','c',''d,'e'];
    return view('users',['users'=>$data]);
}

@foreach($users as $user)
<h4>{{$user}}</h4>
@endforeach


using script
<script>
var data=@json($users)
console.warn(data['0'])
</script>
csrf token
header and footer

interview question
how to use bootstrap and ny other library.

=====================
Day-011
Laravel html from

make html from
make controller
route get and post
get form data
interview question

create controller->
php artisan make:controller usercontroller
create function->
function getData(Request $req)
{
    //echo 'form submitted';
    return $req->input();
}

create route->web.php=>
use app\http\controller\userscontroller;
Route::post("users",[usercontroller::class,'getData']);
Route::view("login",'users');

create html page->users.blade.php
<h1>User Login<h1>
<form action="users" metod="POST">
@csrf
 <input type="text" name="username" placeholder="enter user name">
 <br><br>
 <input type="text" name="userpassword" placeholder="enter password"><br><br>
 <button type="submit">login</button>
</form>

interview question->
how to use csrf and important.
=====================
Day-012
LARAVEL FORM VALIDATION
use validation function
show error message
error with every field
interview question

goto controller->
function getData(Request $req)
{
    $req->validate([
        'username'=>'required | max:10',
        'userpassword'=>'required | min:3',
    ]);
    //echo 'form submitted';
    return $req->input();
}


<h1>User Login<h1>
<form action="users" metod="POST">
@csrf
 <input type="text" name="username" placeholder="enter user name">
 <br>
 <span style="color:red">@error('username'){{$message}}@enderror</span><br>
 <input type="text" name="userpassword" placeholder="enter password"><br><br>
 <span style="color:red">@error('userpassword'){{$message}}@enderror</span><br>
 <button type="submit">login</button>
</form>

interview question->
how to prefil data input box. not clear
=====================
Day-013
LARAVEL MIDDLEWARE
what is middleware.
middleware type.
make middleware.
apply middleware.
interview question.

create page.
users.blade.php
<h1>welcome the website</h1>
check.blade.php
<h1>user page</h1>
noaccess.blade.php
<h1>you can not access website</h1>

create middleware->
php artisan make:middleware checkAge
gotomiddleware->
public function handler($request,closer $next)
{
   //echo "global message for all page";
    if($request->age && $request->age<18)
    {
        return redirect('noaccess')
    }
    return $next($request);
}
create route->
Route::view('users','users');
Route::view('noaccess','noaccess');

How to addmiddleware->go to kernal->global middleware
protected $middleware = {
    \app\http\middleware\checkAge::class,
}

example->url/age=10
output-noaccess
url/age>20
output -userpage

interview question=
kya hum middle ware controller m use kar sakte hai abhi humne view m use kia hai.

=====================
Day-014
LARAVEL GROUP MIDDLEWARE

what is group middleware
make middleware
register it
apply middleware
interview question

jab hum middle ware ko kuch page m use karte hai or kissi m nahi to hum middleware use karte hai.
create middleware->php artisan make:middleware ageCheck

create page view->
user.blade.php
<h1>This is user page</h1>
home.blade.php
<h1>This is home page</h1>
noaccess.php
<h1>This is noaccess page</h1>

goto route->
Route::view('user','user');
Route::view('home','home');
Route::view('noaccess','noaccess');

register middleware go to kernal->
protected $middlewareFroup-{
    'ProtectPage'=>{
        app\http\middleware\ageCheck::class,
    }
}

go to route->create group middleware
Route::group(['middleware'=>['ProtectPage']],function(){
    Route::view('user','user');
});

go to middleware->
public function handler($request,closure $next)
{
    if($request->age && $request->age<18)
    {
        return redirect('noaccess');
    }
    return $next($request);
}

ex=url/?age=33
aceess

interview question=
kya hum ek middleware k ander ek aur middleware bana sakte hai.
=====================
Day-015

laravel route middleware

what is route middleware
make middleware
register it 
apply middleware
interview question

create view page->
user.blade.php
<h1>This is user page</h1>
home.blade.php
<h1>This is home page</h1>
noaccess.php
<h1>This is noaccess page</h1>

goto route->
Route::view('user','user')->middleware('protectedpage');
Route::view('home','home');
Route::view('noaccess','noaccess');

create middleware->php artisan make:middleware ageCheck
go to register middle ware go to kernal page
protected $routemiddleware = [
    'protectedpage'=>\app\http\middleware\agecheck::class,
]

goto middleware
public function handle($request,closure $next)
{
    if($request->age && $request->age<18)
    {
        return view('noaccess');
    }
    return $next($request);
}

ex- url/home?age=10
go to home page
url/user?age=10
go to noaccess page

interview question=
kya ek route ke ander do middleware use kar sakte hai ya nahi.

=====================
Day-016
laravel http client

what is http client
how to use http client
send data to view
show data in html table
interview question

api ko consume karne k lia laravel ka use karten hai.laravel se kisi dusre ki api ko call karne ke lia use karte hai.

createcontroller->php artisan make:controller usercontroller
go to route->
use app\http\controllers\usercontroller;
Route::get('/user',[usercontroller::class,'index'])

goto controller
//use to call api
use illuminate\support\facades\http;
public function index()
{
    //echo "api call will be here"; 
    //return Http::get("https://reqres.in/api/users?page=1")
   $data= Http::get("https://reqres.in/api/users?page=1");
    return view('users',['collection'=>$data['data']]);
}

show to the data create view page
users.blade.php
<h1>userlist</h1>
<table border="1">
<tr>
<td>ID</td>
<td>Name</td>
<td>Email</td>
<td>Profile photo</td>
</tr>
<tr>
@foreach($collection as $users)
<td>{{$user['id']}}</td>
<td>{{$user['first_name']}}</td>
<td>{{$user['email']}}</td>
<td><img src="{{$user['avatar']}}" alt=""/></td>
</tr>
</table>
interview question=
abhi humne controller m api use ki hai.
kya hum isko seede model k ander ya web.php ke ander kahi use kar sakte hai ha to kaise na to kaise.
=====================
Day-017

Laravel http request method

what is http request.
http request method.
make html form.
route method for request.
interview question.

Kuch bhi data ko send,update ya phir save karne k lia http request use karte hai.
TYPES OF HTTP REQUEST
GET=show
POST=save
PUT=update
DELETE=delete
HEAD=
PATCH=
OPTION=

create a controller->php artisan make:controller usercontroller
create method
function testRequest(Request $req)
{
    //echo 'form submited';
    return $req->input();
}

create view page
users.blade.php
<h1>user login</h1>
<form action="users" method="POST">
@csrf
// {{method_field('PUT')}}
// {{method_field('DELETE')}}
<input type="text" name="user" placeholder="enter username"><br>
<input type="password" name="password" placeholder="enter placeholder"><br>

<button>login</button>
</form>

go to web.php
use app\http\controllers\usercontroller;
//Route::DELETE('users',[usercontroller::class,'testRequest']);
//Route::PUT('users',[usercontroller::class,'testRequest']);
//Route::get('users',[usercontroller::class,'testRequest']);
Route::POST('users',[usercontroller::class,'testRequest']);
Route::view('login','users');

interview question=
how to use all method called.
i am use resource.
=====================
Day-019

Laravel session

make login form
store data in session
get data from session
Delete data from session
interview question

create view page->login.blade.php
<h1>user login</h1>
<form action="users" method="post">
@csrf
<input type="text" name="user" placeholde="enter name" ><br/>
<input type="password" name="password" placeholder="enter password"><br/>
<button type="submit" >login</button>
</form>

create new view page->profile.blade.php

<h1>profile page</h1>
<h2>hello,{{seeion('user')}}</h2>
<a href="logout">logout</a>

createcontroller->php artisan make:controller userauth
create function->
function userlogin(Request $req){
    //return $req->input();
    $data=$req->input(user);
    $req->session()->put('user',$data);
    //echo session('user');
    return redirect('profile');
}

create route->
use app\http\controllers\userauth;

Route::get('/logout',function(){
    if(session()->has('user'))
    {
        session()->pull('user',null);
    }
    return redirect('login');
});

Route::get('/login',function(){
    if(session()->has('user'))
    {
        return redirect('profile');
    }
    return view('login');
});

Route::post('profile','profile');
//Route::post('login','login');
Route::post('users',[userauthcr::class,'userlogin']);
=====================
Day-020

laravel flash session

what is flash session.
store data in flash session.
get data from flash session.
delete data from session.
interview question.

flash session ek baar hi use hota hai.

create view page->storeuser.blade.php
<h1>add new member</h1>
//@if(session::has('user'))
@if(session('user'))
<h3>data saved for {{session('user')}} </h3>
@endif
<form action="storecontroller" method="post">
@csrf
<input type="text" name="name" placeholder="enter name"/><br/>
<input type="text"name="password" placeholder="enter password"/><br/>
<input type="text"name="email" placeholder="enter email"/><br/>
<button type="submit">add user</button>
</form> 

create route=
use app\http\controller\storecontroller;
Route::post('store','storeuser');
Route::post('login','login');
Route::post('storecontroller',[userauthcr::class,'storem']);

create controller->php artisan make:controller storecontroller
create function=
function storem(Request $req){
    // return $req->input();
    $data= $req->input('user');
    $req->session()->flash('user',$data);
    return redirect('store');
} 

interview question=
kya flash session ka use hum do ya do se jyada baar use kar sakten hai.
flesh session do se 3 baar refresh kar k add kar sakte hai.\

=====================
Day-021
laravel localization

what is localization.
how to desine localization.
set default locale.
set locale with route.
interview question.

ek website ko multiple language k ander  banane localization kahlata hai.
iska use hum multi reanal ho.
ex- alag alg country ko apni local language m website so kare.hindi->india,english->america,coria->corian.
 create view page->profile.blade.php
// <h1>welcome to profile</h1>
// <a href="">about</a>
// <a href="">contact</a>
// <a href="">list</a>

<h1>{{__('profile.welcome')}}</h1>
<a href="">{{__('profile.about')}}</a>
<a href="">{{__('profile.contact')}}</a>
<a href="">{{__('profile.list')}}</a>

go to route..
//Route::view('profile','profile');
Route::get('/profile/{lang}',function(){
    App::setlocale($lang);
    return view('profile');
})
define localization language->go to resource->choose lang
create lang->profile.php
<?php
return[
    'welcome'=>"welcome to profile",
    'about'=>'about',
    'contact'=>'contact',
    'list'=>'list'
]
?>

create a new folder=hi=profile.php(alway same file name)
<?php
return[
    'welcome'=>"प्रोफाइल में आपका स्वागत है",
    'about'=>'बारे में',
    'contact'=>'संपर्क करें',
    'list'=>'सूची'
]
?>

change language=go to config folder select app.php
'local'=>'hi',

ex-url/en or url/hi

interview question=
kya hum yaha se contact define karna bhul jau to error aaigi ya nahi.

=====================
Day-023

laravel start with db

config database
checkout database
import db class
fetch data from mysql
interview question

create controller->php artisan make:controller usecontroller
create function=
use illuminate\support\facades\db;
function index(){
    //echo "db connection will be here."
    //echo DB::SELECT('SELECT * FROM users');
    return DB::SELECT('SELECT * FROM users');
}

go to web.php=
use app\http\controller\usercontroller;
Roue::get(users,[usercontroller::class,'index'])

interview question=
kya hum isme mongo db ya any other db use kar sakate hai.

=====================
Day-024
USER LIST FROM DB

make model
make controller and view
fetch data from db table
show data on html page
interview question

create view=list.blade.php
<h1>member listr</h1>
<table border='1'>
<tr >
<td><ID</td>
<td>Name</td>
<td>Email</td>
<td>Address</td>
</tr>
@foreach($members as $member)
<tr >
<td>{{$member['id']}}</td>
<td>{{$member['name']}}</td>
<td>{{$member['email']}}</td>
<td>{{$member['address']}}</td>
</tr>
@endforeach
</table>


create controller= php artisan make:controller MemberController
create function=show
use app\models\member;
function show(){
    //return 'hello from membercontroller';
    // return view('list');
    //return Member:all();
    $data = Member::all();
    return view('list',['members'=>$data]);
}


create a model=php artisan make:model Member


go to route=web.php
use app\http\controller\membercontroller;
Route::get('list',[membercontroller::class,'show']);

intrview question=
how to call data table using model forcly.
=====================
Day-025
Laravel Pagination

Make model
make controller and view
fetch data from db table
show data with pagination
interview question

create view=list.blade.php
<h1>member listr</h1>
<table border='1'>
<tr >
<td><ID</td>
<td>Name</td>
<td>Email</td>
<td>Address</td>
</tr>
@foreach($members as $member)
<tr >
<td>{{$member['id']}}</td>
<td>{{$member['name']}}</td>
<td>{{$member['email']}}</td>
<td>{{$member['address']}}</td>
</tr>
@endforeach
</table>
<div>{{$members->links}}</div>
<style>.w-5{
    display:none;
}</style>

create controller= php artisan make:controller MemberController
create function=show
use app\models\member;
function show(){
    //return 'hello from membercontroller';
    // return view('list');
    //return Member:all();
    // $data = Member::all();
    $data = Member::paginate(5);
    return view('list',['members'=>$data]);
}

create a model=php artisan make:model Member

go to route=web.php
use app\http\controller\membercontroller;
Route::get('list',[membercontroller::class,'show']);

interview=
kya hum is pagination k ander css laga sakte hai.
=====================
Day-026
Save data in database

make html form in view
make controller and model 
make route 
save data in table 
interview question 

dbname=blog,table=members
create view page=addmember.blade.php
<h1>add member</h1>
<form action="">
@csrf
<input type="text" name="name" placeholde="please enter"><br><br>
<input type="text" name="email" placeholde="please enter"><br><br>
<input type="text" name="address" placeholde="please enter"><br><br>
<button type="submit">add member</button>
</form>

create controller=php artisan make:controller membercontroller
create function=adddata
function adddata(Reuest $req){
        $member = new Member;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->address=$req->address;
        $member->save();
        return redirect('add');
}


create model =php artisan make:model member
public timestamp="fslse";

create rout=
use app\http\controller\membercontroller;
Rout::view('add','addmember');
Route::post('adddata',[membercontroller::class,'adddata']);

how to add data two table with the help of single model;
=====================
Day-027
DELETE data in database 
list wit delete button
make route 
delete data in table 
interview question 

dbname=blog,table=members
create view page=list.blade.php
<h1>member list</h1>
<table>
<tr>
<td>id</td>
<td>name</td>
<td>email</td>
<td>address</td>
<td>Operation</td>
</tr>
<tr>
@foreach
<td>{{$item['id']}}</td>
<td>{{$item['name']}}</td>
<td>{{$item['email']}}</td>
<td>{{$item['address']}}</td>
<td><a href="{{'delete'}}">Delete</a></td>
</tr>
@endforeach
</table>

create controller=php artisan make:controller membercontroller
create function=list
function list(){
        $data=member::all();        
        return view('list',['member'=>$data]);
}
function delete($data){
    $data=member find($id);
    $data=delete();
    return redrect('list');
}


create model =php artisan make:model member
public timestamp="fslse";

create rout=
use app\http\controller\membercontroller;
Rout::view('add','addmember');
Route::get('list',[membercontroller::class,'list']);
Route::get('delete/{id}',[membercontroller::class,'delete']);

interview=
delete time show message.
multiple delete one time.
=====================
Day-028

laravel update

dbname=blog,table=members
create view page=list.blade.php
<h1>member list</h1>
<table>
<tr>
<td>id</td>
<td>name</td>
<td>email</td>
<td>address</td>
<td>Operation</td>
</tr>
<tr>
@foreach
<td>{{$item['id']}}</td>
<td>{{$item['name']}}</td>
<td>{{$item['email']}}</td>
<td>{{$item['address']}}</td>
<td><a href="{{'delete'}}">Delete</a>
<a href="{{'edit'}}">Edit</a></td>
</tr>
@endforeach
</table>

create edit.blade.php
<h1>Updat Member</h1>
<form action="/edit" method="post">
<input type="hidden" name="id" value={{$data['id']}} ><br>

<input type="text" name="name" value="{{$data['name']}}" id=""><br>
<input type="text" name="email" value="{{$data['email']}}" id=""><br>
<input type="text" name="address" value="{{$data['address']}}" id=""><br>
<button type="submit">Update</button>
</form>
create rout=
use app\http\controller\membercontroller;
Rout::view('add','addmember');
Route::get('list',[membercontroller::class,'list']);
Route::get('delete/{id}',[membercontroller::class,'delete']);
Route::get('edit/{id}',[membercontroller::class,'showdata']);
Route::get('edit/',[membercontroller::class,'update']);

create controller=php artisan make:controller membercontroller
create function=list
function list(){
        $data=member::all();        
        return view('list',['member'=>$data]);
}
function delete($data){
    $data=member find($id);
    $data=delete();
    return redrect('list');
}
function showdata($id){
    //return member::find($id);
    $data =member::find($data);
    return view('edit',['data'=>$data]);
}
function update(Request $req){
    
    $data =member::find($req->id);
    $data->name=$req->name;
    $data->email=$req->email;
    $data->address=$req->address;
    $data->save();
    return 
    return view('edit',['data'=>$data]);
}

=====================
Day-029

Quiry builder in laravel 

Get result with table name
where condition
find,count,
insert,update,delete,
interview question 

create controller=php artisan make:controller memeber controller
create function=operation
use illuminate\support\facade\db;
public function operation(){
    //echo "code will be here";
    //where condition
    // return db::table('members')->get();
    return db::table('members')
    ->where('address','usa')
    ->get();
    //Find condition
    return(array) db::table('members')->find(4);
    //Count condition
    return db::table('members')->count();
    //insert 
    return db::table('members')
    ->insert(
        [
            'name'=>'aswin',
            'email'=>'aswin@gmail.com',
            'address'=>'UK'
        ]
    );
    //UPDATE DATA
    return db::table('members')
    ->where('id',21)
    ->update([
            'name'=>'aswin',
            'email'=>'aswin@gmail.com',
            'address'=>'kanpur'
    ]);
    //delete data
    return db::table('members')
    ->where('id',21)->delete();

}

create view page=list.blade.php
<h1>member list</h1>
<table>

@foreach($data as $item)
<td>{{$item->id}}</td>
<td>{{$item->name}}</td>
<td>{{$item->email}}</td>
<td>{{$item->address}}</td>

</tr>
@endforeach
</table>

create router=
use app\http\controller\membercontroller;

Route::get('list',[membercontroller::class,'operation']);

interview question=
agar hamare table m data nahi hai to insert kar do otherwise update kar do.

=====================
Day-030
Aggregates query in laravel 
what is aggregates query.
make controller.
sum,max,min,avg etc.
cross check with db.
interview question.

create controller=php artisan make:controller usercontroller
create function=operation 
use illuminate\support\facade\db;
function operation(){
    //echo 'code will be here';
    //return DB::TABLE('member')->get();
    // sum
    return DB::TABLE('member')->sum('id');
    // max
    return DB::TABLE('member')->max('id');
    // min
    return DB::TABLE('member')->min('id');
    // max string
    return DB::TABLE('member')->max('name');
    // min string
    return DB::TABLE('member')->min('name');
    // Average
    return DB::TABLE('member')->avg('id');

}
create route=
use app\http\controller\usercontroller;
Route::get('list',[usercontroller::class,'operation']);

interview question=
kya ek sath min or max value mil sakti hai.
=====================
Day-031
join in laravel 

what is join 
make controller 
import db file 
join with where condition 
interview question 

related information ho to join use karege.
create two table=
create controller=employeecontrolle
use illuminate\support\facade\db;
function getdata(){
    //return 'hello from controller';
    // return DB::table('employee')->get();
    return DB::table('employee')
    ->joine('company','employee.id'.'='.'company.employee,id')
    ->get();
    //only company detail
    return DB::table('employee')
    ->joine('company','employee.id'.'='.'company.employee,id')
    ->select('company.*','employee.*')
    ->get();
    //.......
    return DB::table('employee')
    ->joine('company','employee.id'.'='.'company.employee,id')
    //->where('employee.name','peter')
    ->where('employee.id','2')
    ->select('company.name','company.id')
    ->get();


}
create routr=
use app\http\controller\employeecontroller;
Route::get('get',[employeecontroller::class,getdata]);
=====================
Day-032

Migration in laravel 

what is migration
make table with migration
write code for coulmn field 
migrate database 
interview question 

cmd=
php artisan make:migration create_test_table
php artisan migrate

interview question=
why roll back in table. 
=====================
Day-033
Migration imporatant command 

how to reset migration
rollback migration 
rollback steps,refresh 
single file migration 
interview question 

php artisan make:migration create_test5_table
php artisan migrate
php artisan migrate:reset 
//reset mean all migrate table sara ka sara migration hatana
//rollback check last migration and reset
php artisan migrate::rollback
php artisan migrate::rollback --step 2 //it mean two step migration table remove
php artisan migrate::callback --step 3
//only one migration table
php artisan migrate --path=/database/migrations/table.php 
php artisan migrate:refresh 

interview question=
ek sath 2 ya 3 table kaise migrate karege/
=====================
Day-034

seeding in laravel 

what is seeding.
how to generate seeder file 
data seeding 
run seeding for database 
interview question

laravel ke through dummy data ki entry karna .
go to cmd=php artisan make:seeder membersSeeder(filename)
use illuminate\support\facades\db;
use illuminate\support\db;

public function run(){
    DB::TABLE('members')->insert(
        [
            'name'->str::random(10),
            'email'->str::random(10).'@gmail.com',
            'address'->str::random(10)
        ]
    );
}
go to cmd = php artisan db:send --class=memberseeder

interview =
20 table ko ek sath kaise seed karege.
=====================
Day-035
Upload file in laravel 

make view 
make html form 
make controller 
code for upload file 
interview question 


create view=upload,blade.php 
<h1>upload file</h1>
<form action="">
@csrf
   <input type="file" name="file" entype="multipart/form-data"><br> <br>
   <button type="submit">upload file</button>
</form>

create route=
use app\http\controllers\uploadcontroller;
Route::view('upload','upload');
Route::post('upload',[uploadcontroller::class,'index'])

create controller=php artisan make controller uploadcontroller
create function =index 
function index(Request $req){
    //echo 'hello i am controller';
    return $req->file('file');
}

interview question=
iamge ka naam apne hisab se kaise dege.
=====================
Day-036

Stud Customization

why use stud 
run command 
customize controller 
customize model 
interview question 

stub basically ek skaltan file hoti hai.hamari kisi bhi controller ki ya model ki ya componet ki ya view.
skaltan file kya hai =iska matlab predefind data jo milta hai use stub kahte hai.

//how to cusstpmize stud 
php artisan stub:publish

interview question=
component ko customize kaise kare.
=====================
Day-037
Laravel Accessor 

whats is accessor 
make conroller
make model 
make a accessor function 
interview question 

jab hum database ki value ko show karne se oahle kuch bhi customize update/add karte hai .
kuch bhi modification karne k lia accessor use karte hai.
create controller=php artisan make :controller member


craete route=
use app\http\controller\membercontroller;
use app\modes\member;
function index(){
    return Member::all();

}

creake model=php artsan make:model menber;
function getNameAttribute($value)
{   
    //update name first chacracter capital
    return ucFirst($value);
}
function getAddressAttribute($value)
{   
    //update address first chacracter capital
    return ucFirst($value,".India");
}

Route::get('member',[membercontroller::class,'index'])

interview question=
mutator kya hota hai.
=====================
Day-038
Defining a mutator 

what is mutator 
make controller 
make model 
make a mutator function 
interview question 

database ko modify karna save karne ke pahle wo basically mutator karta hai
jaise surwat m sir name etc lagan aho to yani ki manuwally update karna save ak pahe.

create controller=php artisan make:controller member controller
create function =index 
use app\models\member;
function index(){
    //echo 'hello i am controler';
    //return Member::all();
    //save data
    $member =new Member;
    $member->name="aswin";
    $member->email="aswin@gmail.com";
    $member->address="kanpur";
    $member->name="";

}

create moderl=php artisan make:model member
define mutator--
public $timestamps=false;
public function setNameAttributes($value)
{
    return $this->attribute['name']='Mr.'.$value;
}
public function setAddressAttributes($value)
{
    return $this->attribute['address']=$value.",India";
}


go to route 
use app\http\controllers\membercontroller;
Route::get('member',[membercontroller::class,'index']);

interview question=
agar mr pahle se laga to na lage.
=====================
Day-039
One to one relation

what is relations in laravel 
one to one relation 
make models and controller 
make relation & show data 
interview question 

do table ke beech m ek unik id ho.

create controller=php artisan make:controller membercontroller 
create function=index 
use app\models\member;
function inde(){
    //echo "one to one";
    //return Member::find(1);
    return Member::find(2)->companyData;
}

create route=
use app\http\controllers\membercontroller;
Route:get('data',[membercontroller::class,'index']);

create model=php artisan make:model menber
function companyData(){
    return $this->hasone('app\models\company');
    //return $this->hasmany('app\models\company')
}
create model=php artisan make:model company

interview question =
kya hum ek model m do condition laga sakte hai 
ex-one to one 
one to many 
=====================
Day-041
One to many Relation 

What is relation in laravel 
one to many relation 
make model and controller 
make relation $ show data 
interview question 

user two table members,devices
members=id,name,email,address
devices=id,name,member_id

create controller=php artisan make:controller membercontroller 
use app\models\member;
create function= index 
function index(){
    // return "one to many";
    // return Member::find(1)->getDevice;
    return Member::find(2)->getDevice;
    //return $this->hasMany('App\Models\Device');
}

create route=
use app\http\controller\membercontroller;
Route::get('data',[memberconyroler::class,'index'])

create model=php artisan make:model member'

function getdevice(){
    return $this->hasMany('app\models\device')
}
php artisan make:model device

interview question=
kya hum 3 table k beech m one to many kaise use karege.

=====================
Day-042
Fluent String

what is fluent strings
issue with previous string 
understand with example 
interview 

method ki chaining kar sakte hai. 
ek hi variable k ander bahut si value assign karni padti thi to us problem ko dur karne ki lai use karte hai.

go to web.php 
use illuminate\support\str;
$info="hi,let's learn laravel";
$info=Str::ucfirst($info);
//replace first 
$info=Str::replaceFirst('hi','hello',$info);
//camel case 
$info =Str::camel($info);

//use experien persion 
$info =Str::of($info)
->ucfirst($info)
->replaceFirst('hi','hello',$info)
->camel($info);
echo $info;

interview qu=
kya hum dono method ko combine kar sakte hai.
=====================
Day-043
Route Model Binding

What is route model binding 
make model and controller 
understand with example 
interview question 

route aur model ko dono ko inject kar dena .aur kam se kam code se database se data fatch kar ke le aana.

exmp=
create model=php artisan make:model devices 
create model=php artisan make:controller DeviceController
use app\models\device;
function index(Device $key){
    //return "hello, i am controller";
    // return $key;
    return $key->all();
}

route=
use app\http\controller\devicecontroller;
//Route::get('decice',[Devicecontroller::class,'index']);
Route::get('decice(key)',[Devicecontroller::class,'index']);
Route::get('decice(key:name)',[Devicecontroller::class,'index']);

question=
kya hum ek route se do table se data fatch kar sakta hu.
==================================
Day-044
API INTRODUCTION 

Application program interface 
api basically do technology k beech data transfer karne k lia use hoti hai.

install=postman chrome extension 
GET API-dummy.restapiexample.com/api/v1/employees


==================================
Day-045

first api in laravel 

make controller 
make route 
write small code 
test api on postman 
interview question 

createcontroller=php artisan make:controller dummyapi
create function=getData 
public function getData(){
    //return "hello api";
    return['name'=>'aswin',
            'email'=>'aswin@gmail.com'
            'adress'=>'kanpur'];


}

change route using api =go to api.php 
use app\http\controllers\dummyapi;
Route::get('data',[dummyapi::class,'getData']);

jab hum kisi bhi api ko call karna hota hai to url m api bhi lagate hai .
localhost/api/data 
api m koi bhi data jaiga wo json m hi jaiga 

interview=
kya humko web.php k ander api use karni chaniye ya nahi.

==================================
Day-046

GET DATA WITH API

make controller 
make model 
write code for api 
test api on postman 
interview question 

create controller=php artisan make:controller device controller 
use app\models\device;
function list(){
    //return 'i ma controller';
    return Device::all();
}

go to route api.php 
use app\http\controllers\devicecontroller ;
Route::get('list',[DeviceController::class,'list']);

create model =php artisan make:model device 

localhost/api/list

interview=
kya hum ek api ke ander do table ka data get kar sakte hai.
==================================
Day-047

Get Api and parameter

go to route api.php 
use app\http\controllers\devicecontroller ;

Route::get("list/{id}",[DeviceController::class,'list']);

(id=id?) =isko use karo
create controller=php artisan make:controller device controller 
use app\models\device;

function list($id =null){
    //return 'i ma controller';
    // return Device::all();
    //return Device::find($id);
    return id?Device::find($id):Device::all();
}

interview question =
kya hum name ko lekar search kar saktehai .
==================================
Day-048

Api with post method 

why we use post method .
setup postman for post api .
code for post api .
interview question .

create controller =device controller
use app\modesl\device; 
function add(Request $req)
{
    //return ["result"=>"done"];
    $device = new Device;
    $device->name=$req->name;
    $device->member_id=$req->member_id;
    $result->$device->save();
    if($result)
    {
        return ["result"=>"Data has been saved"];
    }
    else {
        return ["result"=>"operation failed"];
    }
}

go to api.php 
use app\http\controller\DeviceController;

Route::post('add',[DeviceController::class,'add']);

create model=device 
public $timestamps=false;

interview question=
hum data save karne k lia post method hi kyu use karte hai.
==================================
Day-049

Api with put method 

put api kuch bhi update karne ke lia use karte hai

select put api=>body=>raw=>json 

{
    'name':
}

create controller =device controller
use app\modesl\device; 
function add(Request $req)
{
    //return ["result"=>"done"];
    $device = new Device;
    $device->name=$req->name;
    $device->member_id=$req->member_id;
    $result->$device->save();
    if($result)
    {
        return ["result"=>"Data has been saved"];
    }
    else {
        return ["result"=>"operation failed"];
    }
    function update(Request $req){
        $device=Device::find($req->id);
        $device->name=$req->name;
        $device->member_id=$req->member_id;
        $result=$device->save();
        if($result){
            return ["result"=>"Data has been updated"];
        }
        else {
        return ["result"=>"update operation failed"];
    }
    }
}

go to api.php 
use app\http\controller\DeviceController;

Route::post('add',[DeviceController::class,'add']);
Route::put('update',[DeviceController::class,'update']);

create model=device 
public $timestamps=false;

interview =
kya hum post se update nahi kar sakte or kyu.
==================================
Day-052

Search api 

get method with search!why 
setup postman for api 
make route,search function 
test api 
interview question 

Route=
go to api.php 
use app\http\controller\DeviceController;

Route::post('add',[DeviceController::class,'add']);
Route::put('update',[DeviceController::class,'update']);
Route::get('search/{name}',[DeviceController::class,'search']);

create controller =device controller
use app\modesl\device; 
function add(Request $req)
{
    //return ["result"=>"done"];
    $device = new Device;
    $device->name=$req->name;
    $device->member_id=$req->member_id;
    $result->$device->save();
    if($result)
    {
        return ["result"=>"Data has been saved"];
    }
    else {
        return ["result"=>"operation failed"];
    }
    function update(Request $req){
        $device=Device::find($req->id);
        $device->name=$req->name;
        $device->member_id=$req->member_id;
        $result=$device->save();
        if($result){
            return ["result"=>"Data has been updated"];
        }
        else {
        return ["result"=>"update operation failed"];
    }
    }
    function search($name)
    {
        return Device::where("name",$name)->get();
        return Device::where("name",""like,"%".$name."%")->get();
    }
}

interview ?
show no result found
==================================
Day-052

Api validation 

make route 
add validation 
save and return result 
test api 
interview question 

Route=
go to api.php 
use app\http\controller\DeviceController;

Route::post('add',[DeviceController::class,'add']);
Route::put('update',[DeviceController::class,'update']);
Route::get('search/{name}',[DeviceController::class,'search']);
Route:post('validate',[devicecontroller::class,'testdata']);
create controller =device controller
use app\modesl\device; 
use validator;
function add(Request $req)
{
    //return ["result"=>"done"];
    $device = new Device;
    $device->name=$req->name;
    $device->member_id=$req->member_id;
    $result->$device->save();
    if($result)
    {
        return ["result"=>"Data has been saved"];
    }
    else {
        return ["result"=>"operation failed"];
    }
    function update(Request $req){
        $device=Device::find($req->id);
        $device->name=$req->name;
        $device->member_id=$req->member_id;
        $result=$device->save();
        if($result){
            return ["result"=>"Data has been updated"];
        }
        else {
        return ["result"=>"update operation failed"];
    }
    }
    function search($name)
    {
        return Device::where("name",$name)->get();
        return Device::where("name",""like,"%".$name."%")->get();
    }
    function testData($Request $req)
    {
        // return["a"=>"b"];
        $rules=array(
            "member_id"="required"
        );
        $validator=validator::make($req)->all().$rules;
        if($validator->fails();
        {
            // return $validator->errors();
            return response()->json($validator->errors(),401)
        }
        else{
            // return return["a"=>"b"];
            $device=new Device;
            $device->name=$req->name;
            $device->member_id=$req->member_id;
            $result=$device->save();
            if($result){
            return ["result"=>"Data has been updated"];
        }
        else {
        return ["result"=>"update operation failed"];
    }
        }
        )
       
    }
}
==================================
Day-053

API with resource 

make resource 
make route for resource 
example code with api 
test api 
interview question 

resource hum curd k lia use karte hai .
create controller=php artisan make:controller membercontroller --resource
use app\models\member;
public function index(){
    // return ["result"=>"list"];
    return Member::all();
}
public function create(){
    
}
public function store(){
    
}


create model=member

create route =api.php 
use app\http\controllers\membercontroller;
Route::api:Resource("member",[membercontroller::class,'member']);


interview =
kya hum view ke sath resource use kar sakte hai . 
==================================
Day-054

Upload file with api 

make controller $route 
setup postup 
write code for upload file 
test api and uploaded file 
interview question 


create controller:filecontroller 
function upload(Request $req)
{
    // return "hello i am controller ";
    // return $req-{file('file')->store('api:Docs');}
    $result=$req->file('file')->store('apiDocs');
    return ['result'=>$result]
}

create route api 
use app\http\controller\filecontroller;
Route::post("upload",[FileController::class,'upload']);

interview=
kya hum file ko app folder k alaewa or kahi stor kar sakte hai ha to kaise 

==================================
Day-055

Multiple DB connection 

DB Config 
make controller and model 
multiple db with quiry builder 
multiple db with model 
interview question 

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=

DB_CONNECTION_SECOND=mysql
DB_HOST_SECOND=127.0.0.1
DB_PORT_SECOND=3306
DB_DATABASE_SECOND=aswin
DB_USERNAME_SECOND=root
DB_PASSWORD_SECOND=


goto config=database.php 
copy and past mysql 
update second database _SECOND

GO TO CONTROLLER:ProductController 

//quirybuilder
use illumibnate\facade\db;
function list(){
    // return "hello";
    // return DB::table('device')->get();
    // return DB::table('product')->get();
    return DB::connection('mysql2')->table('product')->get();

}
create model =product,device 
//using model
use app\models\device;
use app\models\product;
function list(){
    // return "hello";
    // return Device::all();
     return Product::all();
    return DB::connection('mysql2')->table('product')->get();
}

goto model=production="mysql2";

create route=
use app\http\controller\productcontroller;
Route::get('list',[ProductController::class,'list']);

==================================
Day-056

laravel jetstream

what is jetstream 
install jetstream 
handle database 
checkout project 
interview question

laravel-v 
     composer global remove laravel/installer 
     composer global require laravel/installer

     laravel new projectname --jet
     npm install
     npm run dev 
     php artisan migrate 
     php artisan serve

     php artisan jetstream:install livewire
     composer require laravel/jetstream


==================================
Day-057
==================================
Day-058
==================================
Day-059
==================================
Day-060
