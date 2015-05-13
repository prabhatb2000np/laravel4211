<?php
 
class Userpra extends Eloquent
{
    // does nothing more than
    // specify the table in the database
    protected $table = 'userspra';
    protected $guarded = array('id');
  protected $fillable = array('name', 'email','username','password','phone');

  public static $rules = array(
    'name' => 'required|min:5',
    'email' => 'required|email'
  );
}
 
?>
