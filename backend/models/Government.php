<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "government".
 *
 * @property int $id
 * @property string $ministry
 * @property string $department
 * @property string $sub_category
 * @property string $organizational_location
 * @property string|null $giz_interventions_history
 * @property string|null $focal_person_contact_details
 * @property string|null $physical_address
 */
class Government extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'government';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ministry', 'department', 'sub_category', 'organizational_location'], 'required'],
            [['giz_interventions_history', 'focal_person_contact_details', 'physical_address'], 'string'],
            [['ministry', 'department', 'sub_category', 'organizational_location'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ministry' => 'Ministry',
            'department' => 'Department',
            'sub_category' => 'Sub Category',
            'organizational_location' => 'Organizational Location',
            'giz_interventions_history' => 'Giz Interventions History',
            'focal_person_contact_details' => 'Focal Person Contact Details',
            'physical_address' => 'Physical Address',
        ];
    }
}
