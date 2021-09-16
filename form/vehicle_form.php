<form class="booking-form" action='response.php' method="POST">

    <label>Name of the vehicle</label>
    <input type="text" id="name" name="name" placeholder="Eg.    Ena Paribahon" />

    <label>Type</label>
    <input type="text" id="type" name="type" placeholder="Eg.    BUS" />

    <label>Total Seat</label>
    <input type="text" id="seat" name="seat" placeholder="Eg.    40" />

    <label>Coach Type</label>
    <input type="text" id="coach" name="coach" placeholder="Eg.    AC/Non AC" />

    <label>From</label>
    <input type="text" id="startfrom" name="startfrom" placeholder="Eg.    Dhaka" />

    <label>To</label>
    <input type="text" id="endto" name="endto" placeholder="Eg.    Khulna" />
    <div class="form-submit">
        <input type="submit" name="vehicle" id="vehicle" class="submit" value="Save" />
    </div>

</form>