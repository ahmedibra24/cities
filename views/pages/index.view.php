<section class="card fade-in">
    <h2>List of cities:</h2>

    <ul class="city-list">
        <?php foreach($entries as $city ): ?>
        <li>
            <a href="city.php">
                <?php echo e($city->city); ?> (<?php echo e($city->country); ?>)
            </a>
        </li>
        <?php endforeach; ?>
    </ul>

    
    <div class="pages">
        <a class="active">1</a><a>2</a><a>3</a><a>4</a><a>5</a>
    </div>
</section>

