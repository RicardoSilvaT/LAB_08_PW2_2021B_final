<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RoutesFixture
 */
class RoutesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Rout_Code' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Codigo de la ruta', 'autoIncrement' => true, 'precision' => null],
        'Rout_Code_Direction_Origin' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Codigo de la direccion de origen', 'precision' => null, 'autoIncrement' => null],
        'Rout_Code_Direction_Destiny' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Codigo de la direccion de destino', 'precision' => null, 'autoIncrement' => null],
        'Rout_Distance' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Distancia de la ruta', 'precision' => null, 'autoIncrement' => null],
        'Rout_Estimated_Time' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Tiempo estimado de la ruta', 'precision' => null],
        'Rout_Places_of_Passage' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'Lugares de paso de la ruta', 'precision' => null, 'fixed' => null],
        'Rout_Registration_Status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => 'Estado de registro de la ruta', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Rout_Code'], 'length' => []],
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
                'Rout_Code' => 1,
                'Rout_Code_Direction_Origin' => 1,
                'Rout_Code_Direction_Destiny' => 1,
                'Rout_Distance' => 1,
                'Rout_Estimated_Time' => '02:20:01',
                'Rout_Places_of_Passage' => 'Lorem ipsum dolor sit amet',
                'Rout_Registration_Status' => 1,
            ],
        ];
        parent::init();
    }
}
