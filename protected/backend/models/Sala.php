<?php

/**
 * This is the model class for table "sala".
 *
 * The followings are the available columns in table 'sala':
 * @property string $cod_sala
 * @property string $desc_sala
 * @property string $Unidade_cod_unidade
 * @property integer $Periodo_cod_periodo
 * @property string $Serie_cod_serie
 */
class Sala extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Sala the static model class
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
		return 'sala';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('desc_sala, Unidade_cod_unidade, Periodo_cod_periodo, Serie_cod_serie', 'required'),
			array('Periodo_cod_periodo', 'numerical', 'integerOnly'=>true),
			array('desc_sala', 'length', 'max'=>12),
			array('Unidade_cod_unidade, Serie_cod_serie', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_sala, desc_sala, Unidade_cod_unidade, Periodo_cod_periodo, Serie_cod_serie', 'safe', 'on'=>'search'),
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
			'matriculas' => array(self::MANY_MANY, 'Matricula', 'matricula_has_sala(Matricula_cod_matricula, Sala_cod_sala)'),
			'unidadeCodUnidade' => array(self::BELONGS_TO, 'Unidade', 'Unidade_cod_unidade'),
			'periodoCodPeriodo' => array(self::BELONGS_TO, 'Periodo', 'Periodo_cod_periodo'),
			'serieCodSerie' => array(self::BELONGS_TO, 'Serie', 'Serie_cod_serie'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_sala' => 'C&oacute;digo',
			'desc_sala' => 'Descri&ccedil;&atilde;o',
			'Unidade_cod_unidade' => 'Unidade',
			'Periodo_cod_periodo' => 'Per&iacute;odo',
			'Serie_cod_serie' => 'C&oacute;digo Serie',
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
                        		$criteria->compare('cod_sala',$this->cod_sala,true);

		$criteria->compare('desc_sala',$this->desc_sala,true);

		$criteria->compare('Unidade_cod_unidade',$this->Unidade_cod_unidade,true);

		$criteria->compare('Periodo_cod_periodo',$this->Periodo_cod_periodo);

		$criteria->compare('Serie_cod_serie',$this->Serie_cod_serie,true);

                }else{
            
                       		$criteria->compare('cod_sala',$this->pesquisar,true,'OR');

		$criteria->compare('desc_sala',$this->pesquisar,true,'OR');

		$criteria->compare('Unidade_cod_unidade',$this->pesquisar,true,'OR');

		$criteria->compare('Periodo_cod_periodo',$this->pesquisar,true,'OR');

		$criteria->compare('Serie_cod_serie',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}