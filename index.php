<?php
// logique liée aux données
include_once('functions.php');
$tasks = getTasks();

// logique liée à l'affichage / à la vue
?>
<?php include('_head.php');?>

<section class="container">

  <h4>Liste complète</h4>
  <hr/>

  <table class="striped">
      <thead>
          <tr>
              <th/>
              <th>Nom</th>
              <th>Date Limite</th>
              <th>Type</th>
              <th>Statut</th>
              <th>Modifiée le</th>
              <th/>
          </tr>
      </thead>
      <tbody>
          <?php foreach($tasks as $key => $task):?>
              <tr>
                  <td><?= $key;?>
                  <td class="myTitle">
                    <?php echo $task['name'];?>
                  </td>
                  <td><?= $task['limit'];?></td>
                  <td><?php echo $task['type_id'];?></td>
                  <td><?php echo $task['step_id'];?></td>
                  <td><?php echo $task['updatedby'];?></td>
                  <td></td>
              </tr>
        <?php endforeach;?>
      </tbody>
  </table>
</section>
<?php include('_footer.php');?>
