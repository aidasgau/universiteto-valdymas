
<?=$this->include('_partials/header')?>

<h1 class="my-3"><i class="fa-solid fa-clipboard-list me-2"></i><?=$title?></h1>

<div class="my-3 d-flex justify-content-between">
    <div>
        <a class="btn btn-primary" href="enrollments/add/"><i class="fa-solid fa-plus me-2"></i>Add</a>
    </div>
    <div></div>
</div>

<table class="table">
    <thead class="table-secondary">
        <tr>
            <th>EnrollmentID</th>
            <th>StudentID</th>
            <th class="text-end">CourseID</th>
            <th class="text-end">Status</th>
            <th class="text-end">Date</th>
            <th>                    </th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($enrollments as $enrollment): ?>
        <tr>
            <td><?=$enrollment->EnrollmentID?></td>
            <td><?=$enrollment->StudentID?></td>
            <td class="text-end"><?=$enrollment->CourseID?></td>
            <td class="text-end"><?=$enrollment->Status?></td>
            <td class="text-end"><?=$enrollment->Date?></td>
            <td class="text-end">
                <a href="enrollments/edit/<?=$enrollment->EnrollmentID?>" class="text-warning"><i class="fa-2x ms-2 fa-solid fa-pen-to-square"></i></a>
                <a href="enrollments/delete/<?=$enrollment->EnrollmentID?>" class="text-danger" onclick="return confirm('Are you sure you want to delete?')"><i class="fa-2x ms-2 fa-solid fa-trash"></i></a>
            </td>
        </tr>
<?php endforeach ?>
    </tbody>
    <tfoot class="table-secondary">
        <tr>
            <th colspan="6">Total: <?=count($enrollments)?></th>
        </tr>
    </tfoot>
</table>


<?=$this->include('_partials/footer')?>