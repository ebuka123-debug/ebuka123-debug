<?php
class searchModel extends DbConnection{

    private $conn;

    public function __construct()
    {
        $this->conn = $this->dbConnect();
    }

    public function search($countrySearched)    //This method searhs for the parameter $countrySearched in the database and returns a result
    {
        $statement = "SELECT competition_name, competition_image FROM competitions WHERE competition_country = '$countrySearched'";

        $result = $this->conn->query($statement);

        $searchResults = [];

        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
              array_push($searchResults,$rows);     //Push the result gotten into a new array called $searchResults
            }

            return $searchResults;      //This returns an array of containing results searched
        } else{
            throw new EXception ("no $countrySearched is in the database");
        }

        $this->conn->close();
    }
}