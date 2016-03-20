<style>
#mkwell{
  text-align:  center;
}
</style>

<div class="container">

  <div class="container">

  <div class="well well-sm" id="mkwell">Daftar Mata Kuliah</div>

</div>
<div class="container">
  <?php

  $attribute = array( 'class' => 'form-horizontal',
         'role' => 'form');
  echo form_open($aksi,$attribute);
  ?>

  <div class="listmk">
    <?php

    $puter = 0;
    $arr_nama_mk = array();
    foreach($nama_mk as $row){
      $arr_nama_mk[$puter++] = $row;
    }
    $puter = 0;
    foreach($kode_mk as $row){

      echo '<label class="radio">';
      echo '<input type="radio" name="mk" value="'.$arr_nama_mk[$puter].'">'.$arr_nama_mk[$puter];
      echo '</label>';
      $puter++;

    }

     ?>
   </div>

    <br>
    <button class="btn btn-success btn-md" type="submit" >Cetak <span class="glyphicon glyphicon-print"></span></button>
    </form>
</div>


</body>
</html>
