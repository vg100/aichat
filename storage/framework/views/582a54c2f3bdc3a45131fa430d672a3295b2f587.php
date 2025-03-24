<?php $__env->startComponent('mail::message'); ?>
# New Support Ticket Create.

Dear <?php echo e($admin_name); ?>,

	User New Support Ticket Created. Below are the details for your Support Ticket.

<?php $__env->startComponent('mail::table'); ?>

<table>
	<tr><td>Ticket Id: </td><td><?php echo e($support_ticket_data->ticket_id); ?></td></tr>
	<tr><td>Status: </td><td><?php echo e($support_ticket_data->status); ?></td></tr>
	<tr><td>Subject: </td><td><?php echo e($support_ticket_data->subject); ?></td></tr>
	<tr><td>Category: </td><td><?php echo e($support_ticket_data->category); ?></td></tr>
	<tr><td>Priority: </td><td><?php echo e($support_ticket_data->priority); ?></td></tr>
	<tr><td>User: </td><td><?php echo e($support_ticket_data->user->name); ?></td></tr>
	<tr><td>Message: </td><td><?php echo e($message->message); ?></td></tr>
</table>

<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home4/khristian/copy-ai.surveysideadmin.com/resources/views/emails/support_ticket.blade.php ENDPATH**/ ?>