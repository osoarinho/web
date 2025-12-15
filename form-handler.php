<?php
require_once __DIR__ . '/../form_security.php';

// Handler de formulário - Desenvolvimento Web
$config = [
    'site_name'      => 'Desenvolvimento Web',
    'recipient'      => 'contato@soarinho.com',
    'subject_prefix' => '[Web]',
    'fields'         => ['name', 'email', 'message'],
    'required'       => ['name', 'email', 'message'],
    'email_field'    => 'email',
    'phone_field'    => null,
    'name_field'     => 'name',
    'subject_field'  => 'message',
];

$result  = form_security_process($config);
$status  = $result['success'] ? 'ok' : 'error';
$message = urlencode($result['message']);

$redirectUrl = 'index.html?status=' . $status . '&msg=' . $message . '#contact';
header('Location: ' . $redirectUrl);
exit;

