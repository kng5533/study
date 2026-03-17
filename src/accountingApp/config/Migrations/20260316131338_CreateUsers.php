<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateUsers extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/5/en/migrations.html#the-change-method
     *
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('users');
        $table->addColumn('login_id', 'string', ['limit' => 30, 'null' => false])
              ->addColumn('password', 'string', ['limit' => 100, 'null' => false])
              ->addTimestamps()
              ->addIndex('login_id', ['unique' => true])
              ->create();
    }
}
