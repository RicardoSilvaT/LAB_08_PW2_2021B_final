<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Boletos Model
 *
 * @method \App\Model\Entity\Boleto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Boleto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Boleto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Boleto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Boleto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Boleto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Boleto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Boleto findOrCreate($search, callable $callback = null, $options = [])
 */
class BoletosTable extends Table
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

        $this->setTable('boletos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('lastName')
            ->maxLength('lastName', 30)
            ->allowEmptyString('lastName');

        $validator
            ->scalar('firsName')
            ->maxLength('firsName', 30)
            ->allowEmptyString('firsName');

        $validator
            ->scalar('username')
            ->maxLength('username', 30)
            ->allowEmptyString('username');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('adress')
            ->maxLength('adress', 50)
            ->allowEmptyString('adress');

        $validator
            ->scalar('adress2')
            ->maxLength('adress2', 50)
            ->allowEmptyString('adress2');

        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
