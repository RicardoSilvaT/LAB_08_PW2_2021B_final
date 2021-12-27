<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Routes Model
 *
 * @method \App\Model\Entity\Route get($primaryKey, $options = [])
 * @method \App\Model\Entity\Route newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Route[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Route|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Route saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Route patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Route[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Route findOrCreate($search, callable $callback = null, $options = [])
 */
class RoutesTable extends Table
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

        $this->setTable('routes');
        $this->setDisplayField('Rout_Code');
        $this->setPrimaryKey('Rout_Code');
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
            ->integer('Rout_Code')
            ->allowEmptyString('Rout_Code', null, 'create');

        $validator
            ->integer('Rout_Code_Direction_Origin')
            ->allowEmptyString('Rout_Code_Direction_Origin');

        $validator
            ->integer('Rout_Code_Direction_Destiny')
            ->allowEmptyString('Rout_Code_Direction_Destiny');

        $validator
            ->integer('Rout_Distance')
            ->allowEmptyString('Rout_Distance');

        $validator
            ->time('Rout_Estimated_Time')
            ->allowEmptyTime('Rout_Estimated_Time');

        $validator
            ->scalar('Rout_Places_of_Passage')
            ->maxLength('Rout_Places_of_Passage', 60)
            ->allowEmptyString('Rout_Places_of_Passage');

        $validator
            ->boolean('Rout_Registration_Status')
            ->notEmptyString('Rout_Registration_Status');

        return $validator;
    }
}
