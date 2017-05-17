<?php 

class QueryBuilder {

	protected $pdo;

    // Build the PDO instance
	public function __construct($pdo) 
	{
		$this->pdo = $pdo;
	}

    // Get all Data
	public function getAll($table, $intoClass)
	{
		$statement = $this->pdo->prepare("select * from ($table)");

		$statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
	}

	//Get a single database record
	public function get($table, $intoClass, $test) {
	    $statement = $this->pdo->prepare("select $test from ($table)");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    //Insert a record
    public function insert($table, $column, $values)
    {
        $statement = $this->pdo->prepare("INSERT INTO $table($column) VALUES ($values)");
        $statement->execute();
    }

    // Update a record
    public function update($table, $column, $values, $id)
    {
        $statement = $this->pdo->prepare("UPDATE $table SET $column = '$values' WHERE id = '$id'");
        $statement->execute();
    }

}