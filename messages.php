<?php include('libs/messages.php'); ?>
<?php include('includes/top.php'); ?>
<table border="1">
	<thead>
		<tr>
			<th>id</th>
			<th>creator</th>
			<th>date</th>
			<th>message</th>
		</tr>
	</thead>
	<h1>Création d'une nouvelle branche GIT</h1>
	<tbody>
		<?=build_html_messages(include('data/messages.php'));?>
	</tbody>
</table>

<?php 
	$id = $_GET['id'];
	$pageSize = 1;
	$page = 1;
?>

<?php if($page > 0){ ?>
	<a href="messages.php?id=<?=$_GET['id']?>&page=<?=$page - 1 ?>">
		<button>Page précédente</button>
	</a>
<?php } ?>
<?php if(true){ ?>
	<a href="messages.php?id=">
		<button>Page suivante</button>
	</a>
<?php } ?>








<?php include('includes/bottom.php'); ?>