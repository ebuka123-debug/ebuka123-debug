<?php
class userModel extends DbConnection{

    private $conn;

    public function __construct()
    {
        $this->conn = $this->dbConnect();
    }

    public function signUpDetailExists($detail,string $detailsColumn)
    {

        if($this->conn){
            $statement = "SELECT $detailsColumn FROM users WHERE $detailsColumn = '$detail' ";
            $result = $this->conn->query($statement);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                //   echo "phone_number: " . $row["phone_number"];
                return true;
                }
            } else {
                // echo "0 results";
                return false;
            }
        }

       $this->conn->close();
    }

    public function changePassword($email,$newPassword)
    {
    
        if($this->conn){
            $statement = "SELECT id FROM users WHERE email = '$email' ";

            $result = $this->conn->query($statement);
    
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    // var_dump($row);
                    $userid = $row['id'];
                }
            } else{
                throw new Exception ("invalid email");
            }
    
    
            $update = "UPDATE users SET user_password = '$newPassword' WHERE id = '$userid' ";
    
            if($this->conn->query($update) === TRUE){
                return true;
            } else{
                throw new Exception ("error while changing password");
            }
        }


        // if($conn->)
        $this->conn->close();

    }

    public function loginDetails($email,$userPassword){

        if($this->conn){
            $statement = "SELECT user_id, email, user_password FROM users WHERE email = '$email' AND user_password = '$userPassword' ";
            $result = $this->conn->query($statement);
    
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                //   echo "phone_number: " . $row["phone_number"];
                    // echo $row['email']. ",". $row['user_password'];
                    // echo "<pre>";
                    // var_dump($row);
                    return true;
                }
            } else {
                // echo "0 results";
                return false;
                // echo "its hitting the wrong side";
             
            }
        }

        $this->conn->close();
    }

    public function saveDetails(array $userDetails)
    {
        if($this->conn){
            $user_id = uniqid();
            $firstname = $userDetails['firstname'];
            $lastname = $userDetails['lastname'];
            $email = $userDetails['email'];
            $phoneNumber = $userDetails['phoneNumber'];
            $userPassword = $userDetails['password'];
    
            $statement = " INSERT INTO users (
                    user_id,
                    firstname,
                    lastname,
                    phone_number,
                    email,
                    user_password
                )
    
                VALUES (
                    '$user_id',
                    '$firstname',
                    '$lastname',
                    '$phoneNumber',
                    '$email',
                    '$userPassword'
                )
            ";
    
            if($this->conn->query($statement) === TRUE){
                return true;
            } else{
                throw new Exception('error while signing up please wait');
            }
    
        }

        $this->conn->close();
    }
}


