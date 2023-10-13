<?php /* Smarty version 3.1.27, created on 2023-10-13 12:18:13
         compiled from "/home/multistream6/domains/capicoin.online/public_html/tmpl/account_main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:62978925365293585dce704_76085066%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4a5566560695ebdafa31e6767cb379a6d923cc6' => 
    array (
      0 => '/home/multistream6/domains/capicoin.online/public_html/tmpl/account_main.tpl',
      1 => 1689470049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62978925365293585dce704_76085066',
  'variables' => 
  array (
    'currency_sign' => 0,
    'ab_formated' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65293585dfc580_90616002',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65293585dfc580_90616002')) {
function content_65293585dfc580_90616002 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/capicoin.online/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '62978925365293585dce704_76085066';
$_smarty_tpl->tpl_vars['pageName'] = new Smarty_Variable("User Dashboard", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<h4 class="page-title">Dashboard</h4>
<div class="row">
	<div class="col-md-4">
		<div class="card card-stats card-warning">
			<div class="card-body ">
				<div class="row" style="min-height:120px !important;">
					<div class="col-5">
						<div class="icon-big text-center">
							<i class="la la-apple"></i>
						</div>
					</div>
					<div class="col-7 d-flex align-items-center" style="min-height:60px !important;">
						<div class="numbers" style="min-height:60px !important;">
							<p class="card-category">Account Balance</p>
							<h4 class="card-title"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
</b></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card card-stats card-success">
			<div class="card-body ">
				<div class="row" style="min-height:120px !important;">
					<div class="col-5">
						<div class="icon-big text-center">
							<i class="la la-bar-chart"></i>
						</div>
					</div>
					<div class="col-7 d-flex align-items-center">
						<div class="numbers">
							<p class="card-category">Total Deposit</p>
							<h4 class="card-title"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['deposit']);?>
</b></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card card-stats card-danger">
			<div class="card-body">
				<div class="row" style="min-height:120px !important;">
					<div class="col-5">
						<div class="icon-big text-center">
							<i class="la la-newspaper-o"></i>
						</div>
					</div>
					<div class="col-7 d-flex align-items-center">
						<div class="numbers">
							<p class="card-category">Total Earned</p>
							<h4 class="card-title"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['earning']);?>
</b></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<div class="row">
	<div class="col-md-4">
		<div class="card card-stats card-primary">
			<div class="card-body ">
				<div class="row">
					<div class="col-5">
						<div class="icon-big text-center">
							<i class="la la-check-circle"></i>
						</div>
					</div>
					<div class="col-7 d-flex align-items-center">
						<div class="numbers">
							<p class="card-category">Active Deposit</p>
							<h4 class="card-title"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['active_deposit']);?>
</b></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card card-stats card-primary">
			<div class="card-body ">
				<div class="row">
					<div class="col-5">
						<div class="icon-big text-center">
							<i class="la la-check-circle"></i>
						</div>
					</div>
					<div class="col-7 d-flex align-items-center">
						<div class="numbers">
							<p class="card-category">Total Withdrawn</p>
							<h4 class="card-title"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdrawal']);?>
</b></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-stats card-primary">
			<div class="card-body ">
				<div class="row">
					<div class="col-5">
						<div class="icon-big text-center">
							<i class="la la-check-circle"></i>
						</div>
					</div>
					<div class="col-7 d-flex align-items-center">
						<div class="numbers">
							<p class="card-category">Pending Withdrawn</p>
							<h4 class="card-title"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending']);?>
</b></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>

<div class="row row-card-no-pd">
	<div class="col-md-4">
		<div class="card">
			<div class="card-body">
				<p class="fw-bold mt-1">My Balance</p>
				<h4><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
</b></h4>
				<a href="/?a=deposit" class="btn btn-primary btn-full text-left mt-3 mb-3"><i class="la la-plus"></i> Buy Plan</a>
			</div>
			<div class="card-footer">
				<ul class="nav">
					<li class="nav-item"><a class="btn btn-default btn-link" href="?a=earnings"><i class="la la-history"></i> History</a></li>
					<li class="nav-item ml-auto"><a class="btn btn-default btn-link" href="/?a=earnings"><i class="la la-refresh"></i> Refresh</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<div class="card">
			<div class="card-body">
				<div class="progress-card">
					<div class="d-flex justify-content-between mb-1">
						<span class="text-muted">Profit</span>
						<span class="text-muted fw-bold"> 89%</span>
					</div>
					<div class="progress mb-2" style="height: 7px;">
						<div class="progress-bar bg-success" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="89%"></div>
					</div>
				</div>
				<div class="progress-card">
					<div class="d-flex justify-content-between mb-1">
						<span class="text-muted">Orders</span>
						<span class="text-muted fw-bold"> 576</span>
					</div>
					<div class="progress mb-2" style="height: 7px;">
						<div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="65%"></div>
					</div>
				</div>
				<div class="progress-card">
					<div class="d-flex justify-content-between mb-1">
						<span class="text-muted">Tasks Complete</span>
						<span class="text-muted fw-bold"> 70%</span>
					</div>
					<div class="progress mb-2" style="height: 7px;">
						<div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="70%"></div>
					</div>
				</div>
				<div class="progress-card">
					<div class="d-flex justify-content-between mb-1">
						<span class="text-muted">Open Rate</span>
						<span class="text-muted fw-bold"> 70%</span>
					</div>
					<div class="progress mb-2" style="height: 7px;">
						<div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="70%"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card card-stats">
			<div class="card-body">
				<p class="fw-bold mt-1">Statistic</p>
				<div class="row">
					<div class="col-5">
						<div class="icon-big text-center icon-warning">
							<i class="la la-pie-chart text-warning"></i>
						</div>
					</div>
					<div class="col-7 d-flex align-items-center">
						<div class="numbers">
							<p class="card-category">Number</p>
							<h4 class="card-title">150BTC</h4>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-5">
						<div class="icon-big text-center">
							<i class="la la-heart-o text-primary"></i>
						</div>
					</div>
					<div class="col-7 d-flex align-items-center">
						<div class="numbers">
							<p class="card-category">Followers</p>
							<h4 class="card-title">+45K</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


				<?php }
}
?>