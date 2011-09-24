<?php

/**
 * This is the model class for table "movimentacao".
 *
 * The followings are the available columns in table 'movimentacao':
 * @property string $cod_movimentacao
 * @property string $dta_entrada
 * @property string $dta_saida
 * @property string $Matricula_cod_matricula
 */
class Movimentacao extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Movimentacao the static model class
	 */
        public $pesquisar;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'movimentacao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_movimentacao, dta_entrada, Matricula_cod_matricula', 'required'),
			array('cod_movimentacao, Matricula_cod_matricula', 'length', 'max'=>10),
			array('dta_saida', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_movimentacao, dta_entrada, dta_saida, Matricula_cod_matricula', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'matriculaCodMatricula' => array(self::BELONGS_TO, 'Matricula', 'Matricula_cod_matricula'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_movimentacao' => 'Cod Movimentacao',
			'dta_entrada' => 'Dta Entrada',
			'dta_saida' => 'Dta Saida',
			'Matricula_cod_matricula' => 'Matricula Cod Matricula',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */


	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
                if($this->pesquisar == ''){
                        		$criteria->compare('cod_movimentacao',$this->cod_movimentacao,true);

		$criteria->compare('dta_entrada',$this->dta_entrada,true);

		$criteria->compare('dta_saida',$this->dta_saida,true);

		$criteria->compare('Matricula_cod_matricula',$this->Matricula_cod_matricula,true);

                }else{
            
                       		$criteria->compare('cod_movimentacao',$this->pesquisar,true,'OR');

		$criteria->compare('dta_entrada',$this->pesquisar,true,'OR');

		$criteria->compare('dta_saida',$this->pesquisar,true,'OR');

		$criteria->compare('Matricula_cod_matricula',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}