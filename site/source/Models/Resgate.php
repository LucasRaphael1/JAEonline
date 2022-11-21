<?php

namespace Source\Models;

require_once __DIR__ . "/../../source/Core/Model.php";

use Source\Core\Model;

/**
 * FSPHP | Class User Active Record Pattern
 *
 * @package Source\Models
 */
class Resgate extends Model
{
    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct("resgates", ["id"], []);
    }

    /**
     * @param int $id_aluno
     * @return self
     */
    public function bootstrap(
        int $id_aluno,
        string $plan
    ): self
    {
        $this->id_aluno = $id_aluno;
        $this->plan = $plan;
        return $this;
    }
}