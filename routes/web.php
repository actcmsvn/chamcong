<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneAuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogUserController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\FullCalendarController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\WhoisLookupController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/whois-lookup', [WhoisLookupController::class, 'create']);
Route::post('/whois-lookup', [WhoisLookupController::class, 'store']);

Route::get('instagram-auth-response', 'InstagramAuthController@complete');
Route::get('/', function () {
    $app = app();
    $controller = $app->make('\App\Http\Controllers\HomeController');
    return $controller->callAction('index', $parameters = array());
})->name('home');
// Route::get('/', IndexController::class);
Route::get('/category/{slug}', CategoryController::class);
Route::get('/tag/{slug}', TagController::class);
Route::get('/blog/{slug}', [BlogUserController::class, 'show']);
Route::get('/search', [BlogUserController::class, 'search']);
Route::resource('contacts', ContactController::class);
Route::resource('subscribers', SubscriberController::class);

Route::get('feed', FeedController::class);
Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);
Route::post('fullcalenderAjax', [CalenderController::class, 'ajax']);
Route::get('phone-auth', [PhoneAuthController::class, 'index']);
Route::view('about-us', 'web.about-us')->name('about-us');
Route::view('packages', 'web.package')->name('packages');
Route::view('helps', 'web.help')->name('helps');
Route::view('classes', 'web.classes')->name('classes');
Route::view('schedule', 'web.schedule')->name('schedule');

Route::group(['middleware' => 'auth'], function () {
    Route::post('/comment/store', '\App\Http\Controllers\CommentController@store')->name('comment.add');
    Route::post('/reply/store', '\App\Http\Controllers\CommentController@replyStore')->name('reply.add');
    Route::post('like', '\App\Http\Controllers\LikeController@like')->name('like');
    Route::delete('like', '\App\Http\Controllers\LikeController@unlike')->name('unlike');
});

// admin
Route::prefix('admin')->group(function () {

    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::group(['middleware' => 'auth'], function () {
        Route::resource('adminContacts', AdminContactController::class);
        Route::resource('generals', GeneralController::class);
        Route::resource('permissions', PermissionController::class);
        Route::resource('tasks', TasksController::class);
        Route::resource('users', UsersController::class);
        Route::resource('members', MembersController::class);
        Route::resource('employee', EmployeeController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('tags', TagController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('blogs', BlogController::class);

        Route::view('forms', 'admin.forms')->name('forms');
        Route::view('cards', 'admin.cards')->name('cards');
        Route::view('charts', 'admin.charts')->name('charts');
        Route::view('buttons', 'admin.buttons')->name('buttons');
        Route::view('modals', 'admin.modals')->name('modals');
        Route::view('tables', 'admin.tables')->name('tables');
        Route::view('calendar', 'admin.calendar')->name('calendar');

        Route::get('fullcalender', [CalenderController::class, 'index']);
        Route::post('fullcalenderAjax', [CalenderController::class, 'ajax']);
        
        Route::get('booking',[FullCalendarController::class, 'index']);
        Route::post('bookingAjax', [FullCalendarController::class, 'ajax']);

    });
    
});