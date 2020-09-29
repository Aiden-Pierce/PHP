<?php

class Uservalidation
{
    private $data;
    private $errors = [];
    private $fields = ['Name', 'User', 'Email', 'Address', 'Contact'];

    public function __construct($post_data)
    {
        $this->data = $post_data;
    }

    public function validation()
    {
        foreach($this->fields as $field)
        {
            if(!array_key_exists($field, $this->data)){
              trigger_error("'$field' is not present in the data");
              return;
            }
        }

        $this->validateName();
        $this->validateUser();
        $this->validateEmail();
        $this->validateAddress();
        $this->validateContact();
        return $this->errors;
    }

    private function validateName()
    {
        $val = trim($this->data['Name']);

        if(empty($val))
        {
            $this->addError('Name','Name cannot be Empty');
        }
        else
        {
            if(!preg_match("/^[a-zA-Z\s]*$/",$val))
            {
                $this->addError('Name','Name must be in Alphabets');
            }
        }

    }
    private function validateUser()
        {
            $val = trim($this->data['User']);
    
            if(empty($val))
            {
                $this->addError('User','UserName cannot be Empty');
            }
            else
            {
                if(!preg_match('/^[a-zA-Z0-9]{6,12}$/',$val))
                {
                    $this->addError('User','UserName must be 6-12 characters long and AlphaNumeric');
                }
            }
        }

    private function validateEmail()
    {
        $val = trim($this->data['Email']);

        if(empty($val))
        {
            $this->addError('Email','Email cannot be Empty');
        }
        else
        {
            if(!filter_var($val,FILTER_VALIDATE_EMAIL))
            {
                $this->addError('Email','EmailID Entered is Invalid');
            }
        }
    }

    private function validateAddress()
    {
        $val = trim($this->data['Address']);

        if(empty($val))
        {
            $this->addError('Address','ContactNumber cannot be Empty');
        }
        else
        {
            if(!preg_match('/[A-Za-z0-9\-\\,.]+/',$val))
            {
                $this->addError('Address','Address must be Alphanumeric');
            }
        }
    }
    private function validatecontact()
    {
        $val = trim($this->data['Contact']);

        if(empty($val))
        {
            $this->addError('Contact','ContactNumber cannot be Empty');
        }
        else
        {
            if(!preg_match('/^[0-9]{0,10}$/',$val))
            {
                $this->addError('Contact','ContactNumber must be in Numbers');
            }
        }
    }


    private function addError($key, $val)
    {
        $this->errors[$key] = $val;
    }

}