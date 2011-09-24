<?php

/**
 * This is the model class for table "produtos".
 *
 * The followings are the available columns in table 'produtos':
 * @property string $id
 * @property string $nome
 * @property string $descricao
 * @property string $barra13
 * @property string $barra14
 * @property string $excluido
 * @property string $unidade_venda
 * @property string $quantidade_embalagem
 * @property string $class_fiscal
 * @property string $promocao
 * @property string $imagem_baixa
 * @property string $imagem_alta
 * @property string $preco_unitario
 * @property string $preco_embalagem
 * @property string $quantidade_estoque
 * @property string $id_grupos
 * @property string $id_categoria
 * @property string $preco_anterior
 * @property integer $frete_gratis
 * @property string $peso
 */
class Produtos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Produtos the static model class
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
		return 'produtos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, descricao, excluido, unidade_venda, quantidade_embalagem, promocao, preco_unitario, preco_embalagem, quantidade_estoque, id_grupos, id_categoria', 'required'),
			array('frete_gratis', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>80),
			array('barra13, barra14', 'length', 'max'=>40),
			array('excluido', 'length', 'max'=>1),
			array('unidade_venda, quantidade_embalagem', 'length', 'max'=>5),
			array('class_fiscal, preco_unitario, preco_embalagem, quantidade_estoque, id_grupos, id_categoria, preco_anterior, peso', 'length', 'max'=>10),
			array('promocao', 'length', 'max'=>2),
			array('imagem_baixa, imagem_alta', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, descricao, barra13, barra14, excluido, unidade_venda, quantidade_embalagem, class_fiscal, promocao, imagem_baixa, imagem_alta, preco_unitario, preco_embalagem, quantidade_estoque, id_grupos, id_categoria, preco_anterior, frete_gratis, peso', 'safe', 'on'=>'search'),
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
			'carrinhoCompras' => array(self::HAS_MANY, 'CarrinhoCompra', 'id_produtos'),
			'compras' => array(self::MANY_MANY, 'Compra', 'itens_das_compras(compra_id, produtos_id)'),
			'idCategoria0' => array(self::BELONGS_TO, 'Categoria', 'id_categoria'),
			'idGrupos0' => array(self::BELONGS_TO, 'Grupos', 'id_grupos'),
			'jogoses' => array(self::MANY_MANY, 'Jogos', 'produtos_jogo_relacionado(produtos_id, jogos_id)'),
			'produtosSelecionadoses' => array(self::HAS_MANY, 'ProdutosSelecionados', 'id_relacionado'),
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
			'barra13' => 'Barra13',
			'barra14' => 'Barra14',
			'excluido' => 'Excluido',
			'unidade_venda' => 'Unidade Venda',
			'quantidade_embalagem' => 'Quantidade Embalagem',
			'class_fiscal' => 'Class Fiscal',
			'promocao' => 'Promocao',
			'imagem_baixa' => 'Imagem Baixa',
			'imagem_alta' => 'Imagem Alta',
			'preco_unitario' => 'Preco Unitario',
			'preco_embalagem' => 'Preco Embalagem',
			'quantidade_estoque' => 'Quantidade Estoque',
			'id_grupos' => 'Id Grupos',
			'id_categoria' => 'Id Categoria',
			'preco_anterior' => 'Preco Anterior',
			'frete_gratis' => 'Frete Gratis',
			'peso' => 'Peso',
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

		$criteria->compare('barra13',$this->barra13,true);

		$criteria->compare('barra14',$this->barra14,true);

		$criteria->compare('excluido',$this->excluido,true);

		$criteria->compare('unidade_venda',$this->unidade_venda,true);

		$criteria->compare('quantidade_embalagem',$this->quantidade_embalagem,true);

		$criteria->compare('class_fiscal',$this->class_fiscal,true);

		$criteria->compare('promocao',$this->promocao,true);

		$criteria->compare('imagem_baixa',$this->imagem_baixa,true);

		$criteria->compare('imagem_alta',$this->imagem_alta,true);

		$criteria->compare('preco_unitario',$this->preco_unitario,true);

		$criteria->compare('preco_embalagem',$this->preco_embalagem,true);

		$criteria->compare('quantidade_estoque',$this->quantidade_estoque,true);

		$criteria->compare('id_grupos',$this->id_grupos,true);

		$criteria->compare('id_categoria',$this->id_categoria,true);

		$criteria->compare('preco_anterior',$this->preco_anterior,true);

		$criteria->compare('frete_gratis',$this->frete_gratis);

		$criteria->compare('peso',$this->peso,true);

                }else{
            
                       		$criteria->compare('id',$this->pesquisar,true,'OR');

		$criteria->compare('nome',$this->pesquisar,true,'OR');

		$criteria->compare('descricao',$this->pesquisar,true,'OR');

		$criteria->compare('barra13',$this->pesquisar,true,'OR');

		$criteria->compare('barra14',$this->pesquisar,true,'OR');

		$criteria->compare('excluido',$this->pesquisar,true,'OR');

		$criteria->compare('unidade_venda',$this->pesquisar,true,'OR');

		$criteria->compare('quantidade_embalagem',$this->pesquisar,true,'OR');

		$criteria->compare('class_fiscal',$this->pesquisar,true,'OR');

		$criteria->compare('promocao',$this->pesquisar,true,'OR');

		$criteria->compare('imagem_baixa',$this->pesquisar,true,'OR');

		$criteria->compare('imagem_alta',$this->pesquisar,true,'OR');

		$criteria->compare('preco_unitario',$this->pesquisar,true,'OR');

		$criteria->compare('preco_embalagem',$this->pesquisar,true,'OR');

		$criteria->compare('quantidade_estoque',$this->pesquisar,true,'OR');

		$criteria->compare('id_grupos',$this->pesquisar,true,'OR');

		$criteria->compare('id_categoria',$this->pesquisar,true,'OR');

		$criteria->compare('preco_anterior',$this->pesquisar,true,'OR');

		$criteria->compare('frete_gratis',$this->pesquisar,true,'OR');

		$criteria->compare('peso',$this->pesquisar,true,'OR');

                }

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                        'pageSize'=>Yii::app()->params['PageSize'],
                ),
		));
	}
}