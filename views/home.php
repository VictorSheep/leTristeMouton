<?php ob_start() ; ?>
	<div class="grid has-gutter-xl home">
		<?php foreach ($list_news as $news):?>
		<div>
			<div class="post-preview justify mb-4">
				<div class="content mb-5 mside-4">
					<a href="#">
						<h4 class="mt-5"> <?php echo ($news['title']); ?> </h4>
					</a>
					<p> <?php echo ($news['content']); ?> </p>
				</div>
				<div class="center">
					<a class="button-bot center" href="news">Lire la suite</a>
				</div>
			</div>
		</div>
		<div>'pwal'</div>
		<?php endforeach ?>
	</div>
<?php $content = ob_get_clean() ; ?>
<?php include 'master.php' ?>