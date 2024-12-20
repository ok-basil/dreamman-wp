<?php

namespace DreamManWP\Pages;

class Init 
{
    public static function init()
    {
        HomePage::get_instance();
    }
}