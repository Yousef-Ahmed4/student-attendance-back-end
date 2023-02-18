<?php
function checkLogin()
{
    if (!empty($_SESSION['userdata']))
        return true;
    return false;
};
?>