<?=$this->include('_partials/header')?>

<h1 class="my-3"><i class="fa-solid fa-clipboard-list me-2"></i><?=$title?></h1>

<?= validation_list_errors() ?>

<?=form_open()?>
<?=csrf_field()?>

<?php if( isset($instructor) ):?>
<div class="row mb-3">
    <label class="col-form-label col-2">InstructorID</label>
    <label class="col-form-label col-2"><?=$instructor->InstructorID??''?></label>
</div>
<?php endif ?>

<div class="row mb-3">
    <label class="col-form-label col-2">FirstName</label>
    <div class="col-2">
        <input class="form-control" type="text" name="FirstName" placeholder="FirstName" value="<?=$instructor->FirstName??''?>">
    </div>
</div>

<div class="row mb-3">
    <label class="col-form-label col-2">LastName</label>
    <div class="col-2">
        <input class="form-control" type="text" name="LastName" placeholder="LastName" value="<?=$instructor->LastName??''?>">
    </div>
</div>

<div class="row mb-3">
    <label class="col-form-label col-2">Email</label>
    <div class="col-2">
        <input class="form-control" type="text" name="Email" placeholder="Email" value="<?=$instructor->Email??''?>">
    </div>
</div>


<div class="row mb-3">
    <label class="col-form-label col-2">Faculty</label>
    <div class="col-2">
        <input class="form-control" type="text" name="Faculty" placeholder="Faculty" value="<?=$instructor->Faculty??''?>">
    </div>
</div>

<div class="row mb-3">
    <label class="col-form-label col-2"></label>
    <div class="col-2">
        <button class="btn btn-success" type="submit" name="submit"><i class="fa-solid fa-check me-2"></i>Save</button>
        <a class="btn btn-danger" href="courses"><i class="fa-solid fa-x me-2"></i>Cancel</a>
    </div>
</div>

<?=form_close() ?>

<?=$this->include('_partials/footer')?>