<?=$this->include('_partials/header')?>

<h1 class="my-3"><i class="fa-solid fa-clipboard-list me-2"></i><?=$title?></h1>

<?= validation_list_errors() ?>

<?=form_open()?>
<?=csrf_field()?>

<?php if( isset($enrollments) ):?>
<div class="row mb-3">
    <label class="col-form-label col-2">EnrollmentID</label>
    <label class="col-form-label col-2"><?=$enrollment->EnrollmentID??''?></label>
</div>
<?php endif ?>

<div class="row mb-3">
    <label class="col-form-label col-2">Student</label>
    <div class="col-2">
        <input class="form-control" list="students-list" name="StudentID" placeholder="Student">
        <datalist id="students-list">
            <?php foreach ($students as $student):?>
            <option value="<?=$student->StudentID?>"> <?=$student->FirstName?> <?=$student->LastName?></option>
            <?php endforeach ?>
        </datalist>
    </div>
</div>

<div class="row mb-3">
    <label class="col-form-label col-2">Course</label>
    <div class="col-2">
        <input class="form-control" list="courses-list" name="CourseID" placeholder="Course">
        <datalist id="courses-list">
            <?php foreach ($courses as $course):?>
            <option value="<?=$course->CourseID?>"> <?=$course->CourseName?> <?=$course->Faculty?></option>
            <?php endforeach ?>
        </datalist>
    </div>
</div>

<div class="row mb-3">
    <label class="col-form-label col-2">Status</label>
    <div class="col-2">
        <input class="form-control" type="text" name="Status" placeholder="Status" value="<?=$enrollment->Status??''?>">
    </div>
</div>

<div class="row mb-3">
    <label class="col-form-label col-2">Date</label>
    <div class="col-2">
        <input class="form-control" type="text" name="Date" placeholder="Date" value="<?=$enrollment->Date??''?>">
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