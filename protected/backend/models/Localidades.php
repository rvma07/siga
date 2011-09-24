<?php

/**
 * This is the model class for table "localidades".
 *
 * The followings are the available columns in table 'localidades':
 * @property integer $Cod_localidade
 * @property string $Pais
 * @property string $UF
 * @property string $Cidade
 * @property integer $CEP_idCEP
 */
class Localidades extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Localidades the static model class
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
		return 'localidades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Pais, UF, Cidade, CEP_idCEP', 'required'),
			array('CEP_idCEP', 'numerical', 'integerOnly'=>true),
			array('Pais, UF', 'length', 'max'=>2),
			array('Cidade', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Cod_localidade, Pais, UF, Cidade, CEP_idCEP', 'safe', 'on'=>'search'),
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
			'cEPIdCEP' => array(self::BELONGS_TO, 'Cep', 'CEP_idCEP'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Cod_localidade' => 'Cod Localidade',
			'Pais' => 'Pais',
			'UF' => 'Uf',
			'Cidade' => 'Cidade',
			'CEP_idCEP' => 'Cep Id Cep',
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
                        		$criteria->compare('Cod_localidade',$this->Cod_localidade);

		$criteria->compare('Pais',$this->Pais,true);

		$criteria->compare('UF',$this->UF,true);

		$criteria->compare('Cidade',$this->Cidade,true);

		$criteria->compare('CEP_idCEP',$this->CEP_idCEP);

                }else{
            
                       		$criteria->compare('Cod_localidade',$this->pesquisar,true,'OR');

		$criteria->compare('Pais',$this->pesquisar,true,'OR');

		$criteria->compare('UF',$this->pesquisar,true,'OR');

		$criteria->compare('Cidade',$this->pesquisar,true,'OR');

		$criteria->compare('CEP_idCEP',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}