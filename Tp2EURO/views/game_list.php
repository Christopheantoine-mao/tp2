
<!-- views/game_list.php -->
<section>
    <h2>Matchs à Paris</h2>
    <?php foreach ($parisMatches as $game): ?>
        <div class='game'>
            <p><?= $game->day ?> - <?= $game->homeTeam->name ?> vs <?= $game->awayTeam->name ?></p>
            <p>Score: <?= $game->score ?></p>
            <p>Stade: <?= $game->stadium->name ?>, <?= $game->stadium->city->name ?></p>
        </div>
    <?php endforeach; ?>
</section>

<section>
    <h2>Matchs à Lyon</h2>
    <?php foreach ($lyonMatches as $game): ?>
        <div class='game'>
            <p><?= $game->day ?> - <?= $game->homeTeam->name ?> vs <?= $game->awayTeam->name ?></p>
            <p>Score: <?= $game->score ?></p>
            <p>Stade: <?= $game->stadium->name ?>, <?= $game->stadium->city->name ?></p>
        </div>
    <?php endforeach; ?>
</section>

<section>
    <h2>Matchs à Berlin</h2>
    <?php foreach ($berlinMatches as $game): ?>
        <div class='game'>
            <p><?= $game->day ?> - <?= $game->homeTeam->name ?> vs <?= $game->awayTeam->name ?></p>
            <p>Score: <?= $game->score ?></p>
            <p>Stade: <?= $game->stadium->name ?>, <?= $game->stadium->city->name ?></p>
        </div>
    <?php endforeach; ?>
</section>

<section>
    <h2>Matchs à Madrid</h2>
    <?php foreach ($madridMatches as $game): ?>
        <div class='game'>
            <p><?= $game->day ?> - <?= $game->homeTeam->name ?> vs <?= $game->awayTeam->name ?></p>
            <p>Score: <?= $game->score ?></p>
            <p>Stade: <?= $game->stadium->name ?>, <?= $game->stadium->city->name ?></p>
        </div>
    <?php endforeach; ?>
</section>

<!-- Répétez cette section pour chaque ville avec ses matchs correspondants -->

