<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categories Model
 *
 * @property \App\Model\Table\StorelocationsTable|\Cake\ORM\Association\BelongsTo $ParentCategories
 * @property \App\Model\Table\StorelocationsTable|\Cake\ORM\Association\HasMany $ChildCategories
 *
 * @method \App\Model\Entity\Category get($primaryKey, $options = [])
 * @method \App\Model\Entity\Category newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Category[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Category|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Category patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Category[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Category findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RestaurentlocationsTable extends Table
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

        $this->setTable('restaurentlocations');
        $this->setDisplayField('location_name'); 
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp'); 
        
       
        $this->belongsTo('Restaurents', [
            'className' => 'Restaurents',
            'foreignKey' => 'rest_id',
            'joinType' => 'LEFT'
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
//        $validator
//            ->integer('id')
//            ->allowEmpty('id', 'create');
//
//        $validator
//            ->allowEmpty('name');
//
//        $validator
//            ->allowEmpty('slug');
//
//        $validator
//            ->allowEmpty('image');
//         $validator
//        ->add('lft', 'valid', ['rule' => 'numeric'])
//    //    ->requirePresence('lft', 'create')
//        ->notEmpty('lft');
//
   $validator
  
       ->notEmpty('rest_id');

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
       // $rules->add($rules->existsIn(['store_id'], 'Stores'));

        return $rules;
    }
}
