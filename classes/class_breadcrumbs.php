<?php


class breadcrumbs{

    /*
     * @string $breadcrumbs
     */
    public $breadcrumbs;

    /*
     * @string $pointer
     */
    private $pointer = '&raquo;';

    /*
     * @string $url
     */
    private $url;

    /*
     * @array $parts
     */
    private $parts;


    /*
     * @constructor - duh
     *
     * @access public
     *
     */
    public function __construct()
    {
        $this->setParts();
        $this->setURL();
        $this->breadcrumbs = '<ol class="breadcrumb"><li><a href="'.$this->url.'">Home</a></li>';
    }


    /*
     *
     * @set the base url
     *
     * @access private
     *
     */
    private function setURL()
    {
        $protocol = $_SERVER["SERVER_PROTOCOL"]=='HTTP/1.1' ? 'http' : 'https';
        $this->url = $protocol.'://'.$_SERVER['HTTP_HOST'];
    }


    /*
     * @set the pointer 
     *
     * @access public
     *
     * @param string $pointer
     * 
     */
    public function setPointer($pointer)
    {
        $this->pointer = $pointer;
    }


    /**
     *
     * @set the path array
     *
     * @access private
     *
     * @return array
     *
     */
    private function setParts()
    {
        $parts = explode('/', $_SERVER['REQUEST_URI']);
        array_pop($parts);
        array_shift($parts);
    $this->parts = $parts;
    }


    /**
     *
     * @create the breadcrumbs
     *
     * @access public
     *
      */
    public function crumbs()
    {
        foreach($this->parts as $part)
        {   
            if($part=="pages") continue;
            $this->url .= "/$part";
            $this->breadcrumbs .= '<li><a href="'.$this->url.'">'.$part.'</a></li>';
        }

        $this->breadcrumbs .= '</ol>';
    }

} /*** end of class ***/

?>

<?php
/*
$bc = new breadcrumbs;

$bc->setPointer('->');

$bc->crumbs();

echo $bc->breadcrumbs;
*/
?>

<?php 
/*
    $path = $_SERVER["PHP_SELF"];
    $parts = explode('/',$path);
    if (count($parts) < 2)
    {
    echo("home");
    }
    else
    {
    echo ("<a href=\"/\">home</a> &raquo; ");
    for ($i = 1; $i < count($parts); $i++)
        {
        if (!strstr($parts[$i],"."))
            {
            echo("<a href=\"");
            for ($j = 0; $j <= $i; $j++) {echo $parts[$j]."/";};
            echo("\">". str_replace('-', ' ', $parts[$i])."</a> » ");
            }
        else
            {
            $str = $parts[$i];
            $pos = strrpos($str,".");
            $parts[$i] = substr($str, 0, $pos);
            echo str_replace('-', ' ', $parts[$i]);
            };
        };
    }; 
    */ 
?>