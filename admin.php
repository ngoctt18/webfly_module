<?php only_admin_access(); ?>

<div class="mw-module-admin-wrap">
    <?php if (isset($params['backend'])): ?>
        <module type="admin/modules/info" history_back="true"/>
    <?php endif; ?>

    <div class="container">
        <h3>This is test module</h3>
    </div>
</div>
