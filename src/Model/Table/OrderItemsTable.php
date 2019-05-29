<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orders Model
 *
 * @property \App\Model\Table\StoreTable|\Cake\ORM\Association\HasMany $Stores
 *
 * @method \App\Model\Entity\Favourite get($primaryKey, $options = [])
 * @method \App\Model\Entity\Favourite newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Favourite[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Favourite|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Favourite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Favourite[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Favourite findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrderItemsTable extends Table
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

        $this->setTable('order_items');
        $this->setPrimaryKey('id');
        $this->setDisplayField('name');
        $this->addBehavior('Timestamp');
        $this->hasOne('Orders'); 

        $this->belongsTo('Orders', [      
            'foreignKey' => 'order_id',
            'joinType' => 'INNER'
        ]);

	$this->belongsTo('Products', [      
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'  
        ]); 
	$this->belongsTo('Users', [       
            'foreignKey' => 'seller_id',
            'joinType' => 'INNER'
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
      

        return $validator; 
    }
}
