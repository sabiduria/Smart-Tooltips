<?php

/**
 * Created by PhpStorm.
 * User: Antoine.BARUANI
 * Date: 09/08/2018
 * Time: 09:37
 */
class Engine
{
    private $type;
    private $text;

    /**
     * Engine constructor.
     * @param $type
     * @param $text
     */
    public function __construct($type, $text)
    {
        $this->type = $type;
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }


    /**
     * @return mixed
     */
    function render_tooltips()
    {
        $tooltip = "";
        $begin_tooltip   = '[';
        $end_tooltip   = ']';
        $begin_at_position = strpos($this->getText(), $begin_tooltip);
        $end_at_position = strpos($this->getText(), $end_tooltip);
        $extracted_text = substr($this->getText(), $begin_at_position, ($end_at_position-$begin_at_position)+1);
        $json_extracted_text = json_decode($extracted_text, true);

        if ($this->getType() == "text"){
            foreach ($json_extracted_text as $key=>$value){
                $tooltip = '<a class="mytooltip" href="javascript:void(0)">'.$value["key"].'<span class="tooltip-content5"><span class="tooltip-text3"><span class="tooltip-inner2">'.$value["text"].'</span>';
            }
            return str_replace($extracted_text, $tooltip, $this->getText());
        }
        elseif ($this->getType() == "image"){

        }
        return "";
    }
}