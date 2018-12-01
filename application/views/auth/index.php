<h1><?php echo lang('table_users');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<table class="table table-hover table-striped table-condensed">
	<thead>
	<tr>
		<th><?php echo lang('name');?></th>
		<th><?php echo lang('surname');?></th>
		<th><?php echo lang('index_email_th');?></th>
		<th><?php echo lang('phone');?></th>
		<th><?php echo lang('groups');?></th>
		<th><?php echo lang('status');?></th>
		<th><?php echo lang('actions');?></th>
	</tr>
	</thead
	<?php foreach ($users as $user):?>
		<tr>
            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
			<td><?php echo htmlspecialchars($user->phone,ENT_QUOTES,'UTF-8');?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                <?php endforeach?>
			</td>
			<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
			<td><?php echo anchor("auth/edit_user/".$user->id, lang("edit"));?></td>
		</tr>
	<?php endforeach;?>
</table>

<p><?php echo anchor('auth/create_user', lang('add_user'), 'class="btn btn-success"');?> | <?php echo anchor('auth/create_group', lang('add_groups'), 'class="btn btn-success"');?></p>