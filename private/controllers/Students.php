<?php

/**
 * home controller
 */

class Students extends Controller
{
    function index($id = null)
    {
        echo "This is the students controller " .  $id;
    }
}

