<div class="form-container col-8 col-md-6 col-lg-4 offset-2 offset-md-3 offset-lg-4 mt-4">
<h1 class = "text-danger text-center"> Planning toevoegen</h1>
        <form action="addPlanning" method="post" name="Sign-Up" autocomplete="off">
            <div class="form-group text-center text-dark">
                <label for="groepNaam"><h3>Groepnaam</h3></label> <br>
                <select name="groepNaam">
                    <?php foreach($klassen as $klas){?>
                        <option value="<?php echo htmlentities($klas["id"])?>"><?php echo htmlentities($klas["groepnaam"]), " ", htmlentities($student["achternaam"]) ?></option>
                    <?php } ?>
                    </select>
            </div>
            <div class="form-group text-center text-dark">
                <label for="les"><h3>Les</h3></label> <br>
                <select name="les">
                    <?php foreach($lessen as $les){?>
                        <option value="<?php echo htmlentities($les["lessen_id"])?>"><?php echo htmlentities($les["les"]), " om ", date('H:i', strtotime($les["tijd"])), " uur" ?></option>
                    <?php } ?>
                    </select><div class="text-danger"><?php echo $error;?></div>
            </div>

            <div class="form-group text-center text-dark">
                <label for="datum"><h3>Datum</h3></label>
                    <input class="form-control" type="date" name="datum" required>
            </div>

            
            <div class="form-group text-center">
                <input type="submit" value="Toevoegen" class="form-submit col-4 col-lg-3">
            </div>
        </form>
    </div>
	