<div class="span8">
	<h1><?=$post['post_subject']?></h1>
	<p><?=$post['post_text']?></p>
	<div>

		<p>Tags:
			<?foreach ($tags as $tag):?>
				<a href="#"><span class="label label-info"><?=$tag['tag_name']?></span></a>
			<?endforeach?>
			| <i class="icon-user"></i> <a href="#"><?=$post['username']?></a>
			| <i class="icon-calendar"></i><?=$post['post_created']?>
			| <i class="icon-comment"></i> <a href="#">3 Comments</a>
			| <i class="icon-share"></i> <a href="#">39 Shares</a>
		</p>