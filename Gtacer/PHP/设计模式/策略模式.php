<?php
    //定义标准
    interface OutputInterface
    {
        public function load($data);
    }

    //定义符合标准的类
    class SerializeOutput implements OutPutInterface
    {
        public function load($data){
            return serialize($data);
        }
    }

    class JsonStringOutput implements OutPutInterface
    {
        public function load($data){
            return json_encode($data);
        }
    }

    class ArrayOutput implements OutPutInterface
    {
        public function load($data){
            return $data;
        }
    }

    //定义公共接口，通过实现类型约束，保证输出类必须是实现了接口规范的类
    class client
    {
        private $output;

        //设置要实现的类
        public function setOutput(OutputInterface $outputType){
            $this->output=$outputType;
        }

        //调用要实现的方法
        public function loadOutput($data){
            return $this->output->load($data);
        }
    }

    //调用ArrayOutput方法
    $data='123';
    $a=new client();
    $a->setOutput(new ArrayOutput());
    $data=$a->loadOutput($data);
    echo $data;

    //调用JsonStringOutput方法
    $a->setOutput(new JsonStringOutput());
    $data=$a->loadOutput($data);
    echo $data;