<?php

/**
 * This is the model class for table "fotos".
 *
 * The followings are the available columns in table 'fotos':
 * @property string $id
 * @property string $caminho
 * @property string $idproduto
 */
class Fotos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Fotos the static model class
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
		return 'fotos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('caminho', 'length', 'max'=>50),
			array('idproduto', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, caminho, idproduto', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'caminho' => 'Caminho',
			'idproduto' => 'Idproduto',
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
                        		$criteria->compare('id',$this->id,true);

		$criteria->compare('caminho',$this->caminho,true);

		$criteria->compare('idproduto',$this->idproduto,true);

                }else{
            
                       		$criteria->compare('id',$this->pesquisar,true,'OR');

		$criteria->compare('caminho',$this->pesquisar,true,'OR');

		$criteria->compare('idproduto',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}