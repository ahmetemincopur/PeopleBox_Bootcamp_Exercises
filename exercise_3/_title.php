<?php

    $inactiveMovieCount=0;

    foreach(getData()["movies"] as $id => $film){
        if(!$film["is-active"]){
            $inactiveMovieCount+= !$film["is-active"];
        }
    }
    $ozet = count(getData()["categories"]).' kategoride '.count(getData()["movies"])-$inactiveMovieCount.'  film listelenmiştir';
    const baslik = "Popüler Filmler";
?>
    
<h1 class="mb-4"><?php echo baslik?></h1>
<p class="text-muted">
    <?php echo $ozet?>
</p>