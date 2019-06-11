<?php


class MyList
{

    public $arrList;


    public function __construct($arr = "")
    {
        if (is_array($arr) == true)
            $this->arrList = $arr;
        else
            $this->arrList = array();
    }

    public function add($index, $element)
    {
        $this->arrList[$index] = $element;
    }

    public function remote($index)
    {
        $newArrayList = array();
        for ($i = 0; $i < $this->size(); $i++)
            if ($index != $i) $newArrayList[] = $this->arrList[$i];
        $this->arrList = $newArrayList;

    }

    public function size()
    {
        return count($this->arrList);
    }

    public function clone1()
    {
        return $this->arrList;
    }

    public function contains($obj)
    {
        if (in_array($obj, $this->arrList))
        {
            echo "Match found";
        }
        else
        {
            echo "Match not found";
        }
    }

    public function indexOf($element)
    {
        for ($i = 0; $i < count($this->arrList); $i++) {
            if ($this->arrList[$i] == $element) {
                return $i;
            }
        }
        return -1;
    }

    public function booleanAdd($element)
    {
        array_push($this->arrList, $element);
    }
//    public function ensureCapacity($minCapacity)
//    {
//        $this->arrList.ensureCapacity(10);
//    }

    public function get($index)
    {
        return $this->arrList[$index];
    }

    public function clear()
    {
        $this->arrList = array();
    }

}

$mylist = new MyList();
//$mylist->add(0, 1);
//$mylist->add(1, 7);
//$mylist->add(2, 9);
$mylist->booleanAdd(5);
$mylist->booleanAdd(100);
echo $mylist->size() . "<br>";
echo $mylist->indexOf(11) . "<br>";
echo $mylist->contains(7) . "<br>";
$mylist->remote(2);
var_dump($mylist);
$x=array();
$x=$mylist->clone1();
var_dump($x);
$mylist->add(3, 9);
//var_dump($mylist);
//var_dump($x);









