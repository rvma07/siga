<?php

/**
 * This is the model class for table "nota".
 *
 * The followings are the available columns in table 'nota':
 * @property string $cod_nota
 * @property string $nota
 * @property string $data_refencia
 * @property string $Matricula_cod_matricula
 * @property string $Disciplinas_cod_disciplina
 */
class Nota extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Nota the static model class
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
		return 'nota';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nota, data_refencia, Matricula_cod_matricula, Disciplinas_cod_disciplina', 'required'),
			array('nota', 'length', 'max'=>2),
			array('Matricula_cod_matricula, Disciplinas_cod_disciplina', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_nota, nota, data_refencia, Matricula_cod_matricula, Disciplinas_cod_disciplina', 'safe', 'on'=>'search'),
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
			'disciplinasCodDisciplina' => array(self::BELONGS_TO, 'Disciplinas', 'Disciplinas_cod_disciplina'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_nota' => 'Cod Nota',
			'nota' => 'Nota',
			'data_refencia' => 'Data Refencia',
			'Matricula_cod_matricula' => 'Matricula Cod Matricula',
			'Disciplinas_cod_disciplina' => 'Disciplinas Cod Disciplina',
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
                        		$criteria->compare('cod_nota',$this->cod_nota,true);

		$criteria->compare('nota',$this->nota,true);

		$criteria->compare('data_refencia',$this->data_refencia,true);

		$criteria->compare('Matricula_cod_matricula',$this->Matricula_cod_matricula,true);

		$criteria->compare('Disciplinas_cod_disciplina',$this->Disciplinas_cod_disciplina,true);

                }else{
            
                       		$criteria->compare('cod_nota',$this->pesquisar,true,'OR');

		$criteria->compare('nota',$this->pesquisar,true,'OR');

		$criteria->compare('data_refencia',$this->pesquisar,true,'OR');

		$criteria->compare('Matricula_cod_matricula',$this->pesquisar,true,'OR');

		$criteria->compare('Disciplinas_cod_disciplina',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}