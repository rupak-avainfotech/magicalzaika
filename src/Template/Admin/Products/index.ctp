<section class="content-header">
  
    <h1>
    Products   <?= $this->Html->link(__('Add Product'), ['action' => 'add'], ['class' => 'btn btn-warning']) ?>
    <small></small>
    </h1>

    <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Products</li>
    </ol>
    
   
</section>

<section class="content">
	<div class="row">
        <div class="col-xs-12">
        
        <?php echo $this->Flash->render(); ?>
        
        <div class="box">
            <!--<div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>-->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
             <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Price Two') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Restaurant') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Category') ?></th>
              <!--  <th scope="col"><?//= $this->Paginator->sort('Sub Category') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
                <tbody>
                  <?php foreach ($products as $product): ?>
                    
                    
            <tr>
                <td><?= $this->Number->format($product->id) ?></td>  
                <td><?= h($product->name) ?></td>
                <td>Rs <?= h($product->price) ?></td>  
                <td>Rs <?= h($product->price_two) ?></td>  
                <td><?= h($product->restaurant->name) ?></td>
                <td><?= h($product->category->name) ?></td>
               <!-- <td><?//= h($product->subcategory->name) ?></td>-->
                <td><?php echo $this->Html->Image($product->image, array('width' => 100, 'height' => 100, 'alt' =>$product->name, 'class' => 'image')); ?></td>
                <td><?php if($product->status==1){ echo "Active"; }else{ echo "Deactive"; } ?></td>
                <td><?= h($product->created) ?></td>
                <td class="actions">
                   <?= $this->Html->link(
                        '<span class="fa fa-eye"></span><span class="sr-only">' . __('View') . '</span>',
                        ['action' => 'view', $product->id],
                        ['escape' => false, 'title' => __('View'), 'class' => 'btn btn-info btn-xs']
                    ) ?> 
             
                    <?= $this->Html->link(
                        '<span class="fa fa-pencil"></span><span class="sr-only">' . __('Edit') . '</span>',
                        ['action' => 'edit', $product->id],
                        ['escape' => false, 'title' => __('Edit'), 'class' => 'btn btn-success btn-xs']
                    ) ?> 
                  
                     
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id),'class' => 'btn btn-danger btn-xs delt']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
                </tbody>
     
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        
        
        
        </div>  
    </div>
</section>  

<style>

.delt { margin-left:20px;} 


</style>