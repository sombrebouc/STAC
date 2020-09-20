<div class="container-fluid">
  <table>
    <tbody>
      <?php 
                    if (count($listUsers) > 0){ 
                        foreach($listUsers as $number => $userId){
                ?>
      <tr>
        <td> <?= $userId->firstname; ?></td>
        <td> <?= $userId->lastname; ?></td>
      </tr>
      <?
                        }
                    }
                     ?>
    </tbody>
  </table>
</div>