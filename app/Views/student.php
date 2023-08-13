<?=$this->include('_partials/header')?>

<h1 class="my-3"><i class="fa-solid fa-clipboard-list me-2"></i><?=$title?></h1>

<?= validation_list_errors() ?>

<?=form_open()?>
<?=csrf_field()?>

<?php if( isset($student) ):?>
<div class="row mb-3">
    <label class="col-form-label col-2">StudentID</label>
    <label class="col-form-label col-2"><?=$student->StudentID??''?></label>
</div>
<?php endif ?>

<div class="row mb-3">
    <label class="col-form-label col-2">FirstName</label>
    <div class="col-2">
        <input class="form-control" type="text" name="FirstName" placeholder="FirstName" value="<?=$student->FirstName??''?>">
    </div>
</div>
<div class="row mb-3">
    <label class="col-form-label col-2">LastName</label>
    <div class="col-2">
        <input class="form-control" type="text" name="LastName" placeholder="LastName" value="<?=$student->LastName??''?>">
    </div>
</div>
<div class="row mb-3">
    <label class="col-form-label col-2">Email</label>
    <div class="col-2">
        <input class="form-control" type="text" name="Email" placeholder="Email" value="<?=$student->Email??''?>">
    </div>
</div>
<div class="row mb-3">
    <label class="col-form-label col-2">DateOfBirth</label>
    <div class="col-2">
        <input class="form-control" type="text" name="DateOfBirth" placeholder="DateOfBirth" value="<?=$student->DateOfBirth??''?>">
    </div>
</div>
<div class="row mb-3">
    <label class="col-form-label col-2">Address</label>
    <div class="col-2">
        <input class="form-control" type="text" name="Address" placeholder="Address" value="<?=$student->Address??''?>">
    </div>
</div>
<div class="row mb-3">
    <label class="col-form-label col-2">Program</label>
    <div class="col-2">
        <input class="form-control" type="text" name="Program" placeholder="Program" value="<?=$student->Program??''?>">
    </div>
</div>
<div class="row mb-3">
    <label class="col-form-label col-2">Year</label>
    <div class="col-2">
        <input class="form-control" type="text" name="Year" placeholder="Year" value="<?=$student->Year??''?>">
    </div>
</div>
<div class="row mb-3">
    <label class="col-form-label col-2">GPA</label>
    <div class="col-2">
        <input class="form-control" type="text" name="GPA" placeholder="GPA" value="<?=$student->GPA??''?>">
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