- 为方法注入 Request 参数
  - `public function foo(Request $request){}`

- 验证方法
  - `$this->validate($request,[

    ])`

- 验证规则
  - 存在性验证
    - `'name' => 'required'`
  - 长度验证
    - `'name' => 'min:3 | max:15'`
  - 格式验证
    - `'email' => 'email'`
  - 唯一性验证
    - `'id' => 'unique:users'`（针对 users 表）
  - 密码匹配验证
    - `'password' => 'confirmed'`

- 防 CSRF 攻击
  - {{ csrf_field() }}
