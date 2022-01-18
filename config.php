<?php
    if (!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION['lang']))
        $_SESSION['lang'] = "eng";
    else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
        if ($_GET['lang'] == "eng")
            $_SESSION['lang'] = "eng";
        else if ($_GET['lang'] == "idn")
            $_SESSION['lang'] = "idn";
    }

    require_once "languanges/" . $_SESSION['lang'] . ".php";
?>