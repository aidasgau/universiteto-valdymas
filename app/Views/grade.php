<?=$this->include('_partials/header')?>

<h1 class="my-3"><i class="fa-solid fa-clipboard-list me-2"></i><?=$title?></h1>

<?= validation_list_errors() ?>

<?=form_open()?>
<?=csrf_field()?>

<div class="row mb-3">
    <label class="col-form-label col-2">Enrollment</label>
    <div class="col-2">
        <input class="form-control" list="enrollments-list" name="EnrollmentID" placeholder="Enrollment">
        <datalist id="enrollments-list">
            <?php foreach ($enrollments as $enrollment):?>
            <option value="<?=$enrollment->EnrollmentID?>"> <?=$enrollment->StudentID?> <?=$enrollment->Status?></option>
            <?php endforeach ?>
        </datalist>
    </div>
</div>

<div class="row mb-3">
    <label class="col-form-label col-2">Grade</label>
    <div class="col-2">
        <input class="form-control" type="text" name="Grade" placeholder="Grade" value="<?=$grade->Grade??''?>">
    </div>
</div>

<div class="row mb-3">
    <label class="col-form-label col-2">Date</label>
    <div class="col-2">
        <input class="form-control" type="text" name="Date" placeholder="Date" value="<?=$grade->Date??''?>">
    </div>
</div>

<div class="row mb-3">
    <label class="col-form-label col-2"></label>
    <div class="col-2">
        <button class="btn btn-success" type="submit" name="submit"><i class="fa-solid fa-check me-2"></i>Save</button>
        <a class="btn btn-danger" href="grades"><i class="fa-solid fa-x me-2"></i>Cancel</a>
    </div>
</div>

<?=form_close() ?>

<?=$this->include('_partials/footer')?>