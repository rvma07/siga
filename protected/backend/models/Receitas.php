<?php

/**
 * This is the model class for table "receitas".
 *
 * The followings are the available columns in table 'receitas':
 * @property string $id
 * @property string $nome
 * @property string $descricao
 * @property string $foto
 */
class Receitas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Receitas the static model class
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
		return 'receitas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, descricao, foto', 'required'),
			array('nome, foto', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, descricao, foto', 'safe', 'on'=>'search'),
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
			'nome' => 'Nome',
			'descricao' => 'Descricao',
			'foto' => 'Foto',
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

		$criteria->compare('nome',$this->nome,true);

		$criteria->compare('descricao',$this->descricao,true);

		$criteria->compare('foto',$this->foto,true);

                }else{
            
                       		$criteria->compare('id',$this->pesquisar,true,'OR');

		$criteria->compare('nome',$this->pesquisar,true,'OR');

		$criteria->compare('descricao',$this->pesquisar,true,'OR');

		$criteria->compare('foto',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}