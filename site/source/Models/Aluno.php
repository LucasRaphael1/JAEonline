<?php

namespace Source\Models;

require_once __DIR__ . "/../../source/Core/Model.php";

use Source\Core\Model;

/**
 * FSPHP | Class User Active Record Pattern
 *
 * @package Source\Models
 */
class Aluno extends Model
{
    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct("alunos", ["id"], []);
    }

    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $password
     * @param string|null $document
     * @return self
     */
    public function bootstrap(
        string $firstName,
        string $lastName,
        string $email,
        string $password,
        string $document = null
    ): self
    {
        $this->first_name = $firstName;
        $this->last_name = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->document = $document;
        return $this;
    }
}