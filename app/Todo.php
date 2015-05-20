<?php namespace App;
 
 use Illuminate\Database\Eloquent\Model;
 
 
 class Todo extends Model
 {
     
     protected $fillable = ['aktivitas', 'tanggal', 'tempat', 'deskripsi', 'status'];
     
 }
 