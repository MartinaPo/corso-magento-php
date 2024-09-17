<?php
    require __DIR__ . '/vendor/autoload.php';

    use Symfony\Component\Mailer\Transport;
    use Symfony\Component\Mailer\Mailer;
    use Symfony\Component\Mime\EMail;

    /**
     * esempio con composer e Symfony/Mailer
     * test
     * 
     */

    $transport = Transport::fromDsn('smtp://7bc53c14ae735c:1c7cef6e3aea67@smtp.mailtrap.io:2525/?encryption=ssl&auth_mode=login');
    $mailer = new Mailer($transport);

    $email = (new Email())
        ->from('docentemaurocasadei@gmail.com')
        ->to('docentemaurocasadei@gmail.com')
        //->cc('*********')
        //->bcc(**********')
        //->replyTo('************')
        //->priority(Email::PRIORITY_HIGH)
        ->subject('Time for Symfony Mailer!')
        ->text('Sending emails is fun again!')
        ->html('<p>See Twig integration for better HTML integration!</p>');

    $mailer->send($email);
    echo "Dopo Mail";