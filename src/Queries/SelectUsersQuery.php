<?php

    namespace Lunaris\Pdo\Queries;

    use Lunaris\Pdo\Query;

    class SelectUsersQuery extends Query {
        public function sql() {
            return <<<SQL
                SELECT *
                FROM users
                ORDER BY id DESC
            SQL;
        }

        public function findByEmail($email) {
            if(count($this->data) > 0) {
                foreach($this->data as $data) {
                    if($data['email'] === $email) {
                        return $data;
                    }
                }
            }
            return false;
        }
    }