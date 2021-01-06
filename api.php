<?php

if ($_GET['type'] == "host-json") {
    echo file_get_contents("https://raw.githubusercontent.com/Nimityx/lists/main/host.json");
} elseif ($_GET['type'] == "accessible-host-json") {
    echo file_get_contents("https://raw.githubusercontent.com/Nimityx/lists/main/accessible-host.json");
}

?>
