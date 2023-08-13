<?=$this->include('_partials/header')?>

<div class="container my-5">
    <h1>Darbą rengė: Aidas Gaučas, JNII21</h1>
    <p>Duomenų bazės modelis:</p>
    
    <?php
    echo img('db_model.svg');
    pre($sql_code);
  ?>
</div>

<?=$this->include('_partials/footer')?>
