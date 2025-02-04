<?

class Account {
  private $ID;
	private $firstName;
	private $lastName;


  public function addEmployee()
	{
		$empRecord = $this->ID.", ".$this->firstName.", ".$this->lastName."\n";
		$empFile = fopen("data.txt", "a");
		fputs($empFile, $empRecord);
		fclose($empFile);
	}

  public function findAccount($id)
	{
		$empFile = fopen("data.txt", "r");
		$empRecord = trim(fgets($empFile));
		$notFound = true;
		while (!feof($empFile) and $notFound)
		{
			list ($ID, $fName, $lName) = explode(",", $empRecord);
			if ($id == $ID)
			{
				$this->ID = $ID;
				$this->firstName = $fName;
				$this->lastName = $lName;
				$notFound = false;
			}
			$empRecord = trim(fgets($empFile));
		}
		fclose($empFile);

    if($notFound == true)
      return 0;
    else
      return 1;

	}

  public function getID()
	{
		return $this->ID;
	}
	
	public function setID($ID)	
	{
		$this->ID = $ID;
	}
	
	public function getFirstName()
	{
		return $this->firstName;
	}
	
	public function setFirstName($fName)
	{
		$this->firstName = $fName;
	}
	
	public function getLastName()
	{	
		return $this->lastName;
	}
	
	public function setLastName($lName)
	{
		$this->lastName = $lName;
	}
	
}

