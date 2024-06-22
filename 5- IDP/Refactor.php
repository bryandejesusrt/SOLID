<?php

interface PasswordReset
{
    public function getEmail();
}

class Authenticatable
{
}

class User extends Authenticatable implements PasswordReset
{
    private $email;
    public function getEmail()
    {
        return $this->email;
    }
}

class Admin extends Authenticatable implements PasswordReset
{
    private $email;
    public function getEmail()
    {
        return $this->email;
    }
}

class Password
{
    public static function resetPassword(PasswordReset $user)
    {
        $message = 'Reset password link <a href="">here</a>.';

        // Cabeceras del correo
        $headers = 'From: remitente@ejemplo.com' . "\r\n" .
            'Reply-To: remitente@ejemplo.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        return mail($user->getEmail(), "Reset Pasword", $message, $headers);
    }
}
