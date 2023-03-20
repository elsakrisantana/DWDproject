<!--
The art collection at the 'artCollection' will be loaded at here.
A search function is used for searching the art collection based on different characteristics, e.g. name, MBTI, and artist and etc.
 -->

<div class="row gradient-banner" style="margin-top: -40px;">
	<div class="one-column">
		<img src="img/01.Home/icon-art.png" class="img-icon">

		<h2>
			Explore Our Collection of<br>
			<label class="pink-text">Therapy Artworks</label>
		</h2>

		<form action="<?= ($BASE) ?>/collection" method="post">
			<input type="text" name="term" class="textbox" id="textbox-search" size="50"
				   placeholder="Search collection by Name">
			<select name="field" id="select-search" onchange="searchChange()">
				<option value="name">Name</option>
				<option value="artist">Artist</option>
				<option value="MBTI">MBTI</option>
				<option value="type">Type</option>
			</select>
			<input type="submit" name="submit" value="Search" class="button-style-2" style="margin-left: 20px;">
		</form>
	</div>
</div>

<div class="row">
	<div class="one-column">
		<h2><label class="pink-text">A</label>rtworks</h2>
	</div>
</div>

<div class="collection-div">
	<?php foreach (($dbData?:[]) as $record): ?>
		<div class="four-column">
			<img src="img/<?= (trim($record['file'])) ?>" alt="<?= (trim($record['name'])) ?>" class="collection-image">
			<h4 style="text-align:left; font-weight:600; margin-top: 10px; margin-bottom: 0px;">
				<label class="pink-text"><?= (trim($record['name'])) ?></label>
				&nbsp;
				<label class="tag" style="text-align: left;"><?= (trim($record['MBTI'])) ?></label>
				<label class="tag" style="text-align: left;"><?= (trim($record['type'])) ?></label>
			</h4>
			<h4 style="margin-top: 0px; font-size: 12px; text-align: left;">- <?= (trim($record['artist'])) ?></h4>
		</div>
	<?php endforeach; ?>
</div>

<div class="row">
	<div class="one-column">
		<img src="img/01.Home/hr-pink.png" style="height: 25px; margin-top: 20px;">
	</div>
</div>

<!-- <table>
    <tr>
        <th>Name</th>
        <th>Art</th>
        <th>Artist</th>
        <th>MBTI</th>
        <th>type</th>
    </tr>
    <?php foreach (($dbData?:[]) as $record): ?>
        <tr>
            <td><?= (trim($record['name'])) ?></td>
            <td><img src="img/<?= (trim($record['file'])) ?>" alt="HTML5 Icon" style="width:128px;height:128px;"></td>
            <td><?= (trim($record['artist'])) ?></td>
            <td><?= (trim($record['MBTI'])) ?></td>
            <td><?= (trim($record['type'])) ?></td>
        </tr>
    <?php endforeach; ?>
</table> -->

<script>
	function searchChange() {
		$('#textbox-search').attr("placeholder", "Search collection by " + $('#select-search option:selected').text() + "...");
	}
</script>