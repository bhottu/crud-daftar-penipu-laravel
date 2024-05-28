<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scammer extends Model
{
    public function up()
    {
        Schema::create('scammers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }
    
}
