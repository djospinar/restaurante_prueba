<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Meseros Model
 *
 * @property \Cake\ORM\Association\HasMany $Mesas
 *
 * @method \App\Model\Entity\Mesero get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mesero newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mesero[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mesero|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mesero patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mesero[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mesero findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MeserosTable extends Table
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

        $this->setTable('meseros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Mesas', [
            'foreignKey' => 'mesero_id'
        ]);
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('dni', 'create')
            ->notEmpty('dni');

        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->requirePresence('apellido', 'create')
            ->notEmpty('apellido');

        $validator
            ->integer('telefono')
            ->requirePresence('telefono', 'create')
            ->notEmpty('telefono');

        return $validator;
    }
}
