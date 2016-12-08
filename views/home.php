<?php ob_start() ; ?>
	<div class="grid-3 has-gutter-xl home">
	<?php foreach ($list_articles as $article): ?>
		<div>
		<?php for ($i=0; $i < 4; $i++): ?>
			<div class="post-preview justify mb-4">
				<div class="content mb-5 mside-4">
					<a href="#">
						<h4 class="mt-5"><?php echo $article['title'] ?></h4>
					</a>
					<p> <?php echo $article['content'] ?></p>
				</div>
				<div class="center">
					<a class="button-bot center" href="news">Lire la suite</a>
				</div>
			</div>
		<?php endfor ?>
		</div>
	<?php endforeach ?>
	</div>
<?php $content = ob_get_clean() ; ?>
<?php include 'master.php' ?>