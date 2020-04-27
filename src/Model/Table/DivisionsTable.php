<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Divisions Model
 *
 * @property \App\Model\Table\DistrictsTable&\Cake\ORM\Association\HasMany $Districts
 *
 * @method \App\Model\Entity\Division newEmptyEntity()
 * @method \App\Model\Entity\Division newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Division[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Division get($primaryKey, $options = [])
 * @method \App\Model\Entity\Division findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Division patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Division[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Division|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Division saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Division[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Division[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Division[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Division[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DivisionsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('divisions');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Districts', [
            'foreignKey' => 'division_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('division_bbs_code')
            ->maxLength('division_bbs_code', 14)
            ->allowEmptyString('division_bbs_code');

        $validator
            ->scalar('name')
            ->maxLength('name', 200)
            ->allowEmptyString('name');

        return $validator;
    }
}
