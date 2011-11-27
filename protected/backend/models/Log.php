<?php

/**
 * This is the model class for table "log".
 *
 * The followings are the available columns in table 'log':
 * @property integer $cod_log
 * @property string $ip
 * @property string $ultima_visita
 * @property string $Funcionario_cod_funcionario
 */
class Log extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Log the static model class
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
		return 'log';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Funcionario_cod_funcionario', 'required'),
			array('ip', 'length', 'max'=>45),
			array('Funcionario_cod_funcionario', 'length', 'max'=>10),
			array('ultima_visita', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_log, ip, ultima_visita, Funcionario_cod_funcionario', 'safe', 'on'=>'search'),
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
			'funcionarioCodFuncionario' => array(self::BELONGS_TO, 'Funcionario', 'Funcionario_cod_funcionario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_log' => 'Cod Log',
			'ip' => 'Ip',
			'ultima_visita' => 'Ultima Visita',
			'Funcionario_cod_funcionario' => 'Funcionario Cod Funcionario',
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
                        		$criteria->compare('cod_log',$this->cod_log);

		$criteria->compare('ip',$this->ip,true);

		$criteria->compare('ultima_visita',$this->ultima_visita,true);

		$criteria->compare('Funcionario_cod_funcionario',$this->Funcionario_cod_funcionario,true);

                }else{
            
                       		$criteria->compare('cod_log',$this->pesquisar,true,'OR');

		$criteria->compare('ip',$this->pesquisar,true,'OR');

		$criteria->compare('ultima_visita',$this->pesquisar,true,'OR');

		$criteria->compare('Funcionario_cod_funcionario',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}