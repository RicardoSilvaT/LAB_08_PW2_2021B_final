<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Route Entity
 *
 * @property int $Rout_Code
 * @property int|null $Rout_Code_Direction_Origin
 * @property int|null $Rout_Code_Direction_Destiny
 * @property int|null $Rout_Distance
 * @property \Cake\I18n\FrozenTime|null $Rout_Estimated_Time
 * @property string|null $Rout_Places_of_Passage
 * @property bool $Rout_Registration_Status
 */
class Route extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'Rout_Code_Direction_Origin' => true,
        'Rout_Code_Direction_Destiny' => true,
        'Rout_Distance' => true,
        'Rout_Estimated_Time' => true,
        'Rout_Places_of_Passage' => true,
        'Rout_Registration_Status' => true,
    ];
}
