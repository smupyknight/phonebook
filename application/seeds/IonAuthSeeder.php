<?php


use Phinx\Seed\AbstractSeed;

class IonAuthSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'name' => 'admin',
                'description' => 'Administrator'
            ],
            [
                'name' => 'members',
                'description' => 'General User'
            ]
        ];
        $this->insert('groups', $data);

        $data = [
            'ip_address' => '127.0.0.1',
            'username' => 'administrator',
            'password' => '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36',
            'salt' => '',
            'email' => 'admin@admin.com',
            'activation_code' => '',
            'forgotten_password_code' => NULL,
            'created_on' => '1268889823',
            'last_login' => '1268889823',
            'active' => '1',
            'first_name' => 'Admin',
            'last_name' => 'istrator',
            'company' => 'ADMIN',
            'phone' => '1234567890'
        ];
        $this->insert('users', $data);

        $data = [
            [
                'user_id' => '1',
                'group_id' => '1'
            ],
            [
                'user_id' => '1',
                'group_id' => '2'
            ]
        ];
        $this->insert('users_groups', $data);
    }
}
