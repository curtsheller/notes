# Routes

### CRUD Resources Routes
```
Route::get('books',['as'=>'books.index','uses'=>'BOOKController@index']);
Route::post('books/create',['as'=>'books.store','uses'=>'BOOKController@store']);
Route::get('books/edit/{id}',['as'=>'books.edit','uses'=>'BOOKController@edit']);
Route::patch('books/{id}',['as'=>'books.update','uses'=>'BOOKController@update']);
Route::delete('books/{id}',['as'=>'books.destroy','uses'=>'BOOKController@destroy']);
Route::get('books/{id}',['as'=>'books.view','uses'=>'BOOKController@view']);
```
```
 GET    | HEAD  | api/user | | Closure  | api,auth:api |
 GET    | HEAD  | books                 | books.index | App\Http\Controllers\BOOKController@index | web |
 POST   | books | books.store           | App\Http\Controllers\BOOKController@store | web |
 GET    | HEAD  | books/create          | books.create | App\Http\Controllers\BOOKController@create | web |
 GET    | HEAD  | books/{book}          | books.show | App\Http\Controllers\BOOKController@show | web |
 GET    | HEAD  | books/{book}/edit     | books.edit | App\Http\Controllers\BOOKController@edit | web |
 PUT    | PATCH | books/{book}          | books.update | App\Http\Controllers\BOOKController@update | web |
 DELETE | books/{book} | books.destroy  | App\Http\Controllers\BOOKController@destroy | web |
```
