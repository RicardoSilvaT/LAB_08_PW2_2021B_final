<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CompanyFixture
 */
class CompanyFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'company';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Company_id' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Codigo de la empresa', 'autoIncrement' => true, 'precision' => null],
        'Company_Name' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'Nombre de la empresa', 'precision' => null, 'fixed' => null],
        'Company_Adress_Code' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Numero de direccion de la empresa', 'precision' => null, 'autoIncrement' => null],
        'Company_Transport_Number' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Cantidad de transportes de la empresa', 'precision' => null, 'autoIncrement' => null],
        'Company_Mail' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'Correo de la empresa', 'precision' => null, 'fixed' => null],
        'Company_Web_Site' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'Pagina web de la empresa', 'precision' => null, 'fixed' => null],
        'Company_Registration_Status' => ['type' => 'string', 'length' => 1, 'fixed' => true, 'null' => false, 'default' => '1', 'collate' => 'utf8mb4_general_ci', 'comment' => 'Estado de registro de la empresa', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Company_id'], 'length' => []],
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
                'Company_id' => 1,
                'Company_Name' => 'Lorem ipsum dolor sit amet',
                'Company_Adress_Code' => 1,
                'Company_Transport_Number' => 1,
                'Company_Mail' => 'Lorem ipsum dolor sit amet',
                'Company_Web_Site' => 'Lorem ipsum dolor sit amet',
                'Company_Registration_Status' => 'L',
            ],
        ];
        parent::init();
    }
}
