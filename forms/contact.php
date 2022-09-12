<?php 

print_r($_SERVER);
    // $contacts = fopen('contacts.txt', 'r');

    // $formatted =[];

    // if($contacts){
    //     while(($f = fgets($contacts, 10000)) !== false ){

    //         list($file_email, $file_subject, $file_age, $file_message) = explode('|', $f);
            
    //         array_push($formatted, [
    //             'email' => trim(explode(':', $file_email)[1]),
    //             'subject' => trim(explode(':', $file_subject)[1]),
    //             'age' => trim(explode(':', $file_age)[1]),
    //             'message' => trim(explode(':', $file_message)[1])
    //         ]);
    //     }   
    
    //     if(count($formatted) > 0){
    //         echo 'hey';
    //         $display = "<table><thead><tr><th>Email</th><th>Subject</th><th>Age</th><th>Message</th></tr></thead><tbody>";
    
    //         foreach($formatted as $format)
    //         {
    //             $display .= "<tr><td>" . $format['email']. "</td><td>" . $format['subject'] . "</td><td>" . $format['age'] . "</td><td>" . $format['message'] . '</td></tr>';
    //         }
    
    //         $display .= '</tbody></table>';
    
    //         echo $display;
    //     }
    // }
    

    function invalid($string)
    {
        $not_permitted = '!@#$%^&*()_+~|}{":\';?/\\.,';
        $exploded = explode(',', $string);

        $flag = false;

        foreach($exploded as $char){
            if(strpos($char, $not_permitted) >= 0){
                $flag = true;
                break;
            }
        }

        return $flag;
    }

   $method = $_SERVER['REQUEST_METHOD'];

//    echo print_r($_POST);

   if($method == 'POST'){
        $email = strip_tags(trim($_POST['email']));
        $name = strip_tags(trim($_POST['name']));
        $age = strip_tags(trim($_POST['age']));
        $message = strip_tags(trim($_POST['message']));
        $sex = strip_tags(trim($_POST['sex']));

        $errors = [];

        $checked_email = filter_var($email, FILTER_VALIDATE_EMAIL);

        if(empty($email)){
            $errors['email'] = 'The email field is required.';
        }else if($checked_email == false || $checked_email == null){
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

        try{
            $to = 'emmanuel.joshua@cloudware.ng';
            $subject = 'Message from Contact Page';

            $text = "<html><p>Hello Word</p><div>$message</div></html>";
            $message = wordwrap($message, 70, "\r\n");

            $headerData = [
                'Reply-To' => $email,
                'Cc' => 'emmadonjo@gmail.com',
                'Bcc' => 'emmanuel.joshua@cloudware.ng',
                'From' => 'emmadonjo@gmail.com',
                'Content-Type' => 'text/html;utf-8',
                'MIME-Version' => '1.0'
            ];

            $headers = '';
            foreach($headerData as $key => $data){
                $headers .= "$key:$data\r\n";
            }

            $mail = mail($to, $subject, $message,$headers);

            if(!$mail){
                echo 'You contact message could not be sent.' . "\n";
                return;
            }

            echo 'Your contact message has been successfully sent.';            
        }
        catch(\Exception $e){
            echo $e;
        }
   }

?>
    <form action="" style="width: 768px; margin: 100px auto" method="POST">
        <div style="margin: 10px;">
            <input type="email" name="email" style="display: block; width:100%; padding:5px" placeholder="Enter email" autofocus value="<?php if(isset($email)){ echo htmlspecialchars($email); }  ?>" maxlength="255" />
            <p>
                <?php if(isset($errors['email'])){ echo $errors['email']; } ?>
            </p>
        </div>

        <div style="margin: 10px;">
            <input type="text" name="name" style="display: block; width:100%; padding:5px" placeholder="Enter name"  value="<?php if(isset($name)){ echo htmlspecialchars($name); }  ?>" />
        </div>
        <div style="margin: 10px;">
            <input type="number" step="00.001"  name="age" style="display: block; width:100%; padding:5px" placeholder="Enter age"  value="<?php if(isset($age)){ echo htmlspecialchars($age); }  ?>" />
        </div>

        <div style="margin: 10px;">

        <textarea rows="5" style="display: block; width:100%; padding:5px" name="message"  placeholder="Enter message"><?php if(isset($message)){ echo htmlspecialchars($message); }  ?></textarea>
        </div>

        <div style="margin: 10px;">

            <select name="sex">
                <option value="">Select...</option>
                <option value="male" <?php if(isset($sex) && $sex ==  'male'){ echo 'selected'; } ?>>Male</option>
                <option value="female"  <?php if(isset($sex) && $sex ==  'female'){ echo 'selected'; } ?>>Female</option>
            </select>
        </div>

        <button type="submit">
            Submit
        </button>
    </form>

