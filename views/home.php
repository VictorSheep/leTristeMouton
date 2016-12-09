<?php ob_start() ; ?>
	<div class="grid has-gutter-xl home">
	<?php for ($i=0; $i < count($list_articles)/($ratio); $i++): ?>
		<div>
		<?php for ($j=0; $j < $ratio; $j++): ?>
		<?php $key = $j*$nb_col+$i; ?>
		<?php echo $key; ?>
		<?php $article = $list_articles[$key] ?>
			<div class="post-preview justify mb-4">
				<div class="content mb-5 mside-4">
					<a href="#">
						<h4 class="mt-5"><?php echo $article['id'].$article['title'] ?></h4>
					</a>
					<p> <?php echo $article['content'] ?></p>
				</div>
				<div class="center">
					<a class="button-bot center" href="news">Lire la suite</a>
				</div>
			</div>
		<?php endfor ?>
		</div>
	<?php endfor ?>
	</div>
<?php $content = ob_get_clean() ; ?>
<?php include 'master.php' ?>