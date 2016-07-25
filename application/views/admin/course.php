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