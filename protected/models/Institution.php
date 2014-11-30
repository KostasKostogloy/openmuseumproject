<?php

/**
 * This is the model class for table "institution".
 *
 * The followings are the available columns in table 'institution':
 * @property integer $id
 * @property integer $GID
 * @property string $NAMEGRK
 * @property string $ADDRESS
 * @property string $PHONE
 * @property string $DIMOS
 * @property string $NEWCAT
 * @property string $NEWSUBCAT
 * @property string $dbpedia_url
 * @property string $abstract
 * @property string $thumbnail
 * @property string $WEBSITE
 * @property string $wikipedia
 * @property string $POINT_X
 * @property string $POINT_Y
 * @property integer $published
 */
class Institution extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'institution';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('GID, NAMEGRK, ADDRESS, PHONE, DIMOS, NEWCAT, NEWSUBCAT, dbpedia_url, abstract, thumbnail, WEBSITE, wikipedia, POINT_X, POINT_Y, published', 'safe'),
			array('GID, published', 'numerical', 'integerOnly'=>true),
			array('NAMEGRK, ADDRESS, PHONE, DIMOS, NEWCAT, NEWSUBCAT, dbpedia_url, thumbnail, WEBSITE, wikipedia', 'length', 'max'=>256),
			array('POINT_X, POINT_Y', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, GID, NAMEGRK, ADDRESS, PHONE, DIMOS, NEWCAT, NEWSUBCAT, dbpedia_url, abstract, thumbnail, WEBSITE, wikipedia, POINT_X, POINT_Y, published', 'safe', 'on'=>'search'),
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
			'GID' => 'Gid',
			'NAMEGRK' => 'Namegrk',
			'ADDRESS' => 'Address',
			'PHONE' => 'Phone',
			'DIMOS' => 'Dimos',
			'NEWCAT' => 'Newcat',
			'NEWSUBCAT' => 'Newsubcat',
			'dbpedia_url' => 'Dbpedia Url',
			'abstract' => 'Abstract',
			'thumbnail' => 'Thumbnail',
			'WEBSITE' => 'Website',
			'wikipedia' => 'Wikipedia',
			'POINT_X' => 'Point X',
			'POINT_Y' => 'Point Y',
			'published' => 'Published',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('GID',$this->GID);
		$criteria->compare('NAMEGRK',$this->NAMEGRK,true);
		$criteria->compare('ADDRESS',$this->ADDRESS,true);
		$criteria->compare('PHONE',$this->PHONE,true);
		$criteria->compare('DIMOS',$this->DIMOS,true);
		$criteria->compare('NEWCAT',$this->NEWCAT,true);
		$criteria->compare('NEWSUBCAT',$this->NEWSUBCAT,true);
		$criteria->compare('dbpedia_url',$this->dbpedia_url,true);
		$criteria->compare('abstract',$this->abstract,true);
		$criteria->compare('thumbnail',$this->thumbnail,true);
		$criteria->compare('WEBSITE',$this->WEBSITE,true);
		$criteria->compare('wikipedia',$this->wikipedia,true);
		$criteria->compare('POINT_X',$this->POINT_X,true);
		$criteria->compare('POINT_Y',$this->POINT_Y,true);
		$criteria->compare('published',$this->published);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Institution the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
