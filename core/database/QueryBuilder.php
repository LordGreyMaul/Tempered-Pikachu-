<?php 

class QueryBuilder {

	protected $pdo;


	public function __construct($pdo) 
	{
		$this->pdo = $pdo;
	}


	public function getAll($table, $intoClass)
	{
		$statement = $this->pdo->prepare("select * from ($table)");

		$statement->execute();


		return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
	}

	public function get($table, $intoClass, $test) {
	    $statement = $this->pdo->prepare("select $test from ($table)");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    public function insert($table, $parameters) {

    }



}