<div class="row">
	<div class="span8">
		<div class="row">
			<div class="span8">
				<h4><strong><?=$post['post_subject']?></strong></h4>
			</div>
		</div>
		<div class="row">

			<div class="span6">
				<p>
					<?=str_replace("\n",'<br/>',$post['post_text']);?>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="span8">
				<p></p>
				<p>
					<i class="icon-user"> </i> By <?=$post['username']?>
					| <i class="icon-calendar"></i> <?=$post['post_created']?>
					| <i class="icon-comment"></i> <a href="#">3 Comments</a>
					| <i class="icon-share"></i> <a href="#">39 Shares</a>
					| <i class="icon-tags"></i> <a href="#"><span class="label label-info">
							<?foreach ($tags as $tag):?>
								<a href="<?=BASE_URL?>tags/view/<?=$tag['tag_id']?>"><span class="label label-info" style="background-color:#5bc0de"><?=$tag['tag_name']?></span></a>
							<?endforeach?></span></a>
				</p>
			</div>
		</div>
	</div>
</div>
<hr>



