<?php
    class Attribute{
        public $accessing;
        public $attr_name;
        public $data_type;

        public function display_attribute(){
            $flag = "+";
            switch ($this->accessing){
                case "public":
                    $flag = "+"; break;
                case "private":
                    $flag = "-"; break;
                case "protected":
                    $flag = "#"; break;
            }

            print "$flag $this->attr_name: $this->data_type<br />";
        }
    }
?>