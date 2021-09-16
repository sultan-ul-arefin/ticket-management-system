<?php include 'header.php'; ?>
<h1 style="text-align:center">Choose Seat Plan</h1>
<?php
if (isset($_GET['vechicleid'])) {
    $vechicleid = $_GET['vechicleid'];
}
if (isset($_GET['quantity'])) {
    $quantity = $_GET['quantity'];
}
if (isset($_GET['date'])) {
    $date = $_GET['date'];
}
?>
<div class="container">
    <form action='booking.php' method="GET">
        <input type="hidden" id="vechicleid" name="vechicleid" value=<?php echo $vechicleid; ?>>
        <input type="hidden" id="quantity" name="quantity" value=<?php echo $quantity; ?>>
        <input type="hidden" id="date" name="date" value=<?php echo $date; ?>>
        <div class="bus">
            <ol class="cabin fuselage">
                <li class="row row--1">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="1A" />
                            <label for="1A">1A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="1B" />
                            <label for="1B">1B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="1C" />
                            <label for="1C">1C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="1D" />
                            <label for="1D">1D</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="1E" />
                            <label for="1E">1E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="1F" />
                            <label for="1F">1F</label>
                        </li>
                    </ol>
                </li>
                <li class="row row--2">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="2A" />
                            <label for="2A">2A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="2B" />
                            <label for="2B">2B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="2C" />
                            <label for="2C">2C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="2D" />
                            <label for="2D">2D</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="2E" />
                            <label for="2E">2E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="2F" />
                            <label for="2F">2F</label>
                        </li>
                    </ol>
                </li>
                <li class="row row--3">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="3A" />
                            <label for="3A">3A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="3B" />
                            <label for="3B">3B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="3C" />
                            <label for="3C">3C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="3D" />
                            <label for="3D">3D</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="3E" />
                            <label for="3E">3E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="3F" />
                            <label for="3F">3F</label>
                        </li>
                    </ol>
                </li>
                <li class="row row--4">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="4A" />
                            <label for="4A">4A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="4B" />
                            <label for="4B">4B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="4C" />
                            <label for="4C">4C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="4D" />
                            <label for="4D">4D</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="4E" />
                            <label for="4E">4E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="4F" />
                            <label for="4F">4F</label>
                        </li>
                    </ol>
                </li>
                <li class="row row--5">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="5A" />
                            <label for="5A">5A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="5B" />
                            <label for="5B">5B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="5C" />
                            <label for="5C">5C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="5D" />
                            <label for="5D">5D</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="5E" />
                            <label for="5E">5E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="5F" />
                            <label for="5F">5F</label>
                        </li>
                    </ol>
                </li>
                <li class="row row--6">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="6A" />
                            <label for="6A">6A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="6B" />
                            <label for="6B">6B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="6C" />
                            <label for="6C">6C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="6D" />
                            <label for="6D">6D</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="6E" />
                            <label for="6E">6E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="6F" />
                            <label for="6F">6F</label>
                        </li>
                    </ol>
                </li>
                <li class="row row--7">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="7A" />
                            <label for="7A">7A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="7B" />
                            <label for="7B">7B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="7C" />
                            <label for="7C">7C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="7D" />
                            <label for="7D">7D</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="7E" />
                            <label for="7E">7E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="7F" />
                            <label for="7F">7F</label>
                        </li>
                    </ol>
                </li>
                <li class="row row--8">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="8A" />
                            <label for="8A">8A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="8B" />
                            <label for="8B">8B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="8C" />
                            <label for="8C">8C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="8D" />
                            <label for="8D">8D</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="8E" />
                            <label for="8E">8E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="8F" />
                            <label for="8F">8F</label>
                        </li>
                    </ol>
                </li>
                <li class="row row--9">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="9A" />
                            <label for="9A">9A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="9B" />
                            <label for="9B">9B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="9C" />
                            <label for="9C">9C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="9D" />
                            <label for="9D">9D</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="9E" />
                            <label for="9E">9E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="9F" />
                            <label for="9F">9F</label>
                        </li>
                    </ol>
                </li>
                <li class="row row--10">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="10A" />
                            <label for="10A">10A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="10B" />
                            <label for="10B">10B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="10C" />
                            <label for="10C">10C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="10D" />
                            <label for="10D">10D</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="10E" />
                            <label for="10E">10E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="seats[]" name="seats[]" value="10F" />
                            <label for="10F">10F</label>
                        </li>
                    </ol>
                </li>
            </ol>

            <div class="form-submit">
                <input type="submit" class="submit" value="Book now" />
            </div>

        </div>


    </form>
</div>
<?php include 'footer.php'; ?>