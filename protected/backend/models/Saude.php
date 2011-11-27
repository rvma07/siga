<?php

/**
 * This is the model class for table "saude".
 *
 * The followings are the available columns in table 'saude':
 * @property integer $cod_saude
 * @property integer $alergias_cod_alergias
 * @property string $desc_medicamento
 * @property string $desc_cirurgia
 * @property string $medicacao
 * @property string $desc_convenio
 * @property integer $vacinas
 */
class Saude extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Saude the static model class
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
		return 'saude';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('alergias_cod_alergias', 'required'),
			array('alergias_cod_alergias, vacinas', 'numerical', 'integerOnly'=>true),
			array('desc_convenio', 'length', 'max'=>80),
			array('desc_medicamento, desc_cirurgia, medicacao', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_saude, alergias_cod_alergias, desc_medicamento, desc_cirurgia, medicacao, desc_convenio, vacinas', 'safe', 'on'=>'search'),
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
			'alergiasCodAlergias0' => array(self::BELONGS_TO, 'Alergias', 'alergias_cod_alergias'),
			'alunos' => array(self::MANY_MANY, 'Aluno', 'saude_has_aluno(saude_cod_saude, Aluno_cod_aluno)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_saude' => 'C&oacute;digo',
			'alergias_cod_alergias' => 'Alergias Cod Alergias',
			'desc_medicamento' => 'Descri&ccedil;&atilde;o do Medicamento',
			'desc_cirurgia' => 'Descri&ccedil;&atilde;o da Cirurgia',
			'medicacao' => 'Medica&ccedil;&atildeo',
			'desc_convenio' => 'Descri&ccedil;&atilde;o do Conv&ecirc;nio',
			'vacinas' => 'Vacinas',
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
                        		$criteria->compare('cod_saude',$this->cod_saude);

		$criteria->compare('alergias_cod_alergias',$this->alergias_cod_alergias);

		$criteria->compare('desc_medicamento',$this->desc_medicamento,true);

		$criteria->compare('desc_cirurgia',$this->desc_cirurgia,true);

		$criteria->compare('medicacao',$this->medicacao,true);

		$criteria->compare('desc_convenio',$this->desc_convenio,true);

		$criteria->compare('vacinas',$this->vacinas);

                }else{
            
                       		$criteria->compare('cod_saude',$this->pesquisar,true,'OR');

		$criteria->compare('alergias_cod_alergias',$this->pesquisar,true,'OR');

		$criteria->compare('desc_medicamento',$this->pesquisar,true,'OR');

		$criteria->compare('desc_cirurgia',$this->pesquisar,true,'OR');

		$criteria->compare('medicacao',$this->pesquisar,true,'OR');

		$criteria->compare('desc_convenio',$this->pesquisar,true,'OR');

		$criteria->compare('vacinas',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}