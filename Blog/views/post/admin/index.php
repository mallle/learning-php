<?php include __DIR__ . "/../../layout/header.php" ?>

<br/>
<br/>

<h3>Posts Verwalten</h3>

<ul>
	<?php foreach($all as $post): ?>

	  <li>
	    <a href="posts-edit?id=<?php echo e($post->id); ?>">
	      <?php echo e($post->title); ?>
	    </a>
	  </li>

	<?php endforeach ?>
</ul>

<?php include __DIR__ . "/../../layout/footer.php" ?>