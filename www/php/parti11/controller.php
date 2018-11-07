<?php
$result = NULL;
if (!empty($_POST)) {
    if (isset($_POST['chiffre1']) && isset($_POST['chiffre2'])) {
        $chiffre1 = htmlspecialchars($_POST['chiffre1']);
        $chiffre2 = htmlspecialchars($_POST['chiffre2']);
        if (is_numeric($chiffre1) && is_numeric($chiffre2)) {
            if (isset($_POST['addition'])) {
                $result = $chiffre1 + $chiffre2;
            } else if (isset($_POST['soustraction'])) {
                $result = $chiffre1 - $chiffre2;
            } else if (isset($_POST['multiplication'])) {
                $result = $chiffre1 * $chiffre2;
            } else if (isset($_POST['division'])) {
                if ($chiffre2 == 0) {
                    $result = null;
                } else {
                    $result = $chiffre1 / $chiffre2;
                }
            } else if (isset($_POST['reset'])) {
                $result = null;
            }
        }
    }
}
?>