<?php

/**
 * This is the model class for table "procedencia".
 *
 * The followings are the available columns in table 'procedencia':
 * @property integer $cod_procedencia
 * @property string $NomeEscolaProced
 * @property string $SerieProced
 * @property string $CidadeProced
 */
class Procedencia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Procedencia the static model class
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
		return 'procedencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NomeEscolaProced, SerieProced, CidadeProced', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_procedencia, NomeEscolaProced, SerieProced, CidadeProced', 'safe', 'on'=>'search'),
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
			'matriculas' => array(self::HAS_MANY, 'Matricula', 'Procedencia_cod_procedencia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_procedencia' => 'Cod Procedencia',
			'NomeEscolaProced' => 'Nome Escola Proced',
			'SerieProced' => 'Serie Proced',
			'CidadeProced' => 'Cidade Proced',
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
                        		$criteria->compare('cod_procedencia',$this->cod_procedencia);

		$criteria->compare('NomeEscolaProced',$this->NomeEscolaProced,true);

		$criteria->compare('SerieProced',$this->SerieProced,true);

		$criteria->compare('CidadeProced',$this->CidadeProced,true);

                }else{
            
                       		$criteria->compare('cod_procedencia',$this->pesquisar,true,'OR');

		$criteria->compare('NomeEscolaProced',$this->pesquisar,true,'OR');

		$criteria->compare('SerieProced',$this->pesquisar,true,'OR');

		$criteria->compare('CidadeProced',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}