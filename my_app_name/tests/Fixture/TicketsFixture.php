<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TicketsFixture
 */
class TicketsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Ticket_Code' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Ticket Code', 'precision' => null, 'autoIncrement' => null],
        'Ticket_Passenger_DNI' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Passenger Code', 'precision' => null, 'autoIncrement' => null],
        'Ticket_Travel_Code' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Travel Code', 'precision' => null, 'autoIncrement' => null],
        'Ticket_Sales_Manager_Code' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Sales manager code', 'precision' => null, 'autoIncrement' => null],
        'Ticket_Seating_Code' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Seat code', 'precision' => null, 'autoIncrement' => null],
        'Ticket_Application_Date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Application date', 'precision' => null],
        'Ticket_Date_Issue' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Date of issue', 'precision' => null],
        'Ticket_Price' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Price', 'precision' => null, 'autoIncrement' => null],
        'Ticket_Registration_Status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Ticket registration status', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Ticket_Code'], 'length' => []],
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
                'Ticket_Code' => 1,
                'Ticket_Passenger_DNI' => 1,
                'Ticket_Travel_Code' => 1,
                'Ticket_Sales_Manager_Code' => 1,
                'Ticket_Seating_Code' => 1,
                'Ticket_Application_Date' => '2021-12-25',
                'Ticket_Date_Issue' => '2021-12-25',
                'Ticket_Price' => 1,
                'Ticket_Registration_Status' => 1,
            ],
        ];
        parent::init();
    }
}
