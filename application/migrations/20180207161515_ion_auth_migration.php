<?php


use Phinx\Migration\AbstractMigration;

class IonAuthMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('groups')
            ->addColumn('name', 'string', ['limit' => 20])
            ->addColumn('description', 'string', ['limit' => 100])
            ->create();

        $this->table('users')
            ->addColumn('ip_address', 'string', ['limit' => 16])
            ->addColumn('username', 'string', ['limit' => 100])
            ->addColumn('password', 'string', ['limit' => 80])
            ->addColumn('salt', 'string', ['limit' => 40])
            ->addColumn('email', 'string', ['limit' => 100])
            ->addColumn('activation_code', 'string', ['limit' => 40])
            ->addColumn('forgotten_password_code', 'string', ['limit' => 40, 'null' => true])
            ->addColumn('forgotten_password_time', 'integer', ['limit' => 11])
            ->addColumn('remember_code', 'string', ['limit' => 40])
            ->addColumn('created_on', 'integer', ['limit' => 11])
            ->addColumn('last_login', 'integer', ['limit' => 11])
            ->addColumn('active', 'boolean')
            ->addColumn('first_name', 'string', ['limit' => 50])
            ->addColumn('last_name', 'string', ['limit' => 50])
            ->addColumn('company', 'string', ['limit' => 100])
            ->addColumn('phone', 'string', ['limit' => 20])
            ->create();

        $this->table('users_groups')
            ->addColumn('user_id', 'integer', ['limit' => 8])
            ->addColumn('group_id', 'integer', ['limit' => 8])
            ->create();

        $this->table('login_attempts')
            ->addColumn('ip_address', 'string', ['limit' => 16])
            ->addColumn('login', 'string', ['limit' => 100])
            ->addColumn('time', 'integer', ['limit' => 11])
            ->create();
    }
}
