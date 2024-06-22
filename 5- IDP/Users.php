<?php

class Authenticatable
{
}

class User extends Authenticatable
{
    private $email;
    public function getEmail()
    {
        return $this->email;
    }
}

class Admin extends Authenticatable
{
}

class Password
{
    public static function resetPassword(User $user)
    {
        $message = 'Reset password link <a href="">here</a>.';

        // Cabeceras del correo
        $headers = 'From: remitente@ejemplo.com' . "\r\n" .
            'Reply-To: remitente@ejemplo.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        return mail($user->getEmail(), "Reset Pasword", $message, $headers);
    }
}
