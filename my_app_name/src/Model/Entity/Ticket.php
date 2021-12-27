<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ticket Entity
 *
 * @property int $Ticket_Code
 * @property int $Ticket_Passenger_DNI
 * @property int $Ticket_Travel_Code
 * @property int $Ticket_Sales_Manager_Code
 * @property int $Ticket_Seating_Code
 * @property \Cake\I18n\FrozenDate $Ticket_Application_Date
 * @property \Cake\I18n\FrozenDate $Ticket_Date_Issue
 * @property int $Ticket_Price
 * @property bool $Ticket_Registration_Status
 */
class Ticket extends Entity
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
        'Ticket_Passenger_DNI' => true,
        'Ticket_Travel_Code' => true,
        'Ticket_Sales_Manager_Code' => true,
        'Ticket_Seating_Code' => true,
        'Ticket_Application_Date' => true,
        'Ticket_Date_Issue' => true,
        'Ticket_Price' => true,
        'Ticket_Registration_Status' => true,
    ];
}
