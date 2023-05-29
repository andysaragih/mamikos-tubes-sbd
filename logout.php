<?php
session_start();
if (session_destroy()) {
    header("Location:../mamikos/index_sebelum.php");
}
