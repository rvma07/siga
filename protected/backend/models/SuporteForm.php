<?php

class SuporteForm extends CFormModel
{
	public $assunto;
	public $mensagem;

	
	public function rules()
	{
		return array(
		
			array('assunto, mensagem', 'required'),

		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'assunto'=>'Assunto',
                        'mensagem'=>'Mensagem',
            	);
	}


	
}
