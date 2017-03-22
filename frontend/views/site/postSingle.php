<?php
use yii\bootstrap\Nav;
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div>
        <h1>Yii Tutorials!</h1>

        <p class="lead">Let's Fun Learn Yii Framework Version 2.0.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Are You Ready?</a></p>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-9">
				<?php
				echo '<div>';
				echo '<h2>'.$post->title.'</h2>';
				echo '<p>'.$post->content.'</p>';
				echo '<p><small>Posted by '.$post->user->username.' at '.date('F j, Y, g:i a',$post->create_time).'</small></p>';
				echo '</div>';
				foreach($comments as $comment){
					echo "<div style='border-bottom:1px solid #ddd; padding:5px;margin:5px;'>";
					echo "<p class='pull-right'><small>
						  Comment by ".$comment->author." at ".date("F j, Y, g:i a",$comment->create_time).
						  "</small></p>";
					echo $comment->content;					
					echo "</div>";
				}
				
				echo $this->render('formComment', [
					'model' => $model,
				]);
				?>                
            </div>
            <div class="col-lg-3">
                <h2>Category</h2>
				<?php				
				$items=[];	
				foreach($categories as $category){
					$items[]=['label' => $category->name , 'url' => \Yii::$app->urlManager->createUrl(['site/post-category', 'id' => $category->id])];
				}
				echo Nav::widget([
					'items' => $items,
				]);
				?>                
            </div>
        </div>
    </div>
</div>
