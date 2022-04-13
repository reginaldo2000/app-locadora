<?php

session_start();

function get($key)
{
    return isset($_SESSION[$key]) ? $_SESSION[$key] : "";
}

function set($key, $value)
{
    $_SESSION[$key] = $value;
}

function alert()
{
    $stringAlert = (isset($_SESSION["message"])) ? '
    <div class="alert ' . $_SESSION["type"] . ' alert-dismissible fade show" role="alert">
        <strong>' . $_SESSION["message"] . '</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>' : "";
    unset($_SESSION["message"]);
    unset($_SESSION["type"]);
    return $stringAlert;
}

function setAlert($message, $type = "alert-danger")
{
    $_SESSION["message"] = $message;
    $_SESSION["type"] = $type;
}

function getPostVars($key)
{
    return isset($_SESSION["post_vars"][$key]) ? $_SESSION["post_vars"][$key] : "";
}

function setPostVars(array $args)
{
    $_SESSION["post_vars"] = $args;
}
