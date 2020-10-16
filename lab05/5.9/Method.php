<?php
    class Method{
        public $accessing;
        public $method_name;
        public $return_type;
        public $arguments = array();

        public function display_method(){
            $flag = "+";
            switch ($this->accessing){
                case "public":
                    $flag = "+"; break;
                case "private":
                    $flag = "-"; break;
                case "protected":
                    $flag = "#"; break;
            }
            print "$flag $this->method_name (";
            if (count($this->arguments) > 0){
                foreach ($this->arguments as $param_name => $data_type){
                    print "$param_name: $data_type, ";
                }
            }
            print "): $this->return_type<br/>";
        }
    }
?>