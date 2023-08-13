<?=$this->include('_partials/header')?>

<h1 class="my-3"><i class="fa-solid fa-clipboard-list me-2"></i><?=$title?></h1>

<?= validation_list_errors() ?>

<?=form_open()?>
<?=csrf_field()?>

<?php if( isset($course) ):?>
<div class="row mb-3">
    <label class="col-form-label col-2">CourseID</label>
    <label class="col-form-label col-2"><?=$course->CourseID??''?></label>
</div>
<?php endif ?>

<div class="row mb-3">
    <label class="col-form-label col-2">CourseName</label>
    <div class="col-2">
        <input class="form-control" type="text" name="CourseName" placeholder="CourseName" value="<?=$course->CourseName??''?>">
    </div>
</div>

<div class="row mb-3">
    <label class="col-form-label col-2">Instructor</label>
    <div class="col-2">
        <input class="form-control" list="instructors-list" name="InstructorID" placeholder="Instructor">
        <datalist id="instructors-list">
            <?php foreach ($instructors as $instructor):?>
            <option value="<?=$instructor->InstructorID?>"> <?=$instructor->FirstName?> <?=$instructor->LastName?></option>
            <?php endforeach ?>
        </datalist>
    </div>
</div>

<div class="row mb-3">
    <label class="col-form-label col-2">Faculty</label>
    <div class="col-2">
        <input class="form-control" type="text" name="Faculty" placeholder="Faculty" value="<?=$course->Faculty??''?>">
    </div>
</div>

<div class="row mb-3">
    <label class="col-form-label col-2">StartDate</label>
    <div class="col-2">
        <input class="form-control" type="text" name="StartDate" placeholder="StartDate" value="<?=$course->StartDate??''?>">
    </div>
</div>

<div class="row mb-3">
    <label class="col-form-label col-2">EndDate</label>
    <div class="col-2">
        <input class="form-control" type="text" name="EndDate" placeholder="EndDate" value="<?=$course->EndDate??''?>">
    </div>
</div>

<div class="row mb-3">
    <label class="col-form-label col-2">Credits</label>
    <div class="col-2">
        <input class="form-control" type="text" name="Credits" placeholder="Credits" value="<?=$course->Credits??''?>">
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