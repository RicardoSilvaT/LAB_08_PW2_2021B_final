<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TravelSchedules Model
 *
 * @method \App\Model\Entity\TravelSchedule get($primaryKey, $options = [])
 * @method \App\Model\Entity\TravelSchedule newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TravelSchedule[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TravelSchedule|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TravelSchedule saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TravelSchedule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TravelSchedule[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TravelSchedule findOrCreate($search, callable $callback = null, $options = [])
 */
class TravelSchedulesTable extends Table
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

        $this->setTable('travel_schedules');
        $this->setDisplayField('TravelSchedules_Code');
        $this->setPrimaryKey('TravelSchedules_Code');
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
            ->integer('TravelSchedules_Code')
            ->allowEmptyString('TravelSchedules_Code', null, 'create');

        $validator
            ->date('Travel_Schedules_Date')
            ->allowEmptyDate('Travel_Schedules_Date');

        $validator
            ->time('Travel_Schedules_Hour')
            ->allowEmptyTime('Travel_Schedules_Hour');

        $validator
            ->integer('Travel_Schedules_Transport_Code')
            ->requirePresence('Travel_Schedules_Transport_Code', 'create')
            ->notEmptyString('Travel_Schedules_Transport_Code');

        $validator
            ->integer('Travel_Schedules_Code_Route')
            ->requirePresence('Travel_Schedules_Code_Route', 'create')
            ->notEmptyString('Travel_Schedules_Code_Route');

        $validator
            ->boolean('Travel_Schedules_Registration_Status')
            ->requirePresence('Travel_Schedules_Registration_Status', 'create')
            ->notEmptyString('Travel_Schedules_Registration_Status');

        return $validator;
    }
}
