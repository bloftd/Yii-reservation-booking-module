<?php
$this->breadcrumbs=array(
	'Room Types',
);

$this->menu=array(
	array('label'=>'Create RoomType', 'url'=>array('create')),
	array('label'=>'Manage RoomType', 'url'=>array('admin')),
);
?>

<h1>Room Types</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(

    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    'columns'=>array(
        array('name'=>'description', 'header'=>'Description'),
        array('name'=>'quantity', 'header'=>'Quantity'),
        array(
            'class'=>'CButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); 
?>
