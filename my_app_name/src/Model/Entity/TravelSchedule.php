<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TravelSchedule Entity
 *
 * @property int $TravelSchedules_Code
 * @property \Cake\I18n\FrozenDate|null $Travel_Schedules_Date
 * @property \Cake\I18n\FrozenTime|null $Travel_Schedules_Hour
 * @property int $Travel_Schedules_Transport_Code
 * @property int $Travel_Schedules_Code_Route
 * @property bool $Travel_Schedules_Registration_Status
 */
class TravelSchedule extends Entity
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
        'Travel_Schedules_Date' => true,
        'Travel_Schedules_Hour' => true,
        'Travel_Schedules_Transport_Code' => true,
        'Travel_Schedules_Code_Route' => true,
        'Travel_Schedules_Registration_Status' => true,
    ];
}
