<?php
// Script test SMTP — jalankan: php test-smtp.php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dsn = sprintf(
    'smtp://%s:%s@%s:%s',
    urlencode($_ENV['MAIL_USERNAME']),
    urlencode($_ENV['MAIL_PASSWORD']),
    $_ENV['MAIL_HOST'],
    $_ENV['MAIL_PORT']
);

echo "Mencoba koneksi ke: smtp.gmail.com:587...\n";

try {
    $transport = Transport::fromDsn($dsn);
    $mailer = new Mailer($transport);

    $email = (new Email())
        ->from($_ENV['MAIL_FROM_ADDRESS'])
        ->to($_ENV['MAIL_USERNAME'])
        ->subject('[NEONVERSE] Test SMTP Berhasil!')
        ->html('<p>✅ Koneksi SMTP Gmail berhasil! Contact form NEONVERSE siap digunakan.</p>');

    $mailer->send($email);
    echo "\n✅ EMAIL BERHASIL DIKIRIM! Cek inbox Gmail kamu.\n";
} catch (\Exception $e) {
    echo "\n❌ GAGAL: " . $e->getMessage() . "\n";
}
