
<?=$this->include('_partials/header')?>

<h1 class="my-3"><i class="fa-solid fa-clipboard-list me-2"></i><?=$title?></h1>

<div class="my-3 d-flex justify-content-between">
    <div>
        <a class="btn btn-primary" href="instructors/add/"><i class="fa-solid fa-plus me-2"></i>Add</a>
    </div>
    <div></div>
</div>

<table class="table">
    <thead class="table-secondary">
        <tr>
            <th>InstructorID</th>
            <th>FirstName</th>
            <th class="text-end">LastName</th>
            <th class="text-end">Email</th>
            <th class="text-end">Faculty</th>
            <th>                        </th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($instructors as $instructor): ?>
        <tr>
            <td><?=$instructor->InstructorID?></td>
            <td><?=$instructor->FirstName?></td>
            <td class="text-end"><?=$instructor->LastName?></td>
            <td class="text-end"><?=$instructor->Email?></td>
            <td class="text-end"><?=$instructor->Faculty?></td>
            <td class="text-end">
                <a href="instructors/edit/<?=$instructor->InstructorID?>" class="text-warning"><i class="fa-2x ms-2 fa-solid fa-pen-to-square"></i></a>
                <a href="instructors/delete/<?=$instructor->InstructorID?>" class="text-danger" onclick="return confirm('Are you sure you want to delete?')"><i class="fa-2x ms-2 fa-solid fa-trash"></i></a>
            </td>
        </tr>
<?php endforeach ?>
    </tbody>
    <tfoot class="table-secondary">
        <tr>
            <th colspan="6">Total: <?=count($instructors)?></th>
        </tr>
    </tfoot>
</table>


<?=$this->include('_partials/footer')?>