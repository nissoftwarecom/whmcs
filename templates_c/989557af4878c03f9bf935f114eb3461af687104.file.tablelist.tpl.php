<?php /* Smarty version Smarty-3.1.21, created on 2018-05-05 19:11:53
         compiled from "C:\wamp\www\whmcs\templates\maxhost-alt-v7\includes\tablelist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:280005aede5d92ef2d0-58003788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '989557af4878c03f9bf935f114eb3461af687104' => 
    array (
      0 => 'C:\\wamp\\www\\whmcs\\templates\\maxhost-alt-v7\\includes\\tablelist.tpl',
      1 => 1524842802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280005aede5d92ef2d0-58003788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_PATH_CSS' => 0,
    'BASE_PATH_JS' => 0,
    'filterColumn' => 0,
    'tableName' => 0,
    'dontControlActiveClass' => 0,
    'noPagination' => 0,
    'noInfo' => 0,
    'noSearch' => 0,
    'LANG' => 0,
    'startOrderCol' => 0,
    'noSortColumns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5aede5d99d41c6_17372739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aede5d99d41c6_17372739')) {function content_5aede5d99d41c6_17372739($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/dataTables.responsive.css">
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/dataTables.responsive.min.js"><?php echo '</script'; ?>
>

<?php if (isset($_smarty_tpl->tpl_vars['filterColumn']->value)&&$_smarty_tpl->tpl_vars['filterColumn']->value) {?>
<?php echo '<script'; ?>
 type="text/javascript">

if (typeof(buildFilterRegex) !== "function") {
    function buildFilterRegex(filterValue) {

        if (filterValue.indexOf('&') === -1) {
            return '[~>]\\s*' + jQuery.fn.dataTable.util.escapeRegex(filterValue) + '\\s*[<~]';
        } else {
            var tempDiv = document.createElement('div');
            tempDiv.innerHTML = filterValue;

            return '\\s*' + jQuery.fn.dataTable.util.escapeRegex(tempDiv.innerText) + '\\s*';
        }
    }
}

jQuery(".view-filter-btns a").click(function(e) {
    var filterValue = jQuery(this).find("span").not('.badge').html().trim();
    var dataTable = jQuery('#table<?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
').DataTable();
    var filterValueRegex;
    if (jQuery(this).hasClass('active')) {
        <?php if (!isset($_smarty_tpl->tpl_vars['dontControlActiveClass']->value)||!$_smarty_tpl->tpl_vars['dontControlActiveClass']->value) {?>
            jQuery(this).removeClass('active');
            jQuery(this).find("i.fa.fa-dot-circle-o").removeClass('fa-dot-circle-o').addClass('fa-circle-o');
        <?php }?>
        dataTable.column(<?php echo $_smarty_tpl->tpl_vars['filterColumn']->value;?>
).search('').draw();
    } else {
        <?php if (!isset($_smarty_tpl->tpl_vars['dontControlActiveClass']->value)||!$_smarty_tpl->tpl_vars['dontControlActiveClass']->value) {?>
            jQuery('.view-filter-btns .list-group-item').removeClass('active');
            jQuery('i.fa.fa-dot-circle-o').removeClass('fa-dot-circle-o').addClass('fa-circle-o');
            jQuery(this).addClass('active');
            jQuery(this).find(jQuery("i.fa.fa-circle-o")).removeClass('fa-circle-o').addClass('fa-dot-circle-o');
        <?php }?>
        filterValueRegex = buildFilterRegex(filterValue);
        dataTable.column(<?php echo $_smarty_tpl->tpl_vars['filterColumn']->value;?>
)
            .search(filterValueRegex, true, false, false)
            .draw();
    }

    // Prevent jumping to the top of the page
    // when no matching tag is found.
    e.preventDefault();
});
<?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
var alreadyReady = false; // The ready function is being called twice on page load.
jQuery(document).ready( function () {
    var table = jQuery("#table<?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
").DataTable({
        "dom": '<"listtable"fit>pl',<?php if (isset($_smarty_tpl->tpl_vars['noPagination']->value)&&$_smarty_tpl->tpl_vars['noPagination']->value) {?>
        "paging": false,<?php }
if (isset($_smarty_tpl->tpl_vars['noInfo']->value)&&$_smarty_tpl->tpl_vars['noInfo']->value) {?>
        "info": false,<?php }
if (isset($_smarty_tpl->tpl_vars['noSearch']->value)&&$_smarty_tpl->tpl_vars['noSearch']->value) {?>
        "filter": false,<?php }?>
        "responsive": true,
        "oLanguage": {
            "sEmptyTable":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['norecordsfound'];?>
",
            "sInfo":           "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableshowing'];?>
",
            "sInfoEmpty":      "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableempty'];?>
",
            "sInfoFiltered":   "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablefiltered'];?>
",
            "sInfoPostFix":    "",
            "sInfoThousands":  ",",
            "sLengthMenu":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablelength'];?>
",
            "sLoadingRecords": "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableloading'];?>
",
            "sProcessing":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableprocessing'];?>
",
            "sSearch":         "",
            "sZeroRecords":    "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['norecordsfound'];?>
",
            "oPaginate": {
                "sFirst":    "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepagesfirst'];?>
",
                "sLast":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepageslast'];?>
",
                "sNext":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepagesnext'];?>
",
                "sPrevious": "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepagesprevious'];?>
"
            }
        },
        "pageLength": 10,
        "order": [
            [ <?php if (isset($_smarty_tpl->tpl_vars['startOrderCol']->value)&&$_smarty_tpl->tpl_vars['startOrderCol']->value) {
echo $_smarty_tpl->tpl_vars['startOrderCol']->value;
} else { ?>0<?php }?>, "asc" ]
        ],
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableviewall'];?>
"]
        ],
        "aoColumnDefs": [
            {
                "bSortable": false,
                "aTargets": [ <?php if (isset($_smarty_tpl->tpl_vars['noSortColumns']->value)&&$_smarty_tpl->tpl_vars['noSortColumns']->value!=='') {
echo $_smarty_tpl->tpl_vars['noSortColumns']->value;
}?> ]
            },
            {
                "sType": "string",
                "aTargets": [ <?php if (isset($_smarty_tpl->tpl_vars['filterColumn']->value)&&$_smarty_tpl->tpl_vars['filterColumn']->value) {
echo $_smarty_tpl->tpl_vars['filterColumn']->value;
}?> ]
            }
        ],
        "stateSave": true
    });

    <?php if (isset($_smarty_tpl->tpl_vars['filterColumn']->value)&&$_smarty_tpl->tpl_vars['filterColumn']->value) {?>
    // highlight remembered filter on page re-load
    var rememberedFilterTerm = table.state().columns[<?php echo $_smarty_tpl->tpl_vars['filterColumn']->value;?>
].search.search;
    if (rememberedFilterTerm && !alreadyReady) {
        // This should only run on the first "ready" event.
        jQuery(".view-filter-btns a span").each(function(index) {
            if (buildFilterRegex(jQuery(this).text().trim()) == rememberedFilterTerm) {
                jQuery(this).parent('a').addClass('active');
                jQuery(this).parent('a').find('i').removeClass('fa-circle-o').addClass('fa-dot-circle-o');
            }
        });
    }
    <?php }?>
alreadyReady = true;
} );
<?php echo '</script'; ?>
><?php }} ?>
