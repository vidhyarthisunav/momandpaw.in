<?php
    use PHP Script Background Processer.php;
    $process = new BackgroundProcess('mail.php');
    $process->run();
    header("Location: http://momandpaw.in");
    return;
?>