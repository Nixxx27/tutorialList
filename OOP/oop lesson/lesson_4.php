<?php

include('library.php');

$user = new User('nikko','nz@gmail.com'); //Member
echo $user->email;

echo  '<br>';

$Member = new Member('nikko','nz@gmail.com','March 13, 2015'); //Member
echo $Member->getType(); 

echo  '<br>';

$Admin = new Admin('nikkoz','nz@gmail.com',3); //Admin
echo $Admin->getType(); 
