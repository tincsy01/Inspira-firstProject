<?php

namespace Core;

class View
{
    protected $viewFile;
    protected $viewData;

    public function __construct($viewFile,$viewData)
    {
        $this->viewFile = $viewFile;
        $this->viewData = $viewData;
    }

    public function render()
    {
        $this->viewFile = str_replace('\\','/',$this->viewFile);
        if (file_exists(VIEW . $this->viewFile . '.php')){
            include VIEW.$this->viewFile.'.php';
        }
    }
}