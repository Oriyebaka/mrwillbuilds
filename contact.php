<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

$status = 'error';

if ($name !== '' && $message !== '' && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $entry = sprintf(
        "[%s] %s <%s>\n%s\n---\n",
        date('Y-m-d H:i:s'),
        $name,
        $email,
        $message
    );

    $logFile = __DIR__ . '/storage/messages.log';
    if (!is_dir(dirname($logFile))) {
        mkdir(dirname($logFile), 0755, true);
    }

    if (file_put_contents($logFile, $entry, FILE_APPEND | LOCK_EX) !== false) {
        $status = 'success';
    }
}

$_SESSION['contact_status'] = $status;

header('Location: index.php#contact');
exit;
