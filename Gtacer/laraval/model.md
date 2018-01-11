- 数据库迁移文件目录：
  - `\databases\migrations\`

- 迁移文件(类)结构
  - 继承自 `Migration` 类
  - `up()` 方法，在运行迁移时被调用
    - 调用 `Schema::create('table_name',function(Blueprint $table){ })` 方法创建表
  - `down()` 方法，在回滚迁移时被调用
    - 调用 `Schema::dropIfExists('table_name')` 方法删除表

- 执行数据库迁移
  - `php artisan migrate`

- 执行数据库回滚
  - `php artisan migrate:rollback`

- 创建模型
  - `php artisan make:model ModelName`   创建的文件以 `\app\` 目录为根目录

- Eloquent 表命名约定
  - 复数形式名称
    - Article 数据模型对应 articles 表
  - 下划线命名法
    - BlogPost 数据模型对应 blog_post 表

- Tinker 环境
  - 创建用户对象
    - `App\User::create(['name'=> 'Aufree', 'email'=>'aufree@yousails.com','password'=>bcrypt('password')])`
  - 引用模型类
    - `use App\User`
  - 在引用模型后，查找一个 id 为1的用户
    - `User::find(1)`
  - 在引用模型后，查找第一个用户
    - `User::first()`
  - 在引用模型后，查找所有的用户
    - `User::all()`
  - 取出用户实例
    - `$user = User::find(1)`
  - 对实例进行赋值
    - `$user->name = 'summer'`
  - 将修改保存至数据库
    - `$user->save()`
  - 使用 update 更新数据
    - `$user->update(['name'=>'faker'])`
  -
