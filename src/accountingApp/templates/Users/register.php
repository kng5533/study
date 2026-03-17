<h1>ユーザー登録</h1>

<?= $this->Form->create($user) ?>
<fieldset>
    <legend>アカウント情報</legend>
    <?= $this->Form->control('login_id', ['label' => 'ユーザーID', 'type' => 'text']) ?>
    <?= $this->Form->control('password', ['label' => 'パスワード']) ?>
</fieldset>
<?= $this->Form->button(__('登録')) ?>
<?= $this->Form->end() ?>
