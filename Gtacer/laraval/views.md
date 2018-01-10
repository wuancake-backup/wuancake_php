- 视图文件目录：`\resources\views`

- 视图文件后缀名：*.blade.php*

- 视图文件支持继承
  - 父视图：  
  `\resources\views\layout\default.blade.php`(非固定)
  ```
  <html>
  <head>
      <title>@yield('title')</title>
  </head>
  <body>
  @yield('content')
  </body>
  </html>
  ```
  - 子视图：  
  `\resources\views\pages\home.blade.php`(非固定)
  ```
  @extends(layout.default)
  @section('title')
  @section('content')
  内容
  @stop
  ```
- Laravel 使用 NPM 管理前端扩展包
  - yarn install --no-bin-links (安装当前项目所有包)
    - 在 `pakage.json` 中指定
  - yarn add cross-env (添加指定的包)

- 编译 .scss 文件
  - `npm run dev`     编译 .scss 文件
  - `npm run watch-poll`  在每次检测到 .scss 文件发生更改时，自动将其编译为 .css 文件
  - 所有编译后的资源文件都存放在 /public 目录中

- 可以创建局部视图，然后通过 `@include()` 在其他视图中进行引用
