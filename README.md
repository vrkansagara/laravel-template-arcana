Arcana Frontend Template For Laravel5.1
=======================================

>Template copyright respected to original author.

This is the basic template used for the laravel view.

Copy Past `public` and `resources` into you laravel root directory
And Activate in `route.php`  as bellow

```
Route::get('arcana','ArcanaController@index');
Route::get('arcana/{pageName}','ArcanaController@index')
```