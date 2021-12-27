<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Company Entity
 *
 * @property int $Company_id
 * @property string|null $Company_Name
 * @property int|null $Company_Adress_Code
 * @property int|null $Company_Transport_Number
 * @property string|null $Company_Mail
 * @property string|null $Company_Web_Site
 * @property string $Company_Registration_Status
 */
class Company extends Entity
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
        'Company_Name' => true,
        'Company_Adress_Code' => true,
        'Company_Transport_Number' => true,
        'Company_Mail' => true,
        'Company_Web_Site' => true,
        'Company_Registration_Status' => true,
    ];
}
