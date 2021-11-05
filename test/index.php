<?php


class testController
{
    /** Verarbeitet Daten aus dem IndexModel und läd die Seite */
    public static function verarbeiteDaten(): void
    {
        include("view/testView.php");
    }
}

testController::verarbeiteDaten();