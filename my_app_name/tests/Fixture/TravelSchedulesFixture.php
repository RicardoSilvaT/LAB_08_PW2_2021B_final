<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TravelSchedulesFixture
 */
class TravelSchedulesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'TravelSchedules_Code' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código del de viaje', 'precision' => null, 'autoIncrement' => null],
        'Travel_Schedules_Date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Año, mes y día del viaje', 'precision' => null],
        'Travel_Schedules_Hour' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Hora del viaje', 'precision' => null],
        'Travel_Schedules_Transport_Code' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código del transporte que hará el viaje', 'precision' => null, 'autoIncrement' => null],
        'Travel_Schedules_Code_Route' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Código de la ruta que tomara para el viaje', 'precision' => null, 'autoIncrement' => null],
        'Travel_Schedules_Registration_Status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Estado del registro', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['TravelSchedules_Code'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'TravelSchedules_Code' => 1,
                'Travel_Schedules_Date' => '2021-12-25',
                'Travel_Schedules_Hour' => '23:41:38',
                'Travel_Schedules_Transport_Code' => 1,
                'Travel_Schedules_Code_Route' => 1,
                'Travel_Schedules_Registration_Status' => 1,
            ],
        ];
        parent::init();
    }
}
