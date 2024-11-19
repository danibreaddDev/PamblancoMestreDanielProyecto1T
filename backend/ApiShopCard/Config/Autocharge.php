<?php
spl_autoload_register(function ($clase) {
    include "Classes/$clase.php";
});