<?php 

function invalid($string)
{
    $not_permitted = '!@#$%^&*()_+~|}{":\';?/\\.,';
    $exploded = explode(',', $string);

    $flag = false;

    foreach($exploded as $char){
        echo $char;
        if(strpos($char, $not_permitted) >= 0){
            $flag = true;
            break;
        }
    }

    return $flag;
}

   $method = $_SERVER['REQUEST_METHOD'];

   if($method == 'POST'){
        $email = strip_tags(trim($_POST['email']));
        $name = strip_tags(trim($_POST['name']));
        $age = strip_tags(trim($_POST['age']));

        $errors = [];

        // extract($_POST);
        // echo $name;
        $checked_email = filter_input(INPUT_POST, $email, FILTER_VALIDATE_EMAIL);

        if(empty($email)){
            $errors['email'] = 'The email field is required.';
        }else if(!$checked_email){
            $errors['email'] = 'The email entered is invalid';
        }elseif(strlen($email) > 255){
            $errors['email'] = 'The email cannot exceed 255 characters.';
        }


        if(empty($name)){
            $errors['name'] = 'The name field is required';
        }else if(strlen($name) < 2){
            $errors['name'] = 'The name field cannot be less than 2 characters.';
        }else if(strlen($name) > 64){
            $errors['name'] = 'The name field cannot be more than 64 characters.';
        }else if(invalid($name)){
            $errors['name'] = 'The name field cannot contain special characters';
        }
        
        if(empty($age)){
            $errors['age'] = 'The age field is required.';
        }else if(!intval($age)){
            $errors['age'] = 'Age accepts only integers.';
        }else if($age < 18){
            $errors['age'] = 'Age cannot be less than 18';
        }

        // handle form submission
   }

?>
    <form action="" style="width: 768px; margin: 100px auto" method="POST">
        <div style="margin: 10px;">
            <input type="email" name="email" style="display: block; width:100%; padding:5px" placeholder="Enter email" autofocus />
            <p>
                <?php if(isset($errors['email'])){ echo $errors['email']; } ?>
            </p>
        </div>

        <div style="margin: 10px;">
            <input type="name" name="name" style="display: block; width:100%; padding:5px" placeholder="Enter name" />
        </div>
        <div style="margin: 10px;">
            <input type="number" min="18"  name="age" style="display: block; width:100%; padding:5px" placeholder="Enter age" />
        </div>

        <button type="submit">
            Submit
        </button>
    </form>

    