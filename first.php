<!DOCTYPE html>
<body>

<?php
$data = $_POST;

$validateName = function ($name)
{
    if($name){
        $names = explode(' ', $name);
        if(count($names) >= 2){
            return $name;
        }else{
            throw new Exception("Name need first and last names!");
        }
    }else{
        throw new Exception("Name need exist!");
    }
};

$validateEmail = function ($email)
{
    if($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return $email;
        }else{
            throw new Exception("Format email is invalid!");
        }
    }else{
        throw new Exception("Email need exist!");
    }
};

$validateTwitter = function ($twitter)
{
    if($twitter || !empty($twitter)){
        if(preg_match('/^[A-Za-z0-9_]+$/', $twitter)){
            return $twitter;
        }else{
            throw new Exception("Format email is invalid!");
        }
    } else return "No twitter";
};

try{
    $name    = $validateName($data['name']);
    $email   = $validateEmail($data['email']);
    $twitter = $validateTwitter($data['twitter']);

    echo "input = [
            'name' => {$name},
            'email' => {$email},
            'twitter' => {$twitter}
        ]";

}catch (Exception $exception){
    echo $exception->getMessage();
}
?>

</body>
</html>
