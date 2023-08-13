
<?=$this->include('_partials/header')?>

<h1 class="my-3"><i class="fa-solid fa-clipboard-list me-2"></i><?=$title?></h1>

<div class="my-3 d-flex justify-content-between">
    <div>
        <a class="btn btn-primary" href="courses/add/"><i class="fa-solid fa-plus me-2"></i>Add</a>
    </div>
    <div></div>
</div>

<table class="table">
    <thead class="table-secondary">
        <tr>
            <th>CourseID</th>
            <th>CourseName</th>
            <th class="text-end">InstructorID</th>
            <th class="text-end">Faculty</th>
            <th class="text-end">StartDate</th>
            <th class="text-end">EndDate</th>
            <th class="text-end">Credits</th>
            <th>                        </th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($courses as $course): ?>
        <tr>
            <td><?=$course->CourseID?></td>
            <td><?=$course->CourseName?></td>
            <td class="text-end"><?=$course->InstructorID?></td>
            <td class="text-end"><?=$course->Faculty?></td>
            <td class="text-end"><?=$course->StartDate?></td>
            <td class="text-end"><?=$course->EndDate?></td>
            <td class="text-end"><?=$course->Credits?></td>
            <td class="text-end">
                <a href="courses/edit/<?=$course->CourseID?>" class="text-warning"><i class="fa-2x ms-2 fa-solid fa-pen-to-square"></i></a>
                <a href="courses/delete/<?=$course->CourseID?>" class="text-danger" onclick="return confirm('Are you sure you want to delete?')"><i class="fa-2x ms-2 fa-solid fa-trash"></i></a>
            </td>
        </tr>
<?php endforeach ?>
    </tbody>
    <tfoot class="table-secondary">
        <tr>
            <th colspan="8">Total: <?=count($courses)?></th>
        </tr>
    </tfoot>
</table>


<?=$this->include('_partials/footer')?>