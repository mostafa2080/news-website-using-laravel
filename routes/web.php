<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\NewsPostController;
use App\Http\Controllers\Backend\SubcategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Models\NewsPost;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [IndexController::class, 'Index']);

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [UserController::class, 'UserDashboard'])->name('dashboard');
    Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');
    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');
    Route::get('/change/password', [UserController::class, 'ChangePassword'])->name('change.password');
    Route::post('user/change/password', [UserController::class, 'UserChangePassword'])->name('user.change.password');
}); //end of user route



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//admin dashboard and profile
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');
});

Route::get('admin/login', [AdminController::class, 'AdminLogin'])->middleware(RedirectIfAuthenticated::class)->name('admin.login');
Route::get('admin/logout/page', [AdminController::class, 'AdminLogoutPage'])->name('admin.logout.page');

Route::middleware(['auth', 'role:admin'])->group(function () {
    //category routes
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/all/category', 'AllCategory')->name('all.category');
        Route::get('/add/category', 'AddCategory')->name('add.category');
        Route::post('/store/category', 'StoreCategory')->name('store.category');
        Route::get('/edit/category/{id}', 'EditCategory')->name('edit.category');
        Route::post('/update/category', 'UpdateCategory')->name('update.category');
        Route::get('/delete/category/{id}', 'DeleteCategory')->name('delete.category');
    }); // end of category routes

    // admin user routes
    Route::controller(AdminController::class)->group(function () {
        Route::get('/all/admin', 'AllAdmin')->name('all.admin');
        Route::get('/add/admin',  'AddAdmin')->name('add.admin');
        Route::post('/store/admin', 'StoreAdmin')->name('store.admin');
        Route::get('/edit/admin/{id}',  'EditAdmin')->name('edit.admin');
        Route::post('/update/admin', 'UpdateAdmin')->name('update.admin');
        Route::get('/delete/admin/{id}',  'DeleteAdmin')->name('delete.admin');
        Route::get('/inactive/admin/user/{id}', 'InactiveAdminUser')->name('inactive.admin.user');
        Route::get('/active/admin/user/{id}', 'ActiveAdminUser')->name('active.admin.user');
    }); //end of admin user routes

    // Subcategory Routes
    Route::controller(SubcategoryController::class)->group(function () {
        Route::get('/all/subcategory', 'AllSubcategory')->name('all.subcategory');
        Route::get('/add/subcategory', 'AddSubcategory')->name('add.subcategory');
        Route::post('/store/subcategory', 'StoreSubcategory')->name('store.subcategory');
        Route::get('/edit/subcategory/{id}', 'EditSubcategory')->name('edit.subcategory');
        Route::post('/update/subcategory', 'UpdateSubcategory')->name('update.subcategory');
        Route::get('/delete/subcategory/{id}', 'DeleteSubcategory')->name('delete.subcategory');
        Route::get('/subcategory/ajax/{category_id}', 'GetSubCategory');
    }); //End Subcategory Routes
    // NewsPost Routes
    Route::controller(NewsPostController::class)->group(function () {
        Route::get('/all/news/post', 'AllNewsPost')->name('all.news.post');
        Route::get('/add/news/post', 'AddNewsPost')->name('add.news.post');
        Route::post('/store/news/post', 'StoreNewsPost')->name('store.news.post');
        Route::get('/edit/news/post/{id}', 'EditNewsPost')->name('edit.news.post');
        Route::post('/update/news/post', 'UpdateNewsPost')->name('update.news.post');
        Route::get('/delete/news/post/{id}', 'DeleteNewsPost')->name('delete.news.post');
        Route::get('/inactive/news/post/{id}', 'InactiveNewsPost')->name('inactive.news.post');
        Route::get('/active/news/post/{id}', 'ActiveNewsPost')->name('active.news.post');
    }); //End Subcategory Routes
});



require __DIR__ . '/auth.php';
