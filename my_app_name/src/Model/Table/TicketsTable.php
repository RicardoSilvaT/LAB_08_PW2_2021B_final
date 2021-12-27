<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tickets Model
 *
 * @method \App\Model\Entity\Ticket get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ticket newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ticket[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ticket|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ticket saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ticket patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ticket[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ticket findOrCreate($search, callable $callback = null, $options = [])
 */
class TicketsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('tickets');
        $this->setDisplayField('Ticket_Code');
        $this->setPrimaryKey('Ticket_Code');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('Ticket_Code')
            ->allowEmptyString('Ticket_Code', null, 'create');

        $validator
            ->integer('Ticket_Passenger_DNI')
            ->requirePresence('Ticket_Passenger_DNI', 'create')
            ->notEmptyString('Ticket_Passenger_DNI');

        $validator
            ->integer('Ticket_Travel_Code')
            ->requirePresence('Ticket_Travel_Code', 'create')
            ->notEmptyString('Ticket_Travel_Code');

        $validator
            ->integer('Ticket_Sales_Manager_Code')
            ->requirePresence('Ticket_Sales_Manager_Code', 'create')
            ->notEmptyString('Ticket_Sales_Manager_Code');

        $validator
            ->integer('Ticket_Seating_Code')
            ->requirePresence('Ticket_Seating_Code', 'create')
            ->notEmptyString('Ticket_Seating_Code');

        $validator
            ->date('Ticket_Application_Date')
            ->requirePresence('Ticket_Application_Date', 'create')
            ->notEmptyDate('Ticket_Application_Date');

        $validator
            ->date('Ticket_Date_Issue')
            ->requirePresence('Ticket_Date_Issue', 'create')
            ->notEmptyDate('Ticket_Date_Issue');

        $validator
            ->integer('Ticket_Price')
            ->requirePresence('Ticket_Price', 'create')
            ->notEmptyString('Ticket_Price');

        $validator
            ->boolean('Ticket_Registration_Status')
            ->requirePresence('Ticket_Registration_Status', 'create')
            ->notEmptyString('Ticket_Registration_Status');

        return $validator;
    }
}
