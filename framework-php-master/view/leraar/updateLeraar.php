<div class="container">
    <div class="row">
        <div class="text-center col-12 mt-4">
            <div class="form-container col-10 col-md-8 col-lg-6 offset-1 offset-md-2 offset-lg-3 mt-4">
                <p class=""></p>
                <form action="<?= URL ?>leraar/modifyTeacher/<?= $slb[0]['id']?>" method="post" name="add" autocomplete="off">
                    <div class="form-group text-center text-dark">
                        <label for="voornaam">Voornaam</label>
                            <input class="form-control" type="text" name="voornaam" value="<?= $slb[0]['voornaam']?>" required>
                    </div>
                    <div class="form-group text-center text-dark">
                        <label for="achternaam">Achternaam</label>
                            <input class="form-control" type="text" name="achternaam" value="<?= $slb[0]['achternaam']?>" required>
                    </div>
                    <div class="form-group text-center text-dark">
                        <label for="klas">Klas</label>
                        
                            
                                <input class="form-control" list="klassen" name="klas"
                                <?php foreach($klas as $group){ ?>
                                    <?php if($group["slb'er_id"] == $slb[0]['id']){ ?>
                                        value="<?= $group['groepnaam']?>"
                                    <?php }?>  
                                <?php }?> 
                                onfocus="this.value=''" placeholder="LPIAO19A...">
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" value="Teach!" class="form-submit col-4 col-lg-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<datalist id="klassen">
    <select name="klassen">
        <?php foreach($klas as $group){?>
            <option value="<?= $group['groepnaam']?>"><?= $group['groepnaam']?></option>
        <?php }?>
    </select>
</datalist>
