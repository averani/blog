

<?foreach($posts as $post):?>
<div class="span8">

	<a href=<?BASE_URL?>posts/view/<?=$post['post_id']?>><h1>Alice in Wonderland, part dos!</h1></a>

	<p>TEKST TEKST TEKST TEKST TEKST TEKST TEKST TEKST TEKST TEKST TEKST TEKST TEKST TEKST TEKST</p>

		<span class="badge badge-success">Posted <?=$post['post_created']?></span><span class="pull-right"><?foreach ($tags[$post['post_id']] as $tag):?><a href="#"><span class="label" style="background-color: #5bc0de"<?=$tag?></span></a><?endforeach?>
	</span>


</div>
<?endforeach;?>

