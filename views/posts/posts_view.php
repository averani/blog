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



	<form action="<?=BASE_URL?>posts/view/<?=$post['post_id']?>" method="post">
			<div class="controls controls-row">
				<input id="name" name="author" type="text" class="span3" style="width: 400px" placeholder="Anonüümne">
			</div>
			<div class="controls">
				<textarea id="message" name="komm" class="span6" style="width: 400px" placeholder="Kirjuta kommentaar" rows="5"></textarea>
			</div>
			<div class="controls">
				<button id="contact-submit" type="submit" class="btn btn-primary input-medium">Submit</button>
			</div>
		</form>
		<?php
		$conn=mysql_connect("localhost","root","");
		$db=mysql_select_db("blog",$conn);
		mysql_query ('SET NAMES UTF8;');
		mysql_query ('SET COLLATION_CONNECTION=utf8_general_ci;');
		mysql_client_encoding($conn);
		if($_POST!=NULL){
			$comment_author=$_POST['author'];
			$comment_text=$_POST['komm'];
			$post_id=$post['post_id'];
			$comment_id=$last_comment['comment_id']+1;
			if($comment_text==NULL){
				echo ('
			<div>
				<span class="label" style="background-color:#ff5849">Sinu kommentaar on tühi!</span>
			</div>
		');
			}
			else{
				if($comment_author==NULL){
					$comment_author="Anonüümne";
				}


				$sql_comment="INSERT INTO `blog`.`comment` (`comment_id`, `comment_text`, `comment_created`, `comment_author`) VALUES(NULL,'$comment_text',CURRENT_TIMESTAMP,'$comment_author')";
				$sql_comment2="INSERT INTO `blog`.`post_comments` (`post_id`, `comment_id`) VALUES('$post_id','$comment_id')";
				$qury=mysql_query($sql_comment);
				$qury2=mysql_query($sql_comment2);
				if(!$qury){
					echo mysql_error();
				}else{
					if(!$qury2){
						echo mysql_error();
					}
					else{
						echo ('
					<div>
						<span class="notification" style="background-color:#8BA870">Kommentaar sisestati edukalt.</span>
					</div>
					');
						echo('<meta http-equiv="refresh" content="0">');
					}
				}
			}
		}
		?>
	<br>


		<div>
			<?foreach ($comments as $comment):?>
				<div style="border:1px solid #D1D0CE; width: 400px">
				<span class="comment" style="background-color:#afe4ff">
				<?=$comment['comment_text']?>

					<p>Comment posted on <?=$comment['comment_created']?> by <?=$comment['comment_author']?></p>
				</span>
				</div>
				<br>
			<?endforeach?>
		</div>
	</div>
