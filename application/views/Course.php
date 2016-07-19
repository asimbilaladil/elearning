<!-- content -->
<div class="main-content">
  <div class="row">
    <!-- register -->
    <div class="eightcol column">
      <h1>Register</h1>
      <form class="ajax-form formatted-form" action="<?php echo site_url('Course/save') ?>" method="POST">
        <div class="message"></div>
        <div class="sixcol column">
          <div class="field-wrapper">
            <input type="text" name="name" placeholder="Course Name" required>
          </div>
        </div>
        <div class="sixcol column">
          <div class="field-wrapper">
            <textarea name="description" rows="6" placeholder="Description">
            </textarea>
          </div>
        </div>
        <div class="sixcol column">
          <div class="field-wrapper">
            <input type="submit" name="create" class="button submit-button" />
          </div>
        </div>
    </div>
    </form>
  </div>
  <table style="width:100%" class=".table-striped">
    <tr>
      <th>Name</th>
      <th>Action</th>
    </tr>
    <?php
      foreach ($data['courses'] as $course) {
      
        echo '<tr>
          <td> '. $course->name .' </td>
          <td> <a href=""> VIEW </a></td>
        </tr>';
      
      }
      ?>
  </table>
</div>
</div>
<!-- /content -->
