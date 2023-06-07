<?php

function searchform($autoOverzicht)
{

    $out = '
    <div class="container d-flex">
        <div class="justify-content-center mx-auto h-75 mt-5 col">
            <form action="index.php" method="get">
                <div id="form-group">
                    <label for="merk">Merk:</label>
                    <select name="merk" class="form-control mb-2">
                    <option>---Allen Merken---</option>';

    foreach ($autoOverzicht->getMerken() as $merk) {
        $out .= "<option>" . $merk . "</option>";

    }


    $out .= '
                </select>
                </div>
                <div id="form-group">
                    <label for="min">Minimale prijs</label>
                    <input type="text" class="form-control mb-2 input-xxlarge" placeholder="Min prijs" name="min">
                </div>
                <div id="form-group">
                    <label for="max">Maximale prijs</label>
                    <input type="text" class="form-control " placeholder="Max prijs" name="max">
                </div>
                <div>
                    <input type="submit" class="mt-2 btn btn-primary" name="submit">
                </div>
            </form>
        </div>
    </div>';
    return $out;
}