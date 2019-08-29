

    
    
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kegiatan</th>
      <th scope="col">Waktu</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      $no = 1;
      foreach ($acara as $row) {
          # code...
        ?>

            <tr>
                <th scope="row">   <?php echo $no++ ?>   </th>
                <td><?php echo $row->kegiatan; ?></td>
                <td><?php echo $row->waktu; ?></td>
                <!-- <td><?php echo $row->image; ?></td> -->
                <td>
                    <img src="<?php echo $row->image; ?>" alt="">
                </td>
                <td>
                    <button>jbhg</button>
                </td>
            </tr>

        <?php 

      }
      ?>
    
   
  </tbody>
</table>