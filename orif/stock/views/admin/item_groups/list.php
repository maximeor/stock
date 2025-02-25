<div class="container" id="content">
  <div class="row">
    <a href="<?= base_url(); ?>admin/new_item_group/" class="btn btn-success"><?= lang('btn_new'); ?></a>
  </div>
  
  <div class="row">
    <h3>
      <a href="#" onclick="loadPage('admin/view_users/')" class="tab_unselected"><?= lang('admin_tab_users'); ?></a>
      <a href="#" onclick="loadPage('admin/view_tags/')" class="tab_unselected"><?= lang('admin_tab_tags'); ?></a>
      <a href="#" onclick="loadPage('admin/view_stocking_places/')" class="tab_unselected"><?= lang('admin_tab_stocking_places'); ?></a>
      <a href="#" onclick="loadPage('admin/view_suppliers/')" class="tab_unselected"><?= lang('admin_tab_suppliers'); ?></a>
      <a href="#" onclick="loadPage('admin/view_item_groups/')" class="tab_selected"><?= lang('admin_tab_item_groups'); ?></a>
    </h3>
  </div>
  
  <div class="row">
    <table class="table table-striped table-hover">
      <tbody>
        <?php foreach ($item_groups as $item_group) { ?>
        <tr>
          <td>
            <a href="<?= base_url(); ?>admin/modify_item_group/<?= $item_group->item_group_id; ?>"><?= html_escape($item_group->name); ?></a>
            <span class=".text-center"><?= html_escape($item_group->short_name); ?></span>
            <a href="<?= base_url(); ?>admin/delete_item_group/<?= $item_group->item_group_id; ?>" class="close"
              title="<?= lang('admin_delete_item_group');?>">×</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
<script type="text/javascript">
    function loadPage(endOfPageString) {
        if($('#content').size == 0) {
            return;
        }
        if(endOfPageString == undefined || endOfPageString == null) {
            endOfPageString = "";
        }
        var newUrlForPart = ('<?= base_url(); ?>' + endOfPageString);
        $('#content').load(newUrlForPart + ' #content');
    }
</script>