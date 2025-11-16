<section class="card fade-in">
    <h2>List of cities:</h2>

    <ul class="city-list">
        <?php foreach($entries as $city ): ?>
        <li>
            <a href="city.php?<?php echo http_build_query(['id'=>$city->id]); ?>">
                <?php echo $city->getCityWithCountry(); ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>

    
    <ul class="pages">
          <?php if($pagination['page']>1): ?>
            <li>
              <a href="index.php?<?php echo http_build_query([ 'page'=> $pagination['page']-1]); ?>">⏴</a>
            </li>
          <?php endif; ?>
          <?php if($pagination['page']<$pagination['pagesNum']): ?>
            <li>
              <a href="index.php?<?php echo http_build_query([ 'page'=> $pagination['page']+1]); ?>">⏵</a>
            </li>
          <?php endif; ?>

    </ul>
</section>

