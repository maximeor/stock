<div class="container" id="content">
  <div class="row">
    <h3 class="xs-right">
      <a href="#" onclick="loadPage('admin/view_users/')" class="tab_unselected"><?php echo html_escape($this->lang->line('admin_tab_users')); ?></a>
      <a href="#" onclick="loadPage('admin/view_tags/')" class="tab_unselected"><?php echo html_escape($this->lang->line('admin_tab_tags')); ?></a>
      <a href="#" onclick="loadPage('admin/view_stocking_places/')" class="tab_unselected"><?php echo html_escape($this->lang->line('admin_tab_stocking_places')); ?></a>
      <a href="#" onclick="loadPage('admin/view_suppliers/')" class="tab_unselected"><?php echo html_escape($this->lang->line('admin_tab_suppliers')); ?></a>
      <a href="#" onclick="loadPage('admin/view_item_groups/')" class="tab_selected"><?php echo html_escape($this->lang->line('admin_tab_item_groups')); ?></a>
      <a href="#" onclick="loadPage('admin/')" class="tab_unselected"><?php echo html_escape($this->lang->line('admin_tab_admin')); ?></a>
    </h3>
  </div>
  <!-- First something more simple <span onclick="minilist()">Utilisateurs</span>, Administration -->
  <div class="row">
      <table class="table table-striped table-hover">
        <tbody>
          <?php  
          foreach ($item_groups as $item_group) { 
          ?>
          <tr>
            <td>
              <a href="<?php echo base_url(); ?>admin/modify_item_group/<?php echo $item_group->item_group_id; ?>"><?php echo html_escape($item_group->name); ?></a>
              <span class=".text-center"><?php echo html_escape($item_group->short_name); ?></span>
              <a href="<?php echo base_url(); ?>admin/delete_item_group/<?php echo $item_group->item_group_id; ?>" class="close"
                title="<?php echo $this->lang->line('admin_delete_item_group');?>">×</a>
            </td>
          </tr>
          <?php
          } 
          ?>
        </tbody>
      </table><a href="<?php echo base_url(); ?>admin/new_item_group/" class="btn btn-primary">Nouveau…</a>
  </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/geoline.js">
</script>
<style type="text/css">
  .tab_unselected {
    display:block;
    float:left;
    padding:10px 15px;
    background:#0000bb;
    border:1px solid #777;
    border-bottom:none;
    border-radius:4px 4px 0 0;
    margin-right:1px;
    color:#fff;
    text-decoration:none;
  }
  .tab_unselected:hover {
    color: #fff;
  }
  .tab_selected {
    display:block;
    float:left;
    padding:10px 15px;
    background:#00bbbb;
    border:1px solid #777;
    border-bottom:none;
    border-radius:4px 4px 0 0;
    margin-right:1px;
    color:#fff;
    text-decoration:none;
  }
  .tab_selected:hover {
    color: #fff;
  }
</style>