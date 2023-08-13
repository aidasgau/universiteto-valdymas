
<?=$this->include('_partials/header')?>

<h1 class="my-3"><i class="fa-solid fa-clipboard-list me-2"></i><?=$title?></h1>

<div class="my-3 d-flex justify-content-between">
    <div>
        <a class="btn btn-primary" href="grades/add/"><i class="fa-solid fa-plus me-2"></i>Add</a>
    </div>
    <div></div>
</div>

<table class="table">
    <thead class="table-secondary">
        <tr>
            <th>EnrollmentID</th>
            <th>Grade</th>
            <th class="text-end">Date</th>
            <th>                    </th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($grades as $grade): ?>
        <tr>
            <td><?=$grade->EnrollmentID?></td>
            <td><?=$grade->Grade?></td>
            <td class="text-end"><?=$grade->Date?></td>
            <td class="text-end">
                <a href="grades/edit/<?=$grade->EnrollmentID?>" class="text-warning"><i class="fa-2x ms-2 fa-solid fa-pen-to-square"></i></a>
                <a href="grades/delete/<?=$grade->EnrollmentID?>" class="text-danger" onclick="return confirm('Are you sure you want to delete?')"><i class="fa-2x ms-2 fa-solid fa-trash"></i></a>
            </td>
        </tr>
<?php endforeach ?>
    </tbody>
    <tfoot class="table-secondary">
        <tr>
            <th colspan="5">Total: <?=count($grades)?></th>
        </tr>
    </tfoot>
</table>


<?=$this->include('_partials/footer')?>