<?php

/*
 * Filename   : Template.class.php
 * Programmer : Satria Ramadhani
 * Date       : 2022-06-05
 * Desc       : Template controller to replace and show HTML element.
 *              * Sorry if I put it in the wrong place, to be honest I don't know
 *                its specific role and where to put it (View, Model or ViewModel). 
 */
class Template
{
    // File handling variable.
    private $filename = '';
    private $content = '';

    // Default constructor.
    function __construct($filename = '')
    {
        // Read / implode file for screen.
        $this->filename = $filename;
        $this->content = implode('', @file($filename));
    }

    // Clear code that should be changed (Regular Expression).
    function clear()
    {
        $this->content = preg_replace("/DATA_[A-Z|_|0-9]+/", "", $this->content);
    }

    // Write file content.
    function write()
    {
        // Clear data and print file content.
        $this->clear();
        print($this->content);

    }

    // Get file content.
    function getContent()
    {
        // Clear data and get file content.
        $this->clear();
        return $this->content;
    }

    // Replace view (just don't touch it as long as it works).
    function replace($old = '', $new = '')
    {
        if(is_int($new))
        {
            // Replace from integer.
            $value = sprintf("%d", $new);
        }
        elseif(is_float($new))
        {
            // Replace from float.
            $value = sprintf("%f", $new);
        }
        elseif(is_array($new))
        {
            // Replace from array.
            $value = '';
            foreach( $new as $item)
            {
                $value .= $item. '';
            }

        }
        else
        {
            // Default replace.
            $value = $new;
        }

        // Replace content.
        $this->content = preg_replace("/$old/",  $value, $this->content);

    }
}


?>