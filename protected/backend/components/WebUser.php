<?php

// this file must be stored in:
// protected/components/WebUser.php

class WebUser extends CWebUser {

  // Store model to not repeat query.
  private $_model;
  public $ultima;

  // Return first name.
  // access it by Yii::app()->user->first_name
  function getNome(){
    $user = $this->loadUser(Yii::app()->user->id);
    return $user->nome;
  }


   function getTema(){
    $user = $this->loadUser(Yii::app()->user->id);
    return $user->tema;
  }
  // This is a function that checks the field 'role'
  // in the User model to be equal to 1, that means it's admin
  // access it by Yii::app()->user->isAdmin()
  function getAdmin(){    
    return $user->status;
  }

  // Load user model.
  protected function loadUser($id=null)
    {
        if($this->_model===null)
        {
            if($id!==null)
                $this->_model=Funcionario::model()->findByPk($id);
        }
        return $this->_model;
    }
}
?>
