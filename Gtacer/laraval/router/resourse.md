### 用户资源路由：
### `Route::resource('users','UsersController')`;
### 生成的资源路由列表信息
|HTTP请求|URL|动作|作用|name|
|--------|---|---|---|---|
|GET|/users|UsersController@index|显示所有用户列表的页面|users.index|
|GET|/users/{users}|UsersController@show|显示用户个人信息的页面|users.show|
|GET|/users/create|UsersController@create|创建用户的页面|users.create|
|GET|/users/{users}/edit|UsersController@edit|编辑用户个人资料的页面|users.edit|
|POST|/users|UsersController@store|创建用户|users.store|
|PATCH|/users/{user}|UsersController@update|更新用户|users.update|
|DELETE|/users/{users}|UsersController@destroy|删除用户|users.destroy|
