<?php
class UserIdentity extends CUserIdentity
{
    private $_id;

    public function authenticate()
    {
        $username=strtolower($this->username);
        $user=Funcionario::model()->find('LOWER(email)=?',array($username));
        if($user===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($user->password!==md5($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else if($user->status==0)
            $this->errorCode=self::ERROR_PASSWORD_STATUS;
        else
        {
            $dominio = $_SERVER['HTTP_HOST'];
            setcookie("tema", $user->tema, time() + 31536000, "/", ".$dominio");
            $this->_id=$user->cod_funcionario;
            $this->username=$user->email;
            $this->setState('ultima', $user->ultima_visita != '0000-00-00 00:00:00' ? $user->ultima_visita : date("Y-m-d H:i:s"));
            $this->errorCode=self::ERROR_NONE;
            $user->ultima_visita = date("Y-m-d H:i:s");
            $user->save();
            
        }
        return $this->errorCode==self::ERROR_NONE;
    }

    public function getId()
    {
        return $this->_id;
    }
}


