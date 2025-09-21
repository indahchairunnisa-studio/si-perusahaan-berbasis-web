
<!DOCTYPE html>
<html lang="en">
        <?php
                while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                    $namadepartemennya = $fetcharray['namadepartemen'];
                    $iddepartemennya = $fetcharray['iddepartemen'];
        ?>
            <option value="<?=$iddepartemennya;?>"><?=$namadepartemennya;?></option>

            <?php
                }
            ?>
        </select>
        <br>
        <input type="file" name="file" class="form-control">
        <br>
        <button type="submit" class="btn btn-primary" name="addnewkaryawan">Submit</button>
        </div>
        </form>

        </div>
    </div>

</html>
