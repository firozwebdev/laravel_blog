<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
 * Start front Panel Routes
 */



Route::get('/', 'WelcomeController@index');
Route::get('/single-post/{category_id}/{blog_id}', [
    'as'=>'single.post',
    'uses'=>'WelcomeController@single_post'
]);
Route::get('user-login',[
    'as'=>'user.login',
    'uses'=>'welcomeController@user_login'
]);
Route::get('user-register',[
    'as'=>'user.register',
    'uses'=>'welcomeController@user_register'
]);
Route::post('sign-up',[
    'as'=>'user.signup',
    'uses'=>'welcomeController@user_signup'
]);
Route::get('contact-me',[
    'as'=>'contact.me',
    'uses'=>'welcomeController@contact_me'
]);
Route::post('save-contact',[
    'as'=>'save.contact',
    'uses'=>'welcomeController@save_contact'
]);
//Route::get('/popular-post', 'WelcomeController@popular_post');


/*
 * Start Admin Panel Routes list Admin Panel Routes list Admin Panel Routes list Admin Panel list
 */

/*
 * General Route list
 */
Route::get('admin-login','AdminController@admin_login');
Route::post('/admin-login', 'AdminController@admin_login_check');
Route::get('/dashboard', 'SuperAdminController@index');
Route::get('/logout', [
    'uses'=>'SuperAdminController@logout',
    'as'=>'logout'
]);

/*
 * Category Route list
 */
Route::get('/add-category', [
    'uses'=>'SuperAdminController@add_category',
    'as'=>'add.category'
]);
Route::post('/save-category', [
    'uses'=>'SuperAdminController@save_category',
    'as'=>'save.category'
]);
Route::get('/manage-category',[
    'uses'=>'SuperAdminController@manage_category',
    'as'=>'manage.category'
]);
Route::get('/publish-category/{id}', 'SuperAdminController@publish_category');
Route::get('/unpublish-category/{id}', 'SuperAdminController@unpublish_category');
Route::get('/edit-category/{id}', [
    'uses'=>'SuperAdminController@edit_category',
    'as'=>'edit.category'
]);
Route::put('/update-category', [
    'uses'=>'SuperAdminController@update_category',
    'as'=>'update.category'

]);
Route::get('/delete-category/{id}', 'SuperAdminController@delete_category');

/*
 * blog route list
 */
Route::get('add-blog', [
    'uses'=>'SuperAdminController@add_blog',
    'as'=>'add.blog'
]);
Route::post('save-blog', [
    'uses'=>'SuperAdminController@save_blog',
    'as'=>'save.blog'
]);
Route::get('manage-blog', [
    'uses'=>'SuperAdminController@manage_blog',
    'as'=>'manage.blog'
]);
Route::get('/publish-blog/{id}', 'SuperAdminController@publish_blog');
Route::get('/unpublish-blog/{id}', 'SuperAdminController@unpublish_blog');
Route::get('/edit-blog/{id}', 'SuperAdminController@edit_blog')->name('edit.blog');
Route::put('/update-blog', [
    'uses'=>'SuperAdminController@update_blog',
    'as'=>'update.blog'
]);
Route::get('/delete-blog/{id}', 'SuperAdminController@delete_blog');


/*
 * page route list
 */

Route::get('add-page', [
    'uses'=>'PageController@add_page',
    'as'=>'add.page'
]);
Route::post('save-page', [
    'uses'=>'PageController@save_page',
    'as'=>'save.page'
]);
Route::get('manage-page', [
    'uses'=>'PageController@manage_page',
    'as'=>'manage.page'
]);
Route::get('edit-page/{id}', [
    'uses'=>'PageController@edit_page',
    'as'=>'edit.page'
]);
Route::put('update-page', [
    'uses'=>'PageController@update_page',
    'as'=>'update.page'
]);
Route::get('/publish-page/{id}', 'PageController@publish_page');
Route::get('/unpublish-page/{id}', 'PageController@unpublish_page');
Route::get('/delete-page/{id}', 'PageController@delete_page');


/*
 * User route list
 */


Route::get('add-user', [
    'uses'=>'UserController@add_user',
    'as'=>'add.user'
]);
Route::post('save-user', [
    'uses'=>'UserController@save_user',
    'as'=>'save.user'
]);
Route::get('manage-user', [
    'uses'=>'UserController@manage_user',
    'as'=>'manage.user'
]);
Route::get('view-user/{id}', [
    'uses'=>'UserController@view_user',
    'as'=>'view.user'
]);
Route::put('edit-user/{id}', [
    'uses'=>'UserController@edit_user',
    'as'=>'edit.user'
]);
Route::get('reply-user/{id}', [
    'uses'=>'UserController@reply_user',
    'as'=>'reply.user'
]);

Route::get('/publish-user/{id}', 'UserController@publish_user');
Route::get('/unpublish-user/{id}', 'UserController@unpublish_user');
Route::get('/delete-user/{id}', 'UserController@delete_user');


/*
 * Mail route
 */

Route::get('inbox-mail', [
    'uses'=>'MailController@manage_mail',
    'as'=>'manage.mail'
]);
Route::get('view-mail/{id}', [
    'uses'=>'MailController@show_mail',
    'as'=>'show.mail'
]);

Route::get('view-important-mail/{id}', [
    'uses'=>'MailController@show_important_mail',
    'as'=>'show.important.mail'
]);
Route::get('reply-mail/{id}', [
    'uses'=>'MailController@reply_mail',
    'as'=>'reply.mail'
]);
Route::get('reply-important-mail/{id}', [
    'uses'=>'MailController@reply_important_mail',
    'as'=>'reply.important.mail'
]);
Route::post('reply-mail', [
    'uses'=>'MailController@send_mail',
    'as'=>'send.mail'
]);
Route::post('reply-imporant-mail', [
    'uses'=>'MailController@send_important_mail',
    'as'=>'send.important.mail'
]);
Route::get('important-mail/{id}', [
    'uses'=>'MailController@important_mail',
    'as'=>'important.mail'
]);
Route::get('/delete-mail/{id}', 'MailController@delete_mail');


/*

 * End Admin Panel Routes
 */