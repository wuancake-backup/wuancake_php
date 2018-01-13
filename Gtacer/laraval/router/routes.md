- 路由文件地址
  - `\routes\web.php`

- 指定路由
  - `ROUTE::get('/homepage','HomePage@home')->name('home')`;
  - 以上代码将 get 请求的 fake.com/home 路由到 HomePage 控制器的 home 方法，并将该条路由明明为 home

- 在视图中渲染路由
  - `{{ route('home') }}`
  - 以上代码将会被渲染为 fake.com/homepage

- 页面重定向后，自动填写最后一次输入过的数据
  - `{{ old('name') }}`
