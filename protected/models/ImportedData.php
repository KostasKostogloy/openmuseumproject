<?php

/**
 * This is the model class for table "imported_data".
 *
 * The followings are the available columns in table 'imported_data':
 * @property integer $GID
 * @property double $AA
 * @property string $TNAME
 * @property string $NAMEGRK
 * @property string $ADDRESS
 * @property string $ADDRESS1
 * @property string $ADD_NUMR1
 * @property string $ADDRESS2
 * @property string $ADD_NUM2
 * @property string $PHONE
 * @property string $FAX
 * @property string $TK
 * @property string $EMAIL
 * @property string $DIMOS
 * @property string $NEWCAT
 * @property string $NEWSUBCAT
 * @property double $NEWTYPE
 * @property double $NEWSUBTYPE
 * @property integer $NEWCOMBO
 * @property string $PARK_PL
 * @property integer $DISBLDAC
 * @property double $H
 * @property string $PHOTO1
 * @property string $PHOTO2
 * @property string $PHOTO3
 * @property string $PHOTO4
 * @property string $PHOTO5
 * @property double $POINT_X
 * @property double $POINT_Y
 * @property string $WEBSITE
 * @property integer $deleted
 */
class ImportedData extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'imported_data';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('GID, AA, TNAME, NAMEGRK, ADDRESS, ADDRESS1, ADD_NUMR1, ADDRESS2, ADD_NUM2, PHONE, FAX, TK, EMAIL, DIMOS, NEWCAT, NEWSUBCAT, NEWTYPE, NEWSUBTYPE, NEWCOMBO, PARK_PL, DISBLDAC, H, PHOTO1, PHOTO2, PHOTO3, PHOTO4, PHOTO5, POINT_X, POINT_Y, WEBSITE, deleted', 'safe'),
			array('GID, NEWCOMBO, DISBLDAC, deleted', 'numerical', 'integerOnly'=>true),
			array('AA, NEWTYPE, NEWSUBTYPE, H, POINT_X, POINT_Y', 'numerical'),
			array('TNAME, NAMEGRK, ADDRESS, ADDRESS1, ADD_NUMR1, ADDRESS2, ADD_NUM2, PHONE, FAX, TK, EMAIL, DIMOS, NEWCAT, NEWSUBCAT, PARK_PL, PHOTO1, PHOTO2, PHOTO3, PHOTO4, PHOTO5, WEBSITE', 'length', 'max'=>256),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('GID, AA, TNAME, NAMEGRK, ADDRESS, ADDRESS1, ADD_NUMR1, ADDRESS2, ADD_NUM2, PHONE, FAX, TK, EMAIL, DIMOS, NEWCAT, NEWSUBCAT, NEWTYPE, NEWSUBTYPE, NEWCOMBO, PARK_PL, DISBLDAC, H, PHOTO1, PHOTO2, PHOTO3, PHOTO4, PHOTO5, POINT_X, POINT_Y, WEBSITE, deleted', 'safe', 'on'=>'search'),
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
			'GID' => 'Gid',
			'AA' => 'Aa',
			'TNAME' => 'Tname',
			'NAMEGRK' => 'Namegrk',
			'ADDRESS' => 'Address',
			'ADDRESS1' => 'Address1',
			'ADD_NUMR1' => 'Add Numr1',
			'ADDRESS2' => 'Address2',
			'ADD_NUM2' => 'Add Num2',
			'PHONE' => 'Phone',
			'FAX' => 'Fax',
			'TK' => 'Tk',
			'EMAIL' => 'Email',
			'DIMOS' => 'Dimos',
			'NEWCAT' => 'Newcat',
			'NEWSUBCAT' => 'Newsubcat',
			'NEWTYPE' => 'Newtype',
			'NEWSUBTYPE' => 'Newsubtype',
			'NEWCOMBO' => 'Newcombo',
			'PARK_PL' => 'Park Pl',
			'DISBLDAC' => 'Disbldac',
			'H' => 'H',
			'PHOTO1' => 'Photo1',
			'PHOTO2' => 'Photo2',
			'PHOTO3' => 'Photo3',
			'PHOTO4' => 'Photo4',
			'PHOTO5' => 'Photo5',
			'POINT_X' => 'Point X',
			'POINT_Y' => 'Point Y',
			'WEBSITE' => 'Website',
			'deleted' => 'Deleted',
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

		$criteria->compare('GID',$this->GID);
		$criteria->compare('AA',$this->AA);
		$criteria->compare('TNAME',$this->TNAME,true);
		$criteria->compare('NAMEGRK',$this->NAMEGRK,true);
		$criteria->compare('ADDRESS',$this->ADDRESS,true);
		$criteria->compare('ADDRESS1',$this->ADDRESS1,true);
		$criteria->compare('ADD_NUMR1',$this->ADD_NUMR1,true);
		$criteria->compare('ADDRESS2',$this->ADDRESS2,true);
		$criteria->compare('ADD_NUM2',$this->ADD_NUM2,true);
		$criteria->compare('PHONE',$this->PHONE,true);
		$criteria->compare('FAX',$this->FAX,true);
		$criteria->compare('TK',$this->TK,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);
		$criteria->compare('DIMOS',$this->DIMOS,true);
		$criteria->compare('NEWCAT',$this->NEWCAT,true);
		$criteria->compare('NEWSUBCAT',$this->NEWSUBCAT,true);
		$criteria->compare('NEWTYPE',$this->NEWTYPE);
		$criteria->compare('NEWSUBTYPE',$this->NEWSUBTYPE);
		$criteria->compare('NEWCOMBO',$this->NEWCOMBO);
		$criteria->compare('PARK_PL',$this->PARK_PL,true);
		$criteria->compare('DISBLDAC',$this->DISBLDAC);
		$criteria->compare('H',$this->H);
		$criteria->compare('PHOTO1',$this->PHOTO1,true);
		$criteria->compare('PHOTO2',$this->PHOTO2,true);
		$criteria->compare('PHOTO3',$this->PHOTO3,true);
		$criteria->compare('PHOTO4',$this->PHOTO4,true);
		$criteria->compare('PHOTO5',$this->PHOTO5,true);
		$criteria->compare('POINT_X',$this->POINT_X);
		$criteria->compare('POINT_Y',$this->POINT_Y);
		$criteria->compare('WEBSITE',$this->WEBSITE,true);
		$criteria->compare('deleted',$this->deleted);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ImportedData the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
