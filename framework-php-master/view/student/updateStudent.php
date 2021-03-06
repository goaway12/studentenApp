<div class="form-container col-8 col-md-6 col-lg-4 offset-2 offset-md-3 offset-lg-4 mt-4">
    <h1 class = "text-danger text-center"> Student wijzigen</h1>
        <form action="<?= URL ?>student/modifyStudent/<?= $student['studenten_id']?>" method="post" name="update" autocomplete="off">
            <div class="form-group text-center text-dark">
                <label for="voornaam">Voornaam</label>
                    <input class="form-control" type="text" name="voornaam" value="<?= $student['voornaam']?>" required>
            </div>
            <div class="form-group text-center text-dark">
                <label for="achternaam">Achternaam</label>
                    <input class="form-control" type="text" name="achternaam" value="<?= $student['achternaam']?>" required>
            </div>
            <div class="form-group text-center text-dark">
                <label for="mail">E-Mail</label>
                    <input class="form-control" type="email" name="mail" value="<?= $student['e-mail']?>" required>
            </div>
            <div class="form-group text-center text-dark">
                <label for="Klas">Klas</label>
                    <input class="form-control" list="klassen" name="klas"
                    <?php foreach($klas as $group){ ?>
                        <?php if($group["id"] == $student['klas_id']){ ?>
                            value="<?= $group['groepnaam']?>"
                        <?php }?>  
                    <?php }?> 
                     onfocus="this.value=''" required>
            </div>
            <div class="form-group text-center">
                <input type="submit" value="Update" class="form-submit col-4 col-lg-3">
            </div>
        </form>
</div>
<datalist id="klassen">
    <select name="klassen">
        <?php foreach($klas as $group){?>
            <option value="<?= $group['groepnaam']?>"><?= $group['groepnaam']?></option>
        <?php }?>
    </select>
</datalist>
<?php 