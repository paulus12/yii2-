public function actionPostCategory($id)
{
$posts = \common\models\Post::find()
->where(['status' => 1, 'category_id' => $id])
->orderBy('id DESC')
->limit(5)
->all();
<p>$categories = \common\models\Category::find()
->orderBy('name ASC')
->all();
<p>return $this->render('postCategory', [
'posts' => $posts,
'categories' => $categories,
]);
}