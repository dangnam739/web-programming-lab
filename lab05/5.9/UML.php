<?php
    function __autoload($class){
        include (ucfirst($class).".php");
    }

    class UML{
        public $class_name ;
        public $attributes = array();
        public $methods = array();

        public function display_UML(){
            print "<table border='1px' style='background-color: khaki; font-family: Arial'>";
            print "<tr><th><b>$this->class_name</b></th></tr>";

            print "<tr><td>";
            foreach ($this->attributes as $attribute){
                $attribute->display_attribute();
            }
            print "</td></tr>";

            print "<tr><td>";
            foreach ($this->methods as $method){
                $method->display_method();
            }
            print "</td></tr></table>";
        }
    }

    $attr1 = new Attribute();
    $attr1->accessing = "public";
    $attr1->attr_name = "page";
    $attr1->data_type = "string";

    $attr2 = new Attribute();
    $attr2->accessing = "public";
    $attr2->attr_name = "title";
    $attr2->data_type = "string";

    $attr3 = new Attribute();
    $attr3->accessing = "private";
    $attr3->attr_name = "year";
    $attr3->data_type = "int";

    $attr4 = new Attribute();
    $attr4->accessing = "private";
    $attr4->attr_name = "copyright";
    $attr4->data_type = "string";

    $attributes = array($attr1, $attr2, $attr3);

    $method1 = new Method();
    $method1->method_name = "addHeader";
    $method1->accessing = "private";
    $method1->return_type = "void";

    $method2 = new Method();
    $method2->method_name = "addContent";
    $method2->accessing = "public";
    $method2->return_type = "void";
    $param = array("content"=>"string", "content_id"=>"int");
    $method2->arguments = $param;

    $method3 = new Method();
    $method3->method_name = "addFooter";
    $method3->accessing = "private";
    $method3->return_type = "void";

    $methods = array($method1, $method2, $method3);

    $page_class = new UML();
    $name = "Page";
    $page_class->class_name = $name;
    $page_class->attributes = $attributes;
    $page_class->methods = $methods;

    $page_class->display_UML();
?>