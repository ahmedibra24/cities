<div class="form-container">
    <h2>Edit City</h2>
<form class="form" method="POST" action="edit.php?<?php echo http_build_query(['id' => $city->id]); ?>">
    <div class=".form-group">
        <label for="city">City:</label>
        <input class="input-icon" type="text" name="city" id="city" value="<?php echo e($city->city); ?>" required />
    </div>
    <div class=".form-group">
        <label for="cityAscii">City (ascii):</label>
        <input type="text" name="cityAscii" id="cityAscii" value="<?php echo e($city->cityAscii); ?>" required />
    </div>
    <div class=".form-group">
        <label for="country">Country:</label>
        <input type="text" name="country" id="country" value="<?php echo e($city->country); ?>" required />
    </div>
    <div class=".form-group">
        <label for="iso2">ISO-2:</label>
        <input type="text" name="iso2" id="iso2" value="<?php echo e($city->iso2); ?>" required />
    </div>
    <div class=".form-group">
        <label for="population">Population:</label>
        <input type="number" name="population" id="population" value="<?php echo e($city->population); ?>" required />
    </div>
    <br />
    <input type="submit" value="Submit!" />
</form>