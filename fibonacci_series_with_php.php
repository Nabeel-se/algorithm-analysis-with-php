<?php

class fabonacciSeriesClass {

	public $initNumber,$finalNumber, $counter = 0;
	public $fabonacciResult = [];
	
	public function __construct($initNumber, $finalNumber) {
		
		$this->initNumber = $initNumber;
		$this->finalNumber = $finalNumber;
		
	}
	
	public function fabonacciSeries() {
		
		if( count( $this->fabonacciResult ) < 1){
			
			array_push($this->fabonacciResult, $this->initNumber );
			array_push($this->fabonacciResult, $this->initNumber + 1 );
			return $this->fabonacciSeries();
			
		}
		else if (count( $this->fabonacciResult ) < $this->finalNumber){
			$result = $this->fabonacciResult[ count($this->fabonacciResult) - 1 ] + $this->fabonacciResult[ count($this->fabonacciResult) - 2 ];
			array_push($this->fabonacciResult,  $result);
			return $this->fabonacciSeries();
		}
	}
	
	public function displayFabonacci() {
	
		
		while($this->counter < $this->finalNumber){
      
			echo  $this->fabonacciResult[$this->counter];
			echo  "\n";
			$this->counter++;
		
		}
		
	
	}

}

// You may change the value that passess through class(fabonacciSeriesClass) constructor.
$fabonacciInstant = new fabonacciSeriesClass(5,20);

// This function is responsible for generating the fibonacci series.
$fabonacciInstant->fabonacciSeries();

// This function is responsible for display the fibonacci series.
$fabonacciInstant->displayFabonacci();
