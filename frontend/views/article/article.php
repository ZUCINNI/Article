
<?php if(!empty($articles)): ?>

    <?php foreach ($articles as $model): ?>


        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><a href="<?= \yii\helpers\Url::toRoute(['article/item', 'id'=>$model->id]);?>"><?= $model->title ?></a></h3>
            </div>
            <div class="panel-body">
                <?= $model->content ?>
            </div>
        </div>

    <?php endforeach; ?>

<?php endif; ?>





