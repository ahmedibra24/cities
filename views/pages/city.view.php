<?php 

/**
 * @var WorldCityModel $city
 * define the $city variable type for IDEs -> to appear in auto completion
 */


?>
<section class="card slide-up">
    <h2>City:  <?php echo $city->getCityWithCountry(); ?> </h2>

    <table class="info-table">
        <tr>
            <th>City name:</th>
            <td><?php echo e($city->city) ?></td>
        </tr>
        <tr>
            <th>City name (ascii):</th>
            <td><?php echo e($city->cityAscii) ?></td>
        </tr>
        <tr>
            <th>Country:</th>
            <td><?php echo e($city->country) ?></td>
        </tr>
        <tr>
            <th>Flag of the country:</th>
            <td><?php echo $city->getFlag() ?></td>
        </tr>
        <tr>
            <th>ISO2 code of country:</th>
            <td><?php echo e($city->iso2) ?></td>
        </tr>
        <tr>
            <th>Population:</th>
            <td><?php echo e($city->population) ?></td>
        </tr>
    </table>
    <button><a href="edit.php?id=<?php echo e($city->id) ?>">Edit</a></button>
</section>
