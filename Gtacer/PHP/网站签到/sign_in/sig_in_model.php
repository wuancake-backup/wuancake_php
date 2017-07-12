<?php
    class Sign_in
    {
        private $connect;
        public function __construct(){
            $this->connect=new mysqli('localhost','root','root','test');
            if ($this->connect->connect_error){
                die('连接数据库失败'.$this->connect->connect_error);
            }
            $this->connect->query('SET NAMES UTF8;');
        }

        public function login($username,$password){
            $username = addslashes($username);
            $password = addslashes($password);
            $sql="SELECT username,password FROM users WHERE username='$username' AND password='$password'";
            $res=$this->connect->query($sql);
            if($res->num_rows)
                return 1;
            else
                return -1;
        }

        public function __destruct(){
            $this->connect->close();
        }
    }
    class Date
    {
        private $year;
        private $month;
        private $weekday;
        private $day;
        private $today;

        public function __construct($set_year){
            date_default_timezone_set('Asia/Chongqing' );
            $this->today = getdate();
            $this->year = $set_year;
            $this->month = $this->today['mon'];
            $this->weekday = $this->today['weekday'];
            $this->day = $this->today['mday'];
        }

        public function getYear(){
            return $this->year;
        }

        public function getMonth(){
            return $this->month;
        }

        public function getWeekday(){
            return $this->weekday;
        }

        public function getDay(){
            return $this->day;
        }

        public function getDateInfo($month){
                $this->month=$month;
            //计算出当月有多少天
            $date_info['days'] = cal_days_in_month(CAL_GREGORIAN,$this->month,$this->year);
            //计算出当前月份的第一天是星期几
            $julian_first = cal_to_jd(CAL_GREGORIAN,$this->month,1,$this->year);
            $date_info['first_day_week'] = jddayofweek($julian_first);
            $date_info['first_day_week'] = $date_info['first_day_week'] == 0 ? 7 :$date_info['first_day_week'] ;
            //计算出当月最后一天是星期几
            $julian_final = cal_to_jd(CAL_GREGORIAN,$this->month,$date_info['days'],$this->year);
            $date_info['final_day_week'] = jddayofweek($julian_final);
            $date_info['final_day_week'] = $date_info['final_day_week'] == 0 ? 7 :$date_info['final_day_week'] ;
            //计算出当前月份在月历中占几行
            $date_info['weeks'] = ($date_info['days'] - (7-$date_info['first_day_week'] + 1) - $date_info['final_day_week'])/7+2;

            return $date_info;
        }

        public function getDateArray($month=123456789){
            if ($month != 123456789){
                $this->month=$month;
            }
            $date_info = self::getDateInfo($month);
            $date_array = [];
            $start_month_day = 1;
            for ($i = 0;$i < $date_info['weeks'];$i++){
                for ($j = 0;$j < 7;$j++){
                    if ($i ==0 && $j >= ($date_info['first_day_week']-1)){
                        $date_array[$i][$j] = $start_month_day;
                        $start_month_day++;
                    }
                    elseif($i == 0){
                        $date_array[$i][$j] = '';
                    }
                    else{
                        $date_array[$i][$j] = $start_month_day;
                        $start_month_day++;
                    }
                    if ($start_month_day > $date_info['days'])
                        break;
                }
            }
            return $date_array;
        }
    }
    class Sign_info
    {
        private $connect;
        private $today;
        public function __construct(){
            $this->connect = new mysqli('localhost','root','root','sign_in');
            if ($this->connect->connect_error)
                die('连接失败'.$this->connect->connect_error);
            $this->connect->query('SET NAMES UTF8');
            $this->today = date('Y-m-d',time());
        }

        //返回今日签到时间
        public function today_sign($name){
            $last_sign_in = $this->connect->query("SELECT last_sign_time FROM sign_in_table WHERE user = '$name'");
            return $last_sign_in->fetch_object()->last_sign_time;
        }

        //签到
        public function sign($name){
            return $this->connect->query("UPDATE sign_in_table SET last_sign_time = '$this->today' WHERE user = '$name';");
        }

        //查看连续签到天数
        public function con_days($name){
            $res = $this->connect->query("SELECT continuous_days FROM sign_info WHERE user = '$name'");
            return $res->fetch_object()->continuous_days;
        }

        public function __destruct(){
            $this->connect->close();
        }
    }
?>