<div class="row">
	<div class="span8">
		<div class="row">
			<div class="span8">
				<h4><strong><a href="#"><?=$post['post_subject']?></a></strong></h4>
			</div>
		</div>
		<div class="row">
			<div class="span6">
				<p>
					<?=$post['post_text']?>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="span8">
				<p></p>
				<p>
					<i class="icon-user"></i> by <a href="#"><?=$post['username']?></a>
					| <i class="icon-calendar"></i> <?=$post['post_created']?>
					| <i class="icon-share"></i> <a href="#">39 Shares</a>
					| <i class="icon-tags"></i> Tags :
					<?foreach($tags as $tag):
						foreach($tag as $tag_name):?>
							<a href="#"><span class="label label-info"><?=$tag_name?></span></a>
						<?endforeach?>
					<?endforeach?>
				</p>
			</div>
		</div>
	</div>
	<div class="media">
		<?foreach($comment_id as $comment):?>
			<a class="pull-left" href="#"></a>
			<div class="media-body">
				<h4 class="media-heading"><?=$comment['comment_author']?></h4>
				<?=$comment['comment_text']?>
			</div>
		<?endforeach?>
	</div>
	<hr />
	<br />
	<form action="<?=BASE_URL?>posts/insert_comment/<?=$post['post_id']?>" method="post">
		<div class="controls controls-row">
			<input id="name" name="author" type="text" class="span3" style="width: 500px" placeholder="Anonymous">
		</div>
		<div class="controls">
			<textarea id="message" name="comment" class="span6" style="width: 500px" placeholder="Leave a comment" rows="5"></textarea>
		</div>
		<div class="controls">
			<a href="<?=BASE_URL?>posts/insert_comment/<?=$post['post_id']?>"><button id="contact-submit" type="submit" class="btn btn-primary input-medium">Submit</button></a>
		</div>
	</form>

</div>
<hr>


