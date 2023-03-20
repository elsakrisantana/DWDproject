<!-- 
The art generated for the user based on the MBTI and scoreBand of user.
SimpleControllerAjax mapped with the 'artCollection' in the database.
 -->

<?php foreach (($dbData?:[]) as $record): ?>
    <div class="row">
        <div class="two-column left">
            <!-- <img src="img/<?= (trim($record['file'])) ?>" alt="HTML5 Icon" style="width:100%; margin-top: auto; margin-bottom: auto; vertical-align: baseline;"> -->
            <img src="img/chipmunk.jpg"
                 style="height:100%; width: 100%; object-fit: cover; margin-top: auto; margin-bottom: auto; vertical-align: baseline;">
        </div>
        <div class="two-column right" style="padding-left: 3%;">
            <h2>The artwork for</h2>
            <h1><label class="pink-text"><?= (trim($record['name'])) ?></label></h1>
            <label class="tag"><?= (trim($record['MBTI'])) ?></label>
            <label class="tag"><?= (trim($record['type'])) ?></label>
            <h4>by <?= (trim($record['artist'])) ?></h4>
            <br>
            <a class="button-style-1" href="<?= ($BASE) ?>/collection">Explore More Artworks</a>
        </div>
    </div>
<?php endforeach; ?>
<br>
