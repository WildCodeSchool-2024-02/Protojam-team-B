<?php

namespace App\Model;

use App\Model\AbstractManager;
use PDO;
use Symfony\Component\HttpClient\HttpClient;

class SummaryManager extends AbstractManager
{
    public const TABLE = 'summary';

    
    public function getAllSummaries()
    {
        $query = "SELECT * FROM " . static::TABLE . " LEFT JOIN tree AS t ON t.id=summary.tree_id";
        $statement = $this->pdo->prepare($query);
        // $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll();
    }
}
