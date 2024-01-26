<div class="container">
<h2>Please Enter your Name and Email.</h2>
<form action="index.php" method="post">
  <div class="form_group">
    <label for="email">Email Addresss</label>
    <input type="email" name="email" id="email">
  </div>
  <div class="form_group">
    <label for="pass"> Password</label>
    <input type="password" name="pass" id="pass">
  </div>
  <button type="submit">Submit</button>
</form>


<?php
  if ($_SERVER['REQUEST_METHOD']=='POST')
  {
    $email=$_POST['email'];
    $password=$_POST['pass'];
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Successfuly Saved!</strong> your email is ' .$email. ' and password is '.$password.'. 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
?>










#include<iostream>
using namespace std;
int main(){
    cout<<"Here we have Multidimensional Array of 0 and 1. We have to find ships and count them.\n";
    cout<<"1. Find number of ships available.\n";
    cout<<"2. Find coordinate of each ship found.\n"<<endl;
    int ships[4][4]={
        {0,1,0,0},
        {0,0,1,0},
        {1,0,0,1},
        {1,0,1,0}
    };
    int count=0;int pointer;
    for(int i=0;i<4;i++)
    {
        for(int j=0;j<4;j++)
        {
            if(ships[i][j]==1)
            {
                count++;
                cout<<count<<" Ship found at index ["<<i<<"]["<<j<<"].\n";
            }
        }
    }
    cout<<"\nThere are "<<count<<" Ships in this area."<<endl;
}





=============================


  echo "Here is next work.";
    $servername="localhost";
    $username="root";
    $password="123";

    $conn=mysqli_connect($servername,$username,$password);
    if(!$conn)
    {
      die("We are sorry. not connected.".mysqli_connect_errno());
    }
    else{
    echo "Connection was successful";
    }


==============================

