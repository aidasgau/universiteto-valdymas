
<?=$this->include('_partials/header')?>

<h1 class="my-3"><i class="fa-solid fa-clipboard-list me-2"></i><?=$title?></h1>

<div class="my-3 d-flex justify-content-between">
    <div>
        <a class="btn btn-primary" href="students/add/"><i class="fa-solid fa-plus me-2"></i>Add</a>
    </div>
    <div></div>
</div>

<table class="table">
    <thead class="table-secondary">
        <tr>
            <th>StudentID</th>
            <th>FirstName</th>
            <th class="text-end">LastName</th>
            <th class="text-end">Email</th>
            <th class="text-end">DateOfBirth</th>
            <th class="text-end">Address</th>
            <th class="text-end">Program</th>
            <th class="text-end">Year</th>
            <th class="text-end">GPA</th>
            <th>                    </th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($students as $student): ?>
        <tr>
            <td><?=$student->StudentID?></td>
            <td><?=$student->FirstName?></td>
            <td class="text-end"><?=$student->LastName?></td>
            <td class="text-end"><?=$student->Email?></td>
            <td class="text-end"><?=$student->DateOfBirth?></td>
            <td class="text-end"><?=$student->Address?></td>
            <td class="text-end"><?=$student->Program?></td>
            <td class="text-end"><?=$student->Year?></td>
            <td class="text-end"><?=$student->GPA?></td>
            <td class="text-end">
                <a href="students/edit/<?=$student->StudentID?>" class="text-warning"><i class="fa-2x ms-2 fa-solid fa-pen-to-square"></i></a>
                <a href="students/delete/<?=$student->StudentID?>" class="text-danger" onclick="return confirm('Are you sure you want to delete?')"><i class="fa-2x ms-2 fa-solid fa-trash"></i></a>
            </td>
        </tr>
<?php endforeach ?>
    </tbody>
    <tfoot class="table-secondary">
        <tr>
            <th colspan="10">Total: <?=count($students)?></th>
        </tr>
    </tfoot>
</table>


<?=$this->include('_partials/footer')?>