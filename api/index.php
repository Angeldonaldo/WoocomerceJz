<?php
$fi= fopen('input.txt', 'w');
fwrite($fi,print_r(file_get_contents("php://input"),true));
fclose($fi);
$webhookContent = "";
$myfile = fopen("post.txt", "w") or die("Unable to open file!");
$webhook = fopen('php://input' , 'rb');
    while (!feof($webhook)) {
        $webhookContent .= fread($webhook, 4096);
    }
$txt = $webhookContent;
fwrite($myfile, $txt);
fclose($myfile);

